<?php if(!defined("__XE__"))exit;?><div id="manageSelectedModuleSetup">
	<h3 class="h3"><?php echo $__Context->lang->bundle_setup ?></h3>
	<?php Context::addJsFile("modules/module/ruleset/insertModuleSetup.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form tgContent"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModuleSetup" />
		<input type="hidden" name="module" value="module" />
		<input type="hidden" name="act" value="procModuleAdminModuleSetup" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<input type="hidden" name="module_srls" value="" />
		<ul>
			<li>
				<p class="q"><label for="module_category_srl"><?php echo $__Context->lang->module_category ?></label></p>
				<p class="a">
					<select name="module_category_srl" id="module_category_srl">
						<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
						<option value="0"><?php echo $__Context->lang->notuse ?></option>
						<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key => $__Context->val){ ?>
						<option value="<?php echo $__Context->key ?>" <?php if($__Context->module_info->module_category_srl==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_module_category ?></p>
			</li>
			<li>
				<p class="q"><label for="layout_srl"><?php echo $__Context->lang->layout ?></label></p>
				<p class="a">
					<select name="layout_srl" id="layout_srl">
						<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
						<option value="0"><?php echo $__Context->lang->notuse ?></option>
						<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key => $__Context->val){ ?>
						<option value="<?php echo $__Context->val->layout_srl ?>" <?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option>
						<?php } ?>
					</select>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_layout ?></p>
			</li>
			<?php if(count($__Context->skin_list)){ ?><li>
				<p class="q"><label for="skin"><?php echo $__Context->lang->skin ?></label></p>
				<p class="a">
					<select name="skin" id="skin">
						<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
						<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?>
						<option value="<?php echo $__Context->key ?>" <?php if($__Context->module_info->skin==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
						<?php } ?>
					</select>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_skin ?></p>
			</li><?php } ?>
		<!--li>
			<p class="q"><label for="layout_srl"><?php echo $__Context->lang->mobile_view ?></label></p>
			<p class="a">
				<input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_mobile"><?php echo $__Context->lang->mobile_view ?></label>
				<input type="checkbox" name="keep_mobile_value" id="keep_mobile_value" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_mobile"><?php echo $__Context->lang->mobile_view ?></label>
			</p>
		</li-->
		<li>
			<p class="q"><label for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label></p>
			<p class="a">
				<select name="mlayout_srl" id="layout_srl">
					<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
			</p>
		</li>
		<li>
			<p class="q"><label for="mskin"><?php echo $__Context->lang->mobile_skin ?></label></p>
			<p class="a">
				<select name="mskin" id="mskin">
					<option value="" selected="selected"><?php echo $__Context->lang->keep_existing_value ?></option>
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</p>
		</li>
			<li>
				<p class="q"><label for="description"><?php echo $__Context->lang->description ?></label></p>
				<p class="a">
					<textarea name="description" id="description" rows="8" cols="42"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_description ?></p>
			</li>
			<li>
				<p class="q"><label for="header_text"><?php echo $__Context->lang->header_text ?></label></p>
				<p class="a multiLangEdit">
					<?php $__Context->use_multilang_textarea=true ?>
					<input type="hidden" name="header_text" class="vLang" />
					<textarea id="header_text" rows="8" cols="42" class="vLang"></textarea>
					<span class="desc"><a href="#langEditTextarea" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_header_text ?></p>
			</li>
			<li>
				<p class="q"><label for="footer_text"><?php echo $__Context->lang->footer_text ?></label></p>
				<p class="a multiLangEdit">
					<input type="hidden" name="footer_text" class="vLang" />
					<textarea id="footer_text" rows="8" cols="42" class="vLang"></textarea>
					<span class="desc"><a href="#langEditTextarea" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_footer_text ?></p>
			</li>
		</ul>
		<div class="btnArea">
			<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
		</div>
	</form>
</div>
