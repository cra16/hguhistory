<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act51_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act51_argument'}->createConditionValue();
if(!${'act51_argument'}->isValid()) return ${'act51_argument'}->getErrorMessage();
} else
${'act51_argument'} = null;if(${'act51_argument'} !== null) ${'act51_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act51_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>