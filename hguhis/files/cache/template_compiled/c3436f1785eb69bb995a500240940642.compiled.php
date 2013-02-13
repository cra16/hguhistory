<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<span class="dummy"></span>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
				<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
			</div><?php } ?>
			<form rule="mysql" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" value="<?php echo getUrl('', 'act', $__Context->act, 'db_type', $__Context->db_type) ?>" name="error_return_url">
			<input type="hidden" name="act" value="procMysqlDBSetting" />
			<input type="hidden" name="db_type" value="<?php echo $__Context->db_type ?>" />
				<h2 class="h2"><?php echo $__Context->db_type ?></h2>
				<ul class="form formDbInfo">
					<li><label for="dbHostName"><?php echo $__Context->lang->db_hostname ?></label><input name="db_hostname" value="localhost" type="text" class="iText" id="dbHostName" /></li>
					<li><label for="dbPort"><?php echo $__Context->lang->db_port ?></label><input name="db_port" value="3306" type="text" class="iText" id="dbPort" /></li>
					<li><label for="dbId"><?php echo $__Context->lang->db_userid ?></label><input name="db_userid" type="text" class="iText" id="dbId" /></li>
					<li><label for="dbPw"><?php echo $__Context->lang->db_password ?></label><input name="db_password" type="password" class="iText" id="dbPw" /></li>
					<li><label for="dbName"><?php echo $__Context->lang->db_name ?></label><input name="db_database" type="text" class="iText" id="dbName" /></li>
					<li><label for="dbPrefix"><?php echo $__Context->lang->db_table_prefix ?></label><input name="db_table_prefix" type="text" class="iText" id="dbPrefix" value="xe" /></li>
				</ul>
				<div class="desc"><?php echo $__Context->lang->db_info_desc ?></div>
				<div class="ibtnArea">
					<div class="fLeft">
						<span class="ibtn icon"><span class="back"></span> <a href="<?php echo getUrl('', 'act', 'dispInstallSelectDB') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
					</div>
					<div class="fRight">
							<span class="ibtn icon"><span class="check"></span> <input name="" type="submit" value="<?php echo $__Context->lang->cmd_next ?>" /></span>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
