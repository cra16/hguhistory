<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spHeader.html') ?>
<div class="content" id="content" tabindex="0">
	<?php echo $__Context->content ?>
</div>
<?php if($__Context->parentSrl != 0){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spLnb.content.html');
} ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spShortcut.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spFooter.html') ?>
