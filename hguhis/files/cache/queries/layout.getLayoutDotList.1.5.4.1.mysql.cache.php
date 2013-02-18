<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl157_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl157_argument'}->checkFilter('number');
${'site_srl157_argument'}->ensureDefaultValue('0');
${'site_srl157_argument'}->checkNotNull();
${'site_srl157_argument'}->createConditionValue();
if(!${'site_srl157_argument'}->isValid()) return ${'site_srl157_argument'}->getErrorMessage();
if(${'site_srl157_argument'} !== null) ${'site_srl157_argument'}->setColumnType('number');

${'layout_type158_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type158_argument'}->ensureDefaultValue('P');
${'layout_type158_argument'}->createConditionValue();
if(!${'layout_type158_argument'}->isValid()) return ${'layout_type158_argument'}->getErrorMessage();
if(${'layout_type158_argument'} !== null) ${'layout_type158_argument'}->setColumnType('char');

${'layout159_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout159_argument'}->ensureDefaultValue('.');
${'layout159_argument'}->createConditionValue();
if(!${'layout159_argument'}->isValid()) return ${'layout159_argument'}->getErrorMessage();
if(${'layout159_argument'} !== null) ${'layout159_argument'}->setColumnType('varchar');

${'sort_index160_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index160_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index160_argument'}->isValid()) return ${'sort_index160_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl157_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type158_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout159_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index160_argument'}, "desc")
));
$query->setLimit();
return $query; ?>