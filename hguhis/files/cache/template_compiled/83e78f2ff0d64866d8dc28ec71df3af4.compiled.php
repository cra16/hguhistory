<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
	xe.lang.favorite_on = '<?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->on ?>)';
	xe.lang.favorite_off = '<?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->off ?>)';
</script>
<h1 class="h1"><?php echo $__Context->lang->installed_modules ?></h1>
<div class="cnb">
	<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminContent') ?>"<?php if($__Context->act=='dispModuleAdminContent'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->installed_modules ?></a>
	|
	<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminCategory') ?>"<?php if($__Context->act=='dispModuleAdminCategory'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->module_category ?></a>
</div>
