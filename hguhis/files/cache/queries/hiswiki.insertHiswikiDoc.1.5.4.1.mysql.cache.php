<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertHiswikiDoc");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl1_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->ensureDefaultValue('0');
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->ensureDefaultValue('0');
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->start_date)) {
${'start_date4_argument'} = new Argument('start_date', $args->{'start_date'});
if(!${'start_date4_argument'}->isValid()) return ${'start_date4_argument'}->getErrorMessage();
} else
${'start_date4_argument'} = null;if(${'start_date4_argument'} !== null) ${'start_date4_argument'}->setColumnType('date');

${'end_date5_argument'} = new Argument('end_date', $args->{'end_date'});
${'end_date5_argument'}->ensureDefaultValue('null');
if(!${'end_date5_argument'}->isValid()) return ${'end_date5_argument'}->getErrorMessage();
if(${'end_date5_argument'} !== null) ${'end_date5_argument'}->setColumnType('date');

${'doc_status6_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status6_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status6_argument'}->isValid()) return ${'doc_status6_argument'}->getErrorMessage();
if(${'doc_status6_argument'} !== null) ${'doc_status6_argument'}->setColumnType('varchar');

${'version7_argument'} = new Argument('version', $args->{'version'});
${'version7_argument'}->checkFilter('number');
${'version7_argument'}->ensureDefaultValue('1');
if(!${'version7_argument'}->isValid()) return ${'version7_argument'}->getErrorMessage();
if(${'version7_argument'} !== null) ${'version7_argument'}->setColumnType('number');

${'title8_argument'} = new Argument('title', $args->{'title'});
${'title8_argument'}->ensureDefaultValue('null');
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl1_argument'})
,new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`author_srl`', ${'member_srl3_argument'})
,new InsertExpression('`start_date`', ${'start_date4_argument'})
,new InsertExpression('`end_date`', ${'end_date5_argument'})
,new InsertExpression('`doc_status`', ${'doc_status6_argument'})
,new InsertExpression('`version`', ${'version7_argument'})
,new InsertExpression('`topic`', ${'title8_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>