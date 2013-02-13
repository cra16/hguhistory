<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl21_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl21_argument'}->checkFilter('number');
${'module_srl21_argument'}->checkNotNull();
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');

${'name22_argument'} = new Argument('name', $args->{'name'});
${'name22_argument'}->checkNotNull();
if(!${'name22_argument'}->isValid()) return ${'name22_argument'}->getErrorMessage();
if(${'name22_argument'} !== null) ${'name22_argument'}->setColumnType('varchar');

${'value23_argument'} = new Argument('value', $args->{'value'});
${'value23_argument'}->checkNotNull();
if(!${'value23_argument'}->isValid()) return ${'value23_argument'}->getErrorMessage();
if(${'value23_argument'} !== null) ${'value23_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl21_argument'})
,new InsertExpression('`name`', ${'name22_argument'})
,new InsertExpression('`value`', ${'value23_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>