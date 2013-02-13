(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['insertMenuItem', {'menu_srl':{required:true,rule:'number'},'menu_name':{required:true},'cType':{required:true},'module_type':{'if':[{test:'$cType == \'CREATE\' || $cType == \'SELECT\'', attr:'required', value:'true'}]},'create_menu_url':{'if':[{test:'$cType == \'CREATE\'', attr:'required', value:'true'}]},'select_menu_url':{'if':[{test:'$cType == \'SELECT\'', attr:'required', value:'true'}]},'menu_url':{'if':[{test:'$cType == \'URL\'', attr:'required', value:'true'}]},'menu_open_window':{required:true}}]);
v.cast('ADD_MESSAGE',['menu_srl','메뉴 고유 번호']);
v.cast('ADD_MESSAGE',['menu_name','메뉴 이름']);
v.cast('ADD_MESSAGE',['cType','모듈 또는 URL']);
v.cast('ADD_MESSAGE',['module_type','모듈 선택']);
v.cast('ADD_MESSAGE',['create_menu_url','모듈 아이디 생성']);
v.cast('ADD_MESSAGE',['select_menu_url','모듈 아이디 선택']);
v.cast('ADD_MESSAGE',['menu_url','연결 url']);
v.cast('ADD_MESSAGE',['menu_open_window','새 창 열기']);
v.cast('ADD_MESSAGE',['isnull','%s 값은 필수입니다.']);
v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
v.cast('ADD_MESSAGE',['equalto','%s이(가) 잘못되었습니다.']);
v.cast('ADD_MESSAGE',['invalid','%s의 값이 올바르지 않습니다.']);
v.cast('ADD_MESSAGE',['invalid_email','%s의 값은 올바른 메일 주소가 아닙니다.']);
v.cast('ADD_MESSAGE',['invalid_userid','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_url','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_mid','%s의 형식이 잘못되었습니다. 첫 글자는 영문으로 시작해야 하며 \'영문+숫자+_\'로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력하셔야 합니다.']);
})(jQuery);