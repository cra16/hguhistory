<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid38_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid38_argument'}->ensureDefaultValue('Y');
${'isvalid38_argument'}->checkNotNull();
if(!${'isvalid38_argument'}->isValid()) return ${'isvalid38_argument'}->getErrorMessage();
if(${'isvalid38_argument'} !== null) ${'isvalid38_argument'}->setColumnType('char');

${'upload_target_srl39_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl39_argument'}->checkFilter('number');
${'upload_target_srl39_argument'}->checkNotNull();
${'upload_target_srl39_argument'}->createConditionValue();
if(!${'upload_target_srl39_argument'}->isValid()) return ${'upload_target_srl39_argument'}->getErrorMessage();
if(${'upload_target_srl39_argument'} !== null) ${'upload_target_srl39_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid38_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl39_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>