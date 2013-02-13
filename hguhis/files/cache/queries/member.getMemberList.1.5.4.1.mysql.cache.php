<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin27_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin27_argument'}->createConditionValue();
if(!${'is_admin27_argument'}->isValid()) return ${'is_admin27_argument'}->getErrorMessage();
} else
${'is_admin27_argument'} = null;if(${'is_admin27_argument'} !== null) ${'is_admin27_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied28_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied28_argument'}->createConditionValue();
if(!${'is_denied28_argument'}->isValid()) return ${'is_denied28_argument'}->getErrorMessage();
} else
${'is_denied28_argument'} = null;if(${'is_denied28_argument'} !== null) ${'is_denied28_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls29_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls29_argument'}->createConditionValue();
if(!${'member_srls29_argument'}->isValid()) return ${'member_srls29_argument'}->getErrorMessage();
} else
${'member_srls29_argument'} = null;if(${'member_srls29_argument'} !== null) ${'member_srls29_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id30_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id30_argument'}->createConditionValue();
if(!${'s_user_id30_argument'}->isValid()) return ${'s_user_id30_argument'}->getErrorMessage();
} else
${'s_user_id30_argument'} = null;if(${'s_user_id30_argument'} !== null) ${'s_user_id30_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name31_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name31_argument'}->createConditionValue();
if(!${'s_user_name31_argument'}->isValid()) return ${'s_user_name31_argument'}->getErrorMessage();
} else
${'s_user_name31_argument'} = null;if(${'s_user_name31_argument'} !== null) ${'s_user_name31_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name32_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name32_argument'}->createConditionValue();
if(!${'s_nick_name32_argument'}->isValid()) return ${'s_nick_name32_argument'}->getErrorMessage();
} else
${'s_nick_name32_argument'} = null;if(${'s_nick_name32_argument'} !== null) ${'s_nick_name32_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name33_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name33_argument'}->createConditionValue();
if(!${'html_nick_name33_argument'}->isValid()) return ${'html_nick_name33_argument'}->getErrorMessage();
} else
${'html_nick_name33_argument'} = null;if(${'html_nick_name33_argument'} !== null) ${'html_nick_name33_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address34_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address34_argument'}->createConditionValue();
if(!${'s_email_address34_argument'}->isValid()) return ${'s_email_address34_argument'}->getErrorMessage();
} else
${'s_email_address34_argument'} = null;if(${'s_email_address34_argument'} !== null) ${'s_email_address34_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars35_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars35_argument'}->createConditionValue();
if(!${'s_extra_vars35_argument'}->isValid()) return ${'s_extra_vars35_argument'}->getErrorMessage();
} else
${'s_extra_vars35_argument'} = null;if(${'s_extra_vars35_argument'} !== null) ${'s_extra_vars35_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate36_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate36_argument'}->createConditionValue();
if(!${'s_regdate36_argument'}->isValid()) return ${'s_regdate36_argument'}->getErrorMessage();
} else
${'s_regdate36_argument'} = null;if(${'s_regdate36_argument'} !== null) ${'s_regdate36_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login37_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login37_argument'}->createConditionValue();
if(!${'s_last_login37_argument'}->isValid()) return ${'s_last_login37_argument'}->getErrorMessage();
} else
${'s_last_login37_argument'} = null;if(${'s_last_login37_argument'} !== null) ${'s_last_login37_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more38_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more38_argument'}->createConditionValue();
if(!${'s_regdate_more38_argument'}->isValid()) return ${'s_regdate_more38_argument'}->getErrorMessage();
} else
${'s_regdate_more38_argument'} = null;if(${'s_regdate_more38_argument'} !== null) ${'s_regdate_more38_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less39_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less39_argument'}->createConditionValue();
if(!${'s_regdate_less39_argument'}->isValid()) return ${'s_regdate_less39_argument'}->getErrorMessage();
} else
${'s_regdate_less39_argument'} = null;if(${'s_regdate_less39_argument'} !== null) ${'s_regdate_less39_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more40_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more40_argument'}->createConditionValue();
if(!${'s_last_login_more40_argument'}->isValid()) return ${'s_last_login_more40_argument'}->getErrorMessage();
} else
${'s_last_login_more40_argument'} = null;if(${'s_last_login_more40_argument'} !== null) ${'s_last_login_more40_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less41_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less41_argument'}->createConditionValue();
if(!${'s_last_login_less41_argument'}->isValid()) return ${'s_last_login_less41_argument'}->getErrorMessage();
} else
${'s_last_login_less41_argument'} = null;if(${'s_last_login_less41_argument'} !== null) ${'s_last_login_less41_argument'}->setColumnType('date');

${'page44_argument'} = new Argument('page', $args->{'page'});
${'page44_argument'}->ensureDefaultValue('1');
if(!${'page44_argument'}->isValid()) return ${'page44_argument'}->getErrorMessage();

${'page_count45_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count45_argument'}->ensureDefaultValue('10');
if(!${'page_count45_argument'}->isValid()) return ${'page_count45_argument'}->getErrorMessage();

${'list_count46_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count46_argument'}->ensureDefaultValue('20');
if(!${'list_count46_argument'}->isValid()) return ${'list_count46_argument'}->getErrorMessage();

${'sort_index42_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index42_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index42_argument'}->isValid()) return ${'sort_index42_argument'}->getErrorMessage();

${'sort_order43_argument'} = new SortArgument('sort_order43', $args->sort_order);
${'sort_order43_argument'}->ensureDefaultValue('asc');
if(!${'sort_order43_argument'}->isValid()) return ${'sort_order43_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin27_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied28_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls29_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id30_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name31_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name32_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name33_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address34_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars35_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate36_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login37_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more38_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less39_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more40_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less41_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index42_argument'}, $sort_order43_argument)
));
$query->setLimit(new Limit(${'list_count46_argument'}, ${'page44_argument'}, ${'page_count45_argument'}));
return $query; ?>