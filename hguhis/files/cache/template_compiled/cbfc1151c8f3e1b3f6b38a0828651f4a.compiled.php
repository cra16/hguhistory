<?php if(!defined("__XE__"))exit;?><!--지희 히스토리 목록들을 본다-->
<!--#Meta:modules/hiswiki/skins/default/js/MyMethodCall.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/MyMethodCall.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/css/hiswiki_common.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/hiswiki_common.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<style>
div.document_view li {
	list-style: none;
	position: relative;
	float: left;
	padding-left: 4px;
}
div.clear {
	clear: both;
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
	padding: 4px 10px 16px 17px;
	font-size: 100%;
	vertical-align: baseline;
	background-color: whitesmoke;
	border: 2px dotted rgb(209, 209, 209);
}
.tag {
	margin: 3px 5px 3px -30px;
}
.tag:link {
	font-color: black;
}
.s-e_date {
	margin: 7px 5px 5px 4px;
	font-size: 10pt;
}
.hwContent {
	padding: 10px 15px 5px 15px;
	font-size: 10pt;
	align: left;
}
.data_version{
	color:blue;text-decoration:underline;cursor:pointer;
}
.fold{
	color:blue;text-decoration:underline;cursor:pointer;
	align:right;
}
</style>
<div class="versions">
	<?php if(!count($__Context->hiswikiHistory->data)){ ?>
		<h2>히스토리가 존재하지 않는 문서입니다</h2>
	<?php } ?>	
	<?php if(count($__Context->hiswikiHistory->data)){ ?>
	<span>버젼:</span>	
	<?php for($__Context->i=0;$__Context->i<count($__Context->hiswikiHistory->data);$__Context->i++){ ?>
		<span class="data_version" version="<?php echo $__Context->i ?>"><?php echo $__Context->hiswikiHistory->data[$__Context->i]->version ?>&nbsp;</span>
	<?php } ?>
	<?php } ?>
	<br/>
	<br/>
	<hr color="black">
	<?php for($__Context->i=0;$__Context->i<count($__Context->hiswikiHistory->data);$__Context->i++){ ?>
			<?php $__Context->documentModel = &getModel('document'); ?>
			<?php $__Context->document=$__Context->documentModel->getDocument($__Context->hiswikiHistory->data[$__Context->i]->document_srl,false) ?>
			<?php $__Context->hiswikiModel = &getModel('hiswiki'); ?>
			<?php $__Context->extra_vars = $__Context->hiswikiModel->getHiswikiExtraVars($__Context->document->get('document_srl'))->data ?>
	<div class="history_view" version="<?php echo $__Context->i ?>" style="display:none">
		<div id="topic_view">
			</br>
			<div class="document_view">
				<!--올라온 글의 내용을 본다-->
				<div>
				<div>
					<h4>버젼:<?php echo $__Context->hiswikiHistory->data[$__Context->i]->version ?></h4>
				</div>
				<div class="hwBlock">
					<h3 class="hwTitle"><?php echo $__Context->document->getTitle() ?></h3>
				<div class="s-e_date">
					<?php if($__Context->extra_vars[0]->value){ ?><span>Start Date:</span><?php } ?> 
					<?php if($__Context->extra_vars[0]->value){ ?><span><?php echo zdate($__Context->extra_vars[0]->value."000000",'Y-m-d') ?></span><?php } ?> 
					<?php if($__Context->extra_vars[0]->value&&$__Context->extra_vars[1]->value){ ?><span>|</span><?php } ?> 
					<?php if($__Context->extra_vars[1]->value){ ?><span>End Date:</span><?php } ?> 
					<?php if($__Context->extra_vars[1]->value){ ?><span><?php echo zdate($__Context->extra_vars[1]->value."000000",'Y-m-d') ?></span><?php } ?>
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
				<div class="fold" version="<?php echo $__Context->i ?>" align="right">접기</div>		
				<hr style="color:black" height="1px">
			</div>
		</div>
	</div>
	<?php } ?>
	<div align="right">
		<a class="btn" href="<?php echo getUrl('act','dispHiswikiTopicView','document_srl',$__Context->origin,'') ?>">뒤로가기</a>
	</div>
</div>
<script type="text/javascript">
jQuery(function($) {
	$(".data_version").click(function() {
		var version = $(this).attr('version');
		$(".history_view[version='" + version + "']").show();
	});
	$(".fold").click(function(){
		var version = $(this).attr('version');
		$(".history_view[version='" + version + "']").hide();
	});
});
</script>