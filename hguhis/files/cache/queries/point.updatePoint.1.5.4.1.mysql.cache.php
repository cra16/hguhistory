<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point38_argument'} = new Argument('point', $args->{'point'});
if(!${'point38_argument'}->isValid()) return ${'point38_argument'}->getErrorMessage();
} else
${'point38_argument'} = null;if(${'point38_argument'} !== null) ${'point38_argument'}->setColumnType('number');

${'member_srl39_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl39_argument'}->checkFilter('number');
${'member_srl39_argument'}->checkNotNull();
${'member_srl39_argument'}->createConditionValue();
if(!${'member_srl39_argument'}->isValid()) return ${'member_srl39_argument'}->getErrorMessage();
if(${'member_srl39_argument'} !== null) ${'member_srl39_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point38_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl39_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>