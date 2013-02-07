/**
 * @author 지희
 * @brief write의 제목이 겹치지 않도록 한다
 */
jQuery(function($) {
	var t;
	
	function checkTitle(obj) {
		var mc = new MyMethodCall('hiswiki', 'getHiswikiTitle');
		mc.addElement ('title',obj.val());
		var title = obj.val();
		mc.callAjax(function(data){ 
			$(".warning").hide();
			var item = $(data).find('item');
			var topic = item.find('topic');
			if (topic.length) {
				$(".warning").show();
				$(".submit").click(function() {
					alert("존재하는 제목입니다. 다른제목을 작성해주세요");
					return false;ㅍ
				});
			} else {
				$(".warning").hide();
				$(".submit").unbind();
			}
		});
	}
		
	$(".hiswiki_history").click(function() {
		alert('hey');
		$(".topic_history").show();
	});
	
	$(".del_date").click(function(){
		$(this).siblings("input").val("");
	});
	
	$(document).ready(function() {
		// 검색 박스에 검색어 입력 시 연관항목 리스트로 보여주기
		/*
		$('#hiswiki_search_keyword').click(function() {
			searchNdisplay($(this));
		});
		*/
		// 검색을 하면 몇 초 간격 뒤에 검색 실행
		$('#title').focusout(function() {
			checkTitle($($(this)));
		});
	});
	

	
	
});
