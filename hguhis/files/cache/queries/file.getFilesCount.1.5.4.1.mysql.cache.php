<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getFilesCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl18_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl18_argument'}->checkFilter('number');
${'upload_target_srl18_argument'}->createConditionValue();
if(!${'upload_target_srl18_argument'}->isValid()) return ${'upload_target_srl18_argument'}->getErrorMessage();
} else
${'upload_target_srl18_argument'} = null;if(${'upload_target_srl18_argument'} !== null) ${'upload_target_srl18_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate19_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate19_argument'}->createConditionValue();
if(!${'regDate19_argument'}->isValid()) return ${'regDate19_argument'}->getErrorMessage();
} else
${'regDate19_argument'} = null;if(${'regDate19_argument'} !== null) ${'regDate19_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl18_argument,"equal")
,new ConditionWithArgument('`regdate`',$regDate19_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>