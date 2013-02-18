<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview4_argument'} = new Argument('pageview', null);
${'pageview4_argument'}->setColumnOperation('+');
${'pageview4_argument'}->ensureDefaultValue(1);
if(!${'pageview4_argument'}->isValid()) return ${'pageview4_argument'}->getErrorMessage();
if(${'pageview4_argument'} !== null) ${'pageview4_argument'}->setColumnType('number');

${'regdate5_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate5_argument'}->checkNotNull();
${'regdate5_argument'}->createConditionValue();
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview4_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>