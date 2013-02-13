<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocument");
$query->setAction("delete");
$query->setPriority("LOW");

${'document_srl9_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->checkNotNull();
${'document_srl9_argument'}->createConditionValue();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>