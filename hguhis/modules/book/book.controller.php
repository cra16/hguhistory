<?php
/**
 * @class  bookController
 * @author XE스쿨 BOOK 모듈 만들기 예제
 * @brief  book 모듈의 controller class
 **/

class bookController extends book {

	/**
	 * @brief 초기화
	 **/
	function init() {
	}

	/**
	 * @brief BOOK 입력
	 **/
	function procBookContentWrite() {

		// request 값을 모두 받음
		$obj = Context::getRequestVars();

		// 현재 모듈번호 확인
		$obj->module_srl = Context::get('module_srl');

		//book_srl 확인
		$book_srl = Context::get('book_srl');

		// book_srl에 따라 새로 입력하거나 수정하기 위해
		if($book_srl) {

			// module_srl이 있으면 update
			$output = executeQuery("book.updateBook", $obj);
			$this->setMessage('success_updated');

		} else {

			// module_srl이 없으면 insert
			$output = executeQuery("book.insertBook", $obj);
			$this->setMessage('success_registed');

		}
	}
	
	/**
	 * @brief BOOK 삭제
	 **/
	function procBookContentDelete() {
	
		// 삭제를 원하는 book_srl 값을 받음
		$obj->book_srl = Context::get('book_srl');
	
		// 삭제 실행
		$output = executeQuery("book.deleteBook", $obj);
		if(!$output->toBool()) return $output;
	
		$this->setMessage('success_deleted');
	}

}
?>