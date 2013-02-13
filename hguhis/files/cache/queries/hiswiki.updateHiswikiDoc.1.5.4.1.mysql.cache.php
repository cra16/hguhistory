<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateHiswikiDoc");
$query->setAction("update");
$query->setPriority("LOW");

${'document_srl5_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->checkNotNull();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

${'module_srl6_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->ensureDefaultValue('0');
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');

${'member_srl7_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->ensureDefaultValue('0');
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');
if(isset($args->start_date)) {
${'start_date8_argument'} = new Argument('start_date', $args->{'start_date'});
if(!${'start_date8_argument'}->isValid()) return ${'start_date8_argument'}->getErrorMessage();
} else
${'start_date8_argument'} = null;
${'end_date9_argument'} = new Argument('end_date', $args->{'end_date'});
${'end_date9_argument'}->ensureDefaultValue('null');
if(!${'end_date9_argument'}->isValid()) return ${'end_date9_argument'}->getErrorMessage();

${'doc_status10_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status10_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status10_argument'}->isValid()) return ${'doc_status10_argument'}->getErrorMessage();
if(${'doc_status10_argument'} !== null) ${'doc_status10_argument'}->setColumnType('varchar');
if(isset($args->version)) {
${'version11_argument'} = new Argument('version', $args->{'version'});
${'version11_argument'}->checkFilter('number');
if(!${'version11_argument'}->isValid()) return ${'version11_argument'}->getErrorMessage();
} else
${'version11_argument'} = null;if(${'version11_argument'} !== null) ${'version11_argument'}->setColumnType('number');

${'title12_argument'} = new Argument('title', $args->{'title'});
${'title12_argument'}->ensureDefaultValue('null');
if(!${'title12_argument'}->isValid()) return ${'title12_argument'}->getErrorMessage();
if(${'title12_argument'} !== null) ${'title12_argument'}->setColumnType('varchar');

${'document_srl13_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl13_argument'}->checkFilter('number');
${'document_srl13_argument'}->checkNotNull();
${'document_srl13_argument'}->createConditionValue();
if(!${'document_srl13_argument'}->isValid()) return ${'document_srl13_argument'}->getErrorMessage();
if(${'document_srl13_argument'} !== null) ${'document_srl13_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`document_srl`', ${'document_srl5_argument'})
,new UpdateExpression('`module_srl`', ${'module_srl6_argument'})
,new UpdateExpression('`author_srl`', ${'member_srl7_argument'})
,new UpdateExpression('`start_date`', ${'start_date8_argument'})
,new UpdateExpression('`end_date`', ${'end_date9_argument'})
,new UpdateExpression('`doc_status`', ${'doc_status10_argument'})
,new UpdateExpression('`version`', ${'version11_argument'})
,new UpdateExpression('`topic`', ${'title12_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>