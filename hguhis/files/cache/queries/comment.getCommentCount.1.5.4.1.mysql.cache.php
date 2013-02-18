<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status33_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status33_argument'}->createConditionValue();
if(!${'status33_argument'}->isValid()) return ${'status33_argument'}->getErrorMessage();
} else
${'status33_argument'} = null;if(${'status33_argument'} !== null) ${'status33_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl34_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl34_argument'}->checkFilter('number');
${'document_srl34_argument'}->createConditionValue();
if(!${'document_srl34_argument'}->isValid()) return ${'document_srl34_argument'}->getErrorMessage();
} else
${'document_srl34_argument'} = null;if(${'document_srl34_argument'} !== null) ${'document_srl34_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl35_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl35_argument'}->checkFilter('number');
${'module_srl35_argument'}->createConditionValue();
if(!${'module_srl35_argument'}->isValid()) return ${'module_srl35_argument'}->getErrorMessage();
} else
${'module_srl35_argument'} = null;if(${'module_srl35_argument'} !== null) ${'module_srl35_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate36_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate36_argument'}->createConditionValue();
if(!${'regDate36_argument'}->isValid()) return ${'regDate36_argument'}->getErrorMessage();
} else
${'regDate36_argument'} = null;if(${'regDate36_argument'} !== null) ${'regDate36_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status33_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl34_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl35_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate36_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>