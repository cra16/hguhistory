<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList30_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList30_argument'}->createConditionValue();
if(!${'moduleSrlList30_argument'}->isValid()) return ${'moduleSrlList30_argument'}->getErrorMessage();
} else
${'moduleSrlList30_argument'} = null;if(${'moduleSrlList30_argument'} !== null) ${'moduleSrlList30_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate31_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate31_argument'}->createConditionValue();
if(!${'regDate31_argument'}->isValid()) return ${'regDate31_argument'}->getErrorMessage();
} else
${'regDate31_argument'} = null;if(${'regDate31_argument'} !== null) ${'regDate31_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList32_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList32_argument'}->createConditionValue();
if(!${'statusList32_argument'}->isValid()) return ${'statusList32_argument'}->getErrorMessage();
} else
${'statusList32_argument'} = null;if(${'statusList32_argument'} !== null) ${'statusList32_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList30_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate31_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList32_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>