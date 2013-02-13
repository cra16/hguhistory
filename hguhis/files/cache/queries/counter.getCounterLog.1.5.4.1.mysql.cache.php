<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCounterLog");
$query->setAction("select");
$query->setPriority("");

${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->ensureDefaultValue('0');
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress12_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress12_argument'}->createConditionValue();
if(!${'ipaddress12_argument'}->isValid()) return ${'ipaddress12_argument'}->getErrorMessage();
} else
${'ipaddress12_argument'} = null;if(${'ipaddress12_argument'} !== null) ${'ipaddress12_argument'}->setColumnType('varchar');

${'regdate13_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate13_argument'}->checkNotNull();
${'regdate13_argument'}->createConditionValue();
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress12_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate13_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>