<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuLayout");
$query->setAction("select");
$query->setPriority("");

${'menu_srl14_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl14_argument'}->checkFilter('number');
${'menu_srl14_argument'}->checkNotNull();
${'menu_srl14_argument'}->createConditionValue();
if(!${'menu_srl14_argument'}->isValid()) return ${'menu_srl14_argument'}->getErrorMessage();
if(${'menu_srl14_argument'} !== null) ${'menu_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`layout_srl`', '`layout_srl`')
));
$query->setTables(array(
new Table('`xe_menu_layout`', '`menu_layout`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>