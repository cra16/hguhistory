<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByEmailAddress");
$query->setAction("select");
$query->setPriority("");

${'email_address2_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address2_argument'}->checkNotNull();
${'email_address2_argument'}->createConditionValue();
if(!${'email_address2_argument'}->isValid()) return ${'email_address2_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('lower(`email_address`)',$email_address2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>