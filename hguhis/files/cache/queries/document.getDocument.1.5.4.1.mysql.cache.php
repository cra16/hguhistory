<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl19_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl19_argument'}->checkFilter('number');
${'document_srl19_argument'}->checkNotNull();
${'document_srl19_argument'}->createConditionValue();
if(!${'document_srl19_argument'}->isValid()) return ${'document_srl19_argument'}->getErrorMessage();
if(${'document_srl19_argument'} !== null) ${'document_srl19_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>