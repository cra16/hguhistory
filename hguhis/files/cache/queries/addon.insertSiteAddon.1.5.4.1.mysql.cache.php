<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl3_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl3_argument'}->checkNotNull();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'addon4_argument'} = new Argument('addon', $args->{'addon'});
${'addon4_argument'}->checkNotNull();
if(!${'addon4_argument'}->isValid()) return ${'addon4_argument'}->getErrorMessage();
if(${'addon4_argument'} !== null) ${'addon4_argument'}->setColumnType('varchar');

${'is_used5_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used5_argument'}->ensureDefaultValue('N');
${'is_used5_argument'}->checkNotNull();
if(!${'is_used5_argument'}->isValid()) return ${'is_used5_argument'}->getErrorMessage();
if(${'is_used5_argument'} !== null) ${'is_used5_argument'}->setColumnType('char');

${'is_used_m6_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m6_argument'}->ensureDefaultValue('N');
if(!${'is_used_m6_argument'}->isValid()) return ${'is_used_m6_argument'}->getErrorMessage();
if(${'is_used_m6_argument'} !== null) ${'is_used_m6_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars7_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars7_argument'}->isValid()) return ${'extra_vars7_argument'}->getErrorMessage();
} else
${'extra_vars7_argument'} = null;if(${'extra_vars7_argument'} !== null) ${'extra_vars7_argument'}->setColumnType('text');

${'regdate8_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate8_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate8_argument'}->isValid()) return ${'regdate8_argument'}->getErrorMessage();
if(${'regdate8_argument'} !== null) ${'regdate8_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl3_argument'})
,new InsertExpression('`addon`', ${'addon4_argument'})
,new InsertExpression('`is_used`', ${'is_used5_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m6_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars7_argument'})
,new InsertExpression('`regdate`', ${'regdate8_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>