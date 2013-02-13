<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name104_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name104_argument'}->createConditionValue();
if(!${'trigger_name104_argument'}->isValid()) return ${'trigger_name104_argument'}->getErrorMessage();
} else
${'trigger_name104_argument'} = null;if(${'trigger_name104_argument'} !== null) ${'trigger_name104_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position105_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position105_argument'}->createConditionValue();
if(!${'called_position105_argument'}->isValid()) return ${'called_position105_argument'}->getErrorMessage();
} else
${'called_position105_argument'} = null;if(${'called_position105_argument'} !== null) ${'called_position105_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name104_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position105_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>