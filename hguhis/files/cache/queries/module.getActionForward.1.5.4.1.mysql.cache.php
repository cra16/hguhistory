<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act24_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act24_argument'}->createConditionValue();
if(!${'act24_argument'}->isValid()) return ${'act24_argument'}->getErrorMessage();
} else
${'act24_argument'} = null;if(${'act24_argument'} !== null) ${'act24_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act24_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>