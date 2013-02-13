<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!-- 현희 -->
<style type="text/css">
.ResultDiv {
	padding: 1px 15px 19px 15px;
	border: rgb(238, 238, 238) solid 4px;
}
.ResultHeading {
	font-size: 13pt;
	margin: 13px 11px 12px 2px;
}
.outerDiv .ResultViewDiv {
	margin: 0px 6px 4px 2px;
	padding: 7px 21px 19px 21px;
	font-weight: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
	background-color: whitesmoke;
	border: 1px dotted rgb(202, 202, 202);
}
.ResultViewDiv:hover {
	background-color: rgb(220, 220, 220);
	cursor: pointer;
}
.ResultViewDiv:actived {
	font-color:
}
.ResultViewDiv:visited {
	font-color: red;
}
.documentLink {
	text-decoration: none;
}
.hwTitle {
	font-size: 12pt;
	font-style: bold;
	margin: 8px 5px 3px -1px;
}
.hwContent {
	font-size: 11pt;
}
.regdate {
	font-size: 9pt;
}
.addBtn {margin: 7px 5px -4px 6px;}
</style>
<div class="outerDiv">
	<div class="ResultDiv">
		<h3 class="ResultHeading">표제어 검색 결과</h3>					
			<?php if($__Context->search_results_title&&count($__Context->search_results_title))foreach($__Context->search_results_title as $__Context->val){ ?><div class="ResultViewDiv">
				<h3 class="hwTitle"><a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a></h3>
				<div class="hwContent"><a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a></div>
				<div class="ResultContent">
					<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
					<span class="regdate">| 작성자 <?php echo $__Context->val->getNickName() ?></span>
					<span class="regdate">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
					<span class="regdate">| 태그 <?php echo $__Context->val->get('tags') ?></span>
				</div>
			</div><?php } ?>
		<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'title') ?>" class="btn">더보기</a>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading">내용 검색 결과</h3>
		<?php if($__Context->search_results_content&&count($__Context->search_results_content))foreach($__Context->search_results_content as $__Context->val){ ?><div class="ResultViewDiv">
			<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
				<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
				<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
			<div>
				<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="regdate">| 작성자 <?php echo $__Context->val->getNickName() ?></span> 
				<span class="regdate">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="regdate">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div></a>
		</div><?php } ?>
			<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'content') ?>" class="btn">더보기</a>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading"><h3>태그 검색 결과</h3>
		<?php if($__Context->search_results_tags&&count($__Context->search_results_tags))foreach($__Context->search_results_tags as $__Context->val){ ?><div class="ResultViewDiv">
			<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
				<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
				<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
			<div>
				<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span>
				<span class="regdate">| 작성자 <?php echo $__Context->val->getNickName() ?></span> 
				<span class="regdate">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> 
				<span class="regdate">| 태그 <?php echo $__Context->val->get('tags') ?></span>
			</div></a>
		</div><?php } ?>
		<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'tag') ?>" class="btn">더보기</a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>