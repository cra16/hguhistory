<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl47_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl47_argument'}->checkFilter('number');
${'site_srl47_argument'}->ensureDefaultValue('0');
${'site_srl47_argument'}->checkNotNull();
${'site_srl47_argument'}->createConditionValue();
if(!${'site_srl47_argument'}->isValid()) return ${'site_srl47_argument'}->getErrorMessage();
if(${'site_srl47_argument'} !== null) ${'site_srl47_argument'}->setColumnType('number');

${'layout_type48_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type48_argument'}->ensureDefaultValue('P');
${'layout_type48_argument'}->createConditionValue();
if(!${'layout_type48_argument'}->isValid()) return ${'layout_type48_argument'}->getErrorMessage();
if(${'layout_type48_argument'} !== null) ${'layout_type48_argument'}->setColumnType('char');

${'layout49_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout49_argument'}->ensureDefaultValue('.');
${'layout49_argument'}->createConditionValue();
if(!${'layout49_argument'}->isValid()) return ${'layout49_argument'}->getErrorMessage();
if(${'layout49_argument'} !== null) ${'layout49_argument'}->setColumnType('varchar');

${'sort_index50_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index50_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index50_argument'}->isValid()) return ${'sort_index50_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl47_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type48_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout49_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index50_argument'}, "desc")
));
$query->setLimit();
return $query; ?>