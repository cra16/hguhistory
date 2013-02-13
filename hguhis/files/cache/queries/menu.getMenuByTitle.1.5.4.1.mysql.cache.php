<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title18_argument'} = new ConditionArgument('title', $args->title, 'equal');
${'title18_argument'}->checkNotNull();
${'title18_argument'}->createConditionValue();
if(!${'title18_argument'}->isValid()) return ${'title18_argument'}->getErrorMessage();
if(${'title18_argument'} !== null) ${'title18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>