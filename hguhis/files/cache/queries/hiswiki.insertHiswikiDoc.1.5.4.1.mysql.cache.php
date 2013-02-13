<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertHiswikiDoc");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl62_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl62_argument'}->checkFilter('number');
${'document_srl62_argument'}->checkNotNull();
if(!${'document_srl62_argument'}->isValid()) return ${'document_srl62_argument'}->getErrorMessage();
if(${'document_srl62_argument'} !== null) ${'document_srl62_argument'}->setColumnType('number');

${'module_srl63_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl63_argument'}->checkFilter('number');
${'module_srl63_argument'}->ensureDefaultValue('0');
if(!${'module_srl63_argument'}->isValid()) return ${'module_srl63_argument'}->getErrorMessage();
if(${'module_srl63_argument'} !== null) ${'module_srl63_argument'}->setColumnType('number');

${'member_srl64_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl64_argument'}->checkFilter('number');
${'member_srl64_argument'}->ensureDefaultValue('0');
if(!${'member_srl64_argument'}->isValid()) return ${'member_srl64_argument'}->getErrorMessage();
if(${'member_srl64_argument'} !== null) ${'member_srl64_argument'}->setColumnType('number');

${'doc_status65_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status65_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status65_argument'}->isValid()) return ${'doc_status65_argument'}->getErrorMessage();
if(${'doc_status65_argument'} !== null) ${'doc_status65_argument'}->setColumnType('varchar');

${'version66_argument'} = new Argument('version', $args->{'version'});
${'version66_argument'}->checkFilter('number');
${'version66_argument'}->ensureDefaultValue('1');
if(!${'version66_argument'}->isValid()) return ${'version66_argument'}->getErrorMessage();
if(${'version66_argument'} !== null) ${'version66_argument'}->setColumnType('number');

${'title67_argument'} = new Argument('title', $args->{'title'});
${'title67_argument'}->ensureDefaultValue('null');
if(!${'title67_argument'}->isValid()) return ${'title67_argument'}->getErrorMessage();
if(${'title67_argument'} !== null) ${'title67_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl62_argument'})
,new InsertExpression('`module_srl`', ${'module_srl63_argument'})
,new InsertExpression('`author_srl`', ${'member_srl64_argument'})
,new InsertExpression('`doc_status`', ${'doc_status65_argument'})
,new InsertExpression('`version`', ${'version66_argument'})
,new InsertExpression('`topic`', ${'title67_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>