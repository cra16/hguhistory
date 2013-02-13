<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act27_argument'} = new Argument('act', $args->{'act'});
${'act27_argument'}->checkNotNull();
if(!${'act27_argument'}->isValid()) return ${'act27_argument'}->getErrorMessage();
if(${'act27_argument'} !== null) ${'act27_argument'}->setColumnType('varchar');

${'module28_argument'} = new Argument('module', $args->{'module'});
${'module28_argument'}->checkNotNull();
if(!${'module28_argument'}->isValid()) return ${'module28_argument'}->getErrorMessage();
if(${'module28_argument'} !== null) ${'module28_argument'}->setColumnType('varchar');

${'type29_argument'} = new Argument('type', $args->{'type'});
${'type29_argument'}->checkNotNull();
if(!${'type29_argument'}->isValid()) return ${'type29_argument'}->getErrorMessage();
if(${'type29_argument'} !== null) ${'type29_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act27_argument'})
,new InsertExpression('`module`', ${'module28_argument'})
,new InsertExpression('`type`', ${'type29_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>