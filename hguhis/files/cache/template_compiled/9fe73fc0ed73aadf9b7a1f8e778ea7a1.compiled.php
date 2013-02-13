<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/manage_selected_module.js--><?php $__tmp=array('modules/module/tpl/js/manage_selected_module.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<div id="manageSelectedModule" class="modal">
	<div class="fg">
		<h2 class="h2"><?php echo $__Context->lang->do_selected ?></h2>
		<div class="table even">
			<table width="100%" cellspacing="0" border="1">
				<thead>
					<tr>
						<th scope="col"><?php echo $__Context->lang->mid ?></th>
						<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
					</tr>
				</thead>
				<tbody id="manageSelectedModuleBody">
				</tbody>
			</table>
		</div>
		<div class="cnb">
			<a href="#manageSelectedModuleSetup" class="tgAnchor"><?php echo $__Context->lang->bundle_setup ?></a>
			|
			<a href="#manageSelectedModuleAddition" class="tgAnchor"><?php echo $__Context->lang->bundle_addition_setup ?></a>
			|
			<a href="#manageSelectedModuleGrant" class="tgAnchor"><?php echo $__Context->lang->bundle_grant_setup ?></a>
		</div>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_setup.html') ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_addition_setup.html') ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.module_grant_setup.html') ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.multilang.textarea.html') ?>
	</div>
</div>
