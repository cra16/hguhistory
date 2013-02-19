<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module14_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module14_argument'}->checkNotNull();
${'module14_argument'}->createConditionValue();
if(!${'module14_argument'}->isValid()) return ${'module14_argument'}->getErrorMessage();
if(${'module14_argument'} !== null) ${'module14_argument'}->setColumnType('varchar');

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module14_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl15_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>