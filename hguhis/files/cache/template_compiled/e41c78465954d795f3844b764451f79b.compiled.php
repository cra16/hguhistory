<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/hiswiki/skins/default/css/category_list.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/category_list.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/hiswiki/skins/default/js/category_list.js--><?php $__tmp=array('modules/hiswiki/skins/default/js/category_list.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php 	$__Context->oHiswikiView = &getView('hiswiki');
	$__Context->oHiswikiView->getCategoryList();
 ?>
<?php if($__Context->category_html){ ?><div id="hiswiki_category">
	<div class="current_path">
		<ul class="category_path">
			<li class="fl">
				<a href="<?php echo getUrl('', 'mid', $__Context->module_info->mid, 'act', 'dispHiswikiContentList', 'category_srl', '0') ?>">전체분류</a>
			</li>
			<?php if($__Context->category_path&&count($__Context->category_path))foreach($__Context->category_path as $__Context->val){ ?><li class="fl">
				&nbsp;&gt; <a href="<?php echo getUrl('', 'act', 'dispHiswikiContentList', 'category_srl', $__Context->val->category_srl) ?>"><?php echo $__Context->val->text ?></a>
			</li><?php } ?>
			<li class="fr" id="see_all_category">
				<a href="#category_list" class="see_all_category">카테고리 전체보기</a>
				<img src="/git/hguhistory/hguhis/modules/hiswiki/skins/default/img/dummy.gif" class="see_all_category" />
			</li>
			<li class="fr">
				<a href="<?php echo getUrl('', 'mid', $__Context->module_info->mid) ?>">메인 페이지로</a>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
	<a name="category_list"></a>
	<div class="category_list" style="display:none;">
		<?php echo $__Context->category_html ?>
	</div>
</div><?php } ?>