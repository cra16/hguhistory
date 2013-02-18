<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertHiswikiDoc");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl14_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->checkNotNull();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

${'module_srl15_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->ensureDefaultValue('0');
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');

${'member_srl16_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl16_argument'}->checkFilter('number');
${'member_srl16_argument'}->ensureDefaultValue('0');
if(!${'member_srl16_argument'}->isValid()) return ${'member_srl16_argument'}->getErrorMessage();
if(${'member_srl16_argument'} !== null) ${'member_srl16_argument'}->setColumnType('number');

${'doc_status17_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status17_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status17_argument'}->isValid()) return ${'doc_status17_argument'}->getErrorMessage();
if(${'doc_status17_argument'} !== null) ${'doc_status17_argument'}->setColumnType('varchar');

${'version18_argument'} = new Argument('version', $args->{'version'});
${'version18_argument'}->checkFilter('number');
${'version18_argument'}->ensureDefaultValue('1');
if(!${'version18_argument'}->isValid()) return ${'version18_argument'}->getErrorMessage();
if(${'version18_argument'} !== null) ${'version18_argument'}->setColumnType('number');

${'title19_argument'} = new Argument('title', $args->{'title'});
${'title19_argument'}->ensureDefaultValue('null');
if(!${'title19_argument'}->isValid()) return ${'title19_argument'}->getErrorMessage();
if(${'title19_argument'} !== null) ${'title19_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl14_argument'})
,new InsertExpression('`module_srl`', ${'module_srl15_argument'})
,new InsertExpression('`author_srl`', ${'member_srl16_argument'})
,new InsertExpression('`doc_status`', ${'doc_status17_argument'})
,new InsertExpression('`version`', ${'version18_argument'})
,new InsertExpression('`topic`', ${'title19_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>