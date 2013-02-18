<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl110_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl110_argument'}->checkNotNull();
if(!${'site_srl110_argument'}->isValid()) return ${'site_srl110_argument'}->getErrorMessage();
if(${'site_srl110_argument'} !== null) ${'site_srl110_argument'}->setColumnType('number');

${'addon111_argument'} = new Argument('addon', $args->{'addon'});
${'addon111_argument'}->checkNotNull();
if(!${'addon111_argument'}->isValid()) return ${'addon111_argument'}->getErrorMessage();
if(${'addon111_argument'} !== null) ${'addon111_argument'}->setColumnType('varchar');

${'is_used112_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used112_argument'}->ensureDefaultValue('N');
${'is_used112_argument'}->checkNotNull();
if(!${'is_used112_argument'}->isValid()) return ${'is_used112_argument'}->getErrorMessage();
if(${'is_used112_argument'} !== null) ${'is_used112_argument'}->setColumnType('char');

${'is_used_m113_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m113_argument'}->ensureDefaultValue('N');
if(!${'is_used_m113_argument'}->isValid()) return ${'is_used_m113_argument'}->getErrorMessage();
if(${'is_used_m113_argument'} !== null) ${'is_used_m113_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars114_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars114_argument'}->isValid()) return ${'extra_vars114_argument'}->getErrorMessage();
} else
${'extra_vars114_argument'} = null;if(${'extra_vars114_argument'} !== null) ${'extra_vars114_argument'}->setColumnType('text');

${'regdate115_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate115_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate115_argument'}->isValid()) return ${'regdate115_argument'}->getErrorMessage();
if(${'regdate115_argument'} !== null) ${'regdate115_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl110_argument'})
,new InsertExpression('`addon`', ${'addon111_argument'})
,new InsertExpression('`is_used`', ${'is_used112_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m113_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars114_argument'})
,new InsertExpression('`regdate`', ${'regdate115_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>