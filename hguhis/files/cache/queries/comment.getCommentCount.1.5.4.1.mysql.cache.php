<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status5_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status5_argument'}->createConditionValue();
if(!${'status5_argument'}->isValid()) return ${'status5_argument'}->getErrorMessage();
} else
${'status5_argument'} = null;if(${'status5_argument'} !== null) ${'status5_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl6_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl6_argument'}->checkFilter('number');
${'document_srl6_argument'}->createConditionValue();
if(!${'document_srl6_argument'}->isValid()) return ${'document_srl6_argument'}->getErrorMessage();
} else
${'document_srl6_argument'} = null;if(${'document_srl6_argument'} !== null) ${'document_srl6_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = null;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate8_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate8_argument'}->createConditionValue();
if(!${'regDate8_argument'}->isValid()) return ${'regDate8_argument'}->getErrorMessage();
} else
${'regDate8_argument'} = null;if(${'regDate8_argument'} !== null) ${'regDate8_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status5_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl6_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl7_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate8_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>