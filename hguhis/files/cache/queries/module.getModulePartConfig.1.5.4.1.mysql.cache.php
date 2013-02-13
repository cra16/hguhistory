<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module11_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module11_argument'}->checkNotNull();
${'module11_argument'}->createConditionValue();
if(!${'module11_argument'}->isValid()) return ${'module11_argument'}->getErrorMessage();
if(${'module11_argument'} !== null) ${'module11_argument'}->setColumnType('varchar');

${'module_srl12_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl12_argument'}->checkNotNull();
${'module_srl12_argument'}->createConditionValue();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module11_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>