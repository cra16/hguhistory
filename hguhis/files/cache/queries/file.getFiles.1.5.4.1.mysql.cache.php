<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl1_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl1_argument'}->checkFilter('number');
${'upload_target_srl1_argument'}->checkNotNull();
${'upload_target_srl1_argument'}->createConditionValue();
if(!${'upload_target_srl1_argument'}->isValid()) return ${'upload_target_srl1_argument'}->getErrorMessage();
if(${'upload_target_srl1_argument'} !== null) ${'upload_target_srl1_argument'}->setColumnType('number');
if(isset($args->sort_index)) {
${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();
} else
${'sort_index2_argument'} = null;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "asc")
));
$query->setLimit();
return $query; ?>