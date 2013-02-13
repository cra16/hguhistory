<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','insert_document_module_config.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="document" />
<input type="hidden" name="act" value="procDocumentInsertModuleConfig" />
<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
    <h3 class="h3"><?php echo $__Context->lang->document ?></h3>
    <div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>    
				<th scope="row"><label for="use_history"><?php echo $__Context->lang->history ?></label></th>
				<td class="text">
					<select name="use_history" id="use_history">
						<option value="N"<?php if($__Context->document_config->use_history=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
						<option value="Y"<?php if($__Context->document_config->use_history=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="Trace"<?php if($__Context->document_config->use_history=='Trace'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->trace_only ?></option>
					</select>
					<span class="desc"><?php echo $__Context->lang->about_use_history ?></span>
				</td>
			</tr>
			<tr>    
				<th scope="row"><label for="use_vote_up"><?php echo $__Context->lang->cmd_vote ?></label></th>
				<td class="text">
					<select name="use_vote_up" id="use_vote_up">
						<option value="Y"<?php if($__Context->document_config->use_vote_up=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="S"<?php if($__Context->document_config->use_vote_up=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
						<option value="N"<?php if($__Context->document_config->use_vote_up=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					</select>
				</td>
			</tr>
			<tr>    
				<th scope="row"><label for="use_vote_down"><?php echo $__Context->lang->cmd_vote_down ?></label></th>
				<td class="text">
					<select name="use_vote_down" id="use_vote_down">
						<option value="Y"<?php if($__Context->document_config->use_vote_down=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="S"<?php if($__Context->document_config->use_vote_down=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
						<option value="N"<?php if($__Context->document_config->use_vote_down=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					</select>
				</td>
			</tr>
		</table>
	</div>
    <div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/></span>
	</div>
</form>
