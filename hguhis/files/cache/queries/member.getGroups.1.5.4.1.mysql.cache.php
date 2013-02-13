<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl24_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl24_argument'}->createConditionValue();
if(!${'site_srl24_argument'}->isValid()) return ${'site_srl24_argument'}->getErrorMessage();
} else
${'site_srl24_argument'} = null;if(${'site_srl24_argument'} !== null) ${'site_srl24_argument'}->setColumnType('number');

${'sort_index25_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index25_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index25_argument'}->isValid()) return ${'sort_index25_argument'}->getErrorMessage();

${'order_type26_argument'} = new SortArgument('order_type26', $args->order_type);
${'order_type26_argument'}->ensureDefaultValue('asc');
if(!${'order_type26_argument'}->isValid()) return ${'order_type26_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl24_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index25_argument'}, $order_type26_argument)
));
$query->setLimit();
return $query; ?>