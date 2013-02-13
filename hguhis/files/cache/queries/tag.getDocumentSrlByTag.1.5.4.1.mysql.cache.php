<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = null;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'tag2_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag2_argument'}->checkNotNull();
${'tag2_argument'}->createConditionValue();
if(!${'tag2_argument'}->isValid()) return ${'tag2_argument'}->getErrorMessage();
if(${'tag2_argument'} !== null) ${'tag2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"in")
,new ConditionWithArgument('`tag`',$tag2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>