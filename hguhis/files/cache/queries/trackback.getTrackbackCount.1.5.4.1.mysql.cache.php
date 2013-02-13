<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTrackbackCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl15_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl15_argument'}->checkFilter('number');
${'document_srl15_argument'}->createConditionValue();
if(!${'document_srl15_argument'}->isValid()) return ${'document_srl15_argument'}->getErrorMessage();
} else
${'document_srl15_argument'} = null;if(${'document_srl15_argument'} !== null) ${'document_srl15_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl16_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl16_argument'}->checkFilter('number');
${'module_srl16_argument'}->createConditionValue();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
} else
${'module_srl16_argument'} = null;if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate17_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate17_argument'}->createConditionValue();
if(!${'regDate17_argument'}->isValid()) return ${'regDate17_argument'}->getErrorMessage();
} else
${'regDate17_argument'} = null;if(${'regDate17_argument'} !== null) ${'regDate17_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl15_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl16_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate17_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>