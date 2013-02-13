<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl20_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl20_argument'}->checkFilter('number');
${'module_srl20_argument'}->createConditionValue();
if(!${'module_srl20_argument'}->isValid()) return ${'module_srl20_argument'}->getErrorMessage();
} else
${'module_srl20_argument'} = null;if(${'module_srl20_argument'} !== null) ${'module_srl20_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl21_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl21_argument'}->checkFilter('number');
${'exclude_module_srl21_argument'}->createConditionValue();
if(!${'exclude_module_srl21_argument'}->isValid()) return ${'exclude_module_srl21_argument'}->getErrorMessage();
} else
${'exclude_module_srl21_argument'} = null;if(${'exclude_module_srl21_argument'} !== null) ${'exclude_module_srl21_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl22_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl22_argument'}->createConditionValue();
if(!${'category_srl22_argument'}->isValid()) return ${'category_srl22_argument'}->getErrorMessage();
} else
${'category_srl22_argument'} = null;if(${'category_srl22_argument'} !== null) ${'category_srl22_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice23_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice23_argument'}->createConditionValue();
if(!${'s_is_notice23_argument'}->isValid()) return ${'s_is_notice23_argument'}->getErrorMessage();
} else
${'s_is_notice23_argument'} = null;if(${'s_is_notice23_argument'} !== null) ${'s_is_notice23_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl24_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl24_argument'}->checkFilter('number');
${'member_srl24_argument'}->createConditionValue();
if(!${'member_srl24_argument'}->isValid()) return ${'member_srl24_argument'}->getErrorMessage();
} else
${'member_srl24_argument'} = null;if(${'member_srl24_argument'} !== null) ${'member_srl24_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList25_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList25_argument'}->createConditionValue();
if(!${'statusList25_argument'}->isValid()) return ${'statusList25_argument'}->getErrorMessage();
} else
${'statusList25_argument'} = null;if(${'statusList25_argument'} !== null) ${'statusList25_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division26_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division26_argument'}->createConditionValue();
if(!${'division26_argument'}->isValid()) return ${'division26_argument'}->getErrorMessage();
} else
${'division26_argument'} = null;if(${'division26_argument'} !== null) ${'division26_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division27_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division27_argument'}->createConditionValue();
if(!${'last_division27_argument'}->isValid()) return ${'last_division27_argument'}->getErrorMessage();
} else
${'last_division27_argument'} = null;if(${'last_division27_argument'} !== null) ${'last_division27_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title28_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title28_argument'}->createConditionValue();
if(!${'s_title28_argument'}->isValid()) return ${'s_title28_argument'}->getErrorMessage();
} else
${'s_title28_argument'} = null;if(${'s_title28_argument'} !== null) ${'s_title28_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content29_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content29_argument'}->createConditionValue();
if(!${'s_content29_argument'}->isValid()) return ${'s_content29_argument'}->getErrorMessage();
} else
${'s_content29_argument'} = null;if(${'s_content29_argument'} !== null) ${'s_content29_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name30_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name30_argument'}->createConditionValue();
if(!${'s_user_name30_argument'}->isValid()) return ${'s_user_name30_argument'}->getErrorMessage();
} else
${'s_user_name30_argument'} = null;if(${'s_user_name30_argument'} !== null) ${'s_user_name30_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id31_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id31_argument'}->createConditionValue();
if(!${'s_user_id31_argument'}->isValid()) return ${'s_user_id31_argument'}->getErrorMessage();
} else
${'s_user_id31_argument'} = null;if(${'s_user_id31_argument'} !== null) ${'s_user_id31_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name32_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name32_argument'}->createConditionValue();
if(!${'s_nick_name32_argument'}->isValid()) return ${'s_nick_name32_argument'}->getErrorMessage();
} else
${'s_nick_name32_argument'} = null;if(${'s_nick_name32_argument'} !== null) ${'s_nick_name32_argument'}->setColumnType('varchar');
if(isset($args->s_email_addres)) {
${'s_email_addres33_argument'} = new ConditionArgument('s_email_addres', $args->s_email_addres, 'like');
${'s_email_addres33_argument'}->createConditionValue();
if(!${'s_email_addres33_argument'}->isValid()) return ${'s_email_addres33_argument'}->getErrorMessage();
} else
${'s_email_addres33_argument'} = null;if(${'s_email_addres33_argument'} !== null) ${'s_email_addres33_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage34_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage34_argument'}->createConditionValue();
if(!${'s_homepage34_argument'}->isValid()) return ${'s_homepage34_argument'}->getErrorMessage();
} else
${'s_homepage34_argument'} = null;if(${'s_homepage34_argument'} !== null) ${'s_homepage34_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags35_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags35_argument'}->createConditionValue();
if(!${'s_tags35_argument'}->isValid()) return ${'s_tags35_argument'}->getErrorMessage();
} else
${'s_tags35_argument'} = null;if(${'s_tags35_argument'} !== null) ${'s_tags35_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl36_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl36_argument'}->createConditionValue();
if(!${'s_member_srl36_argument'}->isValid()) return ${'s_member_srl36_argument'}->getErrorMessage();
} else
${'s_member_srl36_argument'} = null;if(${'s_member_srl36_argument'} !== null) ${'s_member_srl36_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count37_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count37_argument'}->createConditionValue();
if(!${'s_readed_count37_argument'}->isValid()) return ${'s_readed_count37_argument'}->getErrorMessage();
} else
${'s_readed_count37_argument'} = null;if(${'s_readed_count37_argument'} !== null) ${'s_readed_count37_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count38_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count38_argument'}->createConditionValue();
if(!${'s_voted_count38_argument'}->isValid()) return ${'s_voted_count38_argument'}->getErrorMessage();
} else
${'s_voted_count38_argument'} = null;if(${'s_voted_count38_argument'} !== null) ${'s_voted_count38_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count39_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count39_argument'}->createConditionValue();
if(!${'s_blamed_count39_argument'}->isValid()) return ${'s_blamed_count39_argument'}->getErrorMessage();
} else
${'s_blamed_count39_argument'} = null;if(${'s_blamed_count39_argument'} !== null) ${'s_blamed_count39_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count40_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count40_argument'}->createConditionValue();
if(!${'s_comment_count40_argument'}->isValid()) return ${'s_comment_count40_argument'}->getErrorMessage();
} else
${'s_comment_count40_argument'} = null;if(${'s_comment_count40_argument'} !== null) ${'s_comment_count40_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count41_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count41_argument'}->createConditionValue();
if(!${'s_trackback_count41_argument'}->isValid()) return ${'s_trackback_count41_argument'}->getErrorMessage();
} else
${'s_trackback_count41_argument'} = null;if(${'s_trackback_count41_argument'} !== null) ${'s_trackback_count41_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count42_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count42_argument'}->createConditionValue();
if(!${'s_uploaded_count42_argument'}->isValid()) return ${'s_uploaded_count42_argument'}->getErrorMessage();
} else
${'s_uploaded_count42_argument'} = null;if(${'s_uploaded_count42_argument'} !== null) ${'s_uploaded_count42_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate43_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate43_argument'}->createConditionValue();
if(!${'s_regdate43_argument'}->isValid()) return ${'s_regdate43_argument'}->getErrorMessage();
} else
${'s_regdate43_argument'} = null;if(${'s_regdate43_argument'} !== null) ${'s_regdate43_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update44_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update44_argument'}->createConditionValue();
if(!${'s_last_update44_argument'}->isValid()) return ${'s_last_update44_argument'}->getErrorMessage();
} else
${'s_last_update44_argument'} = null;if(${'s_last_update44_argument'} !== null) ${'s_last_update44_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress45_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress45_argument'}->createConditionValue();
if(!${'s_ipaddress45_argument'}->isValid()) return ${'s_ipaddress45_argument'}->getErrorMessage();
} else
${'s_ipaddress45_argument'} = null;if(${'s_ipaddress45_argument'} !== null) ${'s_ipaddress45_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date46_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date46_argument'}->createConditionValue();
if(!${'start_date46_argument'}->isValid()) return ${'start_date46_argument'}->getErrorMessage();
} else
${'start_date46_argument'} = null;if(${'start_date46_argument'} !== null) ${'start_date46_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date47_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date47_argument'}->createConditionValue();
if(!${'end_date47_argument'}->isValid()) return ${'end_date47_argument'}->getErrorMessage();
} else
${'end_date47_argument'} = null;if(${'end_date47_argument'} !== null) ${'end_date47_argument'}->setColumnType('date');

${'page50_argument'} = new Argument('page', $args->{'page'});
${'page50_argument'}->ensureDefaultValue('1');
if(!${'page50_argument'}->isValid()) return ${'page50_argument'}->getErrorMessage();

${'page_count51_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count51_argument'}->ensureDefaultValue('10');
if(!${'page_count51_argument'}->isValid()) return ${'page_count51_argument'}->getErrorMessage();

${'list_count52_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count52_argument'}->ensureDefaultValue('20');
if(!${'list_count52_argument'}->isValid()) return ${'list_count52_argument'}->getErrorMessage();

${'sort_index48_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index48_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index48_argument'}->isValid()) return ${'sort_index48_argument'}->getErrorMessage();

${'order_type49_argument'} = new SortArgument('order_type49', $args->order_type);
${'order_type49_argument'}->ensureDefaultValue('asc');
if(!${'order_type49_argument'}->isValid()) return ${'order_type49_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl20_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl21_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl22_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice23_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl24_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList25_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division26_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division27_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title28_argument,"like")
,new ConditionWithArgument('`content`',$s_content29_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name30_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id31_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name32_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_addres33_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage34_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags35_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl36_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count37_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count38_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count39_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count40_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count41_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count42_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate43_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update44_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress45_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date46_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date47_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index48_argument'}, $order_type49_argument)
));
$query->setLimit(new Limit(${'list_count52_argument'}, ${'page50_argument'}, ${'page_count51_argument'}));
return $query; ?>