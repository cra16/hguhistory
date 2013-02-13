<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id52_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id52_argument'}->checkNotNull();
if(!${'user_id52_argument'}->isValid()) return ${'user_id52_argument'}->getErrorMessage();
if(${'user_id52_argument'} !== null) ${'user_id52_argument'}->setColumnType('varchar');

${'regdate53_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate53_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate53_argument'}->isValid()) return ${'regdate53_argument'}->getErrorMessage();
if(${'regdate53_argument'} !== null) ${'regdate53_argument'}->setColumnType('date');

${'description54_argument'} = new Argument('description', $args->{'description'});
${'description54_argument'}->ensureDefaultValue('');
if(!${'description54_argument'}->isValid()) return ${'description54_argument'}->getErrorMessage();
if(${'description54_argument'} !== null) ${'description54_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order55_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order55_argument'}->isValid()) return ${'list_order55_argument'}->getErrorMessage();
} else
${'list_order55_argument'} = null;if(${'list_order55_argument'} !== null) ${'list_order55_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id52_argument'})
,new InsertExpression('`regdate`', ${'regdate53_argument'})
,new InsertExpression('`description`', ${'description54_argument'})
,new InsertExpression('`list_order`', ${'list_order55_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>