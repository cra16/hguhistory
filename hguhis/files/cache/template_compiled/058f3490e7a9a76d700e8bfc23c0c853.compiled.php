<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki_common.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki_common.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/MyMethodCall.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/MyMethodCall.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php if($__Context->act!=dispHiswikiTopicWrite){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','search_box.html') ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','category_list.html') ?>
<?php } ?>