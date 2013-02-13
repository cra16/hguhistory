<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status11_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status11_argument'}->createConditionValue();
if(!${'status11_argument'}->isValid()) return ${'status11_argument'}->getErrorMessage();
} else
${'status11_argument'} = null;if(${'status11_argument'} !== null) ${'status11_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl12_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl12_argument'}->checkFilter('number');
${'document_srl12_argument'}->createConditionValue();
if(!${'document_srl12_argument'}->isValid()) return ${'document_srl12_argument'}->getErrorMessage();
} else
${'document_srl12_argument'} = null;if(${'document_srl12_argument'} !== null) ${'document_srl12_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
} else
${'module_srl13_argument'} = null;if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate14_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate14_argument'}->createConditionValue();
if(!${'regDate14_argument'}->isValid()) return ${'regDate14_argument'}->getErrorMessage();
} else
${'regDate14_argument'} = null;if(${'regDate14_argument'} !== null) ${'regDate14_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status11_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl12_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl13_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate14_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>