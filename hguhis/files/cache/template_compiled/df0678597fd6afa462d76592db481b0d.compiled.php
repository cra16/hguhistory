<?php if(!defined("__XE__"))exit;?><div id="hiswiki_searchbox" class="search_box">
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
<script type="text/javascript">
jQuery(function($) {
	var t;
	
	function searchNdisplay(obj) {
		var mc = new MyMethodCall('hiswiki', 'getHiswikiSearchKeyword');
		mc.addElement('search_keyword', $(obj).val());
		mc.callAjax(function(data) {
			$('.hiswiki_qsbox_clone').remove();
			var hiswiki_qsbox = $('#hiswiki_qsbox').clone(true);
			$(data).find('item').each(function() {
				console.log($(data));
				var li = $('<li/>', {
					text:$(this).find('topic').text()
				});
				hiswiki_qsbox.find('ul').append(li);
			});
			
			hiswiki_qsbox.removeAttr('id');
			hiswiki_qsbox.width(obj.width());
			var pos = obj.offset();
			hiswiki_qsbox.css('top', (pos.top + obj.height() + 5) + 'px')
			hiswiki_qsbox.css('left', pos.left + 'px').css('z-index', 999);
			hiswiki_qsbox.addClass('hiswiki_qsbox_clone');
			
			$('body').append(hiswiki_qsbox);
		});
	}
	
	$(document).ready(function() {
		// 검색을 하면 몇 초 간격 뒤에 검색 실행
		$('#hiswiki_search_keyword').keyup(function() {
			clearTimeout(t);
			var $search_keyword = this
			t = setTimeout(function() {
				searchNdisplay($($search_keyword));
			}, 1000);
		});
		
		$('.hiswiki_close_window').click(function() {
			$('.hiswiki_qsbox_clone').remove();
		});
	});
});
</script>
