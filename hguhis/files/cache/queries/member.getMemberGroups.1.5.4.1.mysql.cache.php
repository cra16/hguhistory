<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMemberGroups");
$query->setAction("select");
$query->setPriority("");

${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->checkNotNull();
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl9_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl9_argument'}->createConditionValue();
if(!${'site_srl9_argument'}->isValid()) return ${'site_srl9_argument'}->getErrorMessage();
} else
${'site_srl9_argument'} = null;if(${'site_srl9_argument'} !== null) ${'site_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`a`.`title`', '`title`')
,new SelectExpression('`a`.`group_srl`', '`group_srl`')
));
$query->setTables(array(
new Table('`xe_member_group`', '`a`')
,new Table('`xe_member_group_member`', '`b`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`b`.`member_srl`',$member_srl8_argument,"equal")
,new ConditionWithoutArgument('`b`.`group_srl`','`a`.`group_srl`',"equal", 'and')
,new ConditionWithArgument('`a`.`site_srl`',$site_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>