<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point52_argument'} = new Argument('point', $args->{'point'});
if(!${'point52_argument'}->isValid()) return ${'point52_argument'}->getErrorMessage();
} else
${'point52_argument'} = null;if(${'point52_argument'} !== null) ${'point52_argument'}->setColumnType('number');

${'member_srl53_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl53_argument'}->checkFilter('number');
${'member_srl53_argument'}->checkNotNull();
${'member_srl53_argument'}->createConditionValue();
if(!${'member_srl53_argument'}->isValid()) return ${'member_srl53_argument'}->getErrorMessage();
if(${'member_srl53_argument'} !== null) ${'member_srl53_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point52_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl53_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>