<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getSite");
$query->setAction("select");
$query->setPriority("");

${'site_srl22_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl22_argument'}->checkNotNull();
${'site_srl22_argument'}->createConditionValue();
if(!${'site_srl22_argument'}->isValid()) return ${'site_srl22_argument'}->getErrorMessage();
if(${'site_srl22_argument'} !== null) ${'site_srl22_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl22_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>