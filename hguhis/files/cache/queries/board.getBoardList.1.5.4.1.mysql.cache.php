<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getBoardList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_mid)) {
${'s_mid3_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid3_argument'}->createConditionValue();
if(!${'s_mid3_argument'}->isValid()) return ${'s_mid3_argument'}->getErrorMessage();
} else
${'s_mid3_argument'} = null;if(${'s_mid3_argument'} !== null) ${'s_mid3_argument'}->setColumnType('varchar');
if(isset($args->s_browser_title)) {
${'s_browser_title4_argument'} = new ConditionArgument('s_browser_title', $args->s_browser_title, 'like');
${'s_browser_title4_argument'}->createConditionValue();
if(!${'s_browser_title4_argument'}->isValid()) return ${'s_browser_title4_argument'}->getErrorMessage();
} else
${'s_browser_title4_argument'} = null;if(${'s_browser_title4_argument'} !== null) ${'s_browser_title4_argument'}->setColumnType('varchar');
if(isset($args->s_comment)) {
${'s_comment5_argument'} = new ConditionArgument('s_comment', $args->s_comment, 'like');
${'s_comment5_argument'}->createConditionValue();
if(!${'s_comment5_argument'}->isValid()) return ${'s_comment5_argument'}->getErrorMessage();
} else
${'s_comment5_argument'} = null;if(isset($args->s_module_category_srl)) {
${'s_module_category_srl6_argument'} = new ConditionArgument('s_module_category_srl', $args->s_module_category_srl, 'equal');
${'s_module_category_srl6_argument'}->createConditionValue();
if(!${'s_module_category_srl6_argument'}->isValid()) return ${'s_module_category_srl6_argument'}->getErrorMessage();
} else
${'s_module_category_srl6_argument'} = null;if(${'s_module_category_srl6_argument'} !== null) ${'s_module_category_srl6_argument'}->setColumnType('number');

${'page8_argument'} = new Argument('page', $args->{'page'});
${'page8_argument'}->ensureDefaultValue('1');
if(!${'page8_argument'}->isValid()) return ${'page8_argument'}->getErrorMessage();

${'page_count9_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count9_argument'}->ensureDefaultValue('10');
if(!${'page_count9_argument'}->isValid()) return ${'page_count9_argument'}->getErrorMessage();

${'list_count10_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count10_argument'}->ensureDefaultValue('20');
if(!${'list_count10_argument'}->isValid()) return ${'list_count10_argument'}->getErrorMessage();

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'board'","equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid3_argument,"like", 'or')
,new ConditionWithArgument('`browser_title`',$s_browser_title4_argument,"like", 'or')
,new ConditionWithArgument('`comment`',$s_comment5_argument,"like", 'or')
,new ConditionWithArgument('`module_category_srl`',$s_module_category_srl6_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count10_argument'}, ${'page8_argument'}, ${'page_count9_argument'}));
return $query; ?>