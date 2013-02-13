<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentDivision");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl5_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl5_argument'}->checkFilter('number');
${'module_srl5_argument'}->createConditionValue();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
} else
${'module_srl5_argument'} = null;if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl6_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl6_argument'}->checkFilter('number');
${'exclude_module_srl6_argument'}->createConditionValue();
if(!${'exclude_module_srl6_argument'}->isValid()) return ${'exclude_module_srl6_argument'}->getErrorMessage();
} else
${'exclude_module_srl6_argument'} = null;if(${'exclude_module_srl6_argument'} !== null) ${'exclude_module_srl6_argument'}->setColumnType('number');
if(isset($args->list_order)) {
${'list_order7_argument'} = new ConditionArgument('list_order', $args->list_order, 'more');
${'list_order7_argument'}->checkFilter('number');
${'list_order7_argument'}->createConditionValue();
if(!${'list_order7_argument'}->isValid()) return ${'list_order7_argument'}->getErrorMessage();
} else
${'list_order7_argument'} = null;if(${'list_order7_argument'} !== null) ${'list_order7_argument'}->setColumnType('number');

${'page10_argument'} = new Argument('page', $args->{'page'});
${'page10_argument'}->ensureDefaultValue('1');
if(!${'page10_argument'}->isValid()) return ${'page10_argument'}->getErrorMessage();

${'page_count11_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count11_argument'}->ensureDefaultValue('1');
if(!${'page_count11_argument'}->isValid()) return ${'page_count11_argument'}->getErrorMessage();

${'list_count12_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count12_argument'}->ensureDefaultValue('1');
if(!${'list_count12_argument'}->isValid()) return ${'list_count12_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

${'order_type9_argument'} = new SortArgument('order_type9', $args->order_type);
${'order_type9_argument'}->ensureDefaultValue('asc');
if(!${'order_type9_argument'}->isValid()) return ${'order_type9_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl5_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl6_argument,"notin", 'and')
,new ConditionWithArgument('`list_order`',$list_order7_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, $order_type9_argument)
));
$query->setLimit(new Limit(${'list_count12_argument'}, ${'page10_argument'}, ${'page_count11_argument'}));
return $query; ?>