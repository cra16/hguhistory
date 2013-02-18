<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate29_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate29_argument'}->createConditionValue();
if(!${'regDate29_argument'}->isValid()) return ${'regDate29_argument'}->getErrorMessage();
} else
${'regDate29_argument'} = null;if(${'regDate29_argument'} !== null) ${'regDate29_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate29_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>