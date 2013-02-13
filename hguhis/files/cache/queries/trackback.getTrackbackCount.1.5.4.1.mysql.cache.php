<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getTrackbackCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl9_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->createConditionValue();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
} else
${'document_srl9_argument'} = null;if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
} else
${'module_srl10_argument'} = null;if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate11_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate11_argument'}->createConditionValue();
if(!${'regDate11_argument'}->isValid()) return ${'regDate11_argument'}->getErrorMessage();
} else
${'regDate11_argument'} = null;if(${'regDate11_argument'} !== null) ${'regDate11_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl9_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl10_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate11_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>