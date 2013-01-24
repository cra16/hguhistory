<?php
/**
 * @class  hiswikiAdminController
 * @author CRA (cra.handong@gamil.com)
 * hiswiki module's admin controller class
 **/

class hiswikiAdminController extends hiswiki {

	function init() {

	}

	/**
	 * @function procHiswikiAdminModuleInsert
	 * @brief 모듈 정보와 우리 위키 모듈만의 정보 받아서 저장한다.
	 * modules, module_part_config
	 * @author 지희
	 */
	function procHiswikiAdminModuleInsert() {
		// module 모듈의 model/controller 객체 생성
		$oModuleController = &getController('module');
		$oModuleModel = &getModel('module');

		// request 값을 모두 받음 // getRequestVars() 를 사용하면 필요 없는 값까지 받아져서 DB 낭비하게 된다. gets()를 사용하길.
		$args = Context::gets('module_srl', 'module_category', 'layout_srl', 'use_mobile', 'mlayout_srl', 'menu_srl', 'site_srl', 'mid', 'is_skin_fix', 'mskin', 'browser_title', 'description', 'is_default', 'content', 'mcontent', 'open_rss', 'header_text', 'footer_text');
		$args->module = 'hiswiki';

		// module_srl이 넘어오면 원 모듈이 있는지 확인
		if($args->module_srl) {
			$module_info = $oModuleModel->getModuleInfoByModuleSrl($args->module_srl);
			if($module_info->module_srl != $args->module_srl) unset($args->module_srl);
		}

		// module_srl 값의 존재여부에 따라 insert/update
		if(!$args->module_srl) {
			$output = $oModuleController->insertModule($args);
			$msg_code = 'success_registed';
		} else {
			$output = $oModuleController->updateModule($args);
			$msg_code = 'success_updated';
		}

		// 오류가 있으면 리턴
		if(!$output->toBool()) return $output;

		// $output은 Object객체로 리턴
		// $oModuleController->insertModule() 또는 $oModuleController->updateModule() 에서 리턴시 설정한 module_srl를 가져옴
		$module_srl = $output->get('module_srl');

		// $this객체에 add()로 변수를 등록하여 호출하여 XMLRPC로 리턴시 값을 추가함
		$this->add('page',Context::get('page'));
		$this->add('module_srl',$output->get('module_srl'));
		$this->setMessage($msg_code);
	}

	/**
	 * @brief 모듈 삭제
	 **/
	function procHiswikiAdminModuleDelete() {

		// 삭제를 요청하는 module_srl 확인
		$module_srl = Context::get('module_srl');

		// 원본을 찾아 삭제
		$oModuleController = &getController('module');
		$output = $oModuleController->deleteModule($module_srl);
		if(!$output->toBool()) return $output;

		$this->add('module','hiswiki');
		$this->add('page',Context::get('page'));
        $this->setMessage('success_deleted');

	}
        
	/**
	 * @function procHiswikiAdminTopicWrite
	 * @brief Hiswiki입력
	 * @author 현희 
	 **/
	function procHiswikiAdminTopicWrite() {

		// check grant
		//if($this->module_info->module != "hiswiki") return new Object(-1, "msg_invalid_request");
		//if(!$this->grant->write_document) return new Object(-1, 'msg_not_permitted');
		//$logged_info = Context::get('logged_info');
		
		$vars = Context::gets('content', 'title','module_srl','start_date','end_date','tags');
		$oDocumentController = &getController('document');
		$output = $oDocumentController->insertDocument($vars);
		if($output->toBool()==true)
			$this->setRedirectUrl(Context::get('success_return_url'));
		else
			$this->setRedirectUrl(Context::get('error_return_url'));
		
		return;
	}
}
?>
