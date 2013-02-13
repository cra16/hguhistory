<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview14_argument'} = new Argument('pageview', null);
${'pageview14_argument'}->setColumnOperation('+');
${'pageview14_argument'}->ensureDefaultValue(1);
if(!${'pageview14_argument'}->isValid()) return ${'pageview14_argument'}->getErrorMessage();
if(${'pageview14_argument'} !== null) ${'pageview14_argument'}->setColumnType('number');

${'regdate15_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate15_argument'}->checkNotNull();
${'regdate15_argument'}->createConditionValue();
if(!${'regdate15_argument'}->isValid()) return ${'regdate15_argument'}->getErrorMessage();
if(${'regdate15_argument'} !== null) ${'regdate15_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview14_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>