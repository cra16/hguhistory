(function($) {
	
	// 결과 출력해서 선택할 수 있도록 하기. (showResult);
	function onShowResult(items, position, iframe) {
		
		// 출력 div 생성하기
		var resultBox = $('<div/>', {
			id:'topicResultBox',
		});
		resultBox.css('position', 'absolute')
				.css('left', position.left + 'px')
				.css('top', (position.top + position.height) + 'px')
				.css('background-color', 'white')
				.css('border', '1px solid black')
				.addClass('topicResultBox');
		
		var resultList = $('<ul/>', {});
		items.each(function() {
			var listItem = $('<li/>', {
				text:$(this).find('topic').text()
			});
			resultList.append(listItem);
		});
		resultBox.append(resultList);
		
		// 원래 존재하던 녀석 없애기
		$('#topicResultBox').remove();
		
		// 삽입하고 이벤트 추가
		iframe.find('body').append(resultBox);
	}
	
	// 에디터 앱 추가
	xe.MyTest = $.Class({
		name : 'MyTest',
		$init: function(oAppContainer) {
			console.log('$init');
		},
		$ON_DO_BROWSER_EVENT_REG: function() {
			console.log('doing the brower elements event registration...');
			// 주제 연결 기능 HOT key 등록하기
			this.oApp.exec("REGISTER_HOTKEY", ['ctrl+j', 'LINK_TOPIC']);
		},
		$ON_LINK_TOPIC: function() {
			console.log('starting link topic...');
			// 선택된 녀석으로 쿼리해서 리스트 박스로 불러오기.
			// 선택된 Text의 내용 얻어내기
			mySelection = this.oApp.getSelection();
			var selectedText = mySelection.toString();
			if (!selectedText) return;
			
			// 선택된 텍스트의 위치 알아내기
			selectionPosition = rangy.getSelection(mySelection._window).getBoundingDocumentRect();
			
			// 선택된 텍스트의 iframe 알아내기
			var myIframe = $('iframe:first').contents();
			
			// 선택된 Text로 ajax query 조회
			var mc = new MyMethodCall('hiswiki', 'getHiswikiSearchKeyword');
			mc.addElement('search_keyword', selectedText);
			mc.callAjax(function(data) {
				var items = $(data).find('item');
				onShowResult(items, selectionPosition, myIframe);
			});
			// 결과 출력해서 선택할 수 있도록 하기. (showResult);
			// 결과물 선택 시 선택된 Text에 a 태그 적용
		}
	});
})(jQuery);

// 사용하기 버튼을 누르면 플러그인 등록시킨다.
jQuery(document).ready(function() {
	jQuery('.use_fast_link').click(function() {
		var ee = editorRelKeys[256]['editor'];
		ee.registerPlugin(new xe.MyTest(jQuery('form[editor_sequence="256"]')));
		ee.exec("DO_BROWSER_EVENT_REG");
	});
});