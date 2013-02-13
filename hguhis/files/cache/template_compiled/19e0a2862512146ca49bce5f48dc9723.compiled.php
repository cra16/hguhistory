<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php Context::loadJavascriptPlugin('ui'); ?>
<?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
    <h1 class="h1"><?php echo $__Context->lang->cmd_signup ?></h1>
	<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
    <?php Context::addJsFile("./files/ruleset/insertMember.xml", false, "", 0, "head", true, "") ?><form  id="fo_insert_member" class="form" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
		<input type="hidden" name="act" value="procMemberInsert" />
		<?php if($__Context->member_config->agreement){ ?><div class="agreement">
			<div class="text">
				<?php echo $__Context->member_config->agreement ?>
			</div>
			<div class="confirm">
				<input type="checkbox" name="accept_agreement" value="Y" id="accept_agree" />
				<label for="accept_agree"><?php echo $__Context->lang->about_accept_agreement ?></label>
			</div>
		</div><?php } ?>
		<ul>
			<li>
				<p class="q"><?php echo $__Context->identifierForm->title ?> <em style="color:red">*</em></p>
				<p class="a">
					<input type="text" name="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" />
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->password ?> <em style="color:red">*</em></p>
				<p class="a">
					<input type="password" name="password" value=""/>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_password ?></p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->password3 ?> <em style="color:red">*</em></p>
				<p class="a">
					<input type="password" name="password2" value=""/>
				</p>
			</li>
			<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){;
if($__Context->formTag->name != 'signature'){ ?><li>
				<p class="q"><?php echo $__Context->formTag->title ?></p>
				<div class="a"><?php echo $__Context->formTag->inputTag ?></div>
			</li><?php }} ?>
			<li>
				<p class="q"><?php echo $__Context->lang->allow_mailing ?></p>
				<p class="a">
					<input type="radio" name="allow_mailing" id="mailingYes" value="Y"<?php if($__Context->member_info->allow_mailing == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="mailingYes"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="allow_mailing" id="mailingNo" value="N"<?php if($__Context->member_info->allow_mailing != 'Y'){ ?> checked="checked"<?php } ?> /> <label for="mailingNo"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->allow_message ?></p>
				<p class="a">
					<?php if($__Context->lang->allow_message_type&&count($__Context->lang->allow_message_type))foreach($__Context->lang->allow_message_type as $__Context->key=>$__Context->val){ ?>
						<input type="radio" name="allow_message" value="<?php echo $__Context->key ?>"<?php if($__Context->member_info->allow_message == $__Context->key || (!$__Context->member_info && $__Context->key == 'Y')){ ?> checked="checked"<?php } ?> id="allow_<?php echo $__Context->key ?>" /> <label for="allow_<?php echo $__Context->key ?>"><?php echo $__Context->val ?></label>
					<?php } ?>
				</p>
			</li>
		</ul>
		<div class="btnArea">
			<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
			<span class="btn"><a href="<?php echo getUrl('act','','member_srl','') ?>"><?php echo $__Context->lang->cmd_cancel ?></a></span>
		</div>
	</form>
	<script type="text/javascript">
	(function($){
		$(function(){
			var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', dateFormat:'yy-mm-dd', onSelect:function(){
	
				$(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
			};
			$.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
			$(".inputDate").datepicker(option);
			$(".dateRemover").click(function() {
				$(this).parent().prevAll('input').val('');
				return false;});
		});
	})(jQuery);
	</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
