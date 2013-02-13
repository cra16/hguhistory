<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl54_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl54_argument'}->checkFilter('number');
${'module_srl54_argument'}->checkNotNull();
${'module_srl54_argument'}->createConditionValue();
if(!${'module_srl54_argument'}->isValid()) return ${'module_srl54_argument'}->getErrorMessage();
if(${'module_srl54_argument'} !== null) ${'module_srl54_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl54_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>