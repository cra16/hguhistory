<?php if(!defined("__XE__"))exit;?>
<style>
	div.hiswiki_category ul.category_path {
		padding:0 0 0 0;
	}
	div.hiswiki_category ul.category_path li {
		list-style:none;
		margin-left:10px;
	}
	div.hiswiki_category ul.category_path li.fl {
		float:left;
	}
	div.hiswiki_category ul.category_path li.fr {
		float:right;
	}
	.clear {
		clear:both;
	}
	div.hiswiki_category div.category_list {
		margin: 10px 0px 20px 0px;
	}
	div.hiswiki_category div.category_list ul {
		padding: 0 0 0 25px;
	}
	div.hiswiki_category div.category_list ul li {
		list-style:none;
		line-height:270%;
		padding:0 0 0 30px;
		background:#ffffff url(modules/hiswiki/skins/default/img/arrow_right.gif) no-repeat left;
		border-bottom: 1px solid rgb(230, 230, 230);
		margin-right: 20px;
	} 
	div.hiswiki_category div.category_list ul li:hover {
		background-color:rgb(255, 255, 224);
	}
	div.hiswiki_category div.current_path {
		margin: 0 0 15px 0;
		line-height: 200%;
	}
	div.hiswiki_category a:link {
		text-decoration:none;
		color:black;
	}
	div.hiswiki_category a:hover {
		text-decoration:underline;
	}
	div.hiswiki_category a:visited {
		color:rgb(104, 104, 104);;
	}
	
	div.hiswiki_category img.see_all_category {
		height:13px;
		width:13px;
		background-color:#ffffff;
		background-image: url(modules/hiswiki/skins/default/img/category_open.gif);
		background-repeat: no-repeat;
		background-position: center;
	}
</style>
<?php if($__Context->category_html){ ?><div class="hiswiki_category">
	<div class="current_path">
		<ul class="category_path">
			<li class="fl">
				<a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'category_srl', '0') ?>">전체분류</a>
			</li>
			<?php if($__Context->category_path&&count($__Context->category_path))foreach($__Context->category_path as $__Context->val){ ?><li class="fl">
				&nbsp;&gt; <a href="<?php echo getUrl('act', 'dispHiswikiContentList', 'category_srl', $__Context->val->category_srl) ?>"><?php echo $__Context->val->text ?></a>
			</li><?php } ?>
			<li class="fr" id="see_all_category">
				<a href="#category_list" class="see_all_category">카테고리 전체보기</a>
				<img src="/git/hguhistory/hguhis/modules/hiswiki/skins/default/img/dummy.gif" class="see_all_category" />
			</li>
			<li class="fr">
				<a href="<?php echo getUrl('act', 'dispHiswikiFrontPage') ?>">메인</a>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
	<a name="category_list"></a>
	<div class="category_list" style="display:none;">
		<?php echo $__Context->category_html ?>
	</div>
</div><?php } ?>
<script type="text/javascript">
jQuery(function($) {
	$(document).ready(function() {
		$('#see_all_category').click(function() {
			var $category_list = $('div.category_list');
			if ($category_list.css('display') == 'none') {
				$category_list.slideDown();
				$('img.see_all_category').css('background-image', 'url(modules/hiswiki/skins/default/img/category_close.gif)');
			}
			else {
				$category_list.slideUp();
				$('img.see_all_category').css('background-image', 'url(modules/hiswiki/skins/default/img/category_open.gif)');
			}
			return false;
		});
	});
});
</script>
