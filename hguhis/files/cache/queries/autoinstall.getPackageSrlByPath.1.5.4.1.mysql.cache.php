<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getPackageSqlByPath");
$query->setAction("select");
$query->setPriority("");

${'path25_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path25_argument'}->checkNotNull();
${'path25_argument'}->createConditionValue();
if(!${'path25_argument'}->isValid()) return ${'path25_argument'}->getErrorMessage();
if(${'path25_argument'} !== null) ${'path25_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`package_srl`')
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path25_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>