<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl35_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl35_argument'}->createConditionValue();
if(!${'module_srl35_argument'}->isValid()) return ${'module_srl35_argument'}->getErrorMessage();
} else
${'module_srl35_argument'} = null;if(${'module_srl35_argument'} !== null) ${'module_srl35_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl36_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl36_argument'}->createConditionValue();
if(!${'member_srl36_argument'}->isValid()) return ${'member_srl36_argument'}->getErrorMessage();
} else
${'member_srl36_argument'} = null;if(${'member_srl36_argument'} !== null) ${'member_srl36_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress37_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress37_argument'}->createConditionValue();
if(!${'ipaddress37_argument'}->isValid()) return ${'ipaddress37_argument'}->getErrorMessage();
} else
${'ipaddress37_argument'} = null;if(${'ipaddress37_argument'} !== null) ${'ipaddress37_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl35_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl36_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress37_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>