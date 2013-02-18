<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl197_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl197_argument'}->checkFilter('number');
${'module_srl197_argument'}->checkNotNull();
if(!${'module_srl197_argument'}->isValid()) return ${'module_srl197_argument'}->getErrorMessage();
if(${'module_srl197_argument'} !== null) ${'module_srl197_argument'}->setColumnType('number');

${'name198_argument'} = new Argument('name', $args->{'name'});
${'name198_argument'}->checkNotNull();
if(!${'name198_argument'}->isValid()) return ${'name198_argument'}->getErrorMessage();
if(${'name198_argument'} !== null) ${'name198_argument'}->setColumnType('varchar');

${'value199_argument'} = new Argument('value', $args->{'value'});
${'value199_argument'}->checkNotNull();
if(!${'value199_argument'}->isValid()) return ${'value199_argument'}->getErrorMessage();
if(${'value199_argument'} !== null) ${'value199_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl197_argument'})
,new InsertExpression('`name`', ${'name198_argument'})
,new InsertExpression('`value`', ${'value199_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>