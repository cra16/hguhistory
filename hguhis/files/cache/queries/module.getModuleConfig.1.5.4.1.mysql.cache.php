<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module3_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module3_argument'}->createConditionValue();
if(!${'module3_argument'}->isValid()) return ${'module3_argument'}->getErrorMessage();
} else
${'module3_argument'} = null;if(${'module3_argument'} !== null) ${'module3_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl4_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl4_argument'}->createConditionValue();
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
} else
${'site_srl4_argument'} = null;if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module3_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>