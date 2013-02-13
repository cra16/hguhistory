<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status53_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status53_argument'}->createConditionValue();
if(!${'status53_argument'}->isValid()) return ${'status53_argument'}->getErrorMessage();
} else
${'status53_argument'} = null;if(${'status53_argument'} !== null) ${'status53_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl54_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl54_argument'}->checkFilter('number');
${'module_srl54_argument'}->createConditionValue();
if(!${'module_srl54_argument'}->isValid()) return ${'module_srl54_argument'}->getErrorMessage();
} else
${'module_srl54_argument'} = null;if(${'module_srl54_argument'} !== null) ${'module_srl54_argument'}->setColumnType('number');

${'list_count56_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count56_argument'}->ensureDefaultValue('20');
if(!${'list_count56_argument'}->isValid()) return ${'list_count56_argument'}->getErrorMessage();

${'sort_index55_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index55_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index55_argument'}->isValid()) return ${'sort_index55_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status53_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl54_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index55_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count56_argument'}));
return $query; ?>