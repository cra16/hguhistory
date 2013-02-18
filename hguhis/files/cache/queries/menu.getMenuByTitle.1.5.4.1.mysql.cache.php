<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title17_argument'} = new ConditionArgument('title', $args->title, 'equal');
${'title17_argument'}->checkNotNull();
${'title17_argument'}->createConditionValue();
if(!${'title17_argument'}->isValid()) return ${'title17_argument'}->getErrorMessage();
if(${'title17_argument'} !== null) ${'title17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>