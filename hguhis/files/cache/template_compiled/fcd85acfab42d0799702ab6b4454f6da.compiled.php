<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<span class="dummy"></span>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
				<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
			</div><?php } ?>
			<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="act" value="procConfigSetting" />
				<ul class="form formXe">
					<li>
						<input name="use_rewrite" value="Y" <?php if(function_exists('apache_get_modules')&&in_array('mod_rewrite',apache_get_modules())){ ?>checked="checked"<?php } ?> type="checkbox" class="iCheck" id="rewrite" /> <label for="rewrite"><?php echo $__Context->lang->use_rewrite ?></label>
						<p><?php echo $__Context->lang->about_rewrite ?></p>
					</li>
					<li>
						<div class="select open" style="width:540px;">
							<span class="ctrl"><span class="arrow"></span></span>
							<div class="myValue"></div>
							<div class="iList">
								<ul>
									<?php if($__Context->time_zone&&count($__Context->time_zone))foreach($__Context->time_zone as $__Context->key => $__Context->val){ ?>
									<li><input name="time_zone" id="<?php echo $__Context->key ?>" class="option" type="radio" value="<?php echo $__Context->key ?>" <?php if($__Context->key==date('O')){ ?>checked="checked"<?php } ?> /><label for="<?php echo $__Context->key ?>"><?php echo $__Context->val ?></label></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<p><?php echo $__Context->lang->about_time_zone ?></p>
					</li>
				</ul>
				<div class="ibtnArea">
					<div class="fLeft">
						<span class="ibtn icon"><span class="back"></span> <a href="#" onclick="document.backForm.submit();"><?php echo $__Context->lang->cmd_back ?></a></span>
					</div>
					<div class="fRight">
						<span class="ibtn icon"><span class="check"></span> <input name="" type="submit" value="<?php echo $__Context->lang->cmd_next ?>" /></span>
					</div>
				</div>
			</form>
			<form name="backForm" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
			<input type="hidden" name="act" value="dispInstallDBForm" />
			<input type="hidden" name="db_type" value="<?php echo $__Context->db_type ?>" />
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
