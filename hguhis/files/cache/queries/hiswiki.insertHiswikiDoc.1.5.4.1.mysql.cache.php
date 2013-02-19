<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertHiswikiDoc");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl17_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl17_argument'}->checkFilter('number');
${'document_srl17_argument'}->checkNotNull();
if(!${'document_srl17_argument'}->isValid()) return ${'document_srl17_argument'}->getErrorMessage();
if(${'document_srl17_argument'} !== null) ${'document_srl17_argument'}->setColumnType('number');

${'module_srl18_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl18_argument'}->checkFilter('number');
${'module_srl18_argument'}->ensureDefaultValue('0');
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');

${'member_srl19_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl19_argument'}->checkFilter('number');
${'member_srl19_argument'}->ensureDefaultValue('0');
if(!${'member_srl19_argument'}->isValid()) return ${'member_srl19_argument'}->getErrorMessage();
if(${'member_srl19_argument'} !== null) ${'member_srl19_argument'}->setColumnType('number');

${'doc_status20_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status20_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status20_argument'}->isValid()) return ${'doc_status20_argument'}->getErrorMessage();
if(${'doc_status20_argument'} !== null) ${'doc_status20_argument'}->setColumnType('varchar');

${'version21_argument'} = new Argument('version', $args->{'version'});
${'version21_argument'}->checkFilter('number');
${'version21_argument'}->ensureDefaultValue('1');
if(!${'version21_argument'}->isValid()) return ${'version21_argument'}->getErrorMessage();
if(${'version21_argument'} !== null) ${'version21_argument'}->setColumnType('number');

${'title22_argument'} = new Argument('title', $args->{'title'});
${'title22_argument'}->ensureDefaultValue('null');
if(!${'title22_argument'}->isValid()) return ${'title22_argument'}->getErrorMessage();
if(${'title22_argument'} !== null) ${'title22_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl17_argument'})
,new InsertExpression('`module_srl`', ${'module_srl18_argument'})
,new InsertExpression('`author_srl`', ${'member_srl19_argument'})
,new InsertExpression('`doc_status`', ${'doc_status20_argument'})
,new InsertExpression('`version`', ${'version21_argument'})
,new InsertExpression('`topic`', ${'title22_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>