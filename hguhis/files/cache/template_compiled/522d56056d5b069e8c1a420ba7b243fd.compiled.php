<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="hiswiki">
	<form action="./" method="post">
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', 'dispHiswikiFrontPage') ?>" />
		<input type="hidden" name="error_return_url" value="<?php echo getUrl('act', 'dispHiswikiModifyFrontPage') ?>" />
		<input type="hidden" name="act" value="procHiswikiModifyFrontPage" />
		<input type="hidden" name="vid" value="" />
		<input type="hidden" name="content" value="<?php echo $__Context->front_page_doc->getContentText() ?>" />
		<input type="hidden" name="front_page_srl" value="<?php echo $__Context->module_info->front_page_srl ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<div class="hiswiki_header">
			<h1 class="h1">대문 수정</h1>
			<h2 class="h2"><?php echo $__Context->module_info->browser_title ?></h2>
			<p>메인 위키에 표시될 대문을 마음껏 꾸미실 수 있으십니다.</p>
		</div>
		<br/><br/>
		<div class="hiswiki_body">
			<div class="editor">
				<?php echo $__Context->modify_front_editor ?>
			</div>
		</div>
		<div class="hiswiki_footer">
			<div class="btnArea">
				<a href="<?php echo getUrl('act', 'dispHiswikiFrontPage') ?>" class="btn">돌아가기</a>
				<a href="<?php echo getUrl('') ?>" class="btn">미리보기</a>
				<input type="submit" class="btn" />
			</div>
		</div>
	</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>