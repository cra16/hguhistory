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
			$module_info = $oModuleModel->getHiswikiInfoByModuleSrl($module_srl);
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
	 *
	 **/
	function dispHiswikiFrontPage() {
		$this->setTemplateFile('front_page');
	}

	/**
	 * @brief 컨텐츠 + 검색
	 **/
	function dispHiswikiContent(){
		 
		// 접근권리가 았는지 확인
		 
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
		$oHiswikiModel = &getModel('board');
		$this->listConfig = $oBoardModel->getListConfig($this->module_info->module_srl);
		$this->_makeListColumnList();
		 
		// display the notice list
		$this->dispHiswikiNoticeList();
		 
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

}
?>