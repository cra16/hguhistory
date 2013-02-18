<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getHiswikiTitle");
$query->setAction("select");
$query->setPriority("");
if(isset($args->topic)) {
${'topic1_argument'} = new ConditionArgument('topic', $args->topic, 'equal');
${'topic1_argument'}->createConditionValue();
if(!${'topic1_argument'}->isValid()) return ${'topic1_argument'}->getErrorMessage();
} else
${'topic1_argument'} = null;if(${'topic1_argument'} !== null) ${'topic1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`topic`')
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`topic`',$topic1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>