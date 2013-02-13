<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/tpl/filter','insert_editor_module_config.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/editor/tpl/js/editor_module_config.js--><?php $__tmp=array('modules/editor/tpl/js/editor_module_config.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<form action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="procEditorInsertModuleConfig" />
	<input type="hidden" name="module" value="editor" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
    <h3 class="h3"><?php echo $__Context->lang->editor ?></h3>
    <div class="table">
		<table width="100%" border="1" cellspacing="0">
			<thead>
			<tr>
				<th scope="col">&nbsp;</th>
				<th scope="col"><?php echo $__Context->lang->document ?></th>
				<th scope="col"><?php echo $__Context->lang->comment ?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->editor_skin ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_editor_skin ?></td>
			</tr>
			<tr>
				<td>
					<select name="editor_skin" onchange="getEditorSkinColorList(this.value, null, 'document')">
					<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?>
					<option value="<?php echo $__Context->editor ?>" <?php if($__Context->editor==$__Context->editor_config->editor_skin){ ?>selected="selected"<?php } ?>><?php echo $__Context->editor ?></option>
					<?php } ?>
					</select>
					<br/>
					<select name="sel_editor_colorset" id="sel_editor_colorset"<?php if(!count($__Context->editor_colorset_list)){ ?> style="display:none"<?php } ?>>
						<?php if($__Context->editor_colorset_list&&count($__Context->editor_colorset_list))foreach($__Context->editor_colorset_list as $__Context->key => $__Context->val){ ?>
							<option value="<?php echo $__Context->val->name ?>" <?php if($__Context->editor_config->sel_editor_colorset == $__Context->val->name){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<select name="comment_editor_skin" onchange="getEditorSkinColorList(this.value, null, 'comment')">
					<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?>
					<option value="<?php echo $__Context->editor ?>" <?php if($__Context->editor==$__Context->editor_config->comment_editor_skin){ ?>selected="selected"<?php } ?>><?php echo $__Context->editor ?></option>
					<?php } ?>
					</select>
					<br/>
					<select name="sel_comment_editor_colorset" id="sel_comment_editor_colorset"<?php if(!count($__Context->editor_comment_colorset_list)){ ?> style="display:none"<?php } ?>>
						<?php if($__Context->editor_comment_colorset_list&&count($__Context->editor_comment_colorset_list))foreach($__Context->editor_comment_colorset_list as $__Context->key => $__Context->val){ ?>
							<option value="<?php echo $__Context->val->name ?>" <?php if($__Context->editor_config->sel_comment_editor_colorset == $__Context->val->name){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->content_style ?></th>
				<td colspan="2"><p><?php echo $__Context->lang->about_content_style ?></p></td>
			</tr>
			<tr>
				<td>
					<select name="content_style">
					<?php if($__Context->content_style_list&&count($__Context->content_style_list))foreach($__Context->content_style_list as $__Context->key => $__Context->val){ ?>
					<option value="<?php echo $__Context->key ?>" <?php if($__Context->key==$__Context->editor_config->content_style||!$__Context->editor_config->content_style&&$__Context->key=='default'){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
					<?php } ?>
					</select>
				</td>
				<td>
					<select name="comment_content_style">
					<?php if($__Context->content_style_list&&count($__Context->content_style_list))foreach($__Context->content_style_list as $__Context->key => $__Context->val){ ?>
					<option value="<?php echo $__Context->key ?>" <?php if($__Context->key==$__Context->editor_config->comment_content_style||!$__Context->editor_config->comment_content_style&&$__Context->key=='default'){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><label for="content_font"><?php echo $__Context->lang->content_font ?></label></th>
				<td colspan="2"><?php echo $__Context->lang->about_content_font ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="content_font" id="content_font" value="<?php echo str_replace(array('"','\''),'',$__Context->editor_config->content_font) ?>" />
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><label for="content_font_size"><?php echo $__Context->lang->content_font_size ?></label></th>
				<td colspan="2"><?php echo $__Context->lang->about_content_font_size ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="content_font_size" id="content_font_size" value="<?php echo $__Context->editor_config->content_font_size ?>" style="width:50px" />
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->editor_height ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_editor_height ?></td>
			</tr>
			<tr>
				<td>
					<input type="text" name="editor_height" value="<?php echo $__Context->editor_config->editor_height ?>" style="width:30px" /> px
				</td>
				<td>
					<input type="text" name="comment_editor_height" value="<?php echo $__Context->editor_config->comment_editor_height ?>" style="width:30px" /> px
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->enable_autosave ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_enable_autosave ?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" value="Y" name="enable_autosave" <?php if($__Context->editor_config->enable_autosave=='Y'){ ?>checked="checked"<?php } ?>/></td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->enable_html_grant ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_enable_html_grant ?></td>
			</tr>
			<tr>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_html_grant[]" value="<?php echo $__Context->k ?>" id="enable_html_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_html_grant)){ ?>checked="checked"<?php } ?>/> <label for="enable_html_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_comment_html_grant[]" value="<?php echo $__Context->k ?>" id="enable_comment_html_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_html_grant)){ ?>checked="checked"<?php } ?>/> <label for="enable_comment_html_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->upload_file_grant ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_upload_file_grant ?></td>
			</tr>
			<tr>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="upload_file_grant[]" value="<?php echo $__Context->k ?>" id="fileupload_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->upload_file_grant)){ ?>checked="checked"<?php } ?>/> <label for="fileupload_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="comment_upload_file_grant[]" value="<?php echo $__Context->k ?>" id="comment_fileupload_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->comment_upload_file_grant)){ ?>checked="checked"<?php } ?>/> <label for="comment_fileupload_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->enable_default_component_grant ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_default_component_grant ?></td>
			</tr>
			<tr>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_default_component_grant[]" value="<?php echo $__Context->k ?>" id="default_componen_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_default_component_grant)){ ?>checked="checked"<?php } ?>/> <label for="default_componen_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_comment_default_component_grant[]" value="<?php echo $__Context->k ?>" id="comment_default_component_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_default_component_grant)){ ?>checked="checked"<?php } ?>/> <label for="comment_default_component_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<th rowspan="2" scope="row"><?php echo $__Context->lang->enable_component_grant ?></th>
				<td colspan="2"><?php echo $__Context->lang->about_component_grant ?></td>
			</tr>
			<tr>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_component_grant[]" value="<?php echo $__Context->k ?>" id="componen_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_component_grant)){ ?>checked="checked"<?php } ?>/> <label for="componen_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k => $__Context->v){ ?>
					<input type="checkbox" name="enable_comment_component_grant[]" value="<?php echo $__Context->k ?>" id="comment_component_<?php echo $__Context->k ?>" <?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_component_grant)){ ?>checked="checked"<?php } ?>/> <label for="comment_component_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					<?php } ?>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
    <div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/></span>
	</div>
</form>
