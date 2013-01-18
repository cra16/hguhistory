/* 내용 추가/수정 후 */
function completeContentInsert(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    alert(message);
 
    var url = current_url.setQuery('act','dispBookContentList').setQuery('book_srl','');
    location.href = url;
}

/* 내용 삭제 후 */
function completeContentDelete(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    alert(message);
 
    var url = current_url.setQuery('act','dispBookContentList').setQuery('book_srl','').setQuery('book_title','');
    if(page) url = url.setQuery('page',page);
    location.href = url;
}