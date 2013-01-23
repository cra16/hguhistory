<?php
/**
 * @class  hiswikiView
 * @author CRA (cra.handong@gmail.com)
 * @brief hiswiki 모듈의 view class
 **/
class hiswikiView extends hiswiki {
	
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
		
		// 이 모듈 관리자가 설정한 대문(document 형식으로 저장되어있음) 불러오기
		
		// 최신 글 리스트 불러오기

		// 인기글 리스트 불러오기 (조회수)

		// 요청 리스트 불러오기

		// 인기 태그 리스트 불러오기

		// 카테고리 리스트 불러오기
		// 케시에 저장된 php 파일에서 데이터 구조 불러오기
		$filename = sprintf("./files/cache/document_category/%s.php", $this->module_info->module_srl);
		if (!file_exists($filename)) {
			$oDocumentController = &getController('document');
			!$oDocumentController->makeCategoryFile($module_srl);
		}
		@include($filename);
		
		if ($menu->list) {
			// HTML string을 만들어서 돌려주는 방식을 취해보기.
			$category_html = "";
			$category_html = $this->_makeHTMLMenu($menu->list);
			Context::set('category_html', $category_html);
		}
		// 현재 문서가 위치한 카테고리 위치 불러오기 TODO
		
		// 대문 내용(content) 던지기
		$oDocumentModel = &getModel('document');
		$front_page_doc = $oDocumentModel->getDocument($this->module_info->front_page_srl);
		
		if ($front_page_doc->isExists()) {
			Context::set('front_page', $front_page_doc->getContent(false, false, false, false, false));
		}
		
		// 권한 정보 던지기
		Context::set('grant_info', $this->grant);
		
		
		// 템플릿 파일 설정
		$this->setTemplateFile('front_page');
	}

	/**
	 * @function _makeHTMLMenu
	 * @author 바람꽃 (wndflwr@gmail.com) 
	 * @brief category_list를 recursive 하게 구현하여 <ul>, <li> 로 구성된 HTML String으로 만들어 돌려준다.
	 */
	private function _makeHTMLMenu($list) {
		$str = "<ul>";
		foreach ($list as $val) {
			$str .= "<li>" . $val["text"] . "</li>";
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
		//debugPrint($front_page_doc->getContentText());
		
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
	 * @author 지희
	 * @brief 컨텐츠 + 검색
	 **/
	function dispHiswikiContentList(){
		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");
		
		// 접근권리가 있는지 확인
			
		if(!$this->grant->acess || !$this->grant->list) return $this->dispHiswikiMessage('msg_not_permitted');
			
		//카테고리 목록들을 불러온다
		$this->dispHiswikiCategoryList();
			
		// 검색창과 옵션들을 올린다
		foreach($this->search_option as $opt) $search_option[$opt] = Context::getLang($opt);
		$extra_keys = Context::get('extra_keys');
		if($extra_keys){
			foreach($extra_keys as $key => $val){
				if($val->search == 'Y') $search_option['extra_vars'.$val->idx] = $val->name;
			}
		}
		Context::set('search_option',$search_option);
			
		$oDocumentModel = &getModel('document');
		$statusNameList = $this->_getStatusNameList($oDocumentModel);
		if(count($statusNameList) > 0) Context::set('status_list', $statusNameList);
			
		// 화면에 띄움
		$this->dispHiswikiContentView();
			
		// list config, columnList setting
		$oHiswikiModel = &getModel('hiswiki');
		$this->listConfig = $oHiswikiModel->getListConfig($this->module_info->module_srl);
		$this->_makeListColumnList();
			
		// 목록
		$this->dispHiswikiContentList();
			
		/**
		 * add javascript filters
		**/
		Context::addJsFilter($this->module_path.'tpl/filter', 'search.xml');
			
		$oSecurity = new Security();
		$oSecurity->encodeHTML('search_option.');
			
		// setup the tmeplate file
		$this->setTemplateFile('list');
	}

	/**
	 * @function dispHiswikiSearchResult
	 * @author 지희
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
		$args->list_count = 3;
		$args->page_count = Context::get('page_count');

		// get the keyword
		$args->search_keyword = 'dfdfdfdfdf';

		// setup the sort index and order index
		$args->sort_index = Context::get('sort_index');
		$args->order_type = Context::get('order_type');

		// 1. get the keyword by title
		$args->search_target = Context::get('title');
		
		
		
		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oDocumentModel->getDocumentList($args);
				
		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_title', $output->data);
		
		// 2. get the keyword by content
		$args->search_target = Context::get('content');
		
		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oDocumentModel->getDocumentList($args);
		
		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_content', $output->data);
		
		// 3. get the keyword by tags
		$args->search_target = Context::get('tags');
		
		debugPrint($args);
		
		// 넘겨준 파라메터로 검색 결과 받아오기
		$output = $oDocumentModel->getDocumentList($args);
		
		
		
		// 제목으로 검색한 결과 html 파일로 넘겨주기
		Context::set('search_results_tags', $output->data);

		// 템플릿 파일 설정
		$this->setTemplateFile('search_result');
	}
}
?>