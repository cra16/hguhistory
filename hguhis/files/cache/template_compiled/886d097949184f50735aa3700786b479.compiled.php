<?php if(!defined("__XE__"))exit;?><!-- JeeHye -->
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/hiswiki/tpl/filter','admin_delete.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/tpl','header.html') ?>
<!--#Meta:modules/hiswiki/tpl/js/hiswiki_admin.js--><?php $__tmp=array('modules/hiswiki/tpl/js/hiswiki_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<form action="./" method="get" onsubmit="return procFilter(this, admin_delete)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
    <h2 class="h2"><?php echo $__Context->lang->confirm_delete ?></h2>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
		<tr>
			<th scope="row"><?php echo $__Context->lang->module_name ?></th>
			<td ><?php echo $__Context->module_info->mid ?></td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->module ?></th>
			<td><?php echo $__Context->module_info->module ?></td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->document_count ?></th>
			<td><?php echo $__Context->module_info->document_count ?></td>
		</tr>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span>
	</div>
</form>