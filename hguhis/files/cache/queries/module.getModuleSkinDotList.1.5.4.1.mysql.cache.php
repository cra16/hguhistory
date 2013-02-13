<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin2_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin2_argument'}->ensureDefaultValue('.');
${'skin2_argument'}->createConditionValue();
if(!${'skin2_argument'}->isValid()) return ${'skin2_argument'}->getErrorMessage();
if(${'skin2_argument'} !== null) ${'skin2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin2_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>