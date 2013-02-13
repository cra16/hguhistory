<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl16_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl16_argument'}->createConditionValue();
if(!${'site_srl16_argument'}->isValid()) return ${'site_srl16_argument'}->getErrorMessage();
} else
${'site_srl16_argument'} = null;if(${'site_srl16_argument'} !== null) ${'site_srl16_argument'}->setColumnType('number');

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

${'order_type18_argument'} = new SortArgument('order_type18', $args->order_type);
${'order_type18_argument'}->ensureDefaultValue('asc');
if(!${'order_type18_argument'}->isValid()) return ${'order_type18_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, $order_type18_argument)
));
$query->setLimit();
return $query; ?>