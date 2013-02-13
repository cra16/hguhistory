<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/member_admin_config.js--><?php $__tmp=array('modules/member/tpl/js/member_admin_config.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor_module_config.js--><?php $__tmp=array('modules/editor/tpl/js/editor_module_config.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
	xe.lang.msg_delete_extend_form = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
	xe.lang.cmd_delete = '<?php echo $__Context->lang->cmd_delete ?>';
	xe.lang.msg_null_prohibited_id = '<?php echo $__Context->lang->msg_null_prohibited_id ?>';
	xe.lang.msg_null_prohibited_nick_name = '<?php echo $__Context->lang->msg_null_prohibited_nick_name ?>';
	xe.lang.msg_exists_user_id= '<?php echo $__Context->lang->msg_exists_user_id ?>';
</script>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/insertConfig.xml", false, "", 0, "head", true, "") ?><form action="./" class="form"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
<input type="hidden" name="module" value="member" />
<input type="hidden" name="act" value="procMemberAdminInsertConfig" />
<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', $__Context->act) ?>" />
<input type="hidden" name="agreement" value="<?php echo $__Context->config->agreement ?>" />
	<h1 class="h1"><?php echo $__Context->lang->cmd_member_config ?></h1>
	<fieldset class="section suSetting">
		<h2 class="h2"><?php echo $__Context->lang->cmd_module_config ?></h2>
		<ul>
			<li>
				<p class="q"><?php echo $__Context->lang->enable_join ?></p>
				<p class="a">
					<input type="radio" name="enable_join" id="enable_join_yes" value="Y"<?php if($__Context->config->enable_join == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="enable_join_yes"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="enable_join" id="enable_join_no" value="N"<?php if($__Context->config->enable_join != 'Y'){ ?> checked="checked"<?php } ?> /> <label for="enable_join_no"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->enable_confirm ?></p>
				<p class="a">
					<input type="radio" name="enable_confirm" id="enable_confirm_yes" value="Y"<?php if($__Context->config->enable_confirm == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="enable_confirm_yes"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="enable_confirm" id="enable_confirm_no" value="N"<?php if($__Context->config->enable_confirm != 'Y'){ ?> checked="checked"<?php } ?>/> <label for="enable_confirm_no"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for="webmaster_name"><?php echo $__Context->lang->webmaster_name ?></label></p>
				<p class="a">
					<input type="text" id="webmaster_name" name="webmaster_name" value="<?php echo $__Context->config->webmaster_name ?>" size="20" /></p>
				<p class="desc"><?php echo $__Context->lang->about_webmaster_name ?></p>
			</li>
			<li>
				<p class="q"><label for="webmaster_email"><?php echo $__Context->lang->webmaster_email ?></label></p>
				<p class="a">
					<input type="text" id="webmaster_email" name="webmaster_email" value="<?php echo $__Context->config->webmaster_email ?>" size="40" /></p>
				<p class="desc"><?php echo $__Context->lang->about_webmaster_email ?></p>
			</li>
			<li>
				<p class="q"><label for="limit_day"><?php echo $__Context->lang->limit_day ?></label></p>
				<p class="a"><input type="text" id="limit_day" name="limit_day" value="<?php echo $__Context->config->limit_day ?>" style="width:30px" /><span class="desc"><?php echo $__Context->lang->unit_day ?>(<?php echo $__Context->lang->about_limit_day ?>)</span></p>
			</li>
			<li>
				<p class="q"><label for="change_password_date"><?php echo $__Context->lang->change_password_date ?></label></p>
				<p class="a"><input type="text" id="change_password_date" name="change_password_date" value="<?php echo $__Context->config->change_password_date ?>" style="width:30px" /><span class="desc"><?php echo $__Context->lang->unit_day ?>(<?php echo $__Context->lang->about_change_password_date ?>)</span></p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->enable_login_fail_report ?></p>
				<p class="a">
					<input type="radio" name="enable_login_fail_report" id="enable_login_fail_report_yes" value="Y"<?php if($__Context->config->enable_login_fail_report != 'N'){ ?> checked="checked"<?php } ?> /><label for="enable_login_fail_report_yes"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="enable_login_fail_report" id="enable_login_fail_report_no" value="N"<?php if($__Context->config->enable_login_fail_report == 'N'){ ?> checked="checked"<?php } ?> /><label for="enable_join_no"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for="max_error_count"><?php echo $__Context->lang->login_trial_limit1 ?></label></p>
				<p class="a"><input type="text" id="max_error_count" name="max_error_count" value="<?php echo $__Context->config->max_error_count ?>" style="width:30px" /><span class="desc"><?php echo $__Context->lang->about_login_trial_limit1 ?></span></p>
			</li>
			<li>
				<p class="q"><label for="max_error_count_time"><?php echo $__Context->lang->login_trial_limit2 ?></label></p>
				<input type="text" id="max_error_count_time" name="max_error_count_time" value="<?php echo $__Context->config->max_error_count_time ?>" style="width:30px" /><span class="desc"><?php echo $__Context->lang->unit_sec ?>(<?php echo $__Context->lang->about_login_trial_limit2 ?>)</span></p>
			</li>
			<li>
				<p class="q"><label for="agreement"><?php echo $__Context->lang->agreement ?></label></p>
				<p class="a"><?php echo $__Context->editor ?></p>
			</li>
			<li>
				<p class="q"><label for="after_login_url"><?php echo $__Context->lang->after_login_url ?></label></p>
				<p class="a">
					<input type="text" id="after_login_url" name="after_login_url" value="<?php echo $__Context->config->after_login_url ?>" /></p>
				<p class="desc"><?php echo $__Context->lang->about_after_login_url ?></p>
			</li>
			<li>
				<p class="q"><label for="after_logout_url"><?php echo $__Context->lang->after_logout_url ?></label></p>
				<p class="a">
					<input type="text" id="after_logout_url" name="after_logout_url" value="<?php echo $__Context->config->after_logout_url ?>" /></p>
				<p class="desc"><?php echo $__Context->lang->about_after_logout_url ?></p>
			</li>
			<li>
				<p class="q"><label for="redirect_url"><?php echo $__Context->lang->redirect_url ?></label></p>
				<p class="a">
					<input type="text" id="redirect_url" name="redirect_url" value="<?php echo $__Context->config->redirect_url ?>" /></p>
				<p class="desc"><?php echo $__Context->lang->about_redirect_url ?></p>
			</li>
			<li>
				<p class="q"><label for="layout"><?php echo $__Context->lang->layout ?></label></p>
				<p class="a">
				<select id="layout" name="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->val->layout_srl == $__Context->config->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				</p>
			</li>
			<li>
				<p class="q"><label for="skin"><?php echo $__Context->lang->skin ?></label></p>
				<p class="a">
					<select id="skin" name="skin" onchange="doGetSkinColorset(this.options[this.selectedIndex].value)">
						<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
					</select>
				</p>
			</li>
			<li id="colorset"<?php if(!$__Context->config->colorset){ ?> style="display:none"<?php } ?>>
				<p class="q"><label for="member_colorset"><?php echo $__Context->lang->colorset ?></label></p>
				<p class="a"><div id="member_colorset"></div></p>
			</li>
			<li>
				<p class="q"><label for="mlayout"><?php echo $__Context->lang->mobile_layout ?></label></p>
				<p class="a">
				<select id="mlayout" name="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->val->layout_srl == $__Context->config->mlayout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				</p>
			</li>
			<li>
				<p class="q"><label for="mskin"><?php echo $__Context->lang->mobile_skin ?></label></p>
				<p class="a">
					<select id="mskin" name="mskin">
						<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->mskin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
					</select>
				</p>
			</li>
			<li>
				<p class="q"><label for="prohibited_nick_name"><?php echo $__Context->lang->cmd_manage_nick_name ?>(<?php echo sprintf($__Context->lang->count_manage_nick_name, count($__Context->deniedNickNames)) ?>)</label></p>
				<div class="a">
					<ul class="textList" id="deniedNickNameList">
						<?php if($__Context->deniedNickNames&&count($__Context->deniedNickNames))foreach($__Context->deniedNickNames as $__Context->nicknameInfo){ ?><li id="denied_<?php echo $__Context->nicknameInfo->nick_name ?>"><?php echo $__Context->nicknameInfo->nick_name ?> <a href="#" class="side" onclick="doUpdateDeniedNickName('<?php echo $__Context->nicknameInfo->nick_name ?>','delete','<?php echo $__Context->lang->confirm_delete ?>');return false;"><?php echo $__Context->lang->delete ?></a></li><?php } ?>
					</ul>
				</div>
				<div class="a">
					<textarea rows="8" cols="42" id="prohibited_nick_name" title="<?php echo $__Context->lang->add_prohibited_id ?>"></textarea>
					<span class="btn"><button type="button" class="_addDeniedNickName"><?php echo $__Context->lang->add ?></button></span>
					<span class="desc"><?php echo $__Context->lang->multi_line_input ?></span>
				</div>
			</li>
			<?php if($__Context->useUserID){ ?><li>
				<p class="q"><label for="prohibited_id"><?php echo $__Context->lang->cmd_manage_id ?>(<?php echo sprintf($__Context->lang->count_manage_id, count($__Context->deniedIDs)) ?>)</label></p>
				<div class="a">
					<ul class="textList" id="deniedList">
						<?php if($__Context->deniedIDs&&count($__Context->deniedIDs))foreach($__Context->deniedIDs as $__Context->denied_info){ ?><li id="denied_<?php echo $__Context->denied_info->user_id ?>"><?php echo $__Context->denied_info->user_id ?> <a href="#" class="side" onclick="doUpdateDeniedID('<?php echo $__Context->denied_info->user_id ?>','delete','<?php echo $__Context->lang->confirm_delete ?>');return false;"><?php echo $__Context->lang->delete ?></a></li><?php } ?>
					</ul>
				</div>
				<div class="a">
					<textarea rows="8" cols="42" id="prohibited_id" title="<?php echo $__Context->lang->add_prohibited_id ?>"></textarea>
					<span class="btn"><button type="button" class="_addDeniedID"><?php echo $__Context->lang->add ?></button></span>
					<span class="desc"><?php echo $__Context->lang->multi_line_input ?></span>
				</div>
			</li><?php } ?>
		</ul>
	</fieldset>
	<fieldset class="section suForm">
		<h2 class="h2"><?php echo $__Context->lang->cmd_manage_form ?></h2>
		<div class="table even">
			<table width="100%" border="1" cellspacing="0" class="sortable">
				<thead>
				<tr>
					<th scope="col"><?php echo $__Context->lang->target ?></th>
					<th scope="col"><?php echo $__Context->lang->identifier ?>
						[<a href="#helpDefault" class="tgAnchor">?</a>]
						<div class="tgContent layer" id="helpDefault" style="right:0">
							<p><?php echo $__Context->lang->about_identifier ?></p>
						</div>
					</th>
					<th scope="col"><?php echo $__Context->lang->use ?></th>
					<th scope="col"><?php echo $__Context->lang->cmd_required ?>/<?php echo $__Context->lang->cmd_optional ?></th>
					<th scope="col"><?php echo $__Context->lang->public ?>
						[<a href="#helpPublic" class="tgAnchor">?</a>]
						<div class="tgContent layer" id="helpPublic" style="right:0">
							<p><?php echo $__Context->lang->about_public_item ?></p>
						</div>
					</th>
					<th scope="col" class="text"><?php echo $__Context->lang->description ?></th>
					<th scope="col"><?php echo $__Context->lang->cmd_edit ?></th>
				</thead>
				<tbody class="uDrag">
<?php $__Context->fixed_public_list = array('nick_name', 'find_account_question', 'password') ?>
					<?php if($__Context->config->signupForm&&count($__Context->config->signupForm))foreach($__Context->config->signupForm as $__Context->item){ ?>
					<?php if($__Context->item->isIdentifier){ ?>
					<tr class="sticky">
						<input type="hidden" name="list_order[]" value="<?php echo $__Context->item->name ?>" />
						<input type="hidden" name="usable_list[]" value="<?php echo $__Context->item->name ?>"/>
						<input type="hidden" name="<?php echo $__Context->item->name ?>" value="requierd"/>
						<th scope="row">
							<span class="_title" style="padding-left:20px"><?php echo $__Context->item->title ?></span>
						</th>
						<td><input type="radio" name="identifier" value="<?php echo $__Context->item->name ?>" checked="checked" /></td>
						<td><input type="checkbox" name="usable_list[]" value="<?php echo $__Context->item->name ?>" title="<?php echo $__Context->lang->use ?>" checked="checked"  disabled="disabled" /></td>
						<td class="nowr">
							<input type="radio" id="<?php echo $__Context->item->name ?>_re" name="<?php echo $__Context->item->name ?>" value="requierd" checked="checked" disabled="disabled" /> <label for="<?php echo $__Context->item->name ?>_re"><?php echo $__Context->lang->cmd_required ?></label>
							<input type="radio" id="<?php echo $__Context->item->name ?>_op" name="<?php echo $__Context->item->name ?>" value="option" disabled="disabled" /> <label for="<?php echo $__Context->item->name ?>_op"><?php echo $__Context->lang->cmd_optional ?></label>
						</td>
						<td><input type="checkbox" name="is_<?php echo $__Context->item->name ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php } ?>/></td>
						<td class="text">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<?php }elseif($__Context->item->isDefaultForm){ ?>
					<tr<?php if($__Context->item->imageType){ ?> class="_imageType"<?php } ?>>
						<input type="hidden" name="list_order[]" value="<?php echo $__Context->item->name ?>" />
						<?php if($__Context->item->mustRequired){ ?><input type="hidden" name="usable_list[]" value="<?php echo $__Context->item->name ?>"/><?php } ?>
						<?php if($__Context->item->mustRequired){ ?><input type="hidden" name="<?php echo $__Context->item->name ?>" value="requierd"/><?php } ?>
						<th scope="row">
							<div class="wrap">
								<button type="button" class="dragBtn">Move to</button>
								<span class="_title"><?php echo $__Context->item->title ?></span>
							</div>
						</th>
						<td><?php if($__Context->item->name== 'email_address' || $__Context->item->name=='user_id'){ ?><input type="radio" name="identifier" value="<?php echo $__Context->item->name ?>" /><?php } ?></td>
						<td><input type="checkbox" name="usable_list[]" value="<?php echo $__Context->item->name ?>" title="<?php echo $__Context->lang->use ?>"<?php if($__Context->item->mustRequired || $__Context->item->isUse){ ?> checked="checked"<?php };
if($__Context->item->mustRequired){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="nowr">
							<input type="radio" id="<?php echo $__Context->item->name ?>_re" name="<?php echo $__Context->item->name ?>" value="required"<?php if($__Context->item->mustRequired || $__Context->item->required){ ?> checked="checked"<?php };
if($__Context->item->mustRequired || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <label for="<?php echo $__Context->item->name ?>_re"><?php echo $__Context->lang->cmd_required ?></label>
							<input type="radio" id="<?php echo $__Context->item->name ?>_op" name="<?php echo $__Context->item->name ?>" value="option"<?php if(!$__Context->item->mustRequired && ($__Context->item->isUse && !$__Context->item->required)){ ?> checked="checked"<?php };
if($__Context->item->mustRequired || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <label for="<?php echo $__Context->item->name ?>_op"><?php echo $__Context->lang->cmd_optional ?></label>
							<?php if($__Context->item->imageType){ ?><div class="_subItem">
								<label for="<?php echo $__Context->item->name ?>_max_width"><?php echo $__Context->lang->cmd_image_max_width ?></label><input type="text" name="<?php echo $__Context->item->name ?>_max_width" id="<?php echo $__Context->item->name ?>_max_width" value="<?php echo $__Context->item->max_width ?>" style="width:30px" /> px
								/
								<label for="<?php echo $__Context->item->name ?>_max_height"><?php echo $__Context->lang->cmd_image_max_height ?></label><input type="text" name="<?php echo $__Context->item->name ?>_max_height" id="<?php echo $__Context->item->name ?>_max_height" value="<?php echo $__Context->item->max_height ?>" style="width:30px" /> px
							</div><?php } ?>
							<?php if($__Context->item->name == 'signature'){ ?><div style="padding-top:10px">
								<select id="signature_editor" name="signature_editor_skin" onchange="getEditorSkinColorList(this.value)">
								<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor_skin){ ?>
								<option value="<?php echo $__Context->editor_skin ?>"<?php if($__Context->editor_skin==$__Context->config->signature_editor_skin){ ?> selected="selected"<?php } ?>><?php echo $__Context->editor_skin ?></option>
								<?php } ?>
								</select>
								<select name="sel_editor_colorset" id="sel_editor_colorset" style="display:none">
								</select>
								<script type="text/javascript">//<![CDATA[
									getEditorSkinColorList('<?php echo $__Context->config->signature_editor_skin ?>','<?php echo $__Context->config->sel_editor_colorset ?>');
								//]]></script>
							</div><?php } ?>
						</td>
						<td><input type="checkbox" name="is_<?php echo $__Context->item->name ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php };
if(in_array($__Context->item->name, $__Context->fixed_public_list) || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="text">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<?php }else{ ?>
					<tr>
						<input type="hidden" name="list_order[]" value="<?php echo $__Context->item->name ?>" />
						<input type="hidden" name="<?php echo $__Context->item->name ?>_member_join_form_srl" value="<?php echo $__Context->item->member_join_form_srl ?>" />
						<th scope="row">
							<div class="wrap">
								<button type="button" class="dragBtn">Move to</button>
								<span class="_title"><?php echo $__Context->item->title ?></span>
							</div>
						</th>
						<td></td>
						<td><input type="checkbox" name="usable_list[]" value="<?php echo $__Context->item->name ?>" title="<?php echo $__Context->lang->use ?>"<?php if($__Context->item->isUse){ ?> checked="checked"<?php } ?> /></td>
						<td class="nowr">
							<input type="radio" id="<?php echo $__Context->item->name ?>_re" name="<?php echo $__Context->item->name ?>" value="required"<?php if($__Context->item->required){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?>/> <label for="<?php echo $__Context->item->name ?>_re"><?php echo $__Context->lang->cmd_required ?></label>
							<input type="radio" id="<?php echo $__Context->item->name ?>_op" name="<?php echo $__Context->item->name ?>" value="option"<?php if($__Context->item->isUse && !$__Context->item->required){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <label for="<?php echo $__Context->item->name ?>_op"><?php echo $__Context->lang->cmd_optional ?></label>
						</td>
						<td><input type="checkbox" name="is_<?php echo $__Context->item->name ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="text"><?php echo $__Context->item->description ?></td>
						<td id="<?php echo $__Context->item->member_join_form_srl ?>" class="nowr"><a href="#userDefine" class="modalAnchor _extendFormEdit"><?php echo $__Context->lang->cmd_edit ?></a> | <a href="#" class="_extendFormDelete"><?php echo $__Context->lang->cmd_delete ?></a></td>
					</tr>
					<?php } ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<p class="btnArea">
			<span class="btn small"><a href="#userDefine" class="modalAnchor _extendFormEdit"><?php echo $__Context->lang->add_extend_form ?>...</a></span>
		</p>
	</fieldset>
	<div class="btnArea">
		<span class="btn medium"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<h2 class="h2"><?php echo $__Context->lang->cmd_member_sync ?></h2>
<div class="form">
	<span class="btn small"><input type="button" value="<?php echo $__Context->lang->cmd_member_sync ?>" class="__sync" /></span>
	<p class="description"><?php echo $__Context->lang->about_member_sync ?></p>
</div>
<div class="modal" id="userDefine">
	<?php Context::addJsFile("modules/member/ruleset/insertJoinForm.xml", false, "", 0, "head", true, "") ?><form action="./" class="fg form"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertJoinForm" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="act" value="procMemberAdminInsertJoinForm" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', $__Context->act) ?>" />
		<div id="extendForm">
		</div>
	</form>
</div>
