<?php if(!defined("__XE__"))exit;
if($__Context->module_info->display_title != 'hide'){ ?><h1><?php echo $__Context->oDocument->getTitle() ?></h1><?php } ?>
<?php echo $__Context->oDocument->getContent($__Context->module_info->display_popupmenu != 'hide') ?>
<?php if($__Context->grant->manager){ ?>
	<!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
	<div class="btnArea">
		<span class="btn"><?php if($__Context->logged_info->is_admin=='Y'){ ?><a href="<?php echo getUrl('act','dispPageAdminInfo','module_srl',$__Context->module_info->module_srl) ?>"><?php echo $__Context->lang->cmd_setup ?>...</a><?php } ?></span>
		<span class="btn"><a href="<?php echo getUrl('act','dispPageAdminContentModify','document_srl','') ?>"><?php echo $__Context->lang->cmd_page_modify ?>...</a></span>
	</div>
<?php } ?>
