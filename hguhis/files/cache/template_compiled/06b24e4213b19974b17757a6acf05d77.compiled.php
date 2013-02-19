<?php if(!defined("__XE__"))exit;?>
<div class="hiswiki_container">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/write.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/write.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php Context::loadJavascriptPlugin('ui'); ?>
<?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<!--#Meta:modules/hiswiki/skins/default/js/write.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/write.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/rangy-core.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/rangy-core.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/autoLink.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/autoLink.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<script type="text/javascript">
var autoLinkPack = {
		editorCss: "<?php echo $__Context->module_path ?>skins/default/css/autoLink.css",
		dispHiswikiTopicWrite: "<?php echo getUrl('act', 'dispHiswikiTopicWrite') ?>",
		no_topic_searched: '검색된 주제가 없습니다.'
};
</script>
<h2>주제 등록</h3>
<?php Context::addJsFile("modules/hiswiki/ruleset/topicWrite.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" id="write"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="topicWrite" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_info->get('document_srl') ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->document_info->getContentText() ?>"/>
	<input type="hidden" name="act" value="procHiswikiTopicWrite" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act','dispHiswikiFrontPage') ?>" />
	<input type="hidden" name="error_return_url" value="<?php echo getUrl('act','procHiswikiTopicWrite') ?>" />
	
	
	<table class="headings width100per">
		<tr>
			<td class="writeCaption">카테고리 선택</td>
			<td class="writeContent" colspan="2">
				<select name="category_srl" class="category">
					<option value="">카테고리 선택</option>
					<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option
						value="<?php echo $__Context->val->category_srl ?>"
					<?php if($__Context->document_info->get('category_srl')==$__Context->val->category_srl){ ?>	selected="selected"<?php } ?>>
						<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)			
					</option><?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td class="writeCaption">제목(주제)</td>
			<td class="writeContent" colspan="2">
				<?php if($__Context->document_info->isExists()){ ?>
					<input class="width50per" type="text" value="<?php echo htmlspecialchars($__Context->document_info->getTitle()) ?>" readonly="readonly" />
					<input type="hidden" name="title" value="<?php echo $__Context->document_info->getTitle() ?>" />
				<?php } ?>
				<?php if(!$__Context->document_info->isExists()){ ?>
					<input id="title" class="width50per" type="text" name="title" value="<?php echo htmlspecialchars($__Context->document_info->getTitle()) ?>" />
					<span style="display:none;" class="warning">같은 주제가 존재합니다.</span>
				<?php } ?>
			</td>
		</tr>
		
		
		<?php if($__Context->document_info->isExists()){ ?><tr>
			<td class="writeCaption">변경 내역</td>
			<td class="writeContent" colspan="2">
				<div class="textarea_container">
					<textarea name="modified_content" class="modified_content" rows="5"></textarea>
				</div>
				<p>
					<span>주요 변경 내역을 간략히 입력해 주세요. (최대 250자)</span>
					<span class="char_length">0</span>
					<span> / 250</span>
				</p>
			</td>
		</tr><?php } ?>
		
		<tr>
			<td class="writeCaption">시작시</td>
			<td class="writeContent">
				<input type="hidden" name="start_date" class="start_date"<?php if($__Context->extra_vars[1]->value){ ?> value="<?php echo zdate($__Context->extra_vars[1]->value.'000000','Ymd') ?>"<?php } ?> />
				<input type="text" class="cal startDate width150px"<?php if($__Context->extra_vars[1]->value){ ?> value="<?php echo zdate($__Context->extra_vars[1]->value.'000000','Y-m-d') ?>"<?php } ?>/>
				<input type="button" name="delete_button" value="삭제" class="del_date">
			</td>
			<td class="writeDesc">시작 시간이 있을 경우 입력하세요.</td>
		</tr>
		
		<tr>
			<td class="writeCaption">종료시</td>
			<td class="writeContent">
				<input type="hidden" name="end_date" class="end_date"<?php if($__Context->extra_vars[2]->value){ ?> value="<?php echo zdate($__Context->extra_vars[2]->value.'000000','Ymd') ?>"<?php } ?> />
				<input type="text" class="cal endDate width150px" <?php if($__Context->extra_vars[2]->value){ ?> value="<?php echo zdate($__Context->extra_vars[2]->value.'000000','Y-m-d') ?>"<?php } ?> />
				<input type="button" name="delete_button" value="삭제" class="del_date">
			</td>
			<td class="writeDesc">종료 시간이 있을 경우 입력하세요.</td>
		</tr>
		
		<tr>
			<td class="writeCaption">문서 책임자</td>
			<td class="writeContent">
				<input id="picInput" type="text" class="p_charge width150px" value="<?php echo htmlspecialchars($__Context->extra_vars[3]->email_address) ?>"/>
				<span id="personInCharge"><?php echo $__Context->extra_vars[3]->user_name ?>(<?php echo $__Context->extra_vars[3]->nick_name ?>)</span>
				<input type="hidden" name="p_charge" value="<?php echo $__Context->extra_vars[3]->member_srl ?>" />
			</td>
			<td class="writeDesc">아이디 또는 이메일 주소로 문서 책임자를 검색하여 선택합니다.</td>
		</tr>
		
		<tr>
			<td class="writeCaption">태그 검색어</td>
			<td class="writeContent" colspan="2">
				<input type="text" name="tags" class="tags width100per" value="<?php echo htmlspecialchars($__Context->document_info->get('tags')) ?>"/><br/>
				<span>쉼표(,)로 구분하여 여러개 입력가능</span>
			</td>
		</tr>
	</table>
	
	<h3 class="h3">문서 작성 팁</h3>
	<ul>
		<li>단어 선택 후 Ctrl+J 를 이용하여 해당되는 주제에 빠르게 링크를 거세요.</li>
		<li>단어 선택 후 Ctrl+1 ~ Ctrl+6 으로 제목 강조를 할 수 있습니다.</li>
		<li>Ctrl+O 또는 Ctrl+P 를 사용하여 리스트를 사용할 수 있습니다.</li>
		<li>들여쓰기와 내어쓰기는 Ctrl+Shift+Left 와 Ctrl+Shift+Right를 사용합니다.</li>
		<li>태그를 사용하시면 검색이나 분류시 더 편리하게 할 수 있습니다.</li>
	</ul>
	
	<div class="editor"><?php echo $__Context->document_info->getEditor() ?></div>
	
	<div class="submit_btn">
		<input type="submit" class="btn fr submit"/>
		<div class="clear"></div>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>