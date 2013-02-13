<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title10_argument'} = new ConditionArgument('title', $args->title, 'equal');
${'title10_argument'}->checkNotNull();
${'title10_argument'}->createConditionValue();
if(!${'title10_argument'}->isValid()) return ${'title10_argument'}->getErrorMessage();
if(${'title10_argument'} !== null) ${'title10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>