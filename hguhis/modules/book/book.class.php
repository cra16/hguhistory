<?php
	/**
	 * @class book
	 * @author Joshua Jung
	 * @brief high class of book module
	 **/

	class book extends ModuleObject {
		
		/**
		 * @brief implement this if need more work to do when installing
		 **/
		function moduleInstall() {
			return new Object();
		}
		
		/**
		 * @brief a method that check install procedure
		 **/
		function checkUpdate() {
			return false;
		}
		
		/**
		 * @brief execute update
		 **/
		function muduleUpdate() {
			return new Object(0, 'success_updated');
		}
		
		function moduleUninstall() {
			return new Object();
		}
		
		/**
		 * @brief regenerate cache file
		 **/
		function recompileCache() {
		}
	}
?>