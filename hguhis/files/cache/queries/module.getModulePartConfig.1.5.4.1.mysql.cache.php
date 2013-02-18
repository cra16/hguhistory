<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module244_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module244_argument'}->checkNotNull();
${'module244_argument'}->createConditionValue();
if(!${'module244_argument'}->isValid()) return ${'module244_argument'}->getErrorMessage();
if(${'module244_argument'} !== null) ${'module244_argument'}->setColumnType('varchar');

${'module_srl245_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl245_argument'}->checkNotNull();
${'module_srl245_argument'}->createConditionValue();
if(!${'module_srl245_argument'}->isValid()) return ${'module_srl245_argument'}->getErrorMessage();
if(${'module_srl245_argument'} !== null) ${'module_srl245_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module244_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl245_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>