<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateCategoryCount");
$query->setAction("update");
$query->setPriority("");
if(isset($args->document_count)) {
${'document_count43_argument'} = new Argument('document_count', $args->{'document_count'});
if(!${'document_count43_argument'}->isValid()) return ${'document_count43_argument'}->getErrorMessage();
} else
${'document_count43_argument'} = null;if(${'document_count43_argument'} !== null) ${'document_count43_argument'}->setColumnType('number');

${'last_update44_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update44_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update44_argument'}->isValid()) return ${'last_update44_argument'}->getErrorMessage();
if(${'last_update44_argument'} !== null) ${'last_update44_argument'}->setColumnType('date');

${'category_srl45_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl45_argument'}->checkFilter('number');
${'category_srl45_argument'}->checkNotNull();
${'category_srl45_argument'}->createConditionValue();
if(!${'category_srl45_argument'}->isValid()) return ${'category_srl45_argument'}->getErrorMessage();
if(${'category_srl45_argument'} !== null) ${'category_srl45_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`document_count`', ${'document_count43_argument'})
,new UpdateExpression('`last_update`', ${'last_update44_argument'})
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl45_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>