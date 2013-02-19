<?php if(!defined("__XE__"))exit;?><div class="hiswiki_container">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/search_result.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/search_result.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--
<?php 
$__Context->oHiswikiModel = &getModel('hiswiki');
$__Context->oMemberModel = &getModel('member');
 ?>
-->
<div id="hiswiki_sr" class="outerDiv">
	<div class="ResultDiv">
		<h3 class="ResultHeading fl">표제어 검색 결과</h3>
		<a class="btn fontPt fr padding_right" href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'title') ?>">더보기</a>
		<div class="clear"></div>	
		<?php if($__Context->search_results_title&&count($__Context->search_results_title))foreach($__Context->search_results_title as $__Context->val){ ?><div class="ResultViewDiv">
			
			<!--
			<?php 
			$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->val->get('module_srl'), $__Context->val->get('document_srl'));
			$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
			 ?>
			-->	
			<h3 class="hwTitle">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a>
			</h3>
			<div class="hwContent">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a>
			</div>
			<div class="updateInfo">
				<span class="regdate" title="<?php echo $__Context->val->getRegdate('H:i:s') ?>">문서 작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="nickName member_<?php echo $__Context->val->get('member_srl') ?>">| 책임자 <a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>"><?php echo $__Context->extra_vars[3]->nick_name ?></a></span>
				<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div>
		</div><?php } ?>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading fl">내용 검색 결과</h3>
		<a class="btn fontPt fr padding_right" href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'content') ?>">더보기</a>
		<div class="clear"></div>
		<?php if($__Context->search_results_content&&count($__Context->search_results_content))foreach($__Context->search_results_content as $__Context->val){ ?><div class="ResultViewDiv">
			
			<!--
			<?php 
			$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->val->get('module_srl'), $__Context->val->get('document_srl'));
			$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
			 ?>
			-->				
			<h3 class="hwTitle">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a>
			</h3>
			<div class="hwContent">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a>
			</div>
			<div class="updateInfo">
				<span class="regdate" title="<?php echo $__Context->val->getRegdate('H:i:s') ?>">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="nickName">| 책임자 <a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>"><?php echo $__Context->extra_vars[3]->nick_name ?></a></span> 
				<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div>
		</div><?php } ?>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading fl">태그 검색 결과</h3>
		<a class="btn fontPt fr padding_right" href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'tag') ?>">더보기</a>
		<div class="clear"></div>
		<?php if($__Context->search_results_tags&&count($__Context->search_results_tags))foreach($__Context->search_results_tags as $__Context->val){ ?><div class="ResultViewDiv">
			
			<!--
			<?php 
			$__Context->extra_vars = $__Context->oHiswikiModel->getHiswikiExtraVars($__Context->val->get('module_srl'), $__Context->val->get('document_srl'));
			$__Context->extra_vars[3] = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->extra_vars[3]->value, 0, array('member_srl', 'user_id', 'user_name', 'nick_name', 'email_address'));
			 ?>
			-->				
			<h3 class="hwTitle">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a>
			</h3>
			<div class="hwContent">
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a>
			</div>
			<div class="updateInfo">
				<span class="regdate" title="<?php echo $__Context->val->getRegdate('H:i:s') ?>">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="nickName">| 책임자 <a href="<?php echo getUrl('', 'act', 'dispMemberInfo', 'member_srl', $__Context->extra_vars[3]->member_srl) ?>" class="member_<?php echo $__Context->extra_vars[3]->member_srl ?>"><?php echo $__Context->extra_vars[3]->nick_name ?></a></span> 
				<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div>
		</div><?php } ?>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>