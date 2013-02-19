<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl30_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl30_argument'}->checkFilter('number');
${'module_srl30_argument'}->checkNotNull();
${'module_srl30_argument'}->createConditionValue();
if(!${'module_srl30_argument'}->isValid()) return ${'module_srl30_argument'}->getErrorMessage();
if(${'module_srl30_argument'} !== null) ${'module_srl30_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl31_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl31_argument'}->checkFilter('number');
${'document_srl31_argument'}->createConditionValue();
if(!${'document_srl31_argument'}->isValid()) return ${'document_srl31_argument'}->getErrorMessage();
} else
${'document_srl31_argument'} = null;if(${'document_srl31_argument'} !== null) ${'document_srl31_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx32_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx32_argument'}->checkFilter('number');
${'var_idx32_argument'}->createConditionValue();
if(!${'var_idx32_argument'}->isValid()) return ${'var_idx32_argument'}->getErrorMessage();
} else
${'var_idx32_argument'} = null;if(${'var_idx32_argument'} !== null) ${'var_idx32_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code33_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code33_argument'}->createConditionValue();
if(!${'lang_code33_argument'}->isValid()) return ${'lang_code33_argument'}->getErrorMessage();
} else
${'lang_code33_argument'} = null;if(${'lang_code33_argument'} !== null) ${'lang_code33_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid34_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid34_argument'}->createConditionValue();
if(!${'eid34_argument'}->isValid()) return ${'eid34_argument'}->getErrorMessage();
} else
${'eid34_argument'} = null;if(${'eid34_argument'} !== null) ${'eid34_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl30_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl31_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx32_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code33_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid34_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>