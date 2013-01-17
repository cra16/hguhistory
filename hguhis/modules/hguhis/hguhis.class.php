<?php
/**
 * @class  hguhis
 * @author CRA (cra.handong@gamil.com)
 * high class of the hguhis module
 **/
class hguhis extends ModuleObject {
	/**
	 * Implement if additional tasks are necessary when installing
	 *
	 * @return Object
	 **/
	function moduleInstall() {
		return new Object();
	}

	/**
	 * a method to check if successfully installed
	 *
	 * @return boolean
	 **/
	function checkUpdate() {
		return false;
	}

	/**
	 * Execute update
	 *
	 * @return Object
	 **/
	function moduleUpdate() {
		return new Object(0, 'success_updated');
	}

	/**
	 * Re-generate the cache file
	 *
	 * @return void
	 **/
	function recompileCache() {
	}

}
?>
