<?php
/**
 * @class  hiswikiAdminView
 * @author CRA (cra.handong@gamil.com)
 * hiswiki module's admin view class
 **/

class hiswikiAdminView extends hiswiki {

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
		Context::addJsFile($this->module_path.'tpl/js/hiswiki_admin.js');
	}

	/**
	 * @function dispHiswikiAdminModuleList
	 * @brief 모듈들의 리스트가 보여진다.
	 * @author 인호
	 */
	function dispHiswikiAdminModuleList() {
		
		// setup for page navigation
		$page = Context::get('page');
		if (!$page) $page = 1;
		$args->page = $page;

		// new object - hiswiki admin model
		$oHiswikiAdminModel = &getAdminModel('hiswiki');

		// get list of hiswiki admin module_srl
		$output = executeQueryArray('hiswiki.getHiswikiAdminList', $args);

		// 템플릿에 전해주기 위해 set함
		Context::set('total_count', $output->total_count);
		Context::set('total_page', $output->total_page);
		Context::set('page', $output->page);
		Context::set('hiswiki_list', $output->data);
		Context::set('page_navigation', $output->page_navigation);

		// 관리자 목록(mid) 보기 템플릿 지정(tpl/index.html)
		$this->setTemplateFile('module_list');
	}

	/**
	 * @function dispHiswikiAdminModuleInsert
	 * @brief 모듈의 정보를 삽입한다.
	 * @author 현희
	 */


	function dispHiswikiAdminModuleInsert() {

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

	/**
	 * @brief 선택된 모듈의 정보 출력은 곧바로 정보 입력으로 변경한다
	 **/
	function dispHiswikiAdminModuleInfo() {
		$this->dispHiswikiAdminModuleInsert();
	}

	/**
	 * @brief 모듈 삭제 화면 출력
	 **/
	function dispHiswikiAdminModuleDelete() {

		// 삭제를 요청하는 module_srl 확인하고 없으면 관리자 목록 보기
		if(!Context::get('module_srl')) return $this->dispHiswikiAdminModuleList();

		// 선택된 모듈의 정보를 set 함
		$module_info = Context::get('module_info');
		Context::set('module_info',$module_info);

		// 템플릿 파일 지정
		$this->setTemplateFile('module_delete');

	}
	 

	/**
	 * @brief 권한 목록 출력
	 **/
	function dispHiswikiAdminGrantInfo() {

		// 공통 모듈 권한 설정 페이지 호출
		$oModuleAdminModel = &getAdminModel('module');
		$grant_content = $oModuleAdminModel->getModuleGrantHTML($this->module_info->module_srl, $this->xml_info->grant);
		Context::set('grant_content', $grant_content);

		$this->setTemplateFile('grant_list');
	}

	/**
	 * @brief 스킨 정보 보여줌
	 **/
	function dispHiswikiAdminSkinInfo() {
		// 공통 모듈 권한 설정 페이지 호출
		$oModuleAdminModel = &getAdminModel('module');
		$skin_content = $oModuleAdminModel->getModuleSkinHTML($this->module_info->module_srl);
		Context::set('skin_content', $skin_content);

		$this->setTemplateFile('skin_info');
    }
	
	
	/**
	 * @function dispHiswikiAdminCategoryInfo
	 * @author 바람꽃(wndflwr@gmail.com)
	 * @brief 각 모듈(게시판)의 카테고리를 설정할 수 있다.
	 */
	function dispHiswikiAdminCategoryInfo() {
		$oDocumentModel = &getModel('document');
		$catgegory_content = $oDocumentModel->getCategoryHTML(Context::get('module_srl'));
		
		Context::set('category_content', $catgegory_content);
		
		$this->setTemplateFile('category_info');
	}
}
?>
