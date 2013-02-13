<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl161_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl161_argument'}->checkFilter('number');
${'menu_srl161_argument'}->checkNotNull();
if(!${'menu_srl161_argument'}->isValid()) return ${'menu_srl161_argument'}->getErrorMessage();
if(${'menu_srl161_argument'} !== null) ${'menu_srl161_argument'}->setColumnType('number');

${'site_srl162_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl162_argument'}->checkFilter('number');
${'site_srl162_argument'}->ensureDefaultValue('0');
${'site_srl162_argument'}->checkNotNull();
if(!${'site_srl162_argument'}->isValid()) return ${'site_srl162_argument'}->getErrorMessage();
if(${'site_srl162_argument'} !== null) ${'site_srl162_argument'}->setColumnType('number');

${'title163_argument'} = new Argument('title', $args->{'title'});
${'title163_argument'}->checkNotNull();
if(!${'title163_argument'}->isValid()) return ${'title163_argument'}->getErrorMessage();
if(${'title163_argument'} !== null) ${'title163_argument'}->setColumnType('varchar');

${'listorder164_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder164_argument'}->checkNotNull();
if(!${'listorder164_argument'}->isValid()) return ${'listorder164_argument'}->getErrorMessage();
if(${'listorder164_argument'} !== null) ${'listorder164_argument'}->setColumnType('number');

${'regdate165_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate165_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate165_argument'}->isValid()) return ${'regdate165_argument'}->getErrorMessage();
if(${'regdate165_argument'} !== null) ${'regdate165_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl161_argument'})
,new InsertExpression('`site_srl`', ${'site_srl162_argument'})
,new InsertExpression('`title`', ${'title163_argument'})
,new InsertExpression('`listorder`', ${'listorder164_argument'})
,new InsertExpression('`regdate`', ${'regdate165_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>