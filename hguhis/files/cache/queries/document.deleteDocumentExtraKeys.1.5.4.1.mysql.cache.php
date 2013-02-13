<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl28_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl28_argument'}->checkFilter('number');
${'module_srl28_argument'}->checkNotNull();
${'module_srl28_argument'}->createConditionValue();
if(!${'module_srl28_argument'}->isValid()) return ${'module_srl28_argument'}->getErrorMessage();
if(${'module_srl28_argument'} !== null) ${'module_srl28_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl29_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl29_argument'}->checkFilter('number');
${'document_srl29_argument'}->createConditionValue();
if(!${'document_srl29_argument'}->isValid()) return ${'document_srl29_argument'}->getErrorMessage();
} else
${'document_srl29_argument'} = null;if(isset($args->var_idx)) {
${'var_idx30_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx30_argument'}->checkFilter('number');
${'var_idx30_argument'}->createConditionValue();
if(!${'var_idx30_argument'}->isValid()) return ${'var_idx30_argument'}->getErrorMessage();
} else
${'var_idx30_argument'} = null;if(${'var_idx30_argument'} !== null) ${'var_idx30_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl28_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl29_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx30_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>