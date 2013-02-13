<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
} else
${'module_srl13_argument'} = null;if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');

${'tag14_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag14_argument'}->checkNotNull();
${'tag14_argument'}->createConditionValue();
if(!${'tag14_argument'}->isValid()) return ${'tag14_argument'}->getErrorMessage();
if(${'tag14_argument'} !== null) ${'tag14_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl13_argument,"in")
,new ConditionWithArgument('`tag`',$tag14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>