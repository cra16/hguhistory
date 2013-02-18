<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
} else
${'document_srl2_argument'} = null;if(isset($args->var_idx)) {
${'var_idx3_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx3_argument'}->checkFilter('number');
${'var_idx3_argument'}->createConditionValue();
if(!${'var_idx3_argument'}->isValid()) return ${'var_idx3_argument'}->getErrorMessage();
} else
${'var_idx3_argument'} = null;if(${'var_idx3_argument'} !== null) ${'var_idx3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>