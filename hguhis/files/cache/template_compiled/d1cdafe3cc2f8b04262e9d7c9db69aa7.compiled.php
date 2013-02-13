<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!-- 현희 -->
<style type="text/css">
.ResultDiv {
	padding: 1px 15px 19px 15px;
	border: rgb(201, 201, 201) dotted 1px;
}
.ResultHeading {
	font-size: 13pt;
	margin: 13px 11px 12px 2px;
}
.fontPt{margin:0 0 0 8px;font-size:10pt;}
.outerDiv .ResultViewDiv {
	margin: 0px 6px 4px 2px;
	padding: 7px 21px 19px 21px;
	font-weight: inherit;
	font-size: 100%;
	font-family: 돋움, dotum, sans-serif;
	vertical-align: baseline;
	background-image: url("<?php echo geturl() ?>modules/hiswiki/skins/default/img/ecailles.png");
	border: 1px dotted rgb(202, 202, 202);
}
.ResultViewDiv:hover {
	background-image: url("<?php echo geturl() ?>modules/hiswiki/skins/default/img/pw_maze_white.png");
	cursor: pointer;
}
.documentLink {
	text-decoration: none;
}
.hwTitle {
	font-size: 12pt;
	font-style: bold; 
	margin: 9px 6px -1px -1px;
}
.hwContent .ResultContent{font}
.hwContent{
	font-size: 11pt;
}
.updateInfo {font-size: 9pt;color:#808080;}
a:link {text-decoration:none;color:black;}
a:visited {color:rgb(73, 73, 73);}
a:hover {color:#A9A9A9;}
.addBtn {margin: 7px 5px -4px 6px;}
</style>
<div class="outerDiv">
	<div class="ResultDiv">
		<h3 class="ResultHeading">표제어 검색 결과<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'title') ?>" class="btn fontPt">더보기</a></h3>
						
			<?php if($__Context->search_results_title&&count($__Context->search_results_title))foreach($__Context->search_results_title as $__Context->val){ ?><div class="ResultViewDiv">
				<h3 class="hwTitle"><a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a></h3>
				<div class="hwContent"><a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a></div>
				<div class="updateInfo">
					<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
					<span class="nickName member_<?php echo $__Context->val->get('member_srl') ?>">| 작성자 <?php echo $__Context->val->getNickName() ?></span>
					<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
					<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
				</div>
			</div><?php } ?>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading">내용 검색 결과<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'content') ?>" class="btn fontPt">더보기</a></h3>
		<?php if($__Context->search_results_content&&count($__Context->search_results_content))foreach($__Context->search_results_content as $__Context->val){ ?><div class="ResultViewDiv">
			<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
				<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
				<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
			<div class="updateInfo">
				<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="nickName">| 작성자 <?php echo $__Context->val->getNickName() ?></span> 
				<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div></a>
		</div><?php } ?>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading"><h3>태그 검색 결과<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'tag') ?>" class="btn fontPt">더보기</a></h3>
		<?php if($__Context->search_results_tags&&count($__Context->search_results_tags))foreach($__Context->search_results_tags as $__Context->val){ ?><div class="ResultViewDiv">
			<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
				<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
				<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
			<div class="updateInfo">
				<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="nickName">| 작성자 <?php echo $__Context->val->getNickName() ?></span> 
				<span class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div></a>
		</div><?php } ?>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>