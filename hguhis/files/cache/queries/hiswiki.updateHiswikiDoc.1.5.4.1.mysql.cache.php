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

${'doc_status8_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status8_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status8_argument'}->isValid()) return ${'doc_status8_argument'}->getErrorMessage();
if(${'doc_status8_argument'} !== null) ${'doc_status8_argument'}->setColumnType('varchar');
if(isset($args->version)) {
${'version9_argument'} = new Argument('version', $args->{'version'});
${'version9_argument'}->checkFilter('number');
if(!${'version9_argument'}->isValid()) return ${'version9_argument'}->getErrorMessage();
} else
${'version9_argument'} = null;if(${'version9_argument'} !== null) ${'version9_argument'}->setColumnType('number');

${'title10_argument'} = new Argument('title', $args->{'title'});
${'title10_argument'}->ensureDefaultValue('null');
if(!${'title10_argument'}->isValid()) return ${'title10_argument'}->getErrorMessage();
if(${'title10_argument'} !== null) ${'title10_argument'}->setColumnType('varchar');

${'document_srl11_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl11_argument'}->checkFilter('number');
${'document_srl11_argument'}->checkNotNull();
${'document_srl11_argument'}->createConditionValue();
if(!${'document_srl11_argument'}->isValid()) return ${'document_srl11_argument'}->getErrorMessage();
if(${'document_srl11_argument'} !== null) ${'document_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`document_srl`', ${'document_srl5_argument'})
,new UpdateExpression('`module_srl`', ${'module_srl6_argument'})
,new UpdateExpression('`author_srl`', ${'member_srl7_argument'})
,new UpdateExpression('`doc_status`', ${'doc_status8_argument'})
,new UpdateExpression('`version`', ${'version9_argument'})
,new UpdateExpression('`topic`', ${'title10_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>