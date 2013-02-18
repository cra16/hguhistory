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
		
		$result = array();
		$oDocumentModel = &getModel('document');
		foreach ($output->data as $key => $val) {
			$tmp = $oDocumentModel->getDocument($val->document_srl);
			$result[$key]->topic = $val->topic;
			$result[$key]->document_srl = $val->document_srl;
			$result[$key]->permanent_url = $tmp->getPermanentUrl();
			$result[$key]->summary = $tmp->getSummary(80, '...');
		}
		return $result;
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
	
	function getHiswikiTrace($trace_srl){
		$args->trace_srl = $trace_srl;
		$output = executeQueryArray('hiswiki.getHiswikiTrace',$args);
		return $output;
	}
	/**
	 * @function getHiswikiExtraVars
	 * @author 지희
	 * @param $document_srl
	 * @brief extravars 불러오기
	 **/
	function getHiswikiExtraVars($document_srl){
		if(!document_srl) return new Object(-1);
		$args->document_srl = $document_srl;
		$output = executeQueryArray('hiswiki.getHiswikiExtraVars',$args);
		return $output;
	}
	
	/**
	 * @function getHiswikiYearViewList
	 * @author 인호
	 * @brief 연도별 보기 목록 페이지를 위한 DB 쿼리
	 */
	function getHiswikiYearViewList() {
		$args->start_date = Context::get('start_date');
		$args->end_date = Context::get('end_date');
		$args->module_srl = Context::get('module_srl');
		$result = $this->_getHiswikiYearViewList($args);
		$this->add('result', $result);
	}
	
	/**
	 * @function _getHiswikiYearViewList
	 * @author 인호
	 * @param int date
	 * @brief $this->getHiswikiYearViewList() 의 help function
	 */
	function _getHiswikiYearViewList($param) {
		// DB에서 연도 목록을 불러온다. (동적 조회)
		$args->var_idx_1 = 1;
		$args->var_idx_2 = 2;
		$args->startDate = $param->start_date;
		$args->endDate = $param->end_date;
		$args->module_srl = $param->module_srl;
		$output = executeQueryArray('hiswiki.getYearList', $args);
		
		$result = array();
		$oDocumentModel = &getModel('document');
		foreach ($output->data as $key => $val) {
			$tmp = $oDocumentModel->getDocument($val->document_srl);
			$result[$key]->date = $val->value;
			$result[$key]->var_idx = $val->var_idx;
			$result[$key]->document_srl = $val->document_srl;
			$result[$key]->permanent_url = $tmp->getPermanentUrl();
			$result[$key]->summary = $tmp->getSummary(80, '...');
			//$result[$key]->author = $tmp->getNickName();
			$result[$key]->regDate = $tmp->getRegdate('Y.m.d');
			$result[$key]->title = $tmp->getTitle();
		}
		return $result;
	}
	
	/**
	 * @function getHiswikiAuthor
	 * @author 인호
	 * @brief 위키 문서의 책임자를  DB에서 조회한다.
	 */
	function getHiswikiAuthor() {
		$args->module_srl = Context::get('module_srl');
		$args->document_srl = Context::get('document_srl');
		$args->var_idx = 3;
		$output = executeQueryArray('hiswiki.getAuthor', $args);
		
		$result = array();
		foreach ($output->data as $key => $val) {
			$result[$key]->author = $val->value;
		}
		$this->add('result', $result);
	}
}
?>
