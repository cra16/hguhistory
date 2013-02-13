<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','insert_extra_var.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','delete_extra_var.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->selected_var_idx && $__Context->extra_keys[$__Context->selected_var_idx]){ ?>
    <?php  $__Context->selected_var = $__Context->extra_keys[$__Context->selected_var_idx]  ?>
<?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if($__Context->type == 'insertExtraForm' || $__Context->selected_var_idx){ ?>
    <?php Context::addJsFile("modules/document/ruleset/insertExtraVar.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertExtraVar" />
	<input type="hidden" name="module" value="document" />
    <input type="hidden" name="act" value="procDocumentAdminInsertExtraVar" />
    <input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
    <input type="hidden" name="var_idx" value="<?php echo $__Context->selected_var_idx ?>" />
    <input type="hidden" name="success_return_url" value="<?php echo getUrl('type', '') ?>" />
        <h3 class="h3"><?php echo $__Context->lang->extra_vars ?> <?php echo $__Context->selected_var_idx ?></h3>
		<div class="table">
			<table width="100%" border="1" cellspacing="0">
				<tr>
					<th><?php echo $__Context->lang->eid ?></th>
					<td >
						<input type="text" name="eid" value="<?php echo $__Context->selected_var->eid ?>" id="eid" /><p><?php echo $__Context->lang->about_extra_vars_eid_value ?></p>
					</td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->column_name ?></th>
					<td >
						<input type="text" name="name" value="<?php echo htmlspecialchars($__Context->selected_var->name) ?>" id="name" /><a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','name') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a> 
					</td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->column_type ?></th>
					<td>
						<select name="type">
							<?php if($__Context->lang->column_type_list&&count($__Context->lang->column_type_list))foreach($__Context->lang->column_type_list as $__Context->k => $__Context->v){ ?>
							<?php if($__Context->key != 'kr_zip'){ ?>
							<option value="<?php echo $__Context->k ?>" <?php if($__Context->selected_var->type==$__Context->k){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->column_type_list[$__Context->k] ?></option>
							<?php } ?>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->is_required ?></th>
					<td><input type="checkbox" name="is_required" value="Y" <?php if($__Context->selected_var->is_required=='Y'){ ?>checked="checked"<?php } ?> /></td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->default_value ?></th>
					<td><input type="text" name="default" value="<?php echo $__Context->selected_var->default ?>" /><p><?php echo $__Context->lang->about_extra_vars_default_value ?></p></td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->description ?></th>
					<td><input type="text" name="desc" value="<?php echo $__Context->selected_var->desc ?>" id="desc" /><a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','desc') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a></td>
				</tr>
				<tr>
					<th><?php echo $__Context->lang->cmd_search ?></th>
					<td><input type="checkbox" name="search" value="Y" <?php if($__Context->selected_var->search=='Y'){ ?>checked="checked"<?php } ?> /></td>
				</tr>
			</table>
		</div>
		<div class="btnArea">
			<?php if($__Context->selected_var){ ?>
			<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_modify ?>" /></span>
			<?php }else{ ?>
			<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_insert ?>" /></span>
			<?php } ?>
			<span class="btn"><a href="<?php echo getUrl('type','','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
		</div>
	</form>
<?php }else{ ?>
    <h3 class="h3"><?php echo $__Context->lang->extra_vars ?></h3>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th><?php echo $__Context->lang->no ?></th>
					<th><?php echo $__Context->lang->eid ?></th>
					<th><?php echo $__Context->lang->column_name ?></th>
					<th><?php echo $__Context->lang->column_type ?></th>
					<th><?php echo $__Context->lang->is_required ?></th>
					<th><?php echo $__Context->lang->cmd_search ?></th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key => $__Context->val){ ?>
				<tr>
					<td rowspan="3"><?php echo $__Context->val->idx ?></td>
					<td rowspan="3"><?php echo $__Context->val->eid ?></td>
					<td><b><?php echo $__Context->val->name ?></b></td>
					<td><?php echo $__Context->lang->column_type_list[$__Context->val->type] ?></td>
					<td rowspan="3"><?php if($__Context->val->is_required=='Y'){ ?><b><?php echo $__Context->lang->is_required ?></b><?php }else{ ?>N<?php } ?></td>
					<td rowspan="3"><?php if($__Context->val->search=='Y'){ ?><b><?php echo $__Context->lang->search_target ?></b><?php }else{ ?>N<?php } ?></td>
					<td rowspan="3">
						<?php if($__Context->val->idx>1){ ?><a href="#" onclick="moveVar('up','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>'); return false;" class="buttonSet buttonUp"><span><?php echo $__Context->lang->cmd_move_up ?></span></a><?php } ?>
						<?php if(count($__Context->extra_keys) > $__Context->val->idx){ ?><a href="#" onclick="moveVar('down','<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>');return false;" class="buttonSet buttonDown"><?php echo $__Context->lang->cmd_move_down ?></a><?php } ?>
						<a href="<?php echo getUrl('selected_var_idx',$__Context->val->idx) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_modify ?>...</span></a>
						<a href="#" onclick="return doDeleteExtraKey('<?php echo $__Context->module_srl ?>','<?php echo $__Context->val->idx ?>');" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
					</td>
				</tr>
				<tr>
					<td><?php echo $__Context->lang->default_value ?></td>
					<td ><?php echo $__Context->val->default ?>&nbsp;</td>
				</tr>
				<tr>
					<td><?php echo $__Context->lang->description ?></td>
					<td ><?php echo $__Context->val->desc ?>&nbsp;</td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
	</div>
	<div class="btnArea">
		<span class="btn"><a href="<?php echo getUrl('type','insertExtraForm','selected_var_idx','') ?>"><?php echo $__Context->lang->cmd_insert ?></a></span>
	</div>
<?php } ?>
<form id="fo_delete" name="fo_delete" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module_srl" value="" />
<input type="hidden" name="var_idx" value="" />
</form>
