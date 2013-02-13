<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl21_argument'} = new Argument('log_srl', $args->{'log_srl'});
$db = &DB::getInstance(); $sequence = $db->getNextSequence(); ${'log_srl21_argument'}->ensureDefaultValue($sequence);
if(!${'log_srl21_argument'}->isValid()) return ${'log_srl21_argument'}->getErrorMessage();
if(${'log_srl21_argument'} !== null) ${'log_srl21_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl22_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
} else
${'module_srl22_argument'} = null;if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl23_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl23_argument'}->isValid()) return ${'document_srl23_argument'}->getErrorMessage();
} else
${'document_srl23_argument'} = null;if(${'document_srl23_argument'} !== null) ${'document_srl23_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title24_argument'} = new Argument('title', $args->{'title'});
if(!${'title24_argument'}->isValid()) return ${'title24_argument'}->getErrorMessage();
} else
${'title24_argument'} = null;if(${'title24_argument'} !== null) ${'title24_argument'}->setColumnType('varchar');
if(isset($args->summary)) {
${'summary25_argument'} = new Argument('summary', $args->{'summary'});
if(!${'summary25_argument'}->isValid()) return ${'summary25_argument'}->getErrorMessage();
} else
${'summary25_argument'} = null;if(${'summary25_argument'} !== null) ${'summary25_argument'}->setColumnType('varchar');

${'regdate26_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate26_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate26_argument'}->checkNotNull();
if(!${'regdate26_argument'}->isValid()) return ${'regdate26_argument'}->getErrorMessage();
if(${'regdate26_argument'} !== null) ${'regdate26_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl21_argument'})
,new InsertExpression('`module_srl`', ${'module_srl22_argument'})
,new InsertExpression('`document_srl`', ${'document_srl23_argument'})
,new InsertExpression('`title`', ${'title24_argument'})
,new InsertExpression('`summary`', ${'summary25_argument'})
,new InsertExpression('`regdate`', ${'regdate26_argument'})
));
$query->setTables(array(
new Table('`xe_syndication_logs`', '`syndication_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>