<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl34_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl34_argument'}->ensureDefaultValue('0');
${'site_srl34_argument'}->checkNotNull();
if(!${'site_srl34_argument'}->isValid()) return ${'site_srl34_argument'}->getErrorMessage();
if(${'site_srl34_argument'} !== null) ${'site_srl34_argument'}->setColumnType('number');

${'group_srl35_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl35_argument'}->checkNotNull();
if(!${'group_srl35_argument'}->isValid()) return ${'group_srl35_argument'}->getErrorMessage();
if(${'group_srl35_argument'} !== null) ${'group_srl35_argument'}->setColumnType('number');

${'group_srl36_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl36_argument'}->checkNotNull();
if(!${'group_srl36_argument'}->isValid()) return ${'group_srl36_argument'}->getErrorMessage();
if(${'group_srl36_argument'} !== null) ${'group_srl36_argument'}->setColumnType('number');

${'title37_argument'} = new Argument('title', $args->{'title'});
${'title37_argument'}->checkNotNull();
if(!${'title37_argument'}->isValid()) return ${'title37_argument'}->getErrorMessage();
if(${'title37_argument'} !== null) ${'title37_argument'}->setColumnType('varchar');

${'is_default38_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default38_argument'}->ensureDefaultValue('N');
${'is_default38_argument'}->checkNotNull();
if(!${'is_default38_argument'}->isValid()) return ${'is_default38_argument'}->getErrorMessage();
if(${'is_default38_argument'} !== null) ${'is_default38_argument'}->setColumnType('char');

${'is_admin39_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin39_argument'}->ensureDefaultValue('N');
${'is_admin39_argument'}->checkNotNull();
if(!${'is_admin39_argument'}->isValid()) return ${'is_admin39_argument'}->getErrorMessage();
if(${'is_admin39_argument'} !== null) ${'is_admin39_argument'}->setColumnType('char');

${'regdate40_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate40_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate40_argument'}->isValid()) return ${'regdate40_argument'}->getErrorMessage();
if(${'regdate40_argument'} !== null) ${'regdate40_argument'}->setColumnType('date');

${'description41_argument'} = new Argument('description', $args->{'description'});
${'description41_argument'}->ensureDefaultValue('');
if(!${'description41_argument'}->isValid()) return ${'description41_argument'}->getErrorMessage();
if(${'description41_argument'} !== null) ${'description41_argument'}->setColumnType('text');

${'image_mark42_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark42_argument'}->ensureDefaultValue('');
if(!${'image_mark42_argument'}->isValid()) return ${'image_mark42_argument'}->getErrorMessage();
if(${'image_mark42_argument'} !== null) ${'image_mark42_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl34_argument'})
,new InsertExpression('`group_srl`', ${'group_srl35_argument'})
,new InsertExpression('`list_order`', ${'group_srl36_argument'})
,new InsertExpression('`title`', ${'title37_argument'})
,new InsertExpression('`is_default`', ${'is_default38_argument'})
,new InsertExpression('`is_admin`', ${'is_admin39_argument'})
,new InsertExpression('`regdate`', ${'regdate40_argument'})
,new InsertExpression('`description`', ${'description41_argument'})
,new InsertExpression('`image_mark`', ${'image_mark42_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>