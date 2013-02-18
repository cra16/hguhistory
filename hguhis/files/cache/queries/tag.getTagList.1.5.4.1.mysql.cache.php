<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTagList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
} else
${'module_srl10_argument'} = null;if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('20');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'count11_argument'} = new Argument('count', $args->{'count'});
${'count11_argument'}->ensureDefaultValue('count');
if(!${'count11_argument'}->isValid()) return ${'count11_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`tag`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_tags`', '`T`')
,new Table('`xe_documents`', '`D`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`T`.`document_srl`','`D`.`document_srl`',"equal")
,new ConditionWithoutArgument('`D`.`module_srl`','0',"notequal", 'and')
,new ConditionWithArgument('`T`.`module_srl`',$module_srl10_argument,"in", 'and')))
));
$query->setGroups(array(
'`tag`' ));
$query->setOrder(array(
new OrderByColumn(${'count11_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count12_argument'}));
return $query; ?>