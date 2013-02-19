<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/hiswiki/skins/default/css/search_box.css--><?php $__tmp=array('modules/hiswiki/skins/default/css/search_box.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<div id="hiswiki_searchbox" class="search_box">
	<form method="get" action="./"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="submit" value="검색" class="fr btn" />
		<input type="text" name="search_keyword" class="fr" id="hiswiki_search_keyword" value="<?php echo $__Context->search_keyword ?>" />
		<div class="clear"></div>
		<input type="hidden" name="act" value="dispHiswikiSearchResult" />
		<input type="hidden" name="error_return_url" value="" />
	</form>
</div>
<div class="dummy" style="display:none;">
	<div class="hiswiki_qsbox" id="hiswiki_qsbox" style="position:absolute;">
		<ul>
		</ul>
		<div class="hiswiki_close_window">결과 창 닫기</div>
	</div>
</div>