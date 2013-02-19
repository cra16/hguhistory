<?php if(!defined("__XE__"))exit;?><!--지희 글의 내용을 본다-->
<!--CSS modified by 현희 -->
<div class="hiswiki_container">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/css/topic_view.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/topic_view.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<div id="topic_view">
	<br />
	<div class="document_view">
		<h3 class="hwTitle"><?php echo $__Context->document->getTitle() ?></h3>
		<p>한동 역사기록원</p>
		<p class="hwRegdate">
			<?php if($__Context->extra_vars[1]->value){ ?><span class="fl">Start Date:</span><?php } ?> 
			<?php if($__Context->extra_vars[1]->value){ ?><span class="fl"><?php echo zdate($__Context->extra_vars[1]->value."000000",'Y-m-d') ?></span><?php } ?> 
			<?php if($__Context->extra_vars[1]->value&&$__Context->extra_vars[2]->value){ ?><span class="fl">|</span><?php } ?> 
			<?php if($__Context->extra_vars[2]->value){ ?><span class="fl">End Date:</span><?php } ?> 
			<?php if($__Context->extra_vars[2]->value){ ?><span class="fl"><?php echo zdate($__Context->extra_vars[2]->value."000000",'Y-m-d') ?></span><?php } ?>
			<span class="fr" title="<?php echo $__Context->document->getRegdate('Y-m-d H:i:s') ?>">최근 등록일: <?php echo $__Context->document->getRegdate('Y-m-d') ?></span>
			<span class="fr">문서 책임자: <a class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>" href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" title="<?php echo htmlspecialchars($__Context->extra_vars[3]->user_name) ?>"><?php echo htmlspecialchars($__Context->extra_vars[3]->user_name) ?></a>&nbsp;|</span>
			<span class="fr"><a href="<?php echo getUrl('act', 'dispHiswikiHistoryView') ?>">문서 버전: <?php echo $__Context->version ?></a>&nbsp;|&nbsp;</span>
			<div class="clear"></div>
		</p>
		
		<hr class="hwhr_dot" />
		
		<div class="hwContent"><?php echo $__Context->document->getContent(false,false,false,false,false) ?></div>
		
		<hr class="hwhr_dot" />
		<!--<?php  $__Context->tag_list = $__Context->document->get('tag_list')  ?>-->
		<?php if($__Context->tag_list){ ?><div class="tag">
			<ul>
				<li>
					<img src="/git/hguhistory/hguhis/modules/hiswiki/skins/default/img/Tag_icon.png" alt="<?php echo $__Context->lang->tag ?>" width="20" height="15" class="tagIcon" />
				</li>
				<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->key=>$__Context->val){ ?><li>
					<?php if($__Context->key){ ?>,<?php } ?>
					<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_target', 'tag', 'search_keyword', $__Context->val) ?>"	rel="tag"> <?php echo htmlspecialchars($__Context->val) ?> </a>
				</li><?php } ?>
			</ul>
			<div class="clear"></div>
		</div><?php } ?>
		<div class="btnArea">
			<a class="btn" href="<?php echo getUrl('act','dispHiswikiHistoryView') ?>">히스토리</a>
			<a class="btn" href="<?php echo getUrl('document_srl','') ?>">목록</a>
			<?php if($__Context->document->isEditable() && !$__Context->version){ ?><a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicWrite','document_srl',$__Context->document->document_srl,'') ?>">수정</a><?php } ?>
			<?php if($__Context->document->isEditable() && !$__Context->version){ ?><a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicDelete','document_srl',$__Context->document->document_srl,'') ?>">삭제</a><?php } ?>
		</div>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>