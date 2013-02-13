<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spHeader.html') ?>
<div class="content dashboard" id="content">
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
	<?php if(!$__Context->isEnviromentGatheringAgreement){ ?>
	<form action="./" method="post" class="message info"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="admin" />
	<input type="hidden" name="act" value="procAdminEnviromentGatheringAgreement" />
		<h2><?php echo $__Context->lang->install_env_agreement ?></h2>
		<p><?php echo $__Context->lang->install_env_agreement_desc ?></p>
		<div class="btnArea">
			<span class="btn"><button type="submit" name="is_agree" value="true"><?php echo $__Context->lang->agree ?></button></span>
			<span class="btn"><button type="submit" name="is_agree" value="false"><?php echo $__Context->lang->disagree ?></button></span>
		</div>
	</form>
	<?php } ?>
	<?php if($__Context->addTables || $__Context->needUpdate){ ?>
	<div class="message update">
		<?php if($__Context->needUpdate && $__Context->addTables){ ?><h2><?php echo $__Context->lang->need_update_and_table ?></h2><?php } ?>
		<?php if($__Context->needUpdate && !$__Context->addTables){ ?><h2><?php echo $__Context->lang->need_update ?></h2><?php } ?>
		<?php if(!$__Context->needUpdate && $__Context->addTables){ ?><h2><?php echo $__Context->lang->need_table ?></h2><?php } ?>
		<ul>
		<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list AS $__Context->key => $__Context->value){ ?>
			<?php if($__Context->value->need_install){ ?>
			<li style="margin:0 0 4px 0;"><?php echo $__Context->value->module ?> - <span class="btn"><button type="button" onclick="doInstallModule('<?php echo $__Context->value->module ?>')"><?php echo $__Context->lang->cmd_create_db_table ?></button></span></li>
			<?php }else if($__Context->value->need_update){ ?>
			<li style="margin:0 0 4px 0;"><?php echo $__Context->value->module ?> - <span class="btn"><button type="button" onclick="doUpdateModule('<?php echo $__Context->value->module ?>')"><?php echo $__Context->lang->cmd_module_update ?></button></span></li>
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
	<?php } ?>
	<div class="section">
		<div class="portlet">
			<h2 class="h2"><?php echo $__Context->lang->current_state ?></h2>
			<ul class="lined">
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList') ?>"><?php echo $__Context->lang->menu_gnb['user'] ?></a> <span class="side"><?php echo number_format($__Context->status->member->totalCount) ?>(<?php if($__Context->status->member->todayCount > 0){ ?>+<?php };
echo number_format($__Context->status->member->todayCount) ?>)</span></li>
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>"><?php echo $__Context->lang->menu_gnb_sub['document'] ?></a> <span class="side"><?php echo number_format($__Context->status->document->totalCount) ?>(<?php if($__Context->status->document->todayCount > 0){ ?>+<?php };
echo number_format($__Context->status->document->todayCount) ?>)</span></li>
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCommentAdminList') ?>"><?php echo $__Context->lang->menu_gnb_sub['comment'] ?></a> <span class="side"><?php echo number_format($__Context->status->comment->totalCount) ?>(<?php if($__Context->status->comment->todayCount > 0){ ?>+<?php };
echo $__Context->status->comment->todayCount ?>)</span></li>
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispTrackbackAdminList') ?>"><?php echo $__Context->lang->menu_gnb_sub['trackback'] ?></a> <span class="side"><?php echo number_format($__Context->status->trackback->totalCount) ?>(<?php if($__Context->status->trackback->todayCount > 0){ ?>+<?php };
echo $__Context->status->trackback->todayCount ?>)</span></li>
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispFileAdminList') ?>"><?php echo $__Context->lang->menu_gnb_sub['file'] ?></a> <span class="side"><?php echo number_format($__Context->status->file->totalCount) ?>(<?php if($__Context->status->file->todayCount > 0){ ?>+<?php };
echo number_format($__Context->status->file->todayCount) ?>)</span></li>
			</ul>
		</div>
		<div class="portlet">
			<h2 class="h2"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>"><?php echo $__Context->lang->latest_documents ?></a></h2>
			<ul class="lined">
				<?php if($__Context->latestDocumentList&&count($__Context->latestDocumentList))foreach($__Context->latestDocumentList AS $__Context->key=>$__Context->value){ ?>
				<?php $__Context->document = $__Context->value->variables ?>
				<li>
					<a href="<?php echo getUrl('', 'document_srl', $__Context->document['document_srl']) ?>" target="_blank"><?php if(trim($__Context->value->getTitle())){;
echo $__Context->value->getTitle();
}else{ ?><strong><?php echo $__Context->lang->no_title_document ?></strong><?php } ?></a> <span class="side"><?php echo $__Context->document['nick_name'] ?></span>
					<form class="action"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="module" value="admin" />
						<input type="hidden" name="act" value="procDocumentManageCheckedDocument" />
						<input type="hidden" name="cart[]" value="<?php echo $__Context->document['document_srl'] ?>" />
						<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
						<button type="submit" name="type" value="trash" class="text"><?php echo $__Context->lang->cmd_trash ?></button>
						<button type="submit" name="type" value="delete" class="text"><?php echo $__Context->lang->cmd_delete ?></button>
					</form>
				</li>
				<?php } ?>
				<?php if(!is_array($__Context->latestDocumentList) || count($__Context->latestDocumentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
			</ul>
		</div>
		<div class="portlet">
			<h2 class="h2"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCommentAdminList') ?>"><?php echo $__Context->lang->latest_comments ?></a></h2>
			<ul class="lined">
				<?php if($__Context->latestCommentList&&count($__Context->latestCommentList))foreach($__Context->latestCommentList AS $__Context->key=>$__Context->value){ ?>
				<li>
					<a href="<?php echo getUrl('', 'document_srl', $__Context->value->document_srl) ?>#comment_<?php echo $__Context->value->comment_srl ?>" target="_blank"><?php if(trim($__Context->value->content)){;
echo $__Context->value->getSummary();
}else{ ?><strong><?php echo $__Context->lang->no_text_comment ?></strong><?php } ?></a> <span class="side"><?php echo $__Context->value->nick_name ?></span> 
					<form class="action"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="module" value="admin" />
						<input type="hidden" name="act" value="procCommentAdminDeleteChecked" />
						<input type="hidden" name="cart[]" value="<?php echo $__Context->value->comment_srl ?>" />
						<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
						<button type="submit" name="is_trash" value="true" class="text"><?php echo $__Context->lang->cmd_trash ?></button>
						<button type="submit" name="is_trash" value="false" class="text"><?php echo $__Context->lang->cmd_delete ?></button>
					</form>
				</li>
				<?php } ?>
				<?php if(!is_array($__Context->latestCommentList) || count($__Context->latestCommentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
			</ul>
		</div>
		<div class="portlet">
			<h2 class="h2"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispTrackbackAdminList') ?>"><?php echo $__Context->lang->latest_trackbacks ?></a></h2>
			<ul class="lined">
				<?php if($__Context->latestTrackbackList&&count($__Context->latestTrackbackList))foreach($__Context->latestTrackbackList AS $__Context->key=>$__Context->value){ ?>
				<li>
					<a href="<?php echo $__Context->value->url ?>" target="_blank"><?php echo $__Context->value->title ?></a> <span class="side"><?php echo $__Context->value->blog_name ?></span>
					<form class="action"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="module" value="admin" />
						<input type="hidden" name="act" value="procTrackbackAdminDeleteChecked" />
						<input type="hidden" name="cart[]" value="<?php echo $__Context->value->trackback_srl ?>" />
						<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
						<button type="submit" class="text"><?php echo $__Context->lang->cmd_delete ?></button>
					</form>
				</li>
				<?php } ?>
				<?php if(!is_array($__Context->latestTrackbackList) || count($__Context->latestTrackbackList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spShortcut.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spFooter.html') ?>
