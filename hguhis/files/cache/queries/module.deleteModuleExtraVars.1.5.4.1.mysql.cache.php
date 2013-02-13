<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl24_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl24_argument'}->checkFilter('number');
${'module_srl24_argument'}->checkNotNull();
${'module_srl24_argument'}->createConditionValue();
if(!${'module_srl24_argument'}->isValid()) return ${'module_srl24_argument'}->getErrorMessage();
if(${'module_srl24_argument'} !== null) ${'module_srl24_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl24_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>