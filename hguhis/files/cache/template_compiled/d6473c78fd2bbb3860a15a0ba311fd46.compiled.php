<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/point/tpl/filter','insert_point_module_config.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/point/tpl/js/point_admin.js--><?php $__tmp=array('modules/point/tpl/js/point_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<form action="./" method="post" id="fo_point" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="point" />
	<input type="hidden" name="act" value="procPointAdminInsertPointModuleConfig" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_config['module_srl']?$__Context->module_config['module_srl']:$__Context->module_srls ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	
	<h3 class="h3"><?php echo $__Context->lang->point ?></h3>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>
				<th scope="row"><label for="insert_document"><?php echo $__Context->lang->point_insert_document ?></label></th>
				<td class="text"><input type="text" name="insert_document" id="insert_document" value="<?php echo $__Context->module_config['insert_document'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="insert_comment"><?php echo $__Context->lang->point_insert_comment ?></label></th>
				<td class="text"><input type="text" name="insert_comment" id="insert_comment" value="<?php echo $__Context->module_config['insert_comment'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="upload_file"><?php echo $__Context->lang->point_upload_file ?></label></th>
				<td class="text"><input type="text" name="upload_file" id="upload_file" value="<?php echo $__Context->module_config['upload_file'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="download_file"><?php echo $__Context->lang->point_download_file ?></label></th>
				<td class="text"><input type="text" name="download_file" id="download_file" value="<?php echo $__Context->module_config['download_file'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="read_document"><?php echo $__Context->lang->point_read_document ?></label></th>
				<td class="text"><input type="text" name="read_document" id="read_document" value="<?php echo $__Context->module_config['read_document'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="voted"><?php echo $__Context->lang->point_voted ?></label></th>
				<td class="text"><input type="text" name="voted" id="voted" value="<?php echo $__Context->module_config['voted'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
			<tr>
				<th scope="row"><label for="blamed"><?php echo $__Context->lang->point_blamed ?></label></th>
				<td class="text"><input type="text" name="blamed" id="blamed" value="<?php echo $__Context->module_config['blamed'] ?>" style="width:30px" /> <?php echo $__Context->module_config['point_name'] ?></td>
			</tr>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		<span class="btn"><button type="button" onclick="doPointReset('<?php echo $__Context->module_config['module_srl']?$__Context->module_config['module_srl']:$__Context->module_srls ?>')"><?php echo $__Context->lang->cmd_reset ?></button></span>
	</div>
	
	<!-- 버튼 -->
	
</form>
