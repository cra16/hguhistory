<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl18_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl18_argument'}->checkFilter('number');
${'module_srl18_argument'}->checkNotNull();
${'module_srl18_argument'}->createConditionValue();
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_skins`', '`module_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl18_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>