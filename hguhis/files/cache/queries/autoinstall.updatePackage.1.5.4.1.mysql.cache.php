<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path18_argument'} = new Argument('path', $args->{'path'});
${'path18_argument'}->checkNotNull();
if(!${'path18_argument'}->isValid()) return ${'path18_argument'}->getErrorMessage();
if(${'path18_argument'} !== null) ${'path18_argument'}->setColumnType('varchar');

${'updatedate19_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate19_argument'}->checkNotNull();
if(!${'updatedate19_argument'}->isValid()) return ${'updatedate19_argument'}->getErrorMessage();
if(${'updatedate19_argument'} !== null) ${'updatedate19_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl20_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl20_argument'}->checkFilter('number');
if(!${'category_srl20_argument'}->isValid()) return ${'category_srl20_argument'}->getErrorMessage();
} else
${'category_srl20_argument'} = null;if(${'category_srl20_argument'} !== null) ${'category_srl20_argument'}->setColumnType('number');

${'latest_item_srl21_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl21_argument'}->checkNotNull();
if(!${'latest_item_srl21_argument'}->isValid()) return ${'latest_item_srl21_argument'}->getErrorMessage();
if(${'latest_item_srl21_argument'} !== null) ${'latest_item_srl21_argument'}->setColumnType('number');

${'version22_argument'} = new Argument('version', $args->{'version'});
${'version22_argument'}->checkNotNull();
if(!${'version22_argument'}->isValid()) return ${'version22_argument'}->getErrorMessage();
if(${'version22_argument'} !== null) ${'version22_argument'}->setColumnType('varchar');

${'package_srl23_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl23_argument'}->checkNotNull();
${'package_srl23_argument'}->createConditionValue();
if(!${'package_srl23_argument'}->isValid()) return ${'package_srl23_argument'}->getErrorMessage();
if(${'package_srl23_argument'} !== null) ${'package_srl23_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path18_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate19_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl20_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl21_argument'})
,new UpdateExpression('`version`', ${'version22_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl23_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>