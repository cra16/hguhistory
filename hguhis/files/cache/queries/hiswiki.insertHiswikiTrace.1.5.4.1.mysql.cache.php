<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertHiswikiTrace");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl1_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl1_argument'}->checkFilter('number');
${'document_srl1_argument'}->checkNotNull();
if(!${'document_srl1_argument'}->isValid()) return ${'document_srl1_argument'}->getErrorMessage();
if(${'document_srl1_argument'} !== null) ${'document_srl1_argument'}->setColumnType('number');

${'trace_srl2_argument'} = new Argument('trace_srl', $args->{'trace_srl'});
${'trace_srl2_argument'}->checkFilter('number');
${'trace_srl2_argument'}->ensureDefaultValue('0');
if(!${'trace_srl2_argument'}->isValid()) return ${'trace_srl2_argument'}->getErrorMessage();
if(${'trace_srl2_argument'} !== null) ${'trace_srl2_argument'}->setColumnType('number');
if(isset($args->version)) {
${'version3_argument'} = new Argument('version', $args->{'version'});
${'version3_argument'}->checkFilter('number');
if(!${'version3_argument'}->isValid()) return ${'version3_argument'}->getErrorMessage();
} else
${'version3_argument'} = null;if(${'version3_argument'} !== null) ${'version3_argument'}->setColumnType('number');

${'reg_date4_argument'} = new Argument('reg_date', $args->{'reg_date'});
${'reg_date4_argument'}->checkFilter('number');
${'reg_date4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'reg_date4_argument'}->isValid()) return ${'reg_date4_argument'}->getErrorMessage();
if(${'reg_date4_argument'} !== null) ${'reg_date4_argument'}->setColumnType('date');

${'modified_content5_argument'} = new Argument('modified_content', $args->{'modified_content'});
${'modified_content5_argument'}->checkNotNull();
if(!${'modified_content5_argument'}->isValid()) return ${'modified_content5_argument'}->getErrorMessage();
if(${'modified_content5_argument'} !== null) ${'modified_content5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl1_argument'})
,new InsertExpression('`trace_srl`', ${'trace_srl2_argument'})
,new InsertExpression('`version`', ${'version3_argument'})
,new InsertExpression('`reg_date`', ${'reg_date4_argument'})
,new InsertExpression('`modified_content`', ${'modified_content5_argument'})
));
$query->setTables(array(
new Table('`xe_hiswiki_trace`', '`hiswiki_trace`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>