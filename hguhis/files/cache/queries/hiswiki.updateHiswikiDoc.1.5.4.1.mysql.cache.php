<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateHiswikiDoc");
$query->setAction("update");
$query->setPriority("LOW");

${'document_srl32_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl32_argument'}->checkFilter('number');
${'document_srl32_argument'}->checkNotNull();
if(!${'document_srl32_argument'}->isValid()) return ${'document_srl32_argument'}->getErrorMessage();
if(${'document_srl32_argument'} !== null) ${'document_srl32_argument'}->setColumnType('number');

${'module_srl33_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl33_argument'}->checkFilter('number');
${'module_srl33_argument'}->ensureDefaultValue('0');
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');

${'member_srl34_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl34_argument'}->checkFilter('number');
${'member_srl34_argument'}->ensureDefaultValue('0');
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');

${'doc_status35_argument'} = new Argument('doc_status', $args->{'doc_status'});
${'doc_status35_argument'}->ensureDefaultValue('PUBLIC');
if(!${'doc_status35_argument'}->isValid()) return ${'doc_status35_argument'}->getErrorMessage();
if(${'doc_status35_argument'} !== null) ${'doc_status35_argument'}->setColumnType('varchar');
if(isset($args->version)) {
${'version36_argument'} = new Argument('version', $args->{'version'});
${'version36_argument'}->checkFilter('number');
if(!${'version36_argument'}->isValid()) return ${'version36_argument'}->getErrorMessage();
} else
${'version36_argument'} = null;if(${'version36_argument'} !== null) ${'version36_argument'}->setColumnType('number');

${'title37_argument'} = new Argument('title', $args->{'title'});
${'title37_argument'}->ensureDefaultValue('null');
if(!${'title37_argument'}->isValid()) return ${'title37_argument'}->getErrorMessage();
if(${'title37_argument'} !== null) ${'title37_argument'}->setColumnType('varchar');

${'document_srl38_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl38_argument'}->checkFilter('number');
${'document_srl38_argument'}->checkNotNull();
${'document_srl38_argument'}->createConditionValue();
if(!${'document_srl38_argument'}->isValid()) return ${'document_srl38_argument'}->getErrorMessage();
if(${'document_srl38_argument'} !== null) ${'document_srl38_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`document_srl`', ${'document_srl32_argument'})
,new UpdateExpression('`module_srl`', ${'module_srl33_argument'})
,new UpdateExpression('`author_srl`', ${'member_srl34_argument'})
,new UpdateExpression('`doc_status`', ${'doc_status35_argument'})
,new UpdateExpression('`version`', ${'version36_argument'})
,new UpdateExpression('`topic`', ${'title37_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl38_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>