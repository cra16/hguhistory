<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl247_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl247_argument'}->checkFilter('number');
${'member_srl247_argument'}->checkNotNull();
if(!${'member_srl247_argument'}->isValid()) return ${'member_srl247_argument'}->getErrorMessage();
if(${'member_srl247_argument'} !== null) ${'member_srl247_argument'}->setColumnType('number');

${'point248_argument'} = new Argument('point', $args->{'point'});
${'point248_argument'}->checkFilter('number');
${'point248_argument'}->ensureDefaultValue('0');
${'point248_argument'}->checkNotNull();
if(!${'point248_argument'}->isValid()) return ${'point248_argument'}->getErrorMessage();
if(${'point248_argument'} !== null) ${'point248_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl247_argument'})
,new InsertExpression('`point`', ${'point248_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>