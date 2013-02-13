<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl31_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl31_argument'}->checkFilter('number');
${'module_srl31_argument'}->checkNotNull();
${'module_srl31_argument'}->createConditionValue();
if(!${'module_srl31_argument'}->isValid()) return ${'module_srl31_argument'}->getErrorMessage();
if(${'module_srl31_argument'} !== null) ${'module_srl31_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl32_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl32_argument'}->checkFilter('number');
${'document_srl32_argument'}->createConditionValue();
if(!${'document_srl32_argument'}->isValid()) return ${'document_srl32_argument'}->getErrorMessage();
} else
${'document_srl32_argument'} = null;if(${'document_srl32_argument'} !== null) ${'document_srl32_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx33_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx33_argument'}->checkFilter('number');
${'var_idx33_argument'}->createConditionValue();
if(!${'var_idx33_argument'}->isValid()) return ${'var_idx33_argument'}->getErrorMessage();
} else
${'var_idx33_argument'} = null;if(${'var_idx33_argument'} !== null) ${'var_idx33_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code34_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code34_argument'}->createConditionValue();
if(!${'lang_code34_argument'}->isValid()) return ${'lang_code34_argument'}->getErrorMessage();
} else
${'lang_code34_argument'} = null;if(${'lang_code34_argument'} !== null) ${'lang_code34_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid35_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid35_argument'}->createConditionValue();
if(!${'eid35_argument'}->isValid()) return ${'eid35_argument'}->getErrorMessage();
} else
${'eid35_argument'} = null;if(${'eid35_argument'} !== null) ${'eid35_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl31_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl32_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx33_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code34_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid35_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>