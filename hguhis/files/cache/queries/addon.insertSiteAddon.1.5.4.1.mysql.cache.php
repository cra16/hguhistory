<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl56_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl56_argument'}->checkNotNull();
if(!${'site_srl56_argument'}->isValid()) return ${'site_srl56_argument'}->getErrorMessage();
if(${'site_srl56_argument'} !== null) ${'site_srl56_argument'}->setColumnType('number');

${'addon57_argument'} = new Argument('addon', $args->{'addon'});
${'addon57_argument'}->checkNotNull();
if(!${'addon57_argument'}->isValid()) return ${'addon57_argument'}->getErrorMessage();
if(${'addon57_argument'} !== null) ${'addon57_argument'}->setColumnType('varchar');

${'is_used58_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used58_argument'}->ensureDefaultValue('N');
${'is_used58_argument'}->checkNotNull();
if(!${'is_used58_argument'}->isValid()) return ${'is_used58_argument'}->getErrorMessage();
if(${'is_used58_argument'} !== null) ${'is_used58_argument'}->setColumnType('char');

${'is_used_m59_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m59_argument'}->ensureDefaultValue('N');
if(!${'is_used_m59_argument'}->isValid()) return ${'is_used_m59_argument'}->getErrorMessage();
if(${'is_used_m59_argument'} !== null) ${'is_used_m59_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars60_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars60_argument'}->isValid()) return ${'extra_vars60_argument'}->getErrorMessage();
} else
${'extra_vars60_argument'} = null;if(${'extra_vars60_argument'} !== null) ${'extra_vars60_argument'}->setColumnType('text');

${'regdate61_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate61_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate61_argument'}->isValid()) return ${'regdate61_argument'}->getErrorMessage();
if(${'regdate61_argument'} !== null) ${'regdate61_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl56_argument'})
,new InsertExpression('`addon`', ${'addon57_argument'})
,new InsertExpression('`is_used`', ${'is_used58_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m59_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars60_argument'})
,new InsertExpression('`regdate`', ${'regdate61_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>