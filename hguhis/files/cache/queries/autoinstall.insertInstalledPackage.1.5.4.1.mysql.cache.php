<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl25_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl25_argument'}->checkFilter('number');
${'package_srl25_argument'}->checkNotNull();
if(!${'package_srl25_argument'}->isValid()) return ${'package_srl25_argument'}->getErrorMessage();
if(${'package_srl25_argument'} !== null) ${'package_srl25_argument'}->setColumnType('number');

${'version26_argument'} = new Argument('version', $args->{'version'});
${'version26_argument'}->checkNotNull();
if(!${'version26_argument'}->isValid()) return ${'version26_argument'}->getErrorMessage();
if(${'version26_argument'} !== null) ${'version26_argument'}->setColumnType('varchar');

${'current_version27_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version27_argument'}->checkNotNull();
if(!${'current_version27_argument'}->isValid()) return ${'current_version27_argument'}->getErrorMessage();
if(${'current_version27_argument'} !== null) ${'current_version27_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update28_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update28_argument'}->isValid()) return ${'need_update28_argument'}->getErrorMessage();
} else
${'need_update28_argument'} = null;if(${'need_update28_argument'} !== null) ${'need_update28_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl25_argument'})
,new InsertExpression('`version`', ${'version26_argument'})
,new InsertExpression('`current_version`', ${'current_version27_argument'})
,new InsertExpression('`need_update`', ${'need_update28_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>