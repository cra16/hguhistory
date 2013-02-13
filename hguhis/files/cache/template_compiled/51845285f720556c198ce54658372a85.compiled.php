<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!-- 현희 -->
<style type="text/css">
.outerDiv {
	margin: 20px 20px 20px 20px;
}
.outerDiv .contentList{border-collapse:collapse;}
.pageDiv {
	margin: 20px;
}
.hwTable .listHeading {
	width: 400px;
}
.hwTable .listHeading th {
	color:#696969;
	text-align:center;
	border-top-width: 2px;
	border-bottom-width: 1px;
	border-top-style: solid;
	border-bottom-style: solid;
	font-weight: normal;
	font-size: 11px;
	font-family: 돋움, dotum, sans-serif;
	letter-spacing: -1px;
	border-color: #d5d5d5;
	padding: 6px 9px 4px 9px;
	border-collapse: collapse;
}
.hwTable .document_list {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-color: #d5d5d5;
}
.document_list td.alignCenter{text-align:center;}
.document_list td.title{text-align:left;padding-top:3px;padding-bottom:3px;}
.document_list td.decoNone {text-decoration:none;}
.document_list td {border-bottom-width:1px;border-collapse: collapse;}
a:link {text-decoration:none;color:black;}
a:visited {color:rgb(73, 73, 73);}
a:hover {color:#A9A9A9;}
</style>
<div class="outerDiv">
	<table class="contentList" width="100%">
		<thead class="hwTable">
			<tr class="listHeading">
				<th class="num" width="10%">번호</th>
				<th class="title" width="50%">제목</th>
				<th class="regdate" width="15%">작성일</th>
				<th class="nickName" width="15%">글쓴이</th>
				<th class="readCount" width="10%">조회</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key=>$__Context->val){ ?><tr class="document_list">
				<td class="num alignCenter"><?php echo $__Context->key ?></td>
				<td class="title"><a href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a></td>
				<td class="regdate alignCenter"><?php echo $__Context->val->getRegdate('Y.m.d') ?></td>
				<td class="nickName alignCenter member_<?php echo $__Context->val->get('member_srl') ?>"><?php echo $__Context->val->getNickName() ?></td>
				<td class="readCount alignCenter"><?php echo $__Context->val->get('readed_count') ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<!-- page navigation -->
	<div class="pageDiv" align="center">
		<a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="firstPage">처음</a>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong>
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"><?php echo $__Context->page_no ?></a>
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="lastPage">끝</a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
