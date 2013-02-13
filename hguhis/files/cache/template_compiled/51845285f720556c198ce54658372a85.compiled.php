<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!-- 현희 -->
<style type="text/css">
.outerDiv {
	margin: 20px 20px 20px 20px;
}
.contentList  .listHeading {
	font-size:12pt;
	border: 1px dotted rgb(220, 220, 220);
	background-color: whitesmoke;
	
	}
	
.num,.title,.regdate,.nickName,.readCount{
	padding: 5px 5px 5px 5px;
	text-align: center;
}
.hwTable .num{width:10px;}
.hwTable .title{width:280px;}
.hwTable .regdate{width:150px;}
.hwTable .nickName{width:150px;}
.hwTable .readCount{width:5px;}
.hwTable .document_list .title{text-decoration:none;}
.pageDiv{align:center;}
</style>
<div class="outerDiv">
	<table class="contentList">
		<thead class="hwTable">
			<tr class="listHeading">
				<th class="num">No</th>
				<th class="title">Title</th>
				<th class="regdate">Regdate</th>
				<th class="nickName">Nick Name</th>
				<th class="readCount">Read</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key=>$__Context->val){ ?><tr class="document_list">
				<td class="num"><?php echo $__Context->key ?></td>
				<td class="title"><a href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a></td>
				<td class="regdate"><?php echo $__Context->val->getRegdate('Y.m.d') ?></td>
				<td class="nickName"><?php echo $__Context->val->getNickName() ?></td>
				<td class="readCount"><?php echo $__Context->val->get('readed_count') ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<!-- page navigation -->
	<div class="pageDiv" align="center";>
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="btn">처음</a>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong>
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"><?php echo $__Context->page_no ?></a>
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="btn">맨끝</a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
