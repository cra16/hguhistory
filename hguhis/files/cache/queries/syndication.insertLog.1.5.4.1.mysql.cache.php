<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl13_argument'} = new Argument('log_srl', $args->{'log_srl'});
$db = &DB::getInstance(); $sequence = $db->getNextSequence(); ${'log_srl13_argument'}->ensureDefaultValue($sequence);
if(!${'log_srl13_argument'}->isValid()) return ${'log_srl13_argument'}->getErrorMessage();
if(${'log_srl13_argument'} !== null) ${'log_srl13_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl14_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
} else
${'module_srl14_argument'} = null;if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl15_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl15_argument'}->isValid()) return ${'document_srl15_argument'}->getErrorMessage();
} else
${'document_srl15_argument'} = null;if(${'document_srl15_argument'} !== null) ${'document_srl15_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title16_argument'} = new Argument('title', $args->{'title'});
if(!${'title16_argument'}->isValid()) return ${'title16_argument'}->getErrorMessage();
} else
${'title16_argument'} = null;if(${'title16_argument'} !== null) ${'title16_argument'}->setColumnType('varchar');
if(isset($args->summary)) {
${'summary17_argument'} = new Argument('summary', $args->{'summary'});
if(!${'summary17_argument'}->isValid()) return ${'summary17_argument'}->getErrorMessage();
} else
${'summary17_argument'} = null;if(${'summary17_argument'} !== null) ${'summary17_argument'}->setColumnType('varchar');

${'regdate18_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate18_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate18_argument'}->checkNotNull();
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl13_argument'})
,new InsertExpression('`module_srl`', ${'module_srl14_argument'})
,new InsertExpression('`document_srl`', ${'document_srl15_argument'})
,new InsertExpression('`title`', ${'title16_argument'})
,new InsertExpression('`summary`', ${'summary17_argument'})
,new InsertExpression('`regdate`', ${'regdate18_argument'})
));
$query->setTables(array(
new Table('`xe_syndication_logs`', '`syndication_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>