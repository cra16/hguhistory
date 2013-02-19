<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin13_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin13_argument'}->ensureDefaultValue('.');
${'skin13_argument'}->createConditionValue();
if(!${'skin13_argument'}->isValid()) return ${'skin13_argument'}->getErrorMessage();
if(${'skin13_argument'} !== null) ${'skin13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin13_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>