<?php
    /**
     * @class  hguhisAdminModel
     * @author CRA (cra.handong@gmail.com)
     * @brief  hguhis 모듈의 admin model class
     **/

    class hguhisAdminModel extends hguhis {

	    /**
         * @brief 초기화
         **/
        function init() {
        }

		function getHguhisAdminList($args){
            $output = executeQueryArray('hguhis.getHguhisAdminList', $args);
			return $output;
		}

   }
?>
