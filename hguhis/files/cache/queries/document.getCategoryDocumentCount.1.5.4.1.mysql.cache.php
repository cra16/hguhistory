<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCategoryDocumentCount");
$query->setAction("select");
$query->setPriority("");

${'category_srl41_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl41_argument'}->checkFilter('number');
${'category_srl41_argument'}->checkNotNull();
${'category_srl41_argument'}->createConditionValue();
if(!${'category_srl41_argument'}->isValid()) return ${'category_srl41_argument'}->getErrorMessage();
if(${'category_srl41_argument'} !== null) ${'category_srl41_argument'}->setColumnType('number');

${'module_srl42_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl42_argument'}->checkFilter('number');
${'module_srl42_argument'}->checkNotNull();
${'module_srl42_argument'}->createConditionValue();
if(!${'module_srl42_argument'}->isValid()) return ${'module_srl42_argument'}->getErrorMessage();
if(${'module_srl42_argument'} !== null) ${'module_srl42_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl41_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl42_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>