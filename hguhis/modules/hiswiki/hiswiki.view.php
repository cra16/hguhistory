<?php
    /**
     * @class  hiswikiView
     * @author CRA (cra.handong@gmail.com)
     * @brief hiswiki 모듈의 view class
     **/

    class hiswikiView extends hiswiki {

        /**
         * @brief 초기화
         **/
        function init() {
        	
        	// module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
        	$module_srl = Context::get('module_srl');
        	if(!$module_srl && $this->module_srl) {
        		$module_srl = $this->module_srl;
        		Context::set('module_srl', $module_srl);
        	}
        	
        	// module model 객체 생성
        	$oModuleModel = &getModel('module');
        	
        	// module_srl이 넘어오면 해당 모듈의 정보를 미리 구해 놓음
        	// 모듈의 브라우저 타이틀, 관리자, 레이아웃 등 xe_modules table의 값과 정보
        	if($module_srl) {
        		$module_info = $oModuleModel->getHiswikiInfoByModuleSrl($module_srl);
        		$this->module_info = $module_info;
        		Context::set('module_info',$module_info);
        	}
        	
        	// 스킨 경로를 미리 template_path 라는 변수로 설정함
        	// 스킨이 존재하지 않는다면 default로 변경
        	$template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
        	if(!is_dir($template_path)||!$this->module_info->skin) {
        		$this->module_info->skin = 'default';
        		$template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
        	}
        	$this->setTemplatePath($template_path);
        	 
        }
		
        /**
         * @brief 목록
         * 
         **/
        function dispHiswikiFrontPage() {
        	$this->setTemplateFile('front_page');
        }

    }
?>