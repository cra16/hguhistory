<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTrigger");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name13_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name13_argument'}->createConditionValue();
if(!${'trigger_name13_argument'}->isValid()) return ${'trigger_name13_argument'}->getErrorMessage();
} else
${'trigger_name13_argument'} = null;if(${'trigger_name13_argument'} !== null) ${'trigger_name13_argument'}->setColumnType('varchar');
if(isset($args->module)) {
${'module14_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module14_argument'}->createConditionValue();
if(!${'module14_argument'}->isValid()) return ${'module14_argument'}->getErrorMessage();
} else
${'module14_argument'} = null;if(${'module14_argument'} !== null) ${'module14_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type15_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type15_argument'}->createConditionValue();
if(!${'type15_argument'}->isValid()) return ${'type15_argument'}->getErrorMessage();
} else
${'type15_argument'} = null;if(${'type15_argument'} !== null) ${'type15_argument'}->setColumnType('varchar');
if(isset($args->called_method)) {
${'called_method16_argument'} = new ConditionArgument('called_method', $args->called_method, 'equal');
${'called_method16_argument'}->createConditionValue();
if(!${'called_method16_argument'}->isValid()) return ${'called_method16_argument'}->getErrorMessage();
} else
${'called_method16_argument'} = null;if(${'called_method16_argument'} !== null) ${'called_method16_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position17_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position17_argument'}->createConditionValue();
if(!${'called_position17_argument'}->isValid()) return ${'called_position17_argument'}->getErrorMessage();
} else
${'called_position17_argument'} = null;if(${'called_position17_argument'} !== null) ${'called_position17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name13_argument,"equal")
,new ConditionWithArgument('`module`',$module14_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type15_argument,"equal", 'and')
,new ConditionWithArgument('`called_method`',$called_method16_argument,"equal", 'and')
,new ConditionWithArgument('`called_position`',$called_position17_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>