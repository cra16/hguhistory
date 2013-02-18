<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl5_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl5_argument'}->checkFilter('number');
${'document_srl5_argument'}->createConditionValue();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
} else
${'document_srl5_argument'} = null;if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx6_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx6_argument'}->checkFilter('number');
${'var_idx6_argument'}->createConditionValue();
if(!${'var_idx6_argument'}->isValid()) return ${'var_idx6_argument'}->getErrorMessage();
} else
${'var_idx6_argument'} = null;if(${'var_idx6_argument'} !== null) ${'var_idx6_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code7_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code7_argument'}->createConditionValue();
if(!${'lang_code7_argument'}->isValid()) return ${'lang_code7_argument'}->getErrorMessage();
} else
${'lang_code7_argument'} = null;if(${'lang_code7_argument'} !== null) ${'lang_code7_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid8_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid8_argument'}->createConditionValue();
if(!${'eid8_argument'}->isValid()) return ${'eid8_argument'}->getErrorMessage();
} else
${'eid8_argument'} = null;if(${'eid8_argument'} !== null) ${'eid8_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx6_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code7_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>