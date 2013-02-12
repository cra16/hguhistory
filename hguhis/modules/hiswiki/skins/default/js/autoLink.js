/**
 * @file autoLink.js
 * @author 바람꽃(wndflwr@gmail.com)
 * @breif 에디터에서 새로운 플러그인으로 기능 추가시킴.
 * 단어를 선택한 다음 Ctrl + j 를 누르면 단어와 관련된 주제들이 나오고 쉽게 위키로 링크시킬 수 있다.
 */
var myEditor = null;
(function($) {
	
	// 에디터 앱 추가
	xe.AutoLink = $.Class({
		
		// 이름
		name : 'AutoLink',
		
		// 에디터 시퀀스
		editor_sequence:null,
		
		// 에디터 등록
		currentIframe: null,
		
		// 선택된 단어의 위치를 전역변수에 저장할 필요가 있다.
		savedSelection: null,
		
		// 선택박스 DOM 객체
		selectorBox: null,
		
		mySelection: null,
		
		// 박스의 상태
		boxStatus: {
			curPos:0,
			lastPos:0
		},
		
		// 초기화
		$init: function(editor_sequence) {
			this.editor_sequence = editor_sequence;
		},
		
		// 에디터에 Hot key 등록
		$ON_DO_BROWSER_EVENT_REG: function() {
			// 주제 연결 기능 HOT key 등록하기
			this.oApp.exec("REGISTER_HOTKEY", ['ctrl+j', 'LINK_TOPIC']);
		},
		
		// ctrl+j 눌렀을 때 선택된 단어로 쿼리해서 리스트 박스로 불러오기
		$ON_LINK_TOPIC: function() {
			// 선택된 Text의 내용 얻어내기
			this.mySelection = this.oApp.getSelection();
			var selectedText = this.mySelection.toString();
			
			// 선택된 텍스트가 없으면 취소
			if (!selectedText) return;
			
			// 전역변수에 선택 위치 저장하기
			if (this.savedSelection) rangy.removeMarkers(this.savedSelection);
			this.savedSelection = rangy.saveSelection();
			
			// 선택된 텍스트의 위치(top, left, width, height) 알아내기
			selectionPosition = rangy.getSelection(this.mySelection._window).getBoundingDocumentRect();
			
			// 선택된 텍스트의 iframe 알아내기
			this.currentIframe = $('form[editor_sequence=' + this.editor_sequence + ']').find('iframe:first').contents(); // TODO
			
			// 선택된 Text로 ajax query 조회
			var that = this;
			var mc = new MyMethodCall('hiswiki', 'getHiswikiSearchKeyword');
			mc.addElement('search_keyword', selectedText);
			mc.callAjax(function(data) {
				var items = $(data).find('item');
				that.oApp.exec('SHOW_RESULT', [items, selectionPosition]);
			});
			// 결과 출력해서 선택할 수 있도록 하기. (showResult);
			// 결과물 선택 시 선택된 Text에 a 태그 적용
		},
		
		// 조회된 쿼리들을 에디터 화면에 출력시키기
		$ON_SHOW_RESULT: function(items, position) {
			if (typeof this.currentIframe === 'null') return;
			// 선택박스 DOM 엘리먼트 생성하기
			var resultBox = $('<div/>', {
				id:'topicResultBox',
			});
			resultBox.css('position', 'absolute')
					.css('left', position.left + 'px')
					.css('top', (position.top + position.height) + 'px')
					.css('background-color', 'white')
					.css('border', '1px solid black')
					.css('position', 'absolute')
					.addClass('topicResultBox')
					.attr('contenteditable', 'false');
			
			var resultList = $('<ul/>', {});
			resultList.css('list-style', 'none')
					.css('padding', '0 0 0 0')
					.css('margin', '0 0 0 0');
			if (!items.length) {
				var aTag = $('<a/>', {
					href:autoLinkPack.dispHiswikiTopicWrite,
					text:autoLinkPack.no_topic_searched
				});
				var liTag = $('<li/>');
				liTag.append(aTag);
				resultList.append(liTag);
			} else {
				items.each(function() {
					var listItem = $('<li/>', {
						text:$(this).find('topic').text(),
						title:$(this).find('summary').text()
					});
					listItem.attr('permanentUrl', $(this).find('permanent_url').text()).addClass('liSel');
					//listItem.addClass('liSel');
					resultList.append(listItem);
				});
			}
			resultBox.append(resultList);
			
			// 원래 존재하던 녀석 없애기
			$(this.currentIframe).find('#topicResultBox').remove();
			
			// 삽입
			this.currentIframe.find('body').append(resultBox);
			
			// 전역변수에 reference 등록
			this.selectorBox = resultBox;
			this.boxStatus.curPos = 0;
			this.boxStatus.lastPos = items.length;
			var that = this;
			// 이벤트 추가
			this.currentIframe.find('body').keydown(function(e) {
				switch (e.keyCode) {
				// 위로 가는 키 (keyCode == 38)
				case 38:
					// 한 칸 위로 이동
					if (that.boxStatus.curPos > 0) {
						that.selectorBox.find('li:eq(' + that.boxStatus.curPos + ')').removeClass('sel').css('background-color', 'white');
						that.selectorBox.find('li:eq(' + (--that.boxStatus.curPos) + ')').addClass('sel').css('background-color', 'yellow');
					}
					return false;
					break;
				
				// 아래로 가는 키
				case 40:
					// 한 칸 아래로 이동
					if (that.boxStatus.curPos !== that.boxStatus.lastPos) {
						that.selectorBox.find('li:eq(' + (that.boxStatus.curPos - 1) + ')').removeClass('sel').css('background-color', 'white');
						that.selectorBox.find('li:eq(' + (that.boxStatus.curPos++) + ')').addClass('sel').css('background-color', 'yellow');
					}
					return false;
					break;
					
				// 엔터 키
				case 13:
					// 선택된 녀석의 permanentUrl 얻어내기
					var selectedItem = that.selectorBox.find('li:eq(' + (that.boxStatus.curPos - 1) + ')');
					var permanentUrl = selectedItem.attr('permanentUrl');
					var text = selectedItem.text();
					// a 태그로 감싸기
					var aTag = $('<a/>', {
						href:permanentUrl,
						text:text
					});
					that.mySelection.pasteHTML(aTag[0].outerHTML);
					
					// 선택박스 제거
					that.oApp.exec("REMOVE_SELECTOR");
					return false;
					break;
				// esc 키
				case 28:
				default:
					that.oApp.exec("REMOVE_SELECTOR");
					break;
				}
			});
			this.currentIframe.find('body').click(function() {
				var topicResultBox = $(this).parents('#topicResultBox');
				if (topicResultBox.length) {
					that.oApp.exec("REMOVE_SELECTOR");
				}
			});
			$('form[editor_sequence="' + this.editor_sequence + '"]').submit(function() {
				that.oApp.exec("REMOVE_SELECTOR");
			});
		},
		
		// 선택 박스를 제거한다.
		$ON_REMOVE_SELECTOR: function() {
			if (typeof this.currentIframe !== "null") {
				// 이벤트 제거
				this.currentIframe.find('body').unbind('keydown');
				this.currentIframe.find('body').unbind('click');
				$(this.currentIframe).find('#topicResultBox').remove();
			}
		}
	});
	
	// 각종 이벤트들 등록시키기
	$(document).ready(function() {
		// 문서를 불러오면 바로 플러그인 등록시키기
		// 에디터 번호 알아내기
		var intLoop = setInterval(function() {
			try {
				startRegisterPlugin();
				clearInterval(intLoop);
			} catch (e) {
				console.log('catch ' + e);
				if (e != 'undefined') clearInerval(intLoop);
			}
		}, 500);
	});
	
	// 이벤트 실제 등록
	function startRegisterPlugin() {
		var editor_sequence = parseInt($('.xpress-editor:first').parents('form:first').attr('editor_sequence'));
		if (typeof editorRelKeys === 'undefined' || typeof editorRelKeys == 'null') {
			throw 'undefined';
			return;
		}
		myEditor = editorRelKeys[editor_sequence]['editor'];
		myEditor.registerPlugin(new xe.AutoLink(editor_sequence));
		myEditor.exec("DO_BROWSER_EVENT_REG");
	}
})(jQuery);