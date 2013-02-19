<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
} else
${'module_srl9_argument'} = null;if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

${'tag10_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag10_argument'}->checkNotNull();
${'tag10_argument'}->createConditionValue();
if(!${'tag10_argument'}->isValid()) return ${'tag10_argument'}->getErrorMessage();
if(${'tag10_argument'} !== null) ${'tag10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"in")
,new ConditionWithArgument('`tag`',$tag10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>