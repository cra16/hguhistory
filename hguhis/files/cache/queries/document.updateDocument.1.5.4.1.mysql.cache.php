<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateDocument");
$query->setAction("update");
$query->setPriority("LOW");

${'module_srl5_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl5_argument'}->checkFilter('number');
${'module_srl5_argument'}->ensureDefaultValue('0');
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');

${'category_srl6_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl6_argument'}->checkFilter('number');
${'category_srl6_argument'}->ensureDefaultValue('0');
if(!${'category_srl6_argument'}->isValid()) return ${'category_srl6_argument'}->getErrorMessage();
if(${'category_srl6_argument'} !== null) ${'category_srl6_argument'}->setColumnType('number');

${'is_notice7_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice7_argument'}->ensureDefaultValue('N');
${'is_notice7_argument'}->checkNotNull();
if(!${'is_notice7_argument'}->isValid()) return ${'is_notice7_argument'}->getErrorMessage();
if(${'is_notice7_argument'} !== null) ${'is_notice7_argument'}->setColumnType('char');

${'title8_argument'} = new Argument('title', $args->{'title'});
${'title8_argument'}->checkNotNull();
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');

${'title_bold9_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold9_argument'}->ensureDefaultValue('N');
if(!${'title_bold9_argument'}->isValid()) return ${'title_bold9_argument'}->getErrorMessage();
if(${'title_bold9_argument'} !== null) ${'title_bold9_argument'}->setColumnType('char');

${'title_color10_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color10_argument'}->ensureDefaultValue('N');
if(!${'title_color10_argument'}->isValid()) return ${'title_color10_argument'}->getErrorMessage();
if(${'title_color10_argument'} !== null) ${'title_color10_argument'}->setColumnType('varchar');

${'content11_argument'} = new Argument('content', $args->{'content'});
${'content11_argument'}->checkNotNull();
if(!${'content11_argument'}->isValid()) return ${'content11_argument'}->getErrorMessage();
if(${'content11_argument'} !== null) ${'content11_argument'}->setColumnType('bigtext');

${'uploaded_count12_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count12_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count12_argument'}->isValid()) return ${'uploaded_count12_argument'}->getErrorMessage();
if(${'uploaded_count12_argument'} !== null) ${'uploaded_count12_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password13_argument'} = new Argument('password', $args->{'password'});
if(!${'password13_argument'}->isValid()) return ${'password13_argument'}->getErrorMessage();
} else
${'password13_argument'} = null;if(${'password13_argument'} !== null) ${'password13_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name14_argument'} = new Argument('nick_name', $args->{'nick_name'});
if(!${'nick_name14_argument'}->isValid()) return ${'nick_name14_argument'}->getErrorMessage();
} else
${'nick_name14_argument'} = null;if(${'nick_name14_argument'} !== null) ${'nick_name14_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl15_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl15_argument'}->isValid()) return ${'member_srl15_argument'}->getErrorMessage();
} else
${'member_srl15_argument'} = null;if(${'member_srl15_argument'} !== null) ${'member_srl15_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id16_argument'} = new Argument('user_id', $args->{'user_id'});
if(!${'user_id16_argument'}->isValid()) return ${'user_id16_argument'}->getErrorMessage();
} else
${'user_id16_argument'} = null;if(${'user_id16_argument'} !== null) ${'user_id16_argument'}->setColumnType('varchar');

${'user_name17_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name17_argument'}->ensureDefaultValue('');
if(!${'user_name17_argument'}->isValid()) return ${'user_name17_argument'}->getErrorMessage();
if(${'user_name17_argument'} !== null) ${'user_name17_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address18_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address18_argument'}->checkFilter('email');
if(!${'email_address18_argument'}->isValid()) return ${'email_address18_argument'}->getErrorMessage();
} else
${'email_address18_argument'} = null;if(${'email_address18_argument'} !== null) ${'email_address18_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage19_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage19_argument'}->checkFilter('homepage');
if(!${'homepage19_argument'}->isValid()) return ${'homepage19_argument'}->getErrorMessage();
} else
${'homepage19_argument'} = null;if(${'homepage19_argument'} !== null) ${'homepage19_argument'}->setColumnType('varchar');

${'tags20_argument'} = new Argument('tags', $args->{'tags'});
${'tags20_argument'}->ensureDefaultValue('');
if(!${'tags20_argument'}->isValid()) return ${'tags20_argument'}->getErrorMessage();
if(${'tags20_argument'} !== null) ${'tags20_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars21_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars21_argument'}->isValid()) return ${'extra_vars21_argument'}->getErrorMessage();
} else
${'extra_vars21_argument'} = null;if(${'extra_vars21_argument'} !== null) ${'extra_vars21_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate22_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate22_argument'}->isValid()) return ${'regdate22_argument'}->getErrorMessage();
} else
${'regdate22_argument'} = null;if(${'regdate22_argument'} !== null) ${'regdate22_argument'}->setColumnType('date');

${'last_update23_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update23_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update23_argument'}->isValid()) return ${'last_update23_argument'}->getErrorMessage();
if(${'last_update23_argument'} !== null) ${'last_update23_argument'}->setColumnType('date');

${'ipaddress24_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress24_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress24_argument'}->isValid()) return ${'ipaddress24_argument'}->getErrorMessage();
if(${'ipaddress24_argument'} !== null) ${'ipaddress24_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order25_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order25_argument'}->isValid()) return ${'list_order25_argument'}->getErrorMessage();
} else
${'list_order25_argument'} = null;if(${'list_order25_argument'} !== null) ${'list_order25_argument'}->setColumnType('number');

${'update_order26_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order26_argument'}->ensureDefaultValue('0');
if(!${'update_order26_argument'}->isValid()) return ${'update_order26_argument'}->getErrorMessage();
if(${'update_order26_argument'} !== null) ${'update_order26_argument'}->setColumnType('number');

${'allow_trackback27_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback27_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback27_argument'}->isValid()) return ${'allow_trackback27_argument'}->getErrorMessage();
if(${'allow_trackback27_argument'} !== null) ${'allow_trackback27_argument'}->setColumnType('char');

${'notify_message28_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message28_argument'}->ensureDefaultValue('N');
if(!${'notify_message28_argument'}->isValid()) return ${'notify_message28_argument'}->getErrorMessage();
if(${'notify_message28_argument'} !== null) ${'notify_message28_argument'}->setColumnType('char');

${'status29_argument'} = new Argument('status', $args->{'status'});
${'status29_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status29_argument'}->isValid()) return ${'status29_argument'}->getErrorMessage();
if(${'status29_argument'} !== null) ${'status29_argument'}->setColumnType('varchar');

${'commentStatus30_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus30_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus30_argument'}->isValid()) return ${'commentStatus30_argument'}->getErrorMessage();
if(${'commentStatus30_argument'} !== null) ${'commentStatus30_argument'}->setColumnType('varchar');

${'document_srl31_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl31_argument'}->checkFilter('number');
${'document_srl31_argument'}->checkNotNull();
${'document_srl31_argument'}->createConditionValue();
if(!${'document_srl31_argument'}->isValid()) return ${'document_srl31_argument'}->getErrorMessage();
if(${'document_srl31_argument'} !== null) ${'document_srl31_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl5_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl6_argument'})
,new UpdateExpression('`is_notice`', ${'is_notice7_argument'})
,new UpdateExpression('`title`', ${'title8_argument'})
,new UpdateExpression('`title_bold`', ${'title_bold9_argument'})
,new UpdateExpression('`title_color`', ${'title_color10_argument'})
,new UpdateExpression('`content`', ${'content11_argument'})
,new UpdateExpression('`uploaded_count`', ${'uploaded_count12_argument'})
,new UpdateExpression('`password`', ${'password13_argument'})
,new UpdateExpression('`nick_name`', ${'nick_name14_argument'})
,new UpdateExpression('`member_srl`', ${'member_srl15_argument'})
,new UpdateExpression('`user_id`', ${'user_id16_argument'})
,new UpdateExpression('`user_name`', ${'user_name17_argument'})
,new UpdateExpression('`email_address`', ${'email_address18_argument'})
,new UpdateExpression('`homepage`', ${'homepage19_argument'})
,new UpdateExpression('`tags`', ${'tags20_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars21_argument'})
,new UpdateExpression('`regdate`', ${'regdate22_argument'})
,new UpdateExpression('`last_update`', ${'last_update23_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress24_argument'})
,new UpdateExpression('`list_order`', ${'list_order25_argument'})
,new UpdateExpression('`update_order`', ${'update_order26_argument'})
,new UpdateExpression('`allow_trackback`', ${'allow_trackback27_argument'})
,new UpdateExpression('`notify_message`', ${'notify_message28_argument'})
,new UpdateExpression('`status`', ${'status29_argument'})
,new UpdateExpression('`comment_status`', ${'commentStatus30_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl31_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>