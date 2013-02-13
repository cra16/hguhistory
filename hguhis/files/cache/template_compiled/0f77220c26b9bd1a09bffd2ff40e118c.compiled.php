<?php if(!defined("__XE__"))exit;?><!--현희-->
<!-- 수정 by 인호 -->
<!-- @modifier 바람꽃(wndflwr@gmail.com) -->
<!-- 현희 수정  -->
<style>
#front_page div.fl {
	float:left;
}
#front_page div.clear {
	clear:both;
}
#front_page div.width50p {
	width:50%;
}
#front_page div.margin10px {
	margin:0 5px 0 5px;
}
#front_page h3.h3 {
	padding: 0 0 4px 10px;
	margin: 10px 0 0 0;
	background-color: transparent;
	border-bottom: 2px solid #cccccc;
}
#front_page div.lists div.list ul {
	height:190px;
	overflow:hidden;
	padding: 0;
	list-style: none;
	margin: 0 0 0 0;
}
#front_page div.lists div.list ul li {
	height:18px;
	overflow:hidden;
	padding: 7px 0 5px 35px;
	border-bottom:1px solid rgb(221, 221, 221);
	background:url(modules/hiswiki/skins/default/img/dot_gray.png) no-repeat 18px;
}
#front_page div.lists div.list ul li a {
	color:black;
	text-decoration:none;
}
#front_page div.lists div.list ul li a:hover {
	text-decoration:underline;
}
#front_page div.front_page_content {
	margin:10px 0 10px 0;
}
#front_page div.front_page_setting {
	margin:0 0 25px 0;
	text-align:right;
}
#front_page p.tag_collection {
	margin:10px;
}
#front_page .fr {
	float:right;
}
a:link {text-decoration:none;color:#0000FF;}
a:visited {color:#8B008B;}
</style>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="front_page">
	
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
	<div class="block main_view">
		<div class="front_page">
			<div class="front_page_content"><?php echo $__Context->front_page ?></div>
			<?php if($__Context->grant_info->manager){ ?><div class="front_page_setting">
				<a href="<?php echo getUrl('act', 'dispHiswikiModifyFrontPage', 'module_srl', $__Context->module_info->module_srl) ?>" class="btn">페이지 설정</a>
			</div><?php } ?>
		</div>
	</div>
	<div class="block lists">
		<div class="fl list newest width50p">
			<div class="margin10px">
				<h3 class="h3">최근 등록 글</h3>
				<ul>
					<?php if($__Context->newestDocList&&count($__Context->newestDocList))foreach($__Context->newestDocList as $__Context->val){ ?><li>
						<a href="<?php echo getUrl('act', 'dispHiswikiTopicView', 'document_srl', $__Context->val->get('document_srl')) ?>" ><?php echo $__Context->val->getTitleText(50) ?></a>
						<span class="fr read_count"><?php echo $__Context->val->get('readed_count') ?></span>
						<div class="clear"></div>
					</li><?php } ?>
				</ul>
			</div>
		</div>
		<div class="fl list best width50p">
			<div class="margin10px">
				<h3 class="h3">최근 인기 글</h3>
				<ul>
					<?php if($__Context->popDocList&&count($__Context->popDocList))foreach($__Context->popDocList as $__Context->val){ ?><li>
						<a href="<?php echo getUrl('act', 'dispHiswikiTopicView', 'document_srl', $__Context->val->get('document_srl')) ?>"><?php echo $__Context->val->getTitleText(50) ?></a>
						<span class="fr read_count"><?php echo $__Context->val->get('readed_count') ?></span>
						<div class="clear"></div>
					</li><?php } ?>
				</ul>
			</div>
		</div>
		<div class="fl list request width50p">
			<div class="margin10px">
				<h3 class="h3">최근 등록 및 수정 요청 글</h3>
				<ul>
					<?php if($__Context->requestDocList&&count($__Context->requestDocList))foreach($__Context->requestDocList as $__Context->val){ ?><li>
						<a href="<?php echo getUrl('', 'document_srl', $__Context->val->get('document_srl')) ?>"><?php echo $__Context->val->getTitleText(50) ?></a>
						<span class="fr read_count"><?php echo $__Context->val->get('readed_count') ?></span>
						<div class="clear"></div>
					</li><?php } ?>
				</ul>
			</div>
		</div>
		<div class="fl list best_tag width50p">
			<div class="margin10px">
				<h3 class="h3">인기 태그</h3>
				<p class="tag_collection">
					<?php if($__Context->popTagList&&count($__Context->popTagList))foreach($__Context->popTagList as $__Context->key=>$__Context->val){ ?>
						<?php if($__Context->key){ ?><span>, </span><?php } ?>
						<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_target', 'tag', 'search_keyword', $__Context->val->tag) ?>"<?php if($__Context->val->count>9&&$__Context->val->count<20){ ?> class="tagLv10"<?php } ?>><?php echo $__Context->val->tag ?></a>
					<?php } ?>
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="btnArea">
		<?php if($__Context->grant_info->write){ ?><a href="<?php echo getUrl('act','dispHiswikiTopicWrite', 'document_srl', '') ?>" class="btn fr">새 주제 등록</a><?php } ?>
		<?php if($__Context->grant_info->manager){ ?><a href="<?php echo getUrl('act', 'dispHiswikiAdminModuleInfo') ?>" class="btn fr">모듈 설정</a><?php } ?>
	</div>
</div>
