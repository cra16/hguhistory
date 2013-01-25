/* 모듈 생성 후 */
function completeHiswikiAdminModuleInsert(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    var module_srl = ret_obj['module_srl'];

    alert(message);

    var url = current_url.setQuery('act','dispHiswikiAdminModuleList').setQuery('module_srl','');
    if(page) url.setQuery('page',page);
    location.href = url;
}

/* 모듈 삭제 후 */
function completeHiswikiAdminModuleDelete(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    alert(message);

    var url = current_url.setQuery('act','dispHiswikiAdminModuleList').setQuery('module_srl','');
    if(page) url = url.setQuery('page',page);
    location.href = url;
}


/**
 * jQuery 사용하는 이벤트
 * @author 바람꽃(wndflwr@gmail.com)
 */
jQuery(function($) {
	/**
	 * tpl/module_insert.html
	 * 모듈 선택이 되었을 때, 자식 모듈들을 모두 불러온다.
	 */
	
	var load_module_list = function() {
		var params = new Array();
		var response_tags = ['error', 'message', 'module_list'];
		var selected_module = $('.module_list option:selected').val();
		console.log(selected_module);
		
		exec_xml('module', 'procModuleAdminGetList', params, function(ret_obj) {
			// select_module_list 내용 다 지우기
			$('.select_module_list').children().remove();
			var list = ret_obj.module_list[selected_module].list;
			for (var i in list) {
				var $option = $('<option />', {
					value:list[i].module_srl,
					text:list[i].browser_title
				});
				$('.select_module_list').append($option.clone());
			}
		}, response_tags);
	};
	$('.module_list').ready(load_module_list);
	$('.module_list').change(load_module_list);
});