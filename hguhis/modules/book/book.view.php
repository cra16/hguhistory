<?php
 /**
  * @class bookView
  * @author Joshua Jung
  * @brief book 모듈의 view 클래스 
  */

	class bookView extends book {
		
		/**
		 * @brief 초기화
		 */
		function init() {
			
			// module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
			$module_srl = Context::get('module_srl');
			if (!$module_srl && $this->module_srl) {
				$module_srl = $this->module_srl;
				Context::set('module_srl', $module_srl);
			}
			
			// module model object 생성
			$oModuleModel = &getModel('module');
			
			// module_srl이 넘어오면 해당 모듈의 정보를 미리 구해 놓음
			// 모듈의 브라우저 타이틀, 관리자, 레이아웃 등 xe_module table의 값과 정보
			if ($module_srl) {
				$module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
				$this->module_info = $module_info;
				Context::set('module_info', $module_info);
			}
			
			// 스킨 경로를 미리 template_path라는 변수로 설정함
			// 스킨이 존재하지 않는다면 default로 변경
			$template_path = sprintf("%sskins/%s/", $this->module_path, $this->module_info->skin);
			if (!is_dir($template_path) || !$this->module_info->skin) {
				$this->module_info->skin = 'default';
				$template_path = sprintf("%sskins/%s/", $this->module_path, $this->module_info->skin);
			}
			$this->setTemplatePath($template_path);
		}
		
		/**
		 * @brief 목록
		 */
		function dispBookContentList() {
			
			/**
			 * 목록보기 권한 체크 (모든 권한은 ModuleObject에서 xml 정보와 Module_info의 grant 값을 비교하여 미리 설정하여 놓음
			 */
			if (!$this->grants->access || !$this->grant->list) return $this->dispBookMessage('msg_not_permitted');
			
			// module_srl 확인
			$module_srl = Context::get('module_srl');
			$args->module_srl = $module_srl;
			$args->page = Context::get('page');
			
			// module model 객체 생성
			$oModuleModel = &getModel('module');
			
			// book model에서 목록을 가져옴
			$oBookModel = &getModel('book');
			$output = $oBookModel->getBookContentList($args);
			if (!$output->data) $output->data = array();
			
			// $book_list 변수에 담는다
			Context::set('book_list', $output->data);
			Context::set('page', $output->page);
			Context::set('page_navigation', $output->page_navigation);
			
			// template_file을 list.html로 지정
			$this->setTemplateFile('list');
		}
		
		/**
		 * @brief 메세지 출력
		 */
		function dispBookMessage($msg_code) {
			$msg = Context::getLang($msg_code);
			if (!$msg) $msg = $msg_code;
			Context::set('message', $msg);
			$this->setTemplateFile('message');
		}
		
		/**
		 * @brief 오류메세지를 system alert로 출력하는 method
		 * 특별한 오류를 알려주어야 하는데 별도의 디자인까지는 필요 없을 경우 페이지를 모두 그린 후에 오류를 출력하도록 함
		 */
		function alertMessage($message) {
			$script = sprintf('<script type="text/javascript"> xAddEventListener(window, "load", function() {alert("%s");});</script>', Context::getLang($message));
			Context::addHtmlHearder($script);
		}
		
		/**
		 * @brief 선택된 BOOK 내용보기
		 **/
		function dispBookContentView() {
		
			// 보기 권한 체크
			if(!$this->grant->view) return $this->dispBookMessage('msg_not_permitted');
		
			// book의 식별번호를 가져옴
			$book_srl = Context::get('book_srl');
			$obj->book_srl = $book_srl;
		
			// book model에서 내용을 가져옴
			$oBookModel = &getModel('book');
			$output = $oBookModel->getBookContentBook($obj);
			 
			// $output->data의 배열 형식을 변경하여 $book_info 변수에 Context 세팅
			Context::set('book_info', $this->arrangeBookInfo($output));
		
			// template_file을 view.html로 지정
			$this->setTemplateFile('view');
		}
		
		/**
		 * @brief book model에서 받아온 $output->data를 스킨파일에 보내기 전에 배열 형식 변경
		 **/
		function arrangeBookInfo($output) {
			// 1차 배열 형식으로 변경
			if($output->data) {
				foreach($output->data as $val) {
					$obj = null;
					$obj->book_srl = $val->book_srl;
					$obj->book_title = $val->book_title;
					$obj->book_author = $val->book_author;
					$obj->book_publisher = $val->book_publisher;
					$obj->book_price = $val->book_price;
					$obj->regdate = $val->regdate;
				}
				return $obj;
			}
		}
		
		/**
		 * @brief 내용 작성/수정 화면 출력
		 **/
		function dispBookContentWrite() {
		
			// 쓰기 권한 체크
			if(!$this->grant->write) return $this->dispBookMessage('msg_not_permitted');
		
			// book_srl 확인
			$book_srl = Context::get('book_srl');
		
			// book_srl 이 있는 경우 update
			if(isset($book_srl)) {
		
				$obj->book_srl = $book_srl;
		
				// book model에서 내용을 가져옴
				$oBookModel = &getModel('book');
				$output = $oBookModel->getBookContentBook($obj);
		
				// 변경된 $output을 $book_info 변수에 set
				Context::set('book_info', $this->arrangeBookInfo($output));
		
				// book_srl 이 없는 경우 새로 등록하기 위해서 초기화
			} else {
		
				//$book_srl = NULL;
				//Context::set('book_srl', $book_srl);
				// 또는
				Context::set('book_srl','',true);
			}
		
			// 내용 작성시 검증을 위해 사용되는 XmlJSFilter
			Context::addJsFilter($this->module_path.'tpl/filter', 'content_insert.xml');
		
			// 콜백 함수를 처리하는 javascript
			Context::addJsFile($this->module_path.'tpl/js/book.js');
		
			// 내용 작성화면 템플릿 파일 지정 write.html
			$this->setTemplateFile('write');
		}
		
		/**
		 * @brief 삭제 화면 출력
		 **/
		function dispBookContentDelete() {
		
			// 삭제 권한
			if(!$this->grant->delete) return $this->dispBookMessage('msg_not_permitted');
		
			// GET parameter에서 book_srl을 받아 확인
			$book_srl = Context::get('book_srl');
		
			// book_srl이 없는 경우 오류 메시지 출력
			if(!$book_srl) $this->alertMessage('msg_not_founded');
		
			// 내용 작성시 검증을 위해 사용되는 XmlJSFilter
			Context::addJsFilter($this->module_path.'tpl/filter', 'content_delete.xml');
		
			// 콜백 함수를 처리하는 javascript
			Context::addJsFile($this->module_path.'tpl/js/book.js');
		
			// 템플릿 파일 지정
			$this->setTemplateFile('delete');
		}
	}

?>