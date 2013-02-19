<?php if(!defined("__XE__"))exit;?><div class="hiswiki_container">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/list.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/list.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!-- 현희 -->
<div id="hiswiki_list" class="outerDiv">
	<table class="contentList" width="100%">
		<thead class="hwTable">
			<tr class="listHeading">
				<th class="num" width="10%">번호</th>
				<th class="title" width="50%">제목</th>
				<th class="regdate" width="15%">등록일</th>
				<th class="nickName" width="15%">글쓴이</th>
				<th class="readCount" width="10%">조회</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key=>$__Context->val){ ?><tr class="document_list">
				
				<!--
				<?php 
				$__Context->oDocumentModel = &getModel('document');
				$__Context->oMemberModel = &getModel('member');
				$__Context->oHiswikiModel = &getModel('hiswiki');
				$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->val->get('module_srl'), $__Context->val->get('document_srl'));
				$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
				 ?>
				-->
				<td class="num alignCenter"><?php echo $__Context->key ?></td>
				<td class="title"><a href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a></td>
				<td class="regdate alignCenter"><?php echo $__Context->val->getRegdate('Y.m.d') ?></td>
				<td class="nickName alignCenter">
					<a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->val->get('member_srl') ?>">
						<?php echo $__Context->extra_vars[3]->nick_name ?>
					</a>
				</td>
				<td class="readCount alignCenter"><?php echo $__Context->val->get('readed_count') ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<!-- page navigation -->
	<div class="pageDiv" align="center">
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="firstPage">&lt;&lt; 처음</a>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong>
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"><?php echo $__Context->page_no ?></a>
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="lastPage">끝 &gt;&gt;</a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>