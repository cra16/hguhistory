<?php
/**
 * @class  Hiswikicontroller
 * @brief  hiswiki 모듈의 controller class
 **/

class hiswikiController extends hiswiki {

	/**
	 * @brief 초기화
	 **/
	function init() {
	}
	
	
	/**
	 * @function procHiswikiModifyFrontPage
	 * @author 바람꽃(wndflwr@gmail.com)
	 * @brief 대문을 저장함돠.
	 * 대문은 documents 테이블에 저장되고 저장된 대문의 위치는 module_info->front_page_srl에 저장되어있슴.
	 */
	function procHiswikiModifyFrontPage() {
		// 올바른 요청인지, 대문 수정 권한은 있는지 확인한다.
		if ($this->module_info->module != 'hiswiki' || !$this->grant->manager) {
			$this->stop('msg_invalid_request');
			return new argsect(-1, 'msg_invalid_request');
		}
		
		// 필요한 데이터만 받기
		$args = Context::gets('content', 'module_srl', 'mid', 'module_srl', 'front_page_srl');
		$args->title = $this->module_info->browser_title;
		
		// documentModel와 documentController를 사용하여 입력 또는 수정하기
		$oDocumentModel = &getModel('document');
		$oDocumentController = &getController('document');
		// 문서가 존재하는지 확인
		$front_page_doc = $oDocumentModel->getDocument($args->front_page_srl);
		// 존재하면 업데이트
		if ($front_page_doc->isExists()) {
			$args->document_srl = $args->front_page_srl;
			$output = $oDocumentController->updateDocument($front_page_doc, $args);
		}
		// 존재하지 않으면 신규 삽입
		else {
			$output = $oDocumentController->insertDocument($args);
			// document_srl이 새롭게 할당되었으므로 module_info에 업데이트 한다.
			$this->module_info->front_page_srl = $output->get('document_srl');
			$oModuleController = &getController('module');
			$output = $oModuleController->updateModule($this->module_info);
		}
		$this->setError($output->error);
		$this->setMessage($output->message);
		
		// redirect_url 설정
		$this->setRedirectUrl(Context::get('success_return_url'));
	}
	
	/**
	 * @function procHiswikiTopicWrite
	 * @brief Hiswiki입력
	 * @author 현희
	 **/
	function procHiswikiTopicWrite() {
	
		// check grant
		//if($this->module_info->module != "hiswiki") return new argsect(-1, "msg_invalid_request");
		//if(!$this->grant->write_document) return new argsect(-1, 'msg_not_permitted');
		//$logged_info = Context::get('logged_info');

		$vars = Context::gets('content', 'title','module_srl','start_date','end_date','tags','document_srl','version');
		$oDocumentController = &getController('document');
		$oDocumentModel = &getModel('document');
		$oDocument = $oDocumentModel->getDocument($vars->document_srl);
		
		if($oDocument->isExists()){
			$output = $oDocumentController->updateDocument($oDocument,$vars);
			$output = $this->_updateHiswikiDoc($vars);
		}else{
			$output = $oDocumentController->insertDocument($vars);
			$output = $this->_insertHiswikiDoc($vars);
		}
		
		if (!$output->toBool()) {
			$this->setRedirectUrl(Context::get('error_return_url'));
			return;
		}
		if ($output->toBool()) {
			$this->setRedirectUrl(Context::get('success_return_url'));
		}
	}
	/**
	 * @fuction _insertHiswikiDoc
	 * @brief hiswiki_doc의 db에저장
	 * @author 지희
	 */
	function _insertHiswikiDoc($args) {
		// Register it if no given document_srl exists
		if(!$args->document_srl) return new Object(-1, 'error');
		
		// generate document module model object
		$oDocumentModel = &getModel('document');
		
		// generate document module의 controller object
		$oDocumentController = &getController('document');
		
		// check if the document is existed
		$oDocument = $oDocumentModel->getDocument($obj->document_srl, $this->grant->manager);

		//insert
		$output = executeQuery('hiswiki.insertHiswikiDoc', $args);
		if(!$output->toBool()) {
			return $output;
		}
		return $output;
	}
	/**
	 * @author 지희
	 * @param $args
	 * @brief 헌문서는 남겨둔다
	 */
		
	/**
	 * @author 지희
	 * @param unknown_type $args
	 * @brief 문서 수정
	 */
	function _updateHiswikiDoc($args){
		// Register it if no given document_srl exists
		if(!$args->document_srl) return new Object(-1, 'error');
		
		//hiswiki모델가져옴
		$oHiswikiModel = &getModel('hiswiki');
		$hiswiki_doc = $oHiswikiModel->getHiswikiDoc(Context::get('document_srl'));
		$hiswiki_doc->data[0]->version += 1;
		$args->version = $hiswiki_doc->data[0]->version;
		
		// generate document module model object
		$oDocumentModel = &getModel('document');
		
		// generate document module의 controller object
		$oDocumentController = &getController('document');
		
		// check if the document is existed
		$oDocument = $oDocumentModel->getDocument($obj->document_srl, $this->grant->manager);
		
		//insert
		$output = executeQuery('hiswiki.updateHiswikiDoc', $args);
		if(!$output->toBool()) {
			return $output;
		}
		return $output;		
	}
	/**
	 *@author 현희
	 *@ 토빅 뷰 컨트롤러
	 */
	
	function procHiswikiTopicView(){
	
		$vars = Context::gets('category_srl','module_srl','title','content','start_date','end_date','tags');
		$oDocumentController = &getController('document');
		$output = $oDocumentController->getContentView($vars);
		
		$this->setRedirectUrl(Context::get('success_view_url'));
	}
	
	/**
	 * @author 지희
	 * @brief 문서를 삭제한다
	 */
	function _deleteHiswikiDoc(){
		
	}
}
?>