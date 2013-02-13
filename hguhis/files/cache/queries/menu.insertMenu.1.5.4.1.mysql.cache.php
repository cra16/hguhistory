<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl65_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl65_argument'}->checkFilter('number');
${'menu_srl65_argument'}->checkNotNull();
if(!${'menu_srl65_argument'}->isValid()) return ${'menu_srl65_argument'}->getErrorMessage();
if(${'menu_srl65_argument'} !== null) ${'menu_srl65_argument'}->setColumnType('number');

${'site_srl66_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl66_argument'}->checkFilter('number');
${'site_srl66_argument'}->ensureDefaultValue('0');
${'site_srl66_argument'}->checkNotNull();
if(!${'site_srl66_argument'}->isValid()) return ${'site_srl66_argument'}->getErrorMessage();
if(${'site_srl66_argument'} !== null) ${'site_srl66_argument'}->setColumnType('number');

${'title67_argument'} = new Argument('title', $args->{'title'});
${'title67_argument'}->checkNotNull();
if(!${'title67_argument'}->isValid()) return ${'title67_argument'}->getErrorMessage();
if(${'title67_argument'} !== null) ${'title67_argument'}->setColumnType('varchar');

${'listorder68_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder68_argument'}->checkNotNull();
if(!${'listorder68_argument'}->isValid()) return ${'listorder68_argument'}->getErrorMessage();
if(${'listorder68_argument'} !== null) ${'listorder68_argument'}->setColumnType('number');

${'regdate69_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate69_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate69_argument'}->isValid()) return ${'regdate69_argument'}->getErrorMessage();
if(${'regdate69_argument'} !== null) ${'regdate69_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl65_argument'})
,new InsertExpression('`site_srl`', ${'site_srl66_argument'})
,new InsertExpression('`title`', ${'title67_argument'})
,new InsertExpression('`listorder`', ${'listorder68_argument'})
,new InsertExpression('`regdate`', ${'regdate69_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>