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
	 * @function procHiswikiAdminTopicWrite
	 * @brief Hiswiki입력
	 * @author 현희 
	 **/
	
	
	function procHiswikiAdminTopicWrite() {


		// check grant
		//if($this->module_info->module != "hiswiki") return new Object(-1, "msg_invalid_request");
		//if(!$this->grant->write_document) return new Object(-1, 'msg_not_permitted');
		//$logged_info = Context::get('logged_info');

		// setup variables
		$obj = Context::getRequestVars();
		$obj->module_srl = $this->module_srl;
		if($obj->is_notice!='Y'||!$this->grant->manager) $obj->is_notice = 'N';
		$obj->commentStatus = $obj->comment_status;

		settype($obj->title, "string");
		if($obj->title == '') $obj->title = cut_str(strip_tags($obj->content),20,'...');
		//setup dpcument title tp 'Untitled'
		if($obj->title == '') $obj->title = 'Untitled';

		// unset document style if the user is not the document manager
		if(!$this->grant->manager) {
			unset($obj->title_color);
			unset($obj->title_bold);
		}

		// generate document module model object
		$oDocumentModel = &getModel('document');

		// generate document module의 controller object
		$oDocumentController = &getController('document');

		// check if the document is existed
		$oDocument = $oDocumentModel->getDocument($obj->document_srl, $this->grant->manager);

		// if use anonymous is true
		if($this->module_info->use_anonymous == 'Y') {
			$obj->notify_message = 'N';
			$this->module_info->admin_mail = '';
			$obj->member_srl = -1*$logged_info->member_srl;
			$obj->email_address = $obj->homepage = $obj->user_id = '';
			$obj->user_name = $obj->nick_name = 'anonymous';
			$bAnonymous = true;
			$oDocument->add('member_srl', $obj->member_srl);
		}
		else
		{
			$bAnonymous = false;
		}

		// update the document if it is existed
		if($oDocument->isExists() && $oDocument->document_srl == $obj->document_srl) {
			if(!$oDocument->isGranted()) return new Object(-1,'msg_not_permitted');
			$output = $oDocumentController->updateDocument($oDocument, $obj);
			$msg_code = 'success_updated';

			// insert a new document otherwise
		} else {
			$output = $oDocumentController->insertDocument($obj, $bAnonymous);
			$msg_code = 'success_registed';
			$obj->document_srl = $output->get('document_srl');

			// send an email to admin user
			if($output->toBool() && $this->module_info->admin_mail) {
				$oMail = new Mail();
				$oMail->setTitle($obj->title);
				$oMail->setContent( sprintf("From : <a href=\"%s\">%s</a><br/>\r\n%s", getFullUrl('','document_srl',$obj->document_srl), getFullUrl('','document_srl',$obj->document_srl), $obj->content));
				$oMail->setSender($obj->user_name, $obj->email_address);

				$target_mail = explode(',',$this->module_info->admin_mail);
				for($i=0;$i<count($target_mail);$i++) {
					$email_address = trim($target_mail[$i]);
					if(!$email_address) continue;
					$oMail->setReceiptor($email_address, $email_address);
					$oMail->send();
				}
			}
		}

		// if there is an error
		if(!$output->toBool()) return $output;

		// return the results
		$this->add('mid', Context::get('mid'));
		$this->add('document_srl', $output->get('document_srl'));

		// alert a message
		$this->setMessage($msg_code);
		
// 		// request 값을 모두 받음
// 		$obj = Context::getRequestVars();

// 		// 현재 모듈번호 확인
// 		$obj->module_srl = Context::get('module_srl');

// 		//document_srl 확인
// 		$document_srl = Context::get('document_srl');

// 		// document_srl에 따라 새로 입력하거나 수정하기 위해
// 		if($document_srl) {

// 			// module_srl이 있으면 update
// 			$output = executeQuery("hiswiki.updateTopic", $obj);
// 			$this->setMessage('success_updated');

// 		} else {

// 			// module_srl이 없으면 insert
// 			$output = executeQuery("hiswiki.topicWrite", $obj);
// 			$this->setMessage('success_registed');

// 		}
// 	}
	}
	
	
?>