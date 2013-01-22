<?php
/**
 * @class  hiswikiModel
 * @author CRA (cra.handong@gmail.com)
 * @brief  hiswiki 모듈의 model class
 **/

class hiswikiModel extends hiswiki {

	/**
	 * @brief 초기화
	 * @author 현희
	 * @topic list 불러오기
	 **/
	function init() {
	}

	function getHiswikiTopicList($args) {

		$output = executeQueryArray('hiswiki.getHiswikiTopicList', $args);
		return $output;


	}

	function getHiswikiTopic ($args){
		$output = executeQueryArray('hiswiki.getHiswikiTopic', $args);
		return $output;
	}


}
?>