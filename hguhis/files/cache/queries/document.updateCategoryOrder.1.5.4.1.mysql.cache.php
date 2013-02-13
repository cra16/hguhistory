<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateCategoryOrder");
$query->setAction("update");
$query->setPriority("");

${'list_order1_argument'} = new Argument('list_order', null);
${'list_order1_argument'}->setColumnOperation('+');
${'list_order1_argument'}->ensureDefaultValue(1);
if(!${'list_order1_argument'}->isValid()) return ${'list_order1_argument'}->getErrorMessage();
if(${'list_order1_argument'} !== null) ${'list_order1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'list_order3_argument'} = new ConditionArgument('list_order', $args->list_order, 'more');
${'list_order3_argument'}->checkFilter('number');
${'list_order3_argument'}->checkNotNull();
${'list_order3_argument'}->createConditionValue();
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();
if(${'list_order3_argument'} !== null) ${'list_order3_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`list_order`', ${'list_order1_argument'})
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal")
,new ConditionWithArgument('`list_order`',$list_order3_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>