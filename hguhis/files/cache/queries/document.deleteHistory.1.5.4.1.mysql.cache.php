<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteHistory");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->history_srl)) {
${'history_srl16_argument'} = new ConditionArgument('history_srl', $args->history_srl, 'equal');
${'history_srl16_argument'}->checkFilter('number');
${'history_srl16_argument'}->createConditionValue();
if(!${'history_srl16_argument'}->isValid()) return ${'history_srl16_argument'}->getErrorMessage();
} else
${'history_srl16_argument'} = null;if(${'history_srl16_argument'} !== null) ${'history_srl16_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl17_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl17_argument'}->checkFilter('number');
${'document_srl17_argument'}->createConditionValue();
if(!${'document_srl17_argument'}->isValid()) return ${'document_srl17_argument'}->getErrorMessage();
} else
${'document_srl17_argument'} = null;if(${'document_srl17_argument'} !== null) ${'document_srl17_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl18_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl18_argument'}->checkFilter('number');
${'module_srl18_argument'}->createConditionValue();
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
} else
${'module_srl18_argument'} = null;if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_histories`', '`document_histories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`history_srl`',$history_srl16_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl17_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>