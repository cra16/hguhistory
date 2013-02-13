<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/board/ruleset/insertBoard.xml", false, "", 0, "head", true, "") ?><form  class="form" action="./" method="post" enctype="multipart/form-data" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertBoard" />
	<input type="hidden" name="module" value="board" />
	<input type="hidden" name="act" value="procBoardAdminInsertBoard" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<?php if($__Context->mid || $__Context->module_srl){ ?><input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><?php } ?>
	<?php if($__Context->logged_info->is_admin != 'Y'){ ?><input type="hidden" name="board_name" value="<?php echo $__Context->module_info->mid ?>" /><?php } ?>
	<ul>
		<?php if($__Context->logged_info->is_admin == 'Y'){ ?><li>
			<p class="q"><label for="board_name"><?php echo $__Context->lang->mid ?></label></p>
			<p class="a"><input type="text" name="board_name" id="board_name" value="<?php echo $__Context->module_info->mid ?>" />
			<p class="desc"><?php echo $__Context->lang->about_mid ?></p>
		</li><?php } ?>
		<li>
			<p class="q"><label for="module_category_srl"><?php echo $__Context->lang->module_category ?></label></p>
			<p class="a">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_module_category ?></p>
		</li>
		<li>
			<p class="q"><label for="browser_title"><?php echo $__Context->lang->browser_title ?></label></p>
			<p class="a multiLangEdit">
				<?php $__Context->use_multilang = true ?>
				<input type="hidden" name="browser_title" value="<?php if(strpos($__Context->module_info->browser_title, '$user_lang->') === false){;
echo $__Context->module_info->browser_title;
}else{;
echo htmlspecialchars($__Context->module_info->browser_title);
} ?>" class="vLang" />
				<input type="text" id="browser_title" value="<?php echo $__Context->module_info->browser_title ?>" class="vLang" />
				<span class="desc"><a href="#langEdit" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_browser_title ?></p>
		</li>
		<li>
			<p class="q"><label for="layout_srl"><?php echo $__Context->lang->layout ?></label></p>
			<p class="a">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_layout ?></p>
		</li>
		<li>
			<p class="q"><label for="skin"><?php echo $__Context->lang->skin ?></label></p>
			<p class="a">
				<select name="skin" id="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='xe_board')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_skin ?></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->skin_fix ?></p>
			<p class="a"><input type="checkbox" name="is_skin_fix" id="is_skin_fix" value="Y"<?php if($__Context->module_info->is_skin_fix == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="is_skin_fix"><?php echo $__Context->lang->about_skin_fix ?></label></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->mobile_view ?></p>
			<p class="a"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_mobile"><?php echo $__Context->lang->about_mobile_view ?></label></p>
		</li>
		<li>
			<p class="q"><label for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label></p>
			<p class="a">
				<select name="mlayout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_layout ?></p>
		</li>
		<li>
			<p class="q"><label for="mskin"><?php echo $__Context->lang->mobile_skin ?></label></p>
			<p class="a">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='xe_board')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_skin ?></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->use_category ?></p>
			<p class="a"><input type="checkbox" name="use_category" id="use_category" value="Y"<?php if($__Context->module_info->use_category == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_category"><?php echo $__Context->lang->about_use_category ?></label></p>
		</li>
		<li>
			<p class="q"><label for="order_target"><?php echo $__Context->lang->order_target ?></label></p>
			<p class="a">
				<select name="order_target" id="order_target">
					<?php if($__Context->order_target&&count($__Context->order_target))foreach($__Context->order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->order_target== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
				</select>
			</p>
		</li>
		<li>
			<p class="q"><label for="order_type"><?php echo $__Context->lang->order_type ?></label></p>
			<p class="a">
				<select name="order_type" id="order_type">
					<option value="asc"<?php if($__Context->module_info->order_type != 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_asc ?></option>
					<option value="desc"<?php if($__Context->module_info->order_type == 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_desc ?></option>
				</select>
			</p>
		</li>
		<li>
			<p class="q"><label for="list_count"><?php echo $__Context->lang->list_count ?></label></p>
			<p class="a"><input type="text" name="list_count" id="list_count" value="<?php echo $__Context->module_info->list_count?$__Context->module_info->list_count:20 ?>" /></p>
			<p class="desc"><?php echo $__Context->lang->about_list_count ?></p>
		</li>
		<li>
			<p class="q"><label for="search_list_count"><?php echo $__Context->lang->search_list_count ?></label></p>
			<p class="a"><input type="text" name="search_list_count" id="search_list_count" value="<?php echo $__Context->module_info->search_list_count?$__Context->module_info->search_list_count:20 ?>" /></p>
			<p class="desc"><?php echo $__Context->lang->about_search_list_count ?></p>
		</li>
		<li>
			<p class="q"><label for="page_count"><?php echo $__Context->lang->page_count ?></label></p>
			<p class="a"><input type="text" name="page_count" id="page_count" value="<?php echo $__Context->module_info->page_count?$__Context->module_info->page_count:20 ?>" /></p>
			<p class="desc"><?php echo $__Context->lang->about_page_count ?></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->except_notice ?></p>
			<p class="a"><input type="checkbox" name="except_notice" id="except_notice" value="Y"<?php if($__Context->module_info->except_notice != 'N'){ ?> checked="checked"<?php } ?> /> <label for="except_notice"><?php echo $__Context->lang->about_except_notice ?></label></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->use_anonymous ?></p>
			<p class="a"><input type="checkbox" name="use_anonymous" id="use_anonymous" value="Y"<?php if($__Context->module_info->use_anonymous == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_anonymous"><?php echo $__Context->lang->about_use_anonymous ?></label></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->consultation ?></p>
			<p class="a"><input type="checkbox" name="consultation" id="consultation" value="Y"<?php if($__Context->module_info->consultation == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="consultation"><?php echo $__Context->lang->about_consultation ?></label></p>
		</li>
		<li>
			<p class="q"><?php echo $__Context->lang->status ?></p>
			<p class="a">
				<input type="hidden" name="use_status[]" value="PUBLIC" />
				<input type="checkbox" name="" value="" checked="checked" disabled="disabled" /> <?php echo $__Context->document_status_list['PUBLIC'] ?>
				<?php if($__Context->document_status_list&&count($__Context->document_status_list))foreach($__Context->document_status_list as $__Context->key=>$__Context->value){ ?>
					<?php if($__Context->key != 'PRIVATE' && $__Context->key != 'TEMP' && $__Context->key != 'PUBLIC'){ ?>
						<input type="checkbox" name="use_status[]" id="<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>"<?php if(@in_array($__Context->key, $__Context->module_info->use_status) || ($__Context->key == 'PUBLIC' && !$__Context->module_srl)){ ?> checked="checked"<?php } ?> /> <label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
					<?php } ?>
				<?php } ?>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_use_status ?></p>
		</li>
		<li>
			<p class="q"><label for="admin_mail"><?php echo $__Context->lang->admin_mail ?></label></p>
			<p class="a"><input type="text" name="admin_mail" id="admin_mail" value="<?php echo $__Context->module_info->admin_mail ?>" /></p>
			<p class="desc"><?php echo $__Context->lang->about_admin_mail ?></p>
		</li>
		<li>
			<p class="q"><label for="description"><?php echo $__Context->lang->description ?></label></p>
			<p class="a"><textarea name="description" id="description" rows="8" cols="42"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea></p>
			<p class="desc"><?php echo $__Context->lang->about_description ?></p>
		</li>
		<li>
			<p class="q"><label for="header_text"><?php echo $__Context->lang->header_text ?></label></p>
			<p class="a multiLangEdit">
				<?php $__Context->use_multilang_textarea = true ?>
				<input type="hidden" name="header_text" value="<?php echo htmlspecialchars($__Context->module_info->header_text) ?>" class="vLang" />
				<textarea id="header_text" class="vLang" rows="8" cols="42"><?php echo $__Context->module_info->header_text ?></textarea>
				<span class="desc"><a href="#langEditTextarea" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_header_text ?></p>
		</li>
		<li>
			<p class="q"><label for="footer_text"><?php echo $__Context->lang->footer_text ?></label></p>
			<p class="a multiLangEdit">
				<input type="hidden" name="footer_text" value="<?php echo htmlspecialchars($__Context->module_info->footer_text) ?>" class="vLang" />
				<textarea id="footer_text" class="vLang" rows="8" cols="42"><?php echo $__Context->module_info->footer_text ?></textarea>
				<span class="desc"><a href="#langEditTextarea" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
			</p>
			<p class="desc"><?php echo $__Context->lang->about_footer_text ?></p>
		</li>
	</ul>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
	</div>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.multilang.html') ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.multilang.textarea.html') ?>
</form>
