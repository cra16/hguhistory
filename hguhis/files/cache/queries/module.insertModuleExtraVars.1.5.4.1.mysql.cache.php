<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl25_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl25_argument'}->checkFilter('number');
${'module_srl25_argument'}->checkNotNull();
if(!${'module_srl25_argument'}->isValid()) return ${'module_srl25_argument'}->getErrorMessage();
if(${'module_srl25_argument'} !== null) ${'module_srl25_argument'}->setColumnType('number');

${'name26_argument'} = new Argument('name', $args->{'name'});
${'name26_argument'}->checkNotNull();
if(!${'name26_argument'}->isValid()) return ${'name26_argument'}->getErrorMessage();
if(${'name26_argument'} !== null) ${'name26_argument'}->setColumnType('varchar');

${'value27_argument'} = new Argument('value', $args->{'value'});
${'value27_argument'}->checkNotNull();
if(!${'value27_argument'}->isValid()) return ${'value27_argument'}->getErrorMessage();
if(${'value27_argument'} !== null) ${'value27_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl25_argument'})
,new InsertExpression('`name`', ${'name26_argument'})
,new InsertExpression('`value`', ${'value27_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>