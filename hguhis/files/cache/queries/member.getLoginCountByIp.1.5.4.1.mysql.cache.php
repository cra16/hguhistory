<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress1_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress1_argument'}->createConditionValue();
if(!${'ipaddress1_argument'}->isValid()) return ${'ipaddress1_argument'}->getErrorMessage();
} else
${'ipaddress1_argument'} = null;if(${'ipaddress1_argument'} !== null) ${'ipaddress1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>