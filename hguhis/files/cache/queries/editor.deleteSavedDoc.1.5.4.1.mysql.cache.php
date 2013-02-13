<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteSavedDoc");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl46_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl46_argument'}->createConditionValue();
if(!${'module_srl46_argument'}->isValid()) return ${'module_srl46_argument'}->getErrorMessage();
} else
${'module_srl46_argument'} = null;if(${'module_srl46_argument'} !== null) ${'module_srl46_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl47_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl47_argument'}->createConditionValue();
if(!${'member_srl47_argument'}->isValid()) return ${'member_srl47_argument'}->getErrorMessage();
} else
${'member_srl47_argument'} = null;if(${'member_srl47_argument'} !== null) ${'member_srl47_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress48_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress48_argument'}->createConditionValue();
if(!${'ipaddress48_argument'}->isValid()) return ${'ipaddress48_argument'}->getErrorMessage();
} else
${'ipaddress48_argument'} = null;if(${'ipaddress48_argument'} !== null) ${'ipaddress48_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl46_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl47_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress48_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>