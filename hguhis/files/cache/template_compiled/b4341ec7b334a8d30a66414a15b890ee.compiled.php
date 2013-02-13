<?php if(!defined("__XE__"))exit;?><!--지희 글의 내용을 본다-->
<!-- 현희 -->
<style>
div.document_view li {
	list-style:none;
	position:relative;
	float:left;
	padding-left:4px;	
}
div.clear {
	clear:both;
}
.hwRegdate {
	font-size: 9pt;
	margin: 10px 2px 7px 0px;
}
.hwTitle {
	font-size: 15pt;
	margin: 8px 3px 8px 3px;
}
.hwBlock {
	margin: 5px 2px 5px 2px;
	padding: 0px 17px 6px 15px;
	font-size: 100%;
	vertical-align: baseline;
	background-color: whitesmoke;
	border: 2px dotted rgb(209, 209, 209);
}
.tag{margin: 3px 5px 3px -30px;}
.tag:link{font-color:black;}
.s-e_date {margin: 7px 5px 5px 4px;font-size:10pt;}
.hwContent{padding: 10px 15px 5px 15px;font-size: 10pt;align:left;}
</style>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<div id="topic_view">
	<div class = header>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
	</div>
	<hr style="color:black" height="2px">
	</br>
	<div class="document_view">
		<!--올라온 글의 내용을 본다-->
		<div>
		<div class="hwBlock">
			<h3 class="hwTitle"><?php echo $__Context->document->getTitle() ?></h3>
		<div class="s-e_date">
			<?php if($__Context->extra_vars[1]->value){ ?><span>Start Date:</span><?php } ?> 
			<?php if($__Context->extra_vars[1]->value){ ?><span><?php echo zdate($__Context->extra_vars[1]->value."000000",'Y-m-d') ?></span><?php } ?> 
			<?php if($__Context->extra_vars[1]->value&&$__Context->extra_vars[2]->value){ ?><span>|</span><?php } ?> 
			<?php if($__Context->extra_vars[2]->value){ ?><span>End Date:</span><?php } ?> 
			<?php if($__Context->extra_vars[2]->value){ ?><span><?php echo zdate($__Context->extra_vars[2]->value."000000",'Y-m-d') ?></span><?php } ?>
		</div>
		</div>			
			<div class="hwRegdate" align="right">
				<span>글쓴이: <?php echo $__Context->document->getNickName() ?>&nbsp;|</span>
				<span></span><span>등록일:
					<?php echo $__Context->document->getRegdate() ?></span>
			</div>
			<div class="hwContent"><?php echo $__Context->document->getContent(false,false,false,false,false) ?></div>
		</div>
		</br>
		<hr style="color:black" height="1px">
		<?php  $__Context->tag_list = $__Context->document->get('tag_list')  ?>
		<?php if(count($__Context->tag_list)){ ?>
		<div class="tag">
			<ul>
				<li>
				<img src="/git/hguhistory/hguhis/modules/hiswiki/skins/default/img/iconTag.gif" alt="<?php echo $__Context->lang->tag ?>" width="17" height="10" class="tagIcon" />
				<?php for($__Context->i=0;$__Context->i<count($__Context->tag_list);$__Context->i++){ ?>
				<?php  $__Context->tag = $__Context->tag_list[$__Context->i];  ?>
				<a
					href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>"
					rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a><?php if($__Context->i<count($__Context->tag_list)-1){ ?>,&nbsp;<?php } ?> </li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<?php } ?>
		<div class="btnArea">
			<a class="btn" href="<?php echo getUrl('act','dispHiswikiHistoryView','document_srl',$__Context->document->document_srl,'') ?>">히스토리</a>
			<a class="btn" href="<?php echo getUrl('document_srl','') ?>">목록
			</a>
        	<?php if($__Context->document->isEditable()){ ?>
			<a class="btn"
				href="<?php echo getUrl('act','dispHiswikiTopicWrite','document_srl',$__Context->document->document_srl,'') ?>">수정
			</a>
			<a class="btn"
				href="<?php echo getUrl('act','dispHiswikiTopicDelete','document_srl',$__Context->document->document_srl,'') ?>">삭제
			</a>
				<?php } ?>
		</div>
	</div>
</div>