/* 내용 추가/수정 후 */

function completeTopicInsert(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    alert(message);
 
    var url = current_url.setQuery('act','dispHiswikiTopicList').setQuery('document_srl','');
    location.href = url;
}
