<?php if(!defined("__XE__"))exit;?><div class="hiswiki_container">
<!--지희 히스토리 목록들을 본다-->
<!-- 현희 -->
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki_common.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki_common.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/css/topic_history.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/topic_history.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/topic_history.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/topic_history.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<div id="hiswiki_version" class="versions">
	<?php if(!count($__Context->hiswikiHistory->data)){ ?>
		<h2>히스토리가 존재하지 않는 문서입니다</h2>
	<?php } ?>
	<?php if(count($__Context->hiswikiHistory->data)){ ?>
		
		<!--
		<?php 
		$__Context->oDocumentModel = &getModel('document');
		$__Context->oMemberModel = &getModel('member');
		$__Context->oHiswikiModel = &getModel('hiswiki');
		 ?>
		-->
		<table class="contentList">
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>문서번호</th>
					<th class="title">변경 내역</th>
					<th>문서 버전</th>
					<th>등록일</th>
					<th>문서 책임자</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				
				<!--
				<?php 
				$__Context->modified = null;
				$__Context->modified_summ = null;
				 ?>
				-->
				<?php if($__Context->hiswikiHistory->data&&count($__Context->hiswikiHistory->data))foreach($__Context->hiswikiHistory->data as $__Context->val){ ?>
				
				<!--
				<?php 
				$__Context->hiswikiDoc = $__Context->oHiswikiModel->getHiswikiDoc($__Context->val->trace_srl);
				$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->hiswikiDoc->data[0]->module_srl, $__Context->hiswikiDoc->data[0]->document_srl);
				$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
				 ?>
				-->
				<tr class="oldver">
					<td>
						<span>&nbsp;</span>
					</td>
					<td><?php echo $__Context->val->document_srl ?></td>
					<td class="title">
						<?php if(!$__Context->modified){ ?><a class="see_more first" href="./">
							최초 문서입니다.
						</a><?php } ?>
						<?php if($__Context->modified){ ?><a class="see_more" href="./">
							<?php echo $__Context->modified_summ ?>
						</a><?php } ?>
					</td>
					<td><?php echo $__Context->val->version ?></td>
					<td title="<?php echo zdate($__Context->val->reg_date, 'H:i:s') ?>"><?php echo zdate($__Context->val->reg_date, 'Y-m-d') ?></td>
					<td>
						<a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>"><?php echo $__Context->extra_vars[3]->nick_name ?></a>
					</td>
					<td>
						<a href="<?php echo getUrl('', 'act', 'dispHiswikiTopicView', 'document_srl', $__Context->val->document_srl, 'module_srl', $__Context->hiswikiDoc->data[0]->module_srl, 'version', $__Context->val->version) ?>">보기</a>
					</td>
				</tr>
				<?php if($__Context->modified){ ?><tr class="see_more" style="display:none;">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td colspan="5" class="title">
						<?php echo $__Context->modified ?>
					</td>
				</tr><?php } ?>
				<!--
				<?php 
				$__Context->modified = $__Context->val->modified_content;
				$__Context->modified_summ = $__Context->oHiswikiModel->doSummary($__Context->modified, 40);
				 ?>
					-->
				<?php } ?>
				
				<tr class="newest">
					<!--
					<?php 
					$__Context->hiswikiDoc = $__Context->oHiswikiModel->getHiswikiDoc($__Context->document_srl);
					$__Context->document = $__Context->oDocumentModel->getDocument($__Context->document_srl);
					$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->document->get('module_srl'), $__Context->document->get('document_srl'));
					$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
					 ?>
					-->
					<td>&gt;&gt;</td>
					<td><?php echo $__Context->document->get('document_srl') ?></td>
					<td class="title">
						<a href="./" class="fontBold see_more">
							<?php echo $__Context->modified_summ ?>
						</a>
					</td>
					<td><?php echo $__Context->hiswikiDoc->data[0]->version ?></td>
					<td title="<?php echo $__Context->document->getRegdate('H:i:s') ?>"><?php echo $__Context->document->getRegdate('Y-m-d') ?></td>
					<td>
						<a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>"><?php echo $__Context->extra_vars[3]->nick_name ?></a>
					</td>
					<td>
						<a href="<?php echo getUrl('', 'document_srl', $__Context->document->get('document_srl')) ?>">보기</a>
					</td>
				</tr>
				<tr class="see_more" style="display:none;">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td colspan="5" class="title">
						<?php echo $__Context->modified ?>
					</td>
				</tr>
			</tbody>
		</table>
	<?php } ?>
	<div align="right">
		<a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicView','document_srl',$__Context->origin,'') ?>">뒤로가기</a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>