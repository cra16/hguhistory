<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLayout");
$query->setAction("select");
$query->setPriority("");

${'layout_srl14_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl14_argument'}->checkFilter('number');
${'layout_srl14_argument'}->checkNotNull();
${'layout_srl14_argument'}->createConditionValue();
if(!${'layout_srl14_argument'}->isValid()) return ${'layout_srl14_argument'}->getErrorMessage();
if(${'layout_srl14_argument'} !== null) ${'layout_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>