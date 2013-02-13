<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraVar");
$query->setAction("insert");
$query->setPriority("");

${'module_srl35_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl35_argument'}->checkFilter('number');
${'module_srl35_argument'}->checkNotNull();
if(!${'module_srl35_argument'}->isValid()) return ${'module_srl35_argument'}->getErrorMessage();
if(${'module_srl35_argument'} !== null) ${'module_srl35_argument'}->setColumnType('number');

${'document_srl36_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl36_argument'}->checkFilter('number');
${'document_srl36_argument'}->checkNotNull();
if(!${'document_srl36_argument'}->isValid()) return ${'document_srl36_argument'}->getErrorMessage();
if(${'document_srl36_argument'} !== null) ${'document_srl36_argument'}->setColumnType('number');

${'var_idx37_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx37_argument'}->checkFilter('number');
${'var_idx37_argument'}->checkNotNull();
if(!${'var_idx37_argument'}->isValid()) return ${'var_idx37_argument'}->getErrorMessage();
if(${'var_idx37_argument'} !== null) ${'var_idx37_argument'}->setColumnType('number');

${'value38_argument'} = new Argument('value', $args->{'value'});
${'value38_argument'}->checkNotNull();
if(!${'value38_argument'}->isValid()) return ${'value38_argument'}->getErrorMessage();
if(${'value38_argument'} !== null) ${'value38_argument'}->setColumnType('bigtext');
if(isset($args->lang_code)) {
${'lang_code39_argument'} = new Argument('lang_code', $args->{'lang_code'});
if(!${'lang_code39_argument'}->isValid()) return ${'lang_code39_argument'}->getErrorMessage();
} else
${'lang_code39_argument'} = null;if(${'lang_code39_argument'} !== null) ${'lang_code39_argument'}->setColumnType('varchar');

${'eid40_argument'} = new Argument('eid', $args->{'eid'});
${'eid40_argument'}->checkNotNull();
if(!${'eid40_argument'}->isValid()) return ${'eid40_argument'}->getErrorMessage();
if(${'eid40_argument'} !== null) ${'eid40_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl35_argument'})
,new InsertExpression('`document_srl`', ${'document_srl36_argument'})
,new InsertExpression('`var_idx`', ${'var_idx37_argument'})
,new InsertExpression('`value`', ${'value38_argument'})
,new InsertExpression('`lang_code`', ${'lang_code39_argument'})
,new InsertExpression('`eid`', ${'eid40_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>