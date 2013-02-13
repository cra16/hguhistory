<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid49_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid49_argument'}->ensureDefaultValue('Y');
${'isvalid49_argument'}->checkNotNull();
if(!${'isvalid49_argument'}->isValid()) return ${'isvalid49_argument'}->getErrorMessage();
if(${'isvalid49_argument'} !== null) ${'isvalid49_argument'}->setColumnType('char');

${'upload_target_srl50_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl50_argument'}->checkFilter('number');
${'upload_target_srl50_argument'}->checkNotNull();
${'upload_target_srl50_argument'}->createConditionValue();
if(!${'upload_target_srl50_argument'}->isValid()) return ${'upload_target_srl50_argument'}->getErrorMessage();
if(${'upload_target_srl50_argument'} !== null) ${'upload_target_srl50_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid49_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl50_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>