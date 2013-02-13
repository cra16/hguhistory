<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','header.html') ?>
<!-- display the document written form -->
<form action="./" method="post" onsubmit="return procFilter(this, insert)" id="fo_write"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	
	<div class="topicWrite">
		<?php if(!$__Context->is_logged){ ?>
		<div class="userNameAndPw">
			<label for="userName"><?php echo $__Context->lang->writer ?></label>
			<input type="text" name="nick_name" value="<?php echo $__Context->oDocument->getNickName() ?>" class="userName iText" id="userName"/>
	
			<label for="userPw"><?php echo $__Context->lang->password ?></label>
			<input type="password" name="password" value="" id="userPw" class="userPw iText" />
	
			<label for="emailAddress"><?php echo $__Context->lang->email_address ?></label>
			<input type="text" name="email_address" value="<?php echo htmlspecialchars($__Context->oDocument->get('email_address')) ?>" id="emailAddress" class="emailAddress iText"/>
	
			<label for="homePage"><?php echo $__Context->lang->homepage ?></label>
			<input type="text" name="homepage" value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" id="homePage" class="homePage iText"/>
		</div>
		<?php } ?>
	
		<div class="title">
			<?php if($__Context->module_info->use_category=="Y"){ ?>
			<select name="category_srl" class="category">
				<option value=""><?php echo $__Context->lang->category ?></option>
				<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
				<option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
					<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
				</option>
				<?php } ?>
			</select>
			<?php }else{ ?>
			<label class="title"><?php echo $__Context->lang->title ?></label>
			<?php } ?>
			<input type="text" name="title" class="title iText" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" />
		</div>
	
		<div class="option">
			<?php if($__Context->grant->manager){ ?>
			<?php  $__Context->_color = array('555555','222288','226622','2266EE','8866CC','88AA66','EE2222','EE6622','EEAA22','EEEE22')  ?>
			<select name="title_color" id="title_color" <?php if($__Context->oDocument->get('title_color')){ ?>style="background-color:#<?php echo $__Context->oDocument->get('title_color') ?>;"<?php } ?> onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor;">
					<option value="" style="background-color:#FFFFFF;"><?php echo $__Context->lang->title_color ?></option>
					<?php if($__Context->_color&&count($__Context->_color))foreach($__Context->_color as $__Context->_col){ ?>
					<option value="<?php echo $__Context->_col ?>" style="background-color:#<?php echo $__Context->_col ?>" <?php if($__Context->oDocument->get('title_color')==$__Context->_col){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->title_color ?></option>
					<?php } ?>
			</select>
			<input type="checkbox" name="title_bold" id="title_bold" value="Y" <?php if($__Context->oDocument->get('title_bold')=='Y'){ ?>checked="checked"<?php } ?> />
			<label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
			<input type="checkbox" name="is_notice" value="Y" <?php if($__Context->oDocument->isNotice()){ ?>checked="checked"<?php } ?> id="is_notice" />
			<label for="is_notice"><?php echo $__Context->lang->notice ?></label>
			<?php } ?>
			<input type="checkbox" name="comment_status" value="ALLOW" <?php if($__Context->oDocument->allowComment()){ ?>checked="checked"<?php } ?> id="comment_status" />
			<label for="comment_status"><?php echo $__Context->lang->allow_comment ?></label>
			<input type="checkbox" name="allow_trackback" value="Y" <?php if($__Context->oDocument->allowTrackback()){ ?>checked="checked"<?php } ?> id="allow_trackback" />
			<label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
			<?php if($__Context->is_logged){ ?>
			<input type="checkbox" name="notify_message" value="Y" <?php if($__Context->oDocument->useNotify()){ ?>checked="checked"<?php } ?> id="notify_message" />
			<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
			<?php } ?>
			<?php if(is_array($__Context->status_list)){ ?>
				<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
				<input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key || ($__Context->key == 'PUBLIC' && !$__Context->document_srl)){ ?>checked="checked"<?php } ?> /> 
				<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
				<?php } ?>
			<?php } ?>
		</div>
	
		<?php if(count($__Context->extra_keys)){ ?>
		<table cellspacing="0" summary="" class="extraVarsList">
		<col width="150" />
		<col />
		<?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key => $__Context->val){ ?>
		<tr>
			<th scope="row"><?php echo $__Context->val->name ?> <?php if($__Context->val->is_required=='Y'){ ?>*<?php } ?></th>
			<td class="<?php echo $__Context->val->type ?>"><?php echo $__Context->val->getFormHTML() ?></td>
		</tr>
		<?php } ?>
		</table>
		<?php } ?>
	
		<div class="editor"><?php echo $__Context->oDocument->getEditor() ?></div>
	
		<div class="tag">
			<input type="text" name="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="iText" />
			<p class="info"><?php echo $__Context->lang->about_tag ?></p>
		</div>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_preview ?>" onclick="doDocumentPreview(this); return false;" /></span>
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
		<span class="etc">
			<?php if($__Context->is_logged){ ?>
			<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
			<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_temp_save ?>"  onclick="doDocumentSave(this); return false;" /></span>
			<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_load ?>"  onclick="doDocumentLoad(this); return false;" /></span>
			<?php } ?>
			<span class="btn"><input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="location.href='<?php echo getUrl('act','') ?>'" /></span>
			<?php } ?>
		</span>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','footer.html') ?>
