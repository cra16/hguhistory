<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act21_argument'} = new Argument('act', $args->{'act'});
${'act21_argument'}->checkNotNull();
if(!${'act21_argument'}->isValid()) return ${'act21_argument'}->getErrorMessage();
if(${'act21_argument'} !== null) ${'act21_argument'}->setColumnType('varchar');

${'module22_argument'} = new Argument('module', $args->{'module'});
${'module22_argument'}->checkNotNull();
if(!${'module22_argument'}->isValid()) return ${'module22_argument'}->getErrorMessage();
if(${'module22_argument'} !== null) ${'module22_argument'}->setColumnType('varchar');

${'type23_argument'} = new Argument('type', $args->{'type'});
${'type23_argument'}->checkNotNull();
if(!${'type23_argument'}->isValid()) return ${'type23_argument'}->getErrorMessage();
if(${'type23_argument'} !== null) ${'type23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act21_argument'})
,new InsertExpression('`module`', ${'module22_argument'})
,new InsertExpression('`type`', ${'type23_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>