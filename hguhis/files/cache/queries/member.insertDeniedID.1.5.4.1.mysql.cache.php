<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id106_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id106_argument'}->checkNotNull();
if(!${'user_id106_argument'}->isValid()) return ${'user_id106_argument'}->getErrorMessage();
if(${'user_id106_argument'} !== null) ${'user_id106_argument'}->setColumnType('varchar');

${'regdate107_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate107_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate107_argument'}->isValid()) return ${'regdate107_argument'}->getErrorMessage();
if(${'regdate107_argument'} !== null) ${'regdate107_argument'}->setColumnType('date');

${'description108_argument'} = new Argument('description', $args->{'description'});
${'description108_argument'}->ensureDefaultValue('');
if(!${'description108_argument'}->isValid()) return ${'description108_argument'}->getErrorMessage();
if(${'description108_argument'} !== null) ${'description108_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order109_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order109_argument'}->isValid()) return ${'list_order109_argument'}->getErrorMessage();
} else
${'list_order109_argument'} = null;if(${'list_order109_argument'} !== null) ${'list_order109_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id106_argument'})
,new InsertExpression('`regdate`', ${'regdate107_argument'})
,new InsertExpression('`description`', ${'description108_argument'})
,new InsertExpression('`list_order`', ${'list_order109_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>