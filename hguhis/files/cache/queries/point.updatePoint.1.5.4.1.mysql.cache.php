<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point12_argument'} = new Argument('point', $args->{'point'});
if(!${'point12_argument'}->isValid()) return ${'point12_argument'}->getErrorMessage();
} else
${'point12_argument'} = null;if(${'point12_argument'} !== null) ${'point12_argument'}->setColumnType('number');

${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->checkFilter('number');
${'member_srl13_argument'}->checkNotNull();
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point12_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>