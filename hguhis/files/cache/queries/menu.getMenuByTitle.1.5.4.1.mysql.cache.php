<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title16_argument'} = new ConditionArgument('title', $args->title, 'equal');
${'title16_argument'}->checkNotNull();
${'title16_argument'}->createConditionValue();
if(!${'title16_argument'}->isValid()) return ${'title16_argument'}->getErrorMessage();
if(${'title16_argument'} !== null) ${'title16_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>