<?php if(!defined("__XE__"))exit;?>
<?php Context::loadJavascriptPlugin('ui'); ?>
<?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<!--#Meta:modules/hiswiki/skins/default/js/MyMethodCall.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/MyMethodCall.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/CheckDuplicate.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/CheckDuplicate.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/rangy-core.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/rangy-core.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/autoLink.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/autoLink.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<script type="text/javascript">
var autoLinkPack = {
		dispHiswikiTopicWrite: "<?php echo getUrl('act', 'dispHiswikiTopicWrite') ?>",
		no_topic_searched: '검색된 주제가 없습니다.'
};
</script>
<?php Context::addJsFile("modules/hiswiki/ruleset/topicWrite.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" id="write"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="topicWrite" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_info->get('document_srl') ?>" />
	<input type="hidden" name="content" value="<?php echo $__Context->document_info->getContentText() ?>"/>
	<input type="hidden" name="act" value="procHiswikiTopicWrite" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act','dispHiswikiFrontPage') ?>" />
	<input type="hidden" name="error_return_url" value="<?php echo getUrl('act','procHiswikiTopicWrite') ?>" /> 
	<div class="box category&title">
		<span>카테고리</span>
		<select name="category_srl" class="category">
			<option value="">카테고리 선택</option>
			<?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?><option
				value="<?php echo $__Context->val->category_srl ?>"
			<?php if($__Context->document_info->get('category_srl')==$__Context->val->category_srl){ ?>	selected="selected"<?php } ?>>
				<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)			
			</option><?php } ?>
		</select>
	</div>
	<div class="title">
		<span>제목 </span>
		<input id="title" type="text" name="title" size="100%" value="<?php echo $__Context->document_info->getTitle() ?>"/>
		<span style="display:none; color:red;" class="warning">존재하는 제목입니다.</span>
	</div>
	<div class="date">
		<span>
			<span>시작연도</span> 
			<input type="hidden" name="start_date" class="start_date"<?php if($__Context->extra_vars[1]->value){ ?> value="<?php echo zdate($__Context->extra_vars[1]->value.'000000','Y-m-d') ?>"<?php } ?> />
			<input type="text" class="cal startDate"<?php if($__Context->extra_vars[1]->value){ ?> value="<?php echo zdate($__Context->extra_vars[1]->value.'000000','Y-m-d') ?>"<?php } ?>/>
			<input type="button" name="delete_button" value="삭제" class="del_date">
		</span>
		
		<span>|</span>
		
		<span>
			<span>종료연도</span> 
			<input type="hidden" name="end_date" class="end_date"<?php if($__Context->extra_vars[2]->value){ ?> value="<?php echo zdate($__Context->extra_vars[2]->value.'000000','Y-m-d') ?>"<?php } ?> />
			<input type="text" class="cal endDate" <?php if($__Context->extra_vars[2]->value){ ?> value="<?php echo zdate($__Context->extra_vars[2]->value.'000000','Y-m-d') ?>"<?php } ?> />
			<input type="button" name="delete_button" value="삭제" class="del_date">
		</span>
		<span>책임자</span>
		<input type="text" name="p_charge" class="p_charge" value="<?php echo $__Context->extra_vars[3]->value ?>"/>
		<script type="text/javascript">
			(function($) {
				$(function() {
					var option = {
						changeMonth : true,
						changeYear : true,
						gotoCurrent : false,
						yearRange : '1994:+5',
						dateFormat : 'yy-mm-dd',
						onSelect : function() {
							$(this).prev('input[type="hidden"]').val(this.value.replace(/-/g, ""))
						}
					};
					$.extend(option, $.datepicker.regional['ko']);
					$(".cal").datepicker(option);
				});
			})(jQuery);
		</script>
	</div>
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	
	<p>단어 선택 후 Ctrl+J 를 이용하여 해당되는 주제에 빠르게 링크를 거세요.</p>
	
	<div class="editor"><?php echo $__Context->document_info->getEditor() ?></div>
	<div class="tag_box">
		태그검색어 입력 <input type="text" name="tags" class="tags" value="<?php echo htmlspecialchars($__Context->document_info->get('tags')) ?>"/> 쉼표(,)로 구분하여 여러개 입력가능 </div>
	<br/>
	<div class="submit_btn">
		<input type="submit" class="submit"/>
	</div>
</form>
<style>
#topicResultBox {
	background-color:white;
	border:1px solid balck;
	position:absolute;
}
#topicResultBox ul {
	list-style:none;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
</style>
