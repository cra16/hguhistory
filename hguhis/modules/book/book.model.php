<?php
/**
 * @class bookModel
 * @author Joshua Jung
 * @brief book 모듈의 model class
 */

class bookModel extends book {
	
	/**
	 * @brief 초기화
	 */
	function init() {
	}
	
	// 목록 가져오기
	function getBookcontentList($args) {
		$output = executeQueryArray('book.getBookContentList', $args);
		return $output;
	}

	/**
	 * @class  bookModel
	 * @author XE스쿨 BOOK 모듈 만들기 예제
	 * @brief  book 모듈의 model class
	 **/
	// 내용 가져오기
	function getBookContentBook($args){
		$output = executeQueryArray('book.getBookContentBook', $args);
		return $output;
	}

}
?>