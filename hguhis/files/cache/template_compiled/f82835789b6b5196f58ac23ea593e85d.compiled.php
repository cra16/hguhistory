<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/file/ruleset/fileModuleConfig.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="fileModuleConfig" />
	<input type="hidden" name="module" value="file" />
	<input type="hidden" name="act" value="procFileAdminInsertModuleConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
    <h3 class="h3"><?php echo $__Context->lang->file ?></h3>
    <div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>
			<th scope="row"><label for="allowed_filesize"><?php echo $__Context->lang->allowed_filesize ?></label></th>
			<td class="text">
				<input type="text" name="allowed_filesize" id="allowed_filesize" value="<?php echo $__Context->file_config->allowed_filesize ?>"  size="3" style="width:30px" /> MB
				<p class="desc"><?php echo $__Context->lang->about_allowed_filesize ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for="allowed_attach_size"><?php echo $__Context->lang->allowed_attach_size ?></label></th>
			<td class="text">
				<input type="text" name="allowed_attach_size" id="allowed_attach_size" value="<?php echo $__Context->file_config->allowed_attach_size ?>" size="3" style="width:30px" /> MB
				/ <?php echo ini_get('upload_max_filesize') ?>
				<p class="desc"><?php echo $__Context->lang->about_allowed_attach_size ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for="allowed_filetypes"><?php echo $__Context->lang->allowed_filetypes ?></label></th>
			<td class="text">
				<input type="text" name="allowed_filetypes" id="allowed_filetypes" value="<?php echo $__Context->file_config->allowed_filetypes ?>" />
				<p class="desc"><?php echo $__Context->lang->about_allowed_filetypes ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->enable_download_group ?></th>
			<td class="text">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
				<input type="checkbox" class="checkbox" name="download_grant[]" value="<?php echo $__Context->v->group_srl ?>" id="grant_<?php echo $__Context->key ?>_<?php echo $__Context->v->group_srl ?>" <?php if(in_array($__Context->v->group_srl, $__Context->file_config->download_grant)){ ?>checked="checked"<?php } ?>/> 
				<label for="grant_<?php echo $__Context->key ?>_<?php echo $__Context->v->group_srl ?>"><?php echo $__Context->v->title ?></label>
				&nbsp;
				<?php } ?>
			</td>
		</tr>
		</table>
	</div>
    <div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
