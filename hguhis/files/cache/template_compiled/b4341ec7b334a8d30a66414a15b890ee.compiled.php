<?php if(!defined("__XE__"))exit;?><!--지희 글의 내용을 본다-->
<!-- 현희 -->
<style>
div.document_view li {
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
	margin: 8px 3px 0px 3px;
}
.hwBlock {
	margin: 5px 2px 5px 2px;
	padding: 3px 20px 12px 18px;
	font-size: 100%;
	vertical-align: baseline;
	background-image: url("<?php echo geturl() ?>modules/hiswiki/skins/default/img/rockywall.png");
	border: 1px dotted rgb(209, 209, 209);
}
.tag{margin: 3px 5px 3px -30px;}
.a:link{font-color:rgb(0, 0, 255);text-decoration:none;}
.tagIcon{padding:0px 3px 0px 0px;}
.s-e_date {margin:5px 5px 5px 4px;font-size:10pt;color:#808080;}
.hwContent{padding: 10px 15px 5px 15px;font-size: 10pt;align:left;}
</style>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<div id="topic_view">
	<hr style="color:black" height="2px">
	<br />
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
		<br />
		<hr style="color:black" height="1px">
		<?php  $__Context->tag_list = $__Context->document->get('tag_list')  ?>
		<?php if($__Context->tag_list){ ?><div class="tag">
			<ul>
				<li>
					<img src="/git/hguhistory/hguhis/modules/hiswiki/skins/default/img/Tag_icon.png" alt="<?php echo $__Context->lang->tag ?>" width="20" height="15" class="tagIcon" />
				</li>
				<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->key=>$__Context->val){ ?><li>
					<?php if($__Context->key){ ?>,<?php } ?>
					<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_target', 'tag', 'search_keyword', $__Context->val) ?>" rel="tag">
						<?php echo htmlspecialchars($__Context->val) ?>
					</a>
				</li><?php } ?>
			</ul>
			<div class="clear"></div>
		</div><?php } ?>
		<div class="btnArea">
			<a class="btn" href="<?php echo getUrl('act','dispHiswikiHistoryView','document_srl',$__Context->document->document_srl,'') ?>">히스토리</a>
			<a class="btn" href="<?php echo getUrl('document_srl','') ?>">목록</a>
			<?php if($__Context->document->isEditable()){ ?><a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicWrite','document_srl',$__Context->document->document_srl,'') ?>">수정</a><?php } ?>
			<?php if($__Context->document->isEditable()){ ?><a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicDelete','document_srl',$__Context->document->document_srl,'') ?>">삭제</a><?php } ?>
		</div>
	</div>
</div>
