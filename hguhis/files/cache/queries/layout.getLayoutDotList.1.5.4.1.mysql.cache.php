<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl18_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl18_argument'}->checkFilter('number');
${'site_srl18_argument'}->ensureDefaultValue('0');
${'site_srl18_argument'}->checkNotNull();
${'site_srl18_argument'}->createConditionValue();
if(!${'site_srl18_argument'}->isValid()) return ${'site_srl18_argument'}->getErrorMessage();
if(${'site_srl18_argument'} !== null) ${'site_srl18_argument'}->setColumnType('number');

${'layout_type19_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type19_argument'}->ensureDefaultValue('P');
${'layout_type19_argument'}->createConditionValue();
if(!${'layout_type19_argument'}->isValid()) return ${'layout_type19_argument'}->getErrorMessage();
if(${'layout_type19_argument'} !== null) ${'layout_type19_argument'}->setColumnType('char');

${'layout20_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout20_argument'}->ensureDefaultValue('.');
${'layout20_argument'}->createConditionValue();
if(!${'layout20_argument'}->isValid()) return ${'layout20_argument'}->getErrorMessage();
if(${'layout20_argument'} !== null) ${'layout20_argument'}->setColumnType('varchar');

${'sort_index21_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index21_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index21_argument'}->isValid()) return ${'sort_index21_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl18_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type19_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout20_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index21_argument'}, "desc")
));
$query->setLimit();
return $query; ?>