<?php
    /**
     * @class  bookAdminModel
     * @author XE스쿨 BOOK 모듈 만들기 예제
     * @brief  book 모듈의 admin model class
     **/

    class bookAdminModel extends book {

	    /**
         * @brief 초기화
         **/
        function init() {
        }

		function getBookAdminList($args){
            $output = executeQueryArray('book.getBookAdminList', $args);
			return $output;
		}

   }
?>
