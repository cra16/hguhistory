<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl87_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl87_argument'}->checkFilter('number');
${'layout_srl87_argument'}->checkNotNull();
if(!${'layout_srl87_argument'}->isValid()) return ${'layout_srl87_argument'}->getErrorMessage();
if(${'layout_srl87_argument'} !== null) ${'layout_srl87_argument'}->setColumnType('number');

${'site_srl88_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl88_argument'}->checkFilter('number');
${'site_srl88_argument'}->ensureDefaultValue('0');
${'site_srl88_argument'}->checkNotNull();
if(!${'site_srl88_argument'}->isValid()) return ${'site_srl88_argument'}->getErrorMessage();
if(${'site_srl88_argument'} !== null) ${'site_srl88_argument'}->setColumnType('number');

${'layout89_argument'} = new Argument('layout', $args->{'layout'});
${'layout89_argument'}->checkNotNull();
if(!${'layout89_argument'}->isValid()) return ${'layout89_argument'}->getErrorMessage();
if(${'layout89_argument'} !== null) ${'layout89_argument'}->setColumnType('varchar');

${'title90_argument'} = new Argument('title', $args->{'title'});
${'title90_argument'}->checkNotNull();
if(!${'title90_argument'}->isValid()) return ${'title90_argument'}->getErrorMessage();
if(${'title90_argument'} !== null) ${'title90_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl91_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl91_argument'}->isValid()) return ${'module_srl91_argument'}->getErrorMessage();
} else
${'module_srl91_argument'} = null;if(${'module_srl91_argument'} !== null) ${'module_srl91_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars92_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars92_argument'}->isValid()) return ${'extra_vars92_argument'}->getErrorMessage();
} else
${'extra_vars92_argument'} = null;if(${'extra_vars92_argument'} !== null) ${'extra_vars92_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path93_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path93_argument'}->isValid()) return ${'layout_path93_argument'}->getErrorMessage();
} else
${'layout_path93_argument'} = null;if(${'layout_path93_argument'} !== null) ${'layout_path93_argument'}->setColumnType('varchar');

${'regdate94_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate94_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate94_argument'}->isValid()) return ${'regdate94_argument'}->getErrorMessage();
if(${'regdate94_argument'} !== null) ${'regdate94_argument'}->setColumnType('date');

${'layout_type95_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type95_argument'}->ensureDefaultValue('P');
if(!${'layout_type95_argument'}->isValid()) return ${'layout_type95_argument'}->getErrorMessage();
if(${'layout_type95_argument'} !== null) ${'layout_type95_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl87_argument'})
,new InsertExpression('`site_srl`', ${'site_srl88_argument'})
,new InsertExpression('`layout`', ${'layout89_argument'})
,new InsertExpression('`title`', ${'title90_argument'})
,new InsertExpression('`module_srl`', ${'module_srl91_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars92_argument'})
,new InsertExpression('`layout_path`', ${'layout_path93_argument'})
,new InsertExpression('`regdate`', ${'regdate94_argument'})
,new InsertExpression('`layout_type`', ${'layout_type95_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>