<?php
/**
 * @class  hguhisAdminView
 * @author CRA (cra.handong@gamil.com)
 * hguhis module's admin view class
 **/

class hguhisAdminView extends hguhis {

	/**
	 * @brief 초기화
	 **/
	function init() {

		// module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
		$module_srl = Context::get('module_srl');
		if (!$module_srl && $this->module_srl) {
			$module_srl = $this->module_srl;
			Context::set('module_srl', $module_srl);
		}

		// module model 객체 생성
		$oModuleModel = &getModel('module');

		// 브라우저 타이틀, 관리자, 레이아웃 등 xe_modules table의 값과 정보
		if ($module_srl) {
			$module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
			$this->module_info = $module_info;
			Context::set('module_info', $module_info);
		}

		// 모듈 카테고리의 목록을 구함
		$module_category = $oModuleModel;
		Context::set('module_category', $module_category);

		// 관리자 템플릿 파일의 경로 설정 (tpl)
		$template_path = sprintf("%stpl/",$this->module_path);
		$this->setTemplatePath($template_path);

		// 내용 입력/수정/삭제 후 백엔드 콜백 함수를 처리하는 javascript 추가
		Context::addJsFile($this->module_path.'tpl/js/hguhis_admin.js');
	}

	/**
	 * @function dispHguhisAdminModuleList
	 * @brief 모듈들의 리스트가 보여진다.
	 * @author 인호
	 */
	function dispHguhisAdminModuleList() {

		// setup for page navigation
		$page = Context::get('page');
		if (!$page) $page = 1;
		$args->page = $page;

		// new object - hguhis admin model
		$oHguhisAdminModel = &getAdminModel('hguhis');

		debugPrint($oHguhisAdminModel);

		// get list of hguhis admin module_srl
		$output = $oHguhisAdminModel->getHguhisAdminList($args);

		debugPrint($output);

		// 템플릿에 전해주기 위해 set함
		Context::set('total_count', $output->total_count);
		Context::set('total_page', $output->total_page);
		Context::set('page', $output->page);
		Context::set('book_list', $output->data);
		Context::set('page_navigation', $output->page_navigation);

		// 관리자 목록(mid) 보기 템플릿 지정(tpl/index.html)
		$this->setTemplateFile('module_list');
	}

	/**
	 * @function dispHguhisAdminModuleInsert
	 * @brief 모듈의 정보를 삽입한다.
	 * @author 현희
	 */
	function dispHguhisAdminModuleInsert() {
		
		// 스킨 목록을 구해옴
		$oModuleModel = &getModel('module');
		$skin_list = $oModuleModel->getSkins($this->module_path);
		Context::set('skin_list',$skin_list);
	
		// 레이아웃 목록을 구해옴
		$oLayoutMode = &getModel('layout');
		$layout_list = $oLayoutMode->getLayoutList();
		Context::set('layout_list', $layout_list);

		// 템플릿 페스 지정
		$template_path = sprintf("%stpl/",$this->module_path);
		$this->setTemplatePath($template_path);

		// 템플릿 파일 지정
		$this->setTemplateFile('module_insert');

	}

}
?>
