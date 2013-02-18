<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status75_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status75_argument'}->createConditionValue();
if(!${'status75_argument'}->isValid()) return ${'status75_argument'}->getErrorMessage();
} else
${'status75_argument'} = null;if(${'status75_argument'} !== null) ${'status75_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl76_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl76_argument'}->checkFilter('number');
${'module_srl76_argument'}->createConditionValue();
if(!${'module_srl76_argument'}->isValid()) return ${'module_srl76_argument'}->getErrorMessage();
} else
${'module_srl76_argument'} = null;if(${'module_srl76_argument'} !== null) ${'module_srl76_argument'}->setColumnType('number');

${'list_count79_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count79_argument'}->ensureDefaultValue('20');
if(!${'list_count79_argument'}->isValid()) return ${'list_count79_argument'}->getErrorMessage();

${'sort_index78_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index78_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index78_argument'}->isValid()) return ${'sort_index78_argument'}->getErrorMessage();

${'sort_index77_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index77_argument'}->ensureDefaultValue('status');
if(!${'sort_index77_argument'}->isValid()) return ${'sort_index77_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status75_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl76_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index77_argument'}, "desc")
,new OrderByColumn(${'sort_index78_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count79_argument'}));
return $query; ?>