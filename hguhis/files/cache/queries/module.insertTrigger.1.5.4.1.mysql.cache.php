<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertTrigger");
$query->setAction("insert");
$query->setPriority("");

${'trigger_name11_argument'} = new Argument('trigger_name', $args->{'trigger_name'});
${'trigger_name11_argument'}->checkNotNull();
if(!${'trigger_name11_argument'}->isValid()) return ${'trigger_name11_argument'}->getErrorMessage();
if(${'trigger_name11_argument'} !== null) ${'trigger_name11_argument'}->setColumnType('varchar');

${'module12_argument'} = new Argument('module', $args->{'module'});
${'module12_argument'}->checkNotNull();
if(!${'module12_argument'}->isValid()) return ${'module12_argument'}->getErrorMessage();
if(${'module12_argument'} !== null) ${'module12_argument'}->setColumnType('varchar');

${'type13_argument'} = new Argument('type', $args->{'type'});
${'type13_argument'}->checkNotNull();
if(!${'type13_argument'}->isValid()) return ${'type13_argument'}->getErrorMessage();
if(${'type13_argument'} !== null) ${'type13_argument'}->setColumnType('varchar');

${'called_method14_argument'} = new Argument('called_method', $args->{'called_method'});
${'called_method14_argument'}->checkNotNull();
if(!${'called_method14_argument'}->isValid()) return ${'called_method14_argument'}->getErrorMessage();
if(${'called_method14_argument'} !== null) ${'called_method14_argument'}->setColumnType('varchar');

${'called_position15_argument'} = new Argument('called_position', $args->{'called_position'});
${'called_position15_argument'}->checkNotNull();
if(!${'called_position15_argument'}->isValid()) return ${'called_position15_argument'}->getErrorMessage();
if(${'called_position15_argument'} !== null) ${'called_position15_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`trigger_name`', ${'trigger_name11_argument'})
,new InsertExpression('`module`', ${'module12_argument'})
,new InsertExpression('`type`', ${'type13_argument'})
,new InsertExpression('`called_method`', ${'called_method14_argument'})
,new InsertExpression('`called_position`', ${'called_position15_argument'})
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>