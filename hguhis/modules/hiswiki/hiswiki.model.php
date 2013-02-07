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

	function getdispHiswikiTopicList($args) {

		$output = executeQueryArray('hiswiki.getHiswikiTopicList', $args);
		return $output;


	}

	function getHiswikiTopic ($args){
		$output = executeQueryArray('hiswiki.getHiswikiTopic', $args);
		return $output;
	}
	
	/**
	 * @param unknown_type $documentSrl
	 * @author 지희
	 * hiswikiDoc 자료 가져오기
	 **/
	function getHiswikiDoc($document_srl) {
		$args->document_srl = $document_srl;
		$output = executeQueryArray('hiswiki.getHiswikiDoc',$args);
		return $output;
	}
	
	/**
	 * @function getHiswikiSearchKeyword
	 * @author 바람꽃(wndflwr@gmail.com)
	 * @param $search_keyword
	 * @brief 검색어 완성기능에 사용하는 기능. 검색어 입력 시 태그와 topic 에서 비슷한 주제를
	 * 포함하는 녀석들을 찾아서 결과로 뿌려준다.
	 * hiswiki_doc 의 topic column 을 위주로 검색한다.
	 * 여력이 되면 태그도 검색한다.
	 */
	function getHiswikiSearchKeyword() {
		$search_keyword = Context::get('search_keyword');
		$result = $this->_getSearchKeyword($search_keyword);
		$this->add('result', $result);
	}
	
	/**
	 * @function _getSearchKeyword
	 * @author 바람꽃 (wndflwr@gmail.com)
	 * @param string $search_keyword
	 * @return array
	 * @brief $this->getHiswikiSearchKeyword() 의 help function
	 */
	function _getSearchKeyword($search_keyword) {
		$args->topic = "%".$search_keyword."%";
		$output = executeQueryArray('hiswiki.getSearchHiswikiDoc', $args);
		return $output->data;
	}
	
	/**
	 * @function getHiswikiTitle
	 * @author 지희
	 * @param $title
	 * @brief 타이틀을 찾아 사용하는 기능
	 **/
	function getHiswikiTitle(){
		$title = Context::get('title');
		$result = $this->_getHiswikiTitle($title);
		$this->add('result',$result);
	}
	/**
	 * @function _getSearch Title
	 * @author 지희
	 * @param string $title
	 * @brief $this->getHiswikiTitle의 helper
	 */
	function _getHiswikiTitle($title){
		$args->topic = $title;
		$output = executeQueryArray('hiswiki.getHiswikiTitle',$args);
		return $output->data;
	}
	
	function getHiswikiYearViewList() {
		$;
	}
}
?>
