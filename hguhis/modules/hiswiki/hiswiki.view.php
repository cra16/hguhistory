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


		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");
		
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
	 * @function dispHiswikiContentList
	 * @author 지희
	 * @brief 컨텐츠 + 검색
	 **/
	function dispHiswikiContentList(){
		// 비정상적인 방법으로 접근할 경우 거부(by 인호)
		if ($this->module_info->module != 'hiswiki') return new Object(-1, "msg_invalid_request");
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
		$args->list_count = Context::get('list_count');
		$args->page_count = Context::get('page_count');
		// get the search target and keyword
		$args->search_target = Context::get('search_target');
		$args->search_keyword = Context::get('search_keyword');
		
		// setup the sort index and order index
		$args->sort_index = Context::get('sort_index');
		$args->order_type = Context::get('order_type');
		
		$output = $oDocumentModel->getDocumentList($args);
		
		Context::set('search_results', $output->data);
		
		// 템플릿 파일 설정
		$this->setTemplateFile('search_result');
	}
}
?>
