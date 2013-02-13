<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl12_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl12_argument'}->checkFilter('number');
${'package_srl12_argument'}->checkNotNull();
if(!${'package_srl12_argument'}->isValid()) return ${'package_srl12_argument'}->getErrorMessage();
if(${'package_srl12_argument'} !== null) ${'package_srl12_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl13_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl13_argument'}->checkFilter('number');
if(!${'category_srl13_argument'}->isValid()) return ${'category_srl13_argument'}->getErrorMessage();
} else
${'category_srl13_argument'} = null;if(${'category_srl13_argument'} !== null) ${'category_srl13_argument'}->setColumnType('number');

${'path14_argument'} = new Argument('path', $args->{'path'});
${'path14_argument'}->checkNotNull();
if(!${'path14_argument'}->isValid()) return ${'path14_argument'}->getErrorMessage();
if(${'path14_argument'} !== null) ${'path14_argument'}->setColumnType('varchar');

${'updatedate15_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate15_argument'}->checkNotNull();
if(!${'updatedate15_argument'}->isValid()) return ${'updatedate15_argument'}->getErrorMessage();
if(${'updatedate15_argument'} !== null) ${'updatedate15_argument'}->setColumnType('date');

${'latest_item_srl16_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl16_argument'}->checkNotNull();
if(!${'latest_item_srl16_argument'}->isValid()) return ${'latest_item_srl16_argument'}->getErrorMessage();
if(${'latest_item_srl16_argument'} !== null) ${'latest_item_srl16_argument'}->setColumnType('number');

${'version17_argument'} = new Argument('version', $args->{'version'});
${'version17_argument'}->checkNotNull();
if(!${'version17_argument'}->isValid()) return ${'version17_argument'}->getErrorMessage();
if(${'version17_argument'} !== null) ${'version17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl12_argument'})
,new InsertExpression('`category_srl`', ${'category_srl13_argument'})
,new InsertExpression('`path`', ${'path14_argument'})
,new InsertExpression('`updatedate`', ${'updatedate15_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl16_argument'})
,new InsertExpression('`version`', ${'version17_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>