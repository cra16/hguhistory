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

	/**
	 * @function dispHiswikiAdminTopicWrite
	 * @brief topic 추가 설정중
	 * @author 현희
	 **/
	// 	function dispHiswikiAdminTopicWrite(){
	// 		// check grant
	// 		if(!$this->grant->write_document) return $this->dispBoardMessage('msg_not_permitted');

	// 		$oDocumentModel = &getModel('document');

	// 		/**
	// 		 * check if the category option is enabled not not
	// 		 **/
	// 		if($this->module_info->use_category=='Y') {
	// 			// get the user group information
	// 			if(Context::get('is_logged')) {
	// 				$logged_info = Context::get('logged_info');
	// 				$group_srls = array_keys($logged_info->group_list);
	// 			} else {
	// 				$group_srls = array();
	// 			}
	// 			$group_srls_count = count($group_srls);

	// 			// check the grant after obtained the category list
	// 			$normal_category_list = $oDocumentModel->getCategoryList($this->module_srl);
	// 			if(count($normal_category_list)) {
	// 				foreach($normal_category_list as $category_srl => $category) {
	// 					$is_granted = true;
	// 					if($category->group_srls) {
	// 						$category_group_srls = explode(',',$category->group_srls);
	// 						$is_granted = false;
	// 						if(count(array_intersect($group_srls, $category_group_srls))) $is_granted = true;

	// 					}
	// 					if($is_granted) $category_list[$category_srl] = $category;
	// 				}
	// 			}
	// 			Context::set('category_list', $category_list);
	// 		}

	// 		// GET parameter document_srl from request
	// 		$document_srl = Context::get('document_srl');
	// 		$oDocument = $oDocumentModel->getDocument(0, $this->grant->manager);
	// 		$oDocument->setDocument($document_srl);
	// 		if($oDocument->get('module_srl') == $oDocument->get('member_srl')) $savedDoc = true;
	// 		$oDocument->add('module_srl', $this->module_srl);

	// 		// if the document is not granted, then back to the password input form
	// 		$oModuleModel = &getModel('module');
	// 		if($oDocument->isExists()&&!$oDocument->isGranted()) return $this->setTemplateFile('input_password_form');
	// 		if(!$oDocument->isExists()) {
	// 			$point_config = $oModuleModel->getModulePartConfig('point',$this->module_srl);
	// 			$logged_info = Context::get('logged_info');
	// 			$oPointModel = &getModel('point');
	// 			$pointForInsert = $point_config["insert_document"];
	// 			if($pointForInsert < 0) {
	// 				if( !$logged_info ) return $this->disphiswikiMessage('msg_not_permitted');
	// 				else if (($oPointModel->getPoint($logged_info->member_srl) + $pointForInsert )< 0 ) return $this->dispBoardMessage('msg_not_enough_point');
	// 			}
	// 		}
	// 		if(!$oDocument->get('status')) $oDocument->add('status', $oDocumentModel->getDefaultStatus());

	// 		$statusList = $this->_getStatusNameList($oDocumentModel);
	// 		if(count($statusList) > 0) Context::set('status_list', $statusList);
	// 		// get Document status config value
	// 		Context::set('document_srl',$document_srl);
	// 		Context::set('oDocument', $oDocument);

	// 		// apply xml_js_filter on header
	// 		$oDocumentController = &getController('document');
	// 		$oDocumentController->addXmlJsFilter($this->module_info->module_srl);

	// 		// if the document exists, then setup extra variabels on context
	// 		if($oDocument->isExists() && !$savedDoc) Context::set('extra_keys', $oDocument->getExtraVars());

	// 		/**
	// 		 * add JS filters
	// 		 **/
	// 		Context::addJsFilter($this->module_path.'tpl/filter', 'topic_write.xml');

	// 		$oSecurity = new Security();
	// 		$oSecurity->encodeHTML('category_list.text', 'category_list.title');

	// 		$this->setTemplateFile('write_form');
	// 	}


	function dispHiswikiAdminTopicWrite() {
		// 쓰기 권한 체크
		//if(!$this->grant->write) //return $this->dispHiswikiAdminTopicWrite('msg_not_permitted');
		//	return new Object(-1, 'msg_not_permitted');
		//if(!$this->grant->write) return $this->dispHiswikiWriteTopic('msg_not_permitted');

		// document_srl 확인
		$document_srl = Context::get('document_srl');

		// document_srl 이 있는 경우 update
		if(isset($document_srl)) {

			$obj->document_srl = $document_srl;

			// hiswiki model에서 내용을 가져옴
			$oHiswikiModel = &getModel('hiswiki');
			$output = $oHiswikiModel->getHiswikiTopic($obj);

			// 변경된 $output을 $document_info 변수에 set
			Context::set('hiswiki_info', $this->arrangeHiswikiInfo($output));

			// document_srl 이 없는 경우 새로 등록하기 위해서 초기화
		} else {

			$document_srl = NULL;
			//Context::set('document_srl', $document_srl);
			// 또는
			Context::set('document_srl','',true);
		}

		// 내용 작성시 검증을 위해 사용되는 XmlJSFilter
		Context::addJsFilter($this->module_path.'tpl/filter', 'topic_write.xml');

		// 콜백 함수를 처리하는 javascript
		Context::addJsFile($this->module_path.'tpl/js/hiswiki.js');

		// 내용 작성화면 템플릿 파일 지정 write.html
		$this->setTemplateFile('write');
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
		$output = $oHiswikiModel->getHiswikiTopicList($args);
		if (!$output->data) $output->data = array();
			
		// $_list 변수에 담는다
		Context::set('hiswiki_list', $output->data);
		Context::set('page', $output->page);
		Context::set('page_navigation', $output->page_navigation);
			
		// template_file을 topic_list.html로 지정
		$this->setTemplateFile('topic_list');
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
	
// 	/**
// 	 *   
// 	 * @brief display the module skin information
// 	 **/
// 	function dispHiswikiAdminSkinInfo() {
// 		// get the grant infotmation from admin module
// 		$oModuleAdminModel = &getAdminModel('module');
// 		$skin_content = $oModuleAdminModel->getModuleSkinHTML($this->module_info->module_srl);
// 		Context::set('skin_content', $skin_content);
	
// 		$this->setTemplateFile('skin_info');
// 	}
	
// 	/**
// 	 * @brief display the selected board module admin information
// 	 **/
// 	function dispHiswikiAdminBoardInfo() {
// 		$this->dispHiswikiAdminInsertBoard();
// 	}
	
// 	/**
// 	 * @brief display the module insert form
// 	 **/
// 	/*function dispHiswikiAdminInsertBoard() {
// 		if(!in_array($this->module_info->module, array('admin', 'board','blog','guestbook'))) {
// 			return $this->alertMessage('msg_invalid_request');
// 		}
	
// 		// get the skins list
// 		$oModuleModel = &getModel('module');
// 		$skin_list = $oModuleModel->getSkins($this->module_path);
// 		Context::set('skin_list',$skin_list);
	
// 		$mskin_list = $oModuleModel->getSkins($this->module_path, "m.skins");
// 		Context::set('mskin_list', $mskin_list);
	
// 		// get the layouts list
// 		$oLayoutModel = &getModel('layout');
// 		$layout_list = $oLayoutModel->getLayoutList();
// 		Context::set('layout_list', $layout_list);
	
// 		$mobile_layout_list = $oLayoutModel->getLayoutList(0,"M");
// 		Context::set('mlayout_list', $mobile_layout_list);
	
// 		$security = new Security();
// 		$security->encodeHTML('skin_list..title','mskin_list..title');
// 		$security->encodeHTML('layout_list..title','layout_list..layout');
// 		$security->encodeHTML('mlayout_list..title','mlayout_list..layout');
	
// 		// get document status list
// 		$oDocumentModel = &getModel('document');
// 		$documentStatusList = $oDocumentModel->getStatusNameList();
// 		Context::set('document_status_list', $documentStatusList);
	
// 		// set the template file
// 		$this->setTemplateFile('topic_write');
// 	}*/
}
?>