<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTodayStatus");
$query->setAction("select");
$query->setPriority("");

${'regdate10_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate10_argument'}->checkNotNull();
${'regdate10_argument'}->createConditionValue();
if(!${'regdate10_argument'}->isValid()) return ${'regdate10_argument'}->getErrorMessage();
if(${'regdate10_argument'} !== null) ${'regdate10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>