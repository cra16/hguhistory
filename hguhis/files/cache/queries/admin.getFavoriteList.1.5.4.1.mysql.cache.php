<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
} else
${'site_srl11_argument'} = null;if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module12_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module12_argument'}->createConditionValue();
if(!${'module12_argument'}->isValid()) return ${'module12_argument'}->getErrorMessage();
} else
${'module12_argument'} = null;if(${'module12_argument'} !== null) ${'module12_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal")
,new ConditionWithArgument('`module`',$module12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>