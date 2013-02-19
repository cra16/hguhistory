<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertTag");
$query->setAction("insert");
$query->setPriority("");

${'tag_srl12_argument'} = new Argument('tag_srl', $args->{'tag_srl'});
$db = &DB::getInstance(); $sequence = $db->getNextSequence(); ${'tag_srl12_argument'}->ensureDefaultValue($sequence);
${'tag_srl12_argument'}->checkNotNull();
if(!${'tag_srl12_argument'}->isValid()) return ${'tag_srl12_argument'}->getErrorMessage();
if(${'tag_srl12_argument'} !== null) ${'tag_srl12_argument'}->setColumnType('number');

${'module_srl13_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->checkNotNull();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');

${'document_srl14_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->checkNotNull();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

${'tag15_argument'} = new Argument('tag', $args->{'tag'});
${'tag15_argument'}->checkNotNull();
if(!${'tag15_argument'}->isValid()) return ${'tag15_argument'}->getErrorMessage();
if(${'tag15_argument'} !== null) ${'tag15_argument'}->setColumnType('varchar');

${'regdate16_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate16_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate16_argument'}->isValid()) return ${'regdate16_argument'}->getErrorMessage();
if(${'regdate16_argument'} !== null) ${'regdate16_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`tag_srl`', ${'tag_srl12_argument'})
,new InsertExpression('`module_srl`', ${'module_srl13_argument'})
,new InsertExpression('`document_srl`', ${'document_srl14_argument'})
,new InsertExpression('`tag`', ${'tag15_argument'})
,new InsertExpression('`regdate`', ${'regdate16_argument'})
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>