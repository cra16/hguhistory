<?php
/**
 * @class  Hiswikicontroller
 * @author 현희 
 * @brief  hiswiki 모듈의 controller class
 **/

class hiswikiController extends hiswiki {

	/**
	 * @brief 초기화
	 **/
	function init() {
	}
	
	
	/**
	 * @brief Hiswiki입력
	 **/
	function procHiswikiAdminTopicWrite() {

		// request 값을 모두 받음
		$obj = Context::getRequestVars();

		// 현재 모듈번호 확인
		$obj->module_srl = Context::get('module_srl');

		//document_srl 확인
		$document_srl = Context::get('document_srl');

		// document_srl에 따라 새로 입력하거나 수정하기 위해
		if($document_srl) {

			// module_srl이 있으면 update
			$output = executeQuery("hiswiki.updateTopic", $obj);
			$this->setMessage('success_updated');

		} else {

			// module_srl이 없으면 insert
			$output = executeQuery("hiswiki.topicWrite", $obj);
			$this->setMessage('success_registed');

		}
	}
}
?>