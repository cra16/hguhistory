<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getFilesCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl40_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl40_argument'}->checkFilter('number');
${'upload_target_srl40_argument'}->createConditionValue();
if(!${'upload_target_srl40_argument'}->isValid()) return ${'upload_target_srl40_argument'}->getErrorMessage();
} else
${'upload_target_srl40_argument'} = null;if(${'upload_target_srl40_argument'} !== null) ${'upload_target_srl40_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate41_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate41_argument'}->createConditionValue();
if(!${'regDate41_argument'}->isValid()) return ${'regDate41_argument'}->getErrorMessage();
} else
${'regDate41_argument'} = null;if(${'regDate41_argument'} !== null) ${'regDate41_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl40_argument,"equal")
,new ConditionWithArgument('`regdate`',$regDate41_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>