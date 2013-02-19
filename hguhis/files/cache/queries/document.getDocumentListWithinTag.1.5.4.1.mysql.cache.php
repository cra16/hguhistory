<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListWithinTag");
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
if(isset($args->category_srl)) {
${'category_srl7_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl7_argument'}->checkFilter('number');
${'category_srl7_argument'}->createConditionValue();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
} else
${'category_srl7_argument'} = null;if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = null;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

${'s_tags9_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags9_argument'}->checkNotNull();
${'s_tags9_argument'}->createConditionValue();
if(!${'s_tags9_argument'}->isValid()) return ${'s_tags9_argument'}->getErrorMessage();
if(${'s_tags9_argument'} !== null) ${'s_tags9_argument'}->setColumnType('varchar');

${'page12_argument'} = new Argument('page', $args->{'page'});
${'page12_argument'}->ensureDefaultValue('1');
if(!${'page12_argument'}->isValid()) return ${'page12_argument'}->getErrorMessage();

${'page_count13_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count13_argument'}->ensureDefaultValue('10');
if(!${'page_count13_argument'}->isValid()) return ${'page_count13_argument'}->getErrorMessage();

${'list_count14_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count14_argument'}->ensureDefaultValue('20');
if(!${'list_count14_argument'}->isValid()) return ${'list_count14_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

${'order_type11_argument'} = new SortArgument('order_type11', $args->order_type);
${'order_type11_argument'}->ensureDefaultValue('asc');
if(!${'order_type11_argument'}->isValid()) return ${'order_type11_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.`document_srl`')
,new SelectExpression('`documents`.`list_order`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl5_argument,"in")
,new ConditionWithArgument('`documents`.`module_srl`',$exclude_module_srl6_argument,"notin", 'and')
,new ConditionWithoutArgument('`documents`.`document_srl`','`tags`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl7_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl8_argument,"equal", 'and')
,new ConditionWithArgument('`tags`.`tag`',$s_tags9_argument,"like", 'and')))
));
$query->setGroups(array(
'`documents`.`document_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, $order_type11_argument)
));
$query->setLimit(new Limit(${'list_count14_argument'}, ${'page12_argument'}, ${'page_count13_argument'}));
return $query; ?>