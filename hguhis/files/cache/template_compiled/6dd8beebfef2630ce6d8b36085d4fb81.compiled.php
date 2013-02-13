<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
xe.lang.confirm_delete = "<?php echo $__Context->lang->confirm_delete ?>";
xe.current_layout = <?php echo $__Context->current_layout ?>;
jQuery( function() { jQuery('.grant_default').change( function(event) { doShowMenuGrantZone(); } ); doShowMenuGrantZone() } );
</script>
<!--#Meta:modules/menu/tpl/js/menu_admin.js--><?php $__tmp=array('modules/menu/tpl/js/menu_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/js/sitemap.js--><?php $__tmp=array('modules/admin/tpl/js/sitemap.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:modules/menu/tpl/js/sitemap.js--><?php $__tmp=array('modules/menu/tpl/js/sitemap.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<h1 class="h1"><?php echo $__Context->lang->menu_gnb_sub['siteMap'] ?></h1>
<?php if($__Context->menu_list&&count($__Context->menu_list))foreach($__Context->menu_list as $__Context->key=>$__Context->value){ ?>
<?php $__Context->menuSrl = $__Context->value->menuSrl ?>
<form class="portlet siteMap" id="menu_<?php echo $__Context->menuSrl ?>" method="post" action="#menu_<?php echo $__Context->menuSrl ?>"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="procMenuAdminArrangeItem" />
<input type="hidden" name="menu_srl" value="<?php echo $__Context->menuSrl ?>" />
<input type="hidden" name="menu_item_srl" value="" />
<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', ($__Context->module ? $__Context->module : 'admin'), 'act', 'dispMenuAdminSiteMap') ?>#menuTop_<?php echo $__Context->menuSrl ?>" />
	<h2 class="h2" id="menuTop_<?php echo $__Context->menuSrl ?>"><input name="title" value="<?php echo $__Context->value->title ?>" /></h2>
	<a href="#nav_<?php echo $__Context->key ?>" class="tgMap"><?php echo $__Context->lang->collapsing ?>/<?php echo $__Context->lang->expanding ?></a>
	<?php if(count($__Context->value->menuItems->list > 0)){ ?><ul class="lined" id="nav_<?php echo $__Context->key ?>" <?php if($__Context->_COOKIE['sitemap_toggle_#nav_'.$__Context->key]){ ?>style="display:none;"<?php } ?>>
	
	<?php if($__Context->value->menuItems->list&&count($__Context->value->menuItems->list))foreach($__Context->value->menuItems->list as $__Context->key2=>$__Context->value2){ ?>
	<?php $__Context->item = $__Context->value2 ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/menu/tpl','sitemap.item.html') ?>
	<?php } ?>
	</ul><?php } ?>
	<p class="btnArea">
		<span class="btn"><a href="#editMenu" class="modalAnchor _add"><?php echo $__Context->lang->add_menu ?>...</a></span>
		<span class="btn"><button value="procMenuAdminArrangeItem" name="act" type="submit"><?php echo $__Context->lang->cmd_save ?></button></span>
		<span class="etc">
			<span class="btn"><button value="procMenuAdminDelete" name="act" type="submit" onclick="return confirmDelete();"><?php echo $__Context->lang->cmd_delete ?></button></span>
			<span class="btn"><a href="#remakeCache" onclick="doReloadTreeMenu('<?php echo $__Context->menuSrl ?>');return false;"><?php echo $__Context->lang->cmd_remake_cache ?></a></span>
		</span>
	</p>
</form>
<?php } ?>
<form action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="procMenuAdminInsert" />
<input type="hidden" name="title" value="<?php echo $__Context->lang->untitle ?>" />
<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', ($__Context->module ? $__Context->module : 'admin'), 'act', 'dispMenuAdminSiteMap') ?>" />
<div class="btnArea">
	<span class="btn medium"><button type="submit"><?php echo $__Context->lang->add_new_sitemap ?></button></span>
</div>
</form>
<div class="modal" id="editMenu">
	<div class="fg">
		<?php Context::addJsFile("modules/menu/ruleset/insertMenuItem.xml", false, "", 0, "head", true, "") ?><form  id="editForm" action="./" method="post" enctype="multipart/form-data" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertMenuItem" />
		<input type="hidden" name="module" value="menu" />
		<input type="hidden" name="act" value="procMenuAdminInsertItem" />
		<input type="hidden" name="menu_srl" value="" />
		<input type="hidden" name="menu_item_srl" value="<?php echo $__Context->menu_info->menu_srl ?>" />
		<input type="hidden" name="parent_srl" value="<?php echo $__Context->menu_info->menu_srl ?>" />
		<input type="hidden" name="module_srl" value="" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', ($__Context->module ? $__Context->module : 'admin'), 'act', 'dispMenuAdminSiteMap') ?>#menuTop_" />
		<h2 class="h2"><span><?php echo $__Context->lang->add_menu ?></span><span><?php echo $__Context->lang->edit_menu ?></span></h2>
			<ul>
				<li>
					<p class="q"><label for="name"><?php echo $__Context->lang->menu_name ?>(<?php echo $__Context->lang->browser_title ?>) <em>*</em></label></p>
					<div class="a multiLangEdit">
						<input type="hidden" class="vLang" name="menu_name_key" />
						<input type="text" class="vLang" id="name" name="menu_name" />
						<!-- Multilingual -->
						<div id="langEdit" class="langEdit tgContent">
							<ul class="langList"></ul>
							<div class="langInput">
								<h2><?php echo $__Context->lang->multilingual ?> <strong><?php echo $__Context->lang->cmd_modify ?>...</strong> | <a href="#langEdit"><?php echo $__Context->lang->cmd_insert ?></a></h2>
								<ul>
									<?php 
										/* move current language to the top */
										$__Context->a = array($__Context->lang_type=>$__Context->lang_supported[$__Context->lang_type]);
										unset($__Context->lang_supported[$__Context->lang_type]);
										$__Context->lang_supported = array_merge($__Context->a, $__Context->lang_supported);
									 ?>
									<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->code=>$__Context->name){ ?><li class="<?php echo $__Context->code ?>"><label for="<?php echo $__Context->code ?>_var1"><?php echo $__Context->name ?></label> <input type="text" value="" id="<?php echo $__Context->code ?>_var1" /></li><?php } ?>
								</ul>
								<div class="action">
									<div class="btnArea">
										<span class="btn small"><input type="submit" value="<?php echo $__Context->lang->use ?>|<?php echo $__Context->lang->use_after_save ?>" /></span>
									</div>
									<p><a href="<?php echo getUrl('act','dispModuleAdminLangcode') ?>"><?php echo $__Context->lang->multilingual_manager ?></a></p>
								</div>
							</div>
						</div>
						<!-- /Multilingual -->
						<span class="desc"><a href="#langEdit" class="editUserLang tgAnchor"><?php echo $__Context->lang->cmd_set_multilingual ?></a></span>
					</div>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->module_or_url ?> <em>*</em></p>
					<p class="a">
						<input type="radio" name="cType" id="cModule" class="_typeCheck" value="CREATE" /> <label for="cModule"><?php echo $__Context->lang->create_module_in_menu ?></label>
						<input type="radio" name="cType" id="sModule" class="_typeCheck" value="SELECT" /> <label for="sModule"><?php echo $__Context->lang->select_module_in_menu ?></label>
						<input type="radio" name="cType" id="url" class="_typeCheck" value="URL" /> <label for="url"><?php echo $__Context->lang->menu_url ?></label>
					</p>
				</li>
				<li id="kindModule">
					<p class="q"><label for="kModule"><?php echo $__Context->lang->select_module_in_menu ?> <em>*</em></label></p>
					<p class="a">
						<select style="width:290px" id="kModule" name="module_type">
						<?php  debugPrint($__Context->module_list) ?>
							<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key=>$__Context->value){ ?>
							<?php if($__Context->key=='page'){ ?><optgroup label="<?php echo $__Context->lang->page ?>">
								<option value="ARTICLE"><?php echo $__Context->lang->page_type_name['ARTICLE'] ?></option>
								<option value="WIDGET"><?php echo $__Context->lang->page_type_name['WIDGET'] ?></option>
								<option value="OUTSIDE"><?php echo $__Context->lang->page_type_name['OUTSIDE'] ?></option>
							</optgroup><?php } ?>
							<?php if($__Context->key!='page'){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->value->title ?></option><?php } ?>
							<?php } ?>
						</select>
						<select style="width:290px" id="sModule_id" name="select_menu_url">
						</select>
					</p>
				</li>
				<li id="createModule">
					<p class="q"><label for="cModule_id"><?php echo $__Context->lang->create_mid_in_menu ?> <em>*</em></label></p>
					<div class="a">
						<input type="text" id="cModule_id" name="create_menu_url" />
					</div>
				</li>
				<li id="insertUrl">
					<p class="q"><label for="link_url"><?php echo $__Context->lang->menu_url ?> <em>*</em></label></p>
					<div class="a">
						<input type="text" id="link_url" name="menu_url" value="http://" />
					</div>
				</li>
				<li id="selectLayout">
					<p class="q"><label for="layoutSrl"><?php echo $__Context->lang->layout ?> <em>*</em></label></p>
					<div class="a">
						<select name="layout_srl" id="layoutSrl">
							<option value="0"><?php echo $__Context->lang->notuse ?></option>
							<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>" <?php if($__Context->val->layout_srl == $__Context->current_layout){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
						</select>
					</div>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->about_menu_open_window ?> <em>*</em></p>
					<p class="a">
						<input type="radio" name="menu_open_window" id="self" value="N" /> <label for="self"><?php echo $__Context->lang->menu_self_window ?></label>
						<input type="radio" name="menu_open_window" id="blank" value="Y" /> <label for="blank"><?php echo $__Context->lang->menu_open_window ?></label>
					</p>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->menu_img_btn ?></p>
					<p class="a">
						<span id="normal_btn_preview"></span><br />
						<input type="file" name="menu_normal_btn" id="menu_normal_btn" /> <label for="menu_normal_btn"><?php echo $__Context->lang->menu_normal_btn ?></label><br />
						<span id="hover_btn_preview"></span><br />
						<input type="file" name="menu_hover_btn" id="menu_hover_btn" /> <label for="menu_hover_btn"><?php echo $__Context->lang->menu_hover_btn ?></label><br />
						<span id="active_btn_preview"></span><br />
						<input type="file" name="menu_active_btn" id="menu_active_btn" /> <label for="menu_active_btn"><?php echo $__Context->lang->menu_active_btn ?></label>
					</p>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->exposure_limits ?></p>
					<p class="a" id="groupList">
						<select name="menu_grant_default" class="grant_default">
							<option value="0" selected="selected"><?php echo $__Context->lang->grant_to_all ?></option>
							<option value="-1"><?php echo $__Context->lang->grant_to_login_user ?></option>
							<option value=""><?php echo $__Context->lang->grant_to_group ?></option>
						</select>
						<div id="zone_menu_grant" style="display:none">
							<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->value){ ?><input type="checkbox" name="group_srls[]" id="group_srls_<?php echo $__Context->value->group_srl ?>" value="<?php echo $__Context->value->group_srl ?>" /> <label for="group_srls_<?php echo $__Context->value->group_srl ?>"><?php echo $__Context->value->title ?></label><?php } ?>
						</div>
					</p>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->expand ?></p>
					<p class="a" id="expand">
						<input type="checkbox" name="menu_expand" value="Y" /> <?php echo $__Context->lang->about_expand ?>
					</p>
				</li>
			</ul>
			<div class="btnArea">
				<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
			</div>
		</form>
	</div>
</div>
