<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/comment/ruleset/insertCommentModuleConfig.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertCommentModuleConfig" />
	<input type="hidden" name="module" value="comment" />
	<input type="hidden" name="act" value="procCommentInsertModuleConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
    <h3 class="h3"><?php echo $__Context->lang->comment ?></h3>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>    
				<th scope="row"><label for="comment_count"><?php echo $__Context->lang->comment_count ?></label></th>
				<td class="text">
					<input type="text" name="comment_count" id="comment_count" value="<?php echo $__Context->comment_config->comment_count ?>" style="width:30px" />
					<span class="desc"><?php echo $__Context->lang->about_comment_count ?></span>
				</td>
			</tr>
			<tr>    
				<th scope="row"><label for="use_vote_up"><?php echo $__Context->lang->cmd_vote ?></label></th>
				<td class="text">
					<select name="use_vote_up" id="use_vote_up">
						<option value="Y"<?php if($__Context->comment_config->use_vote_up=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="S"<?php if($__Context->comment_config->use_vote_up=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
						<option value="N"<?php if($__Context->comment_config->use_vote_up=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					</select>
				</td>
			</tr>
			<tr>    
				<th scope="row"><label for="use_vote_down"><?php echo $__Context->lang->cmd_vote_down ?></label></th>
				<td class="text">
					<select name="use_vote_down" id="use_vote_down">
						<option value="Y"<?php if($__Context->comment_config->use_vote_down=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="S"<?php if($__Context->comment_config->use_vote_down=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
						<option value="N"<?php if($__Context->comment_config->use_vote_down=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					</select>
				</td>
			</tr>	
			<tr>
				<th scope="row"><label for="use_comment_validation"><?php echo $__Context->lang->cmd_comment_validation ?></label></th>
				<td>
					<select name="use_comment_validation">
						<option value="N"<?php if($__Context->comment_config->use_comment_validation=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
						<option value="Y"<?php if($__Context->comment_config->use_comment_validation=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					</select>
					<p><?php echo $__Context->lang->about_comment_validation ?></p>
				</td>
			</tr>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/></span>
	</div>
</form>
