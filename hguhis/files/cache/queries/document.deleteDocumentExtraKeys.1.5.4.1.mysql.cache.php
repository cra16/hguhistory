<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl11_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl11_argument'}->checkFilter('number');
${'document_srl11_argument'}->createConditionValue();
if(!${'document_srl11_argument'}->isValid()) return ${'document_srl11_argument'}->getErrorMessage();
} else
${'document_srl11_argument'} = null;if(isset($args->var_idx)) {
${'var_idx12_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx12_argument'}->checkFilter('number');
${'var_idx12_argument'}->createConditionValue();
if(!${'var_idx12_argument'}->isValid()) return ${'var_idx12_argument'}->getErrorMessage();
} else
${'var_idx12_argument'} = null;if(${'var_idx12_argument'} !== null) ${'var_idx12_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl10_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl11_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>