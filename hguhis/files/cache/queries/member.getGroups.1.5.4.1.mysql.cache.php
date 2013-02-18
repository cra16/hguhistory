<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl31_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl31_argument'}->createConditionValue();
if(!${'site_srl31_argument'}->isValid()) return ${'site_srl31_argument'}->getErrorMessage();
} else
${'site_srl31_argument'} = null;if(${'site_srl31_argument'} !== null) ${'site_srl31_argument'}->setColumnType('number');

${'sort_index32_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index32_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index32_argument'}->isValid()) return ${'sort_index32_argument'}->getErrorMessage();

${'order_type33_argument'} = new SortArgument('order_type33', $args->order_type);
${'order_type33_argument'}->ensureDefaultValue('asc');
if(!${'order_type33_argument'}->isValid()) return ${'order_type33_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl31_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index32_argument'}, $order_type33_argument)
));
$query->setLimit();
return $query; ?>