<?php
/**
 * @class  hiswikiView
 * @author CRA (cra.handong@gmail.com)
 * @brief hiswiki 모듈의 view class
 **/
class hiswikiView extends hiswiki {

	// 카테고리 관련 연산때 필요한 전역변수. @author 바람꽃(wndflwr@gmail.com)
	private $tmp;
	private $current_pointer;

	/**
	 * @brief 초기화
	 **/
	function init() {
		// module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
		$module_srl = Context::get('module_srl');
		if(!$module_srl && $this->module_srl) {
			$module_srl = $this->module_srl;
			Context::set('module_srl', $module_srl);
		}

		// module model 객체 생성
		$oModuleModel = &getModel('module');
			
		// module_srl이 넘어오면 해당 모듈의 정보를 미리 구해 놓음
		// 모듈의 브라우저 타이틀, 관리자, 레이아웃 등 xe_modules table의 값과 정보
		if($module_srl) {
			$module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
			$this->module_info = $module_info;
			Context::set('module_info',$module_info);
		}

		// 스킨 경로를 미리 template_path 라는 변수로 설정함
		// 스킨이 존재하지 않는다면 default로 변경
		$template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
		if(!is_dir($template_path)||!$this->module_info->skin) {
			$this->module_info->skin = 'default';
			$template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
		}
		$this->setTemplatePath($template_path);
	}

	/**
	 * @brief 목록
	 * @author 김현희
	 * @modifier 바람꽃 (wndflwr@gmail.com)
	 **/
	function dispHiswikiFrontPage() {

		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");

		// 접근 권한 확인
		if (!$this->grant->access) return new Object("msg_not_permitted");

		// 글 리스트를 가져올 준비하기
		$oDocumentModel = &getModel('document');
		$obj->module_srl = $this->module_info->module_srl;
		$obj->page = 1;
		$obj->list_count = 10; // 최신글 몇 개를 불러올 것인가? 기본 10개
		$obj->page_count = 20;
		$obj->order_type = 'asc';

		// 이 모듈 관리자가 설정한 대문(document 형식으로 저장되어있음) 불러오기

		// 최신 글 리스트 불러오기
		$obj->sort_index = 'regdate';
		$newestDocList = $oDocumentModel->getDocumentList($obj, false, false);
		Context::set('newestDocList', $newestDocList->data);


		// 인기글 리스트 불러오기 (조회수)
		$obj->regdate = date('YmdHis', time() - 2678400);
		$popular_doc = executeQueryArray('hiswiki.getPopularDocuments', $obj);
		foreach ($popular_doc->data as $key => $val) {
			$popDocList[$key] = $oDocumentModel->getDocument($val->document_srl, false, false);
		}
		Context::set('popDocList', $popDocList);

		// 인기 태그 리스트 불러오기
		$oTagModel = &getModel('tag');
		$obj->list_count = 50; // 몇 개를 불러오는지 결정
		$obj->sort_index = 'count';
		$popTagList = $oTagModel->getTagList($obj);
		Context::set('popTagList', $popTagList->data);

		// 요청 게시판의 리스트 불러오기
		// 요청 게시판의 module_srl 받아오기
		$obj->module_srl = $this->module_info->link_board;
		$obj->sort_index = 'regdate';
		$requestDocList = $oDocumentModel->getDocumentList($obj);
		Context::set('requestDocList', $requestDocList->data);

		// 대문 내용(content) 던지기
		$front_page_doc = $oDocumentModel->getDocument($this->module_info->front_page_srl);

		if ($front_page_doc->isExists()) {
			Context::set('front_page', $front_page_doc->getContent(false, false, false, false, false));
		}

		// 권한 정보 던지기
		Context::set('grant_info', $this->grant);

		// 모듈 정보 던지기
		Context::set('module_info', $this->module_info);

		// 템플릿 파일 설정
		$this->setTemplateFile('front_page');
	}

	/**
	 * @function getCategoryList
	 * @authro 바람꽃 (wndflwr@gmail.com)
	 * @brief 카테고리를 사용하기 전에 반드시 이 함수를 실행시키도록 한다.
	 */
	function getCategoryList() {
		// 케시에 저장된 php 파일에서 데이터 구조 불러오기
		$filename = sprintf("./files/cache/document_category/%s.php", $this->module_info->module_srl);
		if (!file_exists($filename)) {
			$oDocumentController = &getController('document');
			!$oDocumentController->makeCategoryFile($module_srl);
		}
		@include($filename);

		// 현재 문서가 위치한 카테고리 위치 불러오기
		$category_now = Context::get('category_srl');

		if ($menu->list) {

			Context::set('test', $menu->list);

			// HTML string을 만들어서 돌려주는 방식을 취해보기.
			// 전역변수 $tmp 에 현재 category_srl 입력
			$this->tmp = $category_now;
			$category_html = "";
			$category_html = $this->_makeHTMLMenu($menu->list);
			Context::set('category_html', $category_html);

			// 현재 카테고리의 위치를 추적하기
			$category_path = array();
			// flatten 된 category 리스트 불러오기
			$oDocumentModel = &getModel('document');
			$flat_list = $oDocumentModel->getCategoryList($this->module_info->module_srl);
			if ($category_now) {
				do {
					$tmp = new stdClass();
					$t = $this->current_pointer->category_srl;
					$tmp->mid = $flat_list[$t]->mid;
					$tmp->category_srl = $flat_list[$t]->category_srl;
					$tmp->title = $flat_list[$t]->title;
					$tmp->text = $flat_list[$t]->text;
					$category_path[] = $tmp;
					$this->current_pointer->parent_srl = $flat_list[$this->current_pointer->parent_srl]->parent_srl;
					$this->current_pointer->category_srl = $flat_list[$this->current_pointer->category_srl]->parent_srl;
				} while ($this->current_pointer->parent_srl);

				$tmp = new stdClass();
				$t = $this->current_pointer->category_srl;
				$tmp->mid = $flat_list[$t]->mid;
				$tmp->category_srl = $flat_list[$t]->category_srl;
				$tmp->title = $flat_list[$t]->title;
				$tmp->text = $flat_list[$t]->text;
				$category_path[] = $tmp;

				Context::set('category_path', array_reverse($category_path));
			}
		}
	}

	/**
	 * @function _makeHTMLMenu
	 * @author 바람꽃 (wndflwr@gmail.com)
	 * @brief category_list를 recursive 하게 구현하여 <ul>, <li> 로 구성된 HTML String으로 만들어 돌려준다.
	 */
	private function _makeHTMLMenu($list) {
		$str = "<ul>";
		foreach ($list as $val) {
			$url = getUrl('act', 'dispHiswikiTopicList', 'category_srl', $val['category_srl']);
			if ($val["category_srl"] == $this->tmp) {
				$str .= "<li class=\"selected\"><a href=\"" . $url . "\">" . $val["text"] . "</a></li>";
				$this->current_pointer->parent_srl = $val["parent_srl"];
				$this->current_pointer->category_srl = $val["category_srl"];
			} else {
				$str .= "<li><a href=\"" . $url . "\">" . $val["text"] . "</a></li>";
			}
			if (count($val["list"])) {
				$str .= $this->_makeHTMLMenu($val["list"]);
			}
		}
		$str .= "</ul>";
		return $str;
	}

	/**
	 * @function dispHiswikiModifyFrontPage
	 * @author 바람꽃 (wndflwr@gmail.com)
	 * @brief 싸이트 관리자일 경우 이 모듈의 대문(front_page)에 대한 수정 권한을 가지도록 한다.
	 */
	function dispHiswikiModifyFrontPage() {
		// 비정상적인 방법으로 접근할 경우 거부
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");

		// 접근 권한 확인한다.
		if (!$this->grant->access || !$this->grant->manager) return new Object(-1, "msg_not_permitted");

		// document를 불러온다. 없으면 새로 module_srl을 할당해서 저장한 다음 documentObject를 넘긴다.
		$oDocumentModel = &getModel('document');

		// front_page_srl 이 저장되어있지 않으면 새롭게 문서 srl을 할당해서 module_extra_vars 테이블에 저장한다.
		if (!$this->module_info->front_page_srl) {
			$this->module_info->front_page_srl = getNextSequence();
			$oModuleController = &getController('module');
			$oModuleController->updateModule($this->module_info);
		}
		$front_page_doc = $oDocumentModel->getDocument($this->module_info->front_page_srl);
		Context::set('front_page_doc', $front_page_doc);

		// 에디터를 넘긴다.
		$oEditorModel = &getModel('editor');
		$editorOpt->primary_key_name = 'front_page_srl';
		$editorOpt->content_key_name = 'content';
		$editorOpt->skins = 'xpresseditor';
		$editorOpt->allow_fileupload = true;
		$editorOpt->enable_default_component = true;
		$editorOpt->enable_component = true;
		$editorOpt->disable_html = false;
		$editorOpt->enable_autosave = false;
		
		Context::set('modify_front_editor', $oEditorModel->getEditor($this->module_info->front_page_srl, $editorOpt));
		
		// 모듈 정보 넘긴다.
		Context::set('module_info', $this->module_info);

		// 템플릿 파일 설정
		$this->setTemplateFile('modify_front_page');
	}

	/**
	 * @function dispHiswikiContentList
	 * @author 인호
	 * @brief 컨텐츠 + 검색
	 **/
	function dispHiswikiContentList(){
		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");

		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		//if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");

		// check the grant
		if(!$this->grant->access && !$this->grant->view) {
			Context::set('document_list', array());
			Context::set('total_count', 0);
			Context::set('total_page', 1);
			Context::set('page', 1);
			Context::set('page_navigation', new PageHandler(0,0,1,10));
			return new Object(-1, 'msg_not_permitted');
		}

		$oDocumentModel = &getModel('document');

		// 인수 설정
		$args->module_srl = $this->module_info->module_srl;
		$args->category_srl = Context::get('category_srl');
		$args->list_count = Context::get('list_count');
		$args->search_target = Context::get('search_target');
		$args->search_keyword = Context::get('search_keyword');
		$args->page = Context::get('page');
		$args->sort_index = Context::get('sort_index');
		$args->order_type = Context::get('order_type');

		// 인수를 넘겨주고 문서 목록을 받아온다.
		$output = $oDocumentModel->getDocumentList($args);

		// 태그로 검색하게 되면 실행
		if ($args->search_target == 'tag') {
			$args->tag = $args->search_keyword;
			$args->sort_index = 'document_srl';
				
			$output = executeQueryArray('hiswiki.getDocumentSrlByTag', $args);
			
			// 넘겨준 파라메터로 검색 결과 받아오기
			$tagDocumentList = array();
			
			foreach ($output->data as $key => $val) {
				$tagDocumentList[$key] = $oDocumentModel->getDocument($val->document_srl);
			}
			// 제목으로 검색한 결과 html 파일로 넘겨주기
			Context::set('document_list', $tagDocumentList);
		} else {	
			// 아니면 그냥 값 전달
			Context::set('document_list', $output->data);
		}
		
		// 템플릿 파일 지정
		$this->setTemplateFile('list');
		Context::set('page_navigation', $output->page_navigation);
	}

	/**
	 * @function dispHiswikiSearchResult
	 * @author 인호
	 * @brief 정보를 입력받아 출력하는 페이지
	 **/
	function dispHiswikiSearchResult(){

		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		//if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");

		// check the grant
		if(!$this->grant->access && !$this->grant->view) {
			Context::set('document_list', array());
			Context::set('total_count', 0);
			Context::set('total_page', 1);
			Context::set('page', 1);
			Context::set('page_navigation', new PageHandler(0,0,1,10));
			return new Object(-1, 'msg_not_permitted');
		}

		$oDocumentModel = &getModel('document');

		// setup module_srl/page number/ list number/ page count
		$args->module_srl = $this->module_info->module_srl;
		$args->page = Context::get('page');
		$args->list_count = 5;
		$args->page_count = Context::get('page_count');

		// get the keyword
		$args->search_keyword = Context::get('search_keyword');
		$args->tag = Context::get('search_keyword');

		// setup the sort index and order index
		$args->sort_index = Context::get('sort_index');
		$args->order_type = 'asc';

		// 1. get the keyword by title
		$args->search_target = 'title';

		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oDocumentModel->getDocumentList($args);

		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_title', $output->data);

		// 2. get the keyword by content
		$args->search_target = 'content';

		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oDocumentModel->getDocumentList($args);

		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_content', $output->data);

		// 3. get the keyword by tag
		$oTagModel = &getModel('tag');

		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oTagModel->getDocumentSrlByTag($args);
		$tagDocumentList = array();

		foreach ($output->data as $key => $val) {
			$tagDocumentList[$key] = $oDocumentModel->getDocument($val->document_srl);
		}

		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_tags', $tagDocumentList);

		// 각종 인수 웹페이지로 넘겨주기
		Context::set('search_keyword', $args->search_keyword);

		// 템플릿 파일 설정
		$this->setTemplateFile('search_result');
	}

		/**
	 * @function dispHiswikiTopicWrite
	 * @brief topic 추가 설정중
	 * @author 현희
	 **/
	function dispHiswikiTopicWrite() {
		// 쓰기 권한 체크
		//if(!$this->grant->write) //return $this->dispHiswikiAdminTopicWrite('msg_not_permitted');
		//	return new Object(-1, 'msg_not_permitted');
		//if(!$this->grant->write) return $this->dispHiswikiTopic W('msg_not_permitted');
		$oEditorModel = &getModel('editor');
	
		//editor option 설정
		$option->allow_fileupload = true;
		$option->enable_autosave = true;
		$option->enable_component = true;
		$option->enable_default_component = true;
		$option->primary_key_name = 'document_srl';
		$option->content_key_name = 'content';
		
		$document_srl = Context::get('document_srl');
		$oDocumentModel = &getModel('document');

		// document_srl 이 있는 경우 update
		if(isset($document_srl)) {
			// hiswiki model에서 내용을 가져옴
			$oHiswikiModel = &getModel('hiswiki');
			$output->hiswiki = $oHiswikiModel->getHiswikiDoc($document_srl);
			$output->document = $oDocumentModel->getDocument($document_srl);
			$document_extra_vars = $oDocumentModel->getExtraVars($this->module_srl,$document_srl);
		}else{
			$output->document = $oDocumentModel->getDocument();
		}
		$normal_category_list = $oDocumentModel->getCategoryList($this->module_srl);
		if(count($normal_category_list)) {
			foreach($normal_category_list as $category_srl => $category) {
				$is_granted = true;
				if($category->group_srls) {
					$category_group_srls = explode(',',$category->group_srls);
					$is_granted = false;
					if(count(array_intersect($group_srls, $category_group_srls))) $is_granted = true;
		
				}
				if($is_granted) $category_list[$category_srl] = $category;
			}
		}
		$editor = $oEditorModel->getEditor($upload_target_srl, $option);
		Context::set('editor',$editor);
		Context::set('category_list', $category_list);
		Context::set('module_info',$this->module_info);
		Context::set('topic_info',$output->hiswiki);
		Context::set('document_info',$output->document);
		Context::set('extra_vars',$document_extra_vars);
		//Context::set('category_list',)
		// 내용 작성화면 템플릿 파일 지정 write.html
		$this->setTemplateFile('write');
	
		return;
	
	}
	
	/**
	 * @author 현희
	 * @brief 토픽 뷰
	 * @modifier 지희
	 */
	function dispHiswikiTopicView(){

		$document_srl = Context::get('document_srl');
		if(!$document_srl){
			return new Object(-1, 'msg_invalid_request');
		}
		$page = Context::get('page');
		
		// document model을 가져옴
		$oDocumentModel = &getModel('document');
		$document = $oDocumentModel->getDocument($document_srl);
		$document_extra_vars = $oDocumentModel->getExtraVars($this->module_srl,$document_srl);
		// hiswiki model 을 가져옴
		$oHiswikiModel = &getModel('hiswiki');
		$hiswiki_doc = $oHiswikiModel->getHiswikiDoc($document_srl);
		Context::set('document',$document);
		Context::set('hiswiki_doc',$hiswiki_doc->data);
		Context::set('module_info',$this->module_info);
		Context::set('extra_vars',$document_extra_vars);
		// 카테고리 리스트 불러오기
		$this->setTemplateFile('topic_view');
		
	}
	/**
	 * @function dispHiswikiHistoryView
	 * @author 지희
	 * @brief 수정되기전의 문서를 보여준다
	 */
	function dispHiswikiHistoryView(){
		$document_srl = Context::get('document_srl');
		if(!$document_srl){
			return new Object(-1, 'msg_invalid_request');
		}
		$page = Context::get('page');
		//hiswiki model을 가져옴
		$oHiswikiModel = &getModel('hiswiki');
		$trace_srl = $document_srl;
		$hiswikiHistory = $oHiswikiModel->getHiswikiTrace($trace_srl);
		//document model 가져옴
		$oDocumentModel = &getModel('document');
		//변수선언
		Context::set('hiswikiHistory',$hiswikiHistory);
		Context::set('origin',$trace_srl);
		$this->setTemplateFile('topic_history');
	}

	/**
	 * @function dispHiswikiTopicList
	 * @brief admin이 추가시킨 topic List를 확인할 수 있다.
	 * @author 현희
	 **/
	function dispHiswikiTopicList(){
		/*
		 * 목록보기 권한 체크 (모든 권한은 ModuleObject에서 xml 정보와 Module_info의 grant 값을 비교하여 미리 설정하여 놓음
		 		*if (!$this->grants->access || !$this->grant->list) return $this->dispHiswikiMessage('msg_not_permitted');
		 		*/
			
		// module_srl 확인
		$module_srl = Context::get('module_srl');
		$args->module_srl = $module_srl;
		$args->page = Context::get('page');
			
		// module model 객체 생성
		$oModuleModel = &getModel('module');
			
		// hiswiki model에서 목록을 가져옴
		$oHiswikiModel = &getModel('hiswiki');
		$output = $oHiswikiModel->getHiswikiList($args);
		if (!$output->data) $output->data = array();
			
		// $_list 변수에 담는다
		Context::set('hiswiki_list', $output->data);
		Context::set('page', $output->page);
		Context::set('page_navigation', $output->page_navigation);
			
		// template_file을 topic_list.html로 지정
		$this->setTemplateFile('topic_list');
	}
	
	/**
	 * @author 인호
	 * @brief 연도별
	 */
	function dispHiswikiYearView(){
		$year = Context::get("year");
		$month = Context::get("month");
		
		
		$this->setTemplateFile('year_list_view');
	}

	/**
	 * @author 현희
	 * @brief hiswiki model에서 받아온 $output->data를 스킨파일에 보내기 전에 배열 형식 변경
	 **/
	function arrangeHiswikiInfo($output) {
		// 1차 배열 형식으로 변경
		if($output->data) {
			foreach($output->data as $val) {
				$obj = null;
				$obj->document_srl = $val->document_srl;
				$obj->document_title = $val->document_title;
				$obj->document_author = $val->document_author;
				$obj->regdate = $val->regdate;
			}
			return $obj;
		}
	}
}
?>
