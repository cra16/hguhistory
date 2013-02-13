<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<span class="dummy"></span>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
				<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
			</div><?php } ?>
			<form rule="install" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="act" value="procInstall" />
				<ul class="form formAdmin">
					<li><label for="aMail"><?php echo $__Context->lang->email_address ?></label><input name="email_address" type="text" class="iText" id="aMail" /></li>
					<li><label for="aPw1"><?php echo $__Context->lang->password1 ?></label><input name="password" type="password" class="iText" id="aPw1" /></li>
					<li><label for="aPw2"><?php echo $__Context->lang->password2 ?></label><input name="password2" type="password" class="iText" id="aPw2" /></li>
					<li><label for="aId"><?php echo $__Context->lang->user_id ?></label><input name="user_id" type="text" value="admin" class="iText" id="aId" /></li>
					<li><label for="aNick"><?php echo $__Context->lang->nick_name ?></label><input name="nick_name" type="text" class="iText" id="aNick" /></li>
				</ul>
				<div class="desc">
					<p><?php echo $__Context->lang->install_notandum ?></p>
				</div>
				<div class="ibtnArea">
					<div class="fLeft">
						<span class="ibtn icon"><span class="back"></span> <a href="<?php echo getUrl('', 'act', 'dispInstallConfigForm') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
					</div>
					<div class="fRight">
						<span class="ibtn icon"><span class="check"></span> <input name="" type="submit" value="<?php echo $__Context->lang->cmd_complete ?>" /></span>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
