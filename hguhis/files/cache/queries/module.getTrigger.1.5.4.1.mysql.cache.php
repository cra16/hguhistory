<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTrigger");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name16_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name16_argument'}->createConditionValue();
if(!${'trigger_name16_argument'}->isValid()) return ${'trigger_name16_argument'}->getErrorMessage();
} else
${'trigger_name16_argument'} = null;if(${'trigger_name16_argument'} !== null) ${'trigger_name16_argument'}->setColumnType('varchar');
if(isset($args->module)) {
${'module17_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module17_argument'}->createConditionValue();
if(!${'module17_argument'}->isValid()) return ${'module17_argument'}->getErrorMessage();
} else
${'module17_argument'} = null;if(${'module17_argument'} !== null) ${'module17_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type18_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type18_argument'}->createConditionValue();
if(!${'type18_argument'}->isValid()) return ${'type18_argument'}->getErrorMessage();
} else
${'type18_argument'} = null;if(${'type18_argument'} !== null) ${'type18_argument'}->setColumnType('varchar');
if(isset($args->called_method)) {
${'called_method19_argument'} = new ConditionArgument('called_method', $args->called_method, 'equal');
${'called_method19_argument'}->createConditionValue();
if(!${'called_method19_argument'}->isValid()) return ${'called_method19_argument'}->getErrorMessage();
} else
${'called_method19_argument'} = null;if(${'called_method19_argument'} !== null) ${'called_method19_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position20_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position20_argument'}->createConditionValue();
if(!${'called_position20_argument'}->isValid()) return ${'called_position20_argument'}->getErrorMessage();
} else
${'called_position20_argument'} = null;if(${'called_position20_argument'} !== null) ${'called_position20_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name16_argument,"equal")
,new ConditionWithArgument('`module`',$module17_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type18_argument,"equal", 'and')
,new ConditionWithArgument('`called_method`',$called_method19_argument,"equal", 'and')
,new ConditionWithArgument('`called_position`',$called_position20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>