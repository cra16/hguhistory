<?php if(!defined("__XE__"))exit;?><form action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="trackback" />
<input type="hidden" name="act" value="procTrackbackAdminInsertModuleConfig" />
<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
<input type="hidden" name="target_module_srl" value="<?php echo $__Context->trackback_config->module_srl?$__Context->trackback_config->module_srl:$__Context->module_srls ?>" />
    <h3 class="h3"><?php echo $__Context->lang->trackback ?></h3>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>
				<th scope="row"><label for="enable_trackback"><?php echo $__Context->lang->enable_trackback ?></label></th>
				<td class="text"><input type="checkbox" name="enable_trackback" id="enable_trackback" value="Y" <?php if($__Context->trackback_config->enable_trackback == "Y"){ ?>checked="checked"<?php } ?> /></td>
			</tr>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/></span>
	</div>
</form>
