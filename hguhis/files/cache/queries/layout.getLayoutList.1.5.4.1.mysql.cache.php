<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutList");
$query->setAction("select");
$query->setPriority("");

${'site_srl12_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl12_argument'}->checkFilter('number');
${'site_srl12_argument'}->ensureDefaultValue('0');
${'site_srl12_argument'}->checkNotNull();
${'site_srl12_argument'}->createConditionValue();
if(!${'site_srl12_argument'}->isValid()) return ${'site_srl12_argument'}->getErrorMessage();
if(${'site_srl12_argument'} !== null) ${'site_srl12_argument'}->setColumnType('number');

${'layout_type13_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type13_argument'}->ensureDefaultValue('P');
${'layout_type13_argument'}->createConditionValue();
if(!${'layout_type13_argument'}->isValid()) return ${'layout_type13_argument'}->getErrorMessage();
if(${'layout_type13_argument'} !== null) ${'layout_type13_argument'}->setColumnType('char');
if(isset($args->layout)) {
${'layout14_argument'} = new ConditionArgument('layout', $args->layout, 'equal');
${'layout14_argument'}->createConditionValue();
if(!${'layout14_argument'}->isValid()) return ${'layout14_argument'}->getErrorMessage();
} else
${'layout14_argument'} = null;if(${'layout14_argument'} !== null) ${'layout14_argument'}->setColumnType('varchar');

${'sort_index15_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index15_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index15_argument'}->isValid()) return ${'sort_index15_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl12_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type13_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index15_argument'}, "desc")
));
$query->setLimit();
return $query; ?>