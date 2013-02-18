<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTrackbackCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl37_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl37_argument'}->checkFilter('number');
${'document_srl37_argument'}->createConditionValue();
if(!${'document_srl37_argument'}->isValid()) return ${'document_srl37_argument'}->getErrorMessage();
} else
${'document_srl37_argument'} = null;if(${'document_srl37_argument'} !== null) ${'document_srl37_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl38_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl38_argument'}->checkFilter('number');
${'module_srl38_argument'}->createConditionValue();
if(!${'module_srl38_argument'}->isValid()) return ${'module_srl38_argument'}->getErrorMessage();
} else
${'module_srl38_argument'} = null;if(${'module_srl38_argument'} !== null) ${'module_srl38_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate39_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate39_argument'}->createConditionValue();
if(!${'regDate39_argument'}->isValid()) return ${'regDate39_argument'}->getErrorMessage();
} else
${'regDate39_argument'} = null;if(${'regDate39_argument'} !== null) ${'regDate39_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl37_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl38_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate39_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>