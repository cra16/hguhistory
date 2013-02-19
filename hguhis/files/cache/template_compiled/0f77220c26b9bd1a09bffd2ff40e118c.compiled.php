<?php if(!defined("__XE__"))exit;?><!-- @author 현희-->
<!-- @modifier 인호 -->
<!-- @modifier 바람꽃(wndflwr@gmail.com) -->
<!-- @modifier 현희 수정  -->
<div class="hiswiki_container">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!--#Meta:modules/hiswiki/skins/default/css/front_page.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/front_page.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="front_page">
	<div class="block main_view">
		<div class="front_page">
			<div class="front_page_content"><?php echo $__Context->front_page ?></div>
			<?php if($__Context->grant_info->manager){ ?><div class="front_page_setting">
				<a href="<?php echo getUrl('act', 'dispHiswikiModifyFrontPage', 'module_srl', $__Context->module_info->module_srl) ?>" class="btn">페이지 설정</a>
			</div><?php } ?>
		</div>
	</div>
	<div class="block lists">
		<div class="fl list notice width50p">
			<div class="margin10px">
				<h3 class="h3">
					<a href="<?php echo getUrl('', 'mid', $__Context->noticeDocListMid) ?>">공지 게시판</a>
				</h3>
				<ul>
					<?php if($__Context->noticeDocList&&count($__Context->noticeDocList))foreach($__Context->noticeDocList as $__Context->val){ ?><li>
						<a href="<?php echo getUrl('', 'document_srl', $__Context->val->get('document_srl')) ?>"><?php echo $__Context->val->getTitleText(50) ?></a>
						<span class="fr read_count"><?php echo $__Context->val->get('readed_count') ?></span>
						<div class="clear"></div>
					</li><?php } ?>
				</ul>
			</div>
		</div>
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
				<h3 class="h3"><a href="<?php echo getUrl('', 'mid', $__Context->requestDocListMid) ?>">최근 등록 및 수정 요청 글</a></h3>
				<ul>
					<?php if($__Context->requestDocList&&count($__Context->requestDocList))foreach($__Context->requestDocList as $__Context->val){ ?><li>
						<a href="<?php echo getUrl('', 'document_srl', $__Context->val->get('document_srl')) ?>"><?php echo $__Context->val->getTitleText(50) ?></a>
						<span class="fr read_count"><?php echo $__Context->val->get('readed_count') ?></span>
						<div class="clear"></div>
					</li><?php } ?>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="btnArea">
		<?php if($__Context->grant_info->write){ ?><a href="<?php echo getUrl('act','dispHiswikiTopicWrite', 'document_srl', '') ?>" class="btn fr">새 주제 등록</a><?php } ?>
		<?php if($__Context->grant_info->manager){ ?><a href="<?php echo getUrl('act', 'dispHiswikiAdminModuleInfo') ?>" class="btn fr">모듈 설정</a><?php } ?>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
</div>