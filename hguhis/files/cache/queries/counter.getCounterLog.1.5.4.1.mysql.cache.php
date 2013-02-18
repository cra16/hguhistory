<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCounterLog");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->ensureDefaultValue('0');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress2_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress2_argument'}->createConditionValue();
if(!${'ipaddress2_argument'}->isValid()) return ${'ipaddress2_argument'}->getErrorMessage();
} else
${'ipaddress2_argument'} = null;if(${'ipaddress2_argument'} !== null) ${'ipaddress2_argument'}->setColumnType('varchar');

${'regdate3_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate3_argument'}->checkNotNull();
${'regdate3_argument'}->createConditionValue();
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress2_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate3_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>