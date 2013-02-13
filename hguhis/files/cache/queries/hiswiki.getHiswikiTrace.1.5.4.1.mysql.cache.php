<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getHiswikiTrace");
$query->setAction("select");
$query->setPriority("");

${'trace_srl1_argument'} = new ConditionArgument('trace_srl', $args->trace_srl, 'equal');
${'trace_srl1_argument'}->checkFilter('number');
${'trace_srl1_argument'}->checkNotNull();
${'trace_srl1_argument'}->createConditionValue();
if(!${'trace_srl1_argument'}->isValid()) return ${'trace_srl1_argument'}->getErrorMessage();
if(${'trace_srl1_argument'} !== null) ${'trace_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_hiswiki_trace`', '`hiswiki_trace`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trace_srl`',$trace_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>