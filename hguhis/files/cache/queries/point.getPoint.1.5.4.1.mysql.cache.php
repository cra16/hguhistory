<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getPoint");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl37_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl37_argument'}->createConditionValue();
if(!${'member_srl37_argument'}->isValid()) return ${'member_srl37_argument'}->getErrorMessage();
} else
${'member_srl37_argument'} = null;if(${'member_srl37_argument'} !== null) ${'member_srl37_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl37_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>