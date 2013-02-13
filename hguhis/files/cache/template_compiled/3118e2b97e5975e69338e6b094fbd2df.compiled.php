<?php if(!defined("__XE__"))exit;?><!--#Meta:common/js/jquery.min.js--><?php $__tmp=array('common/js/jquery.min.js','','','-1000000');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/message/skins/default/filter','openid_login.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/message/skins/default/message.css--><?php $__tmp=array('modules/message/skins/default/message.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/message/skins/default/message.js--><?php $__tmp=array('modules/message/skins/default/message.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="loginAccess" class="gLogin">
	<h1><?php echo $__Context->system_message ?></h1>
	<?php if(!$__Context->is_logged && $__Context->module == 'admin'){ ?><div class="mLogin" id="gLogin">
		<?php Context::addJsFile("./files/ruleset/login.xml", false, "", 0, "head", true, "") ?><form  action="<?php echo getUrl('','act','procMemberLogin') ?>" method="post" id="gForm"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="act" value="procMemberLogin" />
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
			<fieldset>
				<ul class="idpw">
					<li><input type="text" name="user_id" id="uid" value="" class="iText" title="<?php echo $__Context->lang->user_id ?>" /></li>
					<li><input type="password" name="password" id="upw" value="" class="iText" title="<?php echo $__Context->lang->password ?>" /></li>
				</ul>
				<div class="buttonArea">
					<p class="keeping">
						<input type="checkbox" name="keep_signed" id="keepid" class="inputCheck" value="Y" onclick="jQuery('#warning')[(jQuery('#keepid:checked').size()>0?'addClass':'removeClass')]('open');" />						
						<label for="keepid"><?php echo $__Context->lang->keep_signed ?></label>
					</p>
					<div id="warning" class="">
						<p><?php echo $__Context->lang->about_keep_warning ?></p>
					</div>
					<span class="buttonAccount"><input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
				</div>
			</fieldset>
		</form>
		<ul class="help">
			<li class="first"><a href="<?php echo getUrl('','act','dispMemberFindAccount') ?>"><span><?php echo $__Context->lang->cmd_find_member_account ?></span></a></li>
			<li><a href="<?php echo getUrl('','act','dispMemberSignUpForm') ?>"><span><?php echo $__Context->lang->cmd_signup ?></span></a></li>
		</ul>
	</div><?php } ?>
	<?php if($__Context->is_logged && $__Context->module == 'admin'){ ?><div class="logOut">
		<span class="buttonAccount"><a href="<?php echo getUrl('act','dispMemberLogout','module','') ?>"><?php echo $__Context->lang->cmd_logout ?></a></span>
	</div><?php } ?>
	<?php if(!$__Context->is_logged && $__Context->module != 'admin'){ ?><div class="logOut">
		<span class="buttonAccount"><a href="<?php echo getUrl('act','dispMemberLoginForm','module','', 'mid', '') ?>"><?php echo $__Context->lang->cmd_login ?>...</a></span>
	</div><?php } ?>
</div>
