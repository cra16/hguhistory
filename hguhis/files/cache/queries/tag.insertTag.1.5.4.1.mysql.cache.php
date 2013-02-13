<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertTag");
$query->setAction("insert");
$query->setPriority("");

${'tag_srl57_argument'} = new Argument('tag_srl', $args->{'tag_srl'});
$db = &DB::getInstance(); $sequence = $db->getNextSequence(); ${'tag_srl57_argument'}->ensureDefaultValue($sequence);
${'tag_srl57_argument'}->checkNotNull();
if(!${'tag_srl57_argument'}->isValid()) return ${'tag_srl57_argument'}->getErrorMessage();
if(${'tag_srl57_argument'} !== null) ${'tag_srl57_argument'}->setColumnType('number');

${'module_srl58_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl58_argument'}->checkFilter('number');
${'module_srl58_argument'}->checkNotNull();
if(!${'module_srl58_argument'}->isValid()) return ${'module_srl58_argument'}->getErrorMessage();
if(${'module_srl58_argument'} !== null) ${'module_srl58_argument'}->setColumnType('number');

${'document_srl59_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl59_argument'}->checkFilter('number');
${'document_srl59_argument'}->checkNotNull();
if(!${'document_srl59_argument'}->isValid()) return ${'document_srl59_argument'}->getErrorMessage();
if(${'document_srl59_argument'} !== null) ${'document_srl59_argument'}->setColumnType('number');

${'tag60_argument'} = new Argument('tag', $args->{'tag'});
${'tag60_argument'}->checkNotNull();
if(!${'tag60_argument'}->isValid()) return ${'tag60_argument'}->getErrorMessage();
if(${'tag60_argument'} !== null) ${'tag60_argument'}->setColumnType('varchar');

${'regdate61_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate61_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate61_argument'}->isValid()) return ${'regdate61_argument'}->getErrorMessage();
if(${'regdate61_argument'} !== null) ${'regdate61_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`tag_srl`', ${'tag_srl57_argument'})
,new InsertExpression('`module_srl`', ${'module_srl58_argument'})
,new InsertExpression('`document_srl`', ${'document_srl59_argument'})
,new InsertExpression('`tag`', ${'tag60_argument'})
,new InsertExpression('`regdate`', ${'regdate61_argument'})
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>