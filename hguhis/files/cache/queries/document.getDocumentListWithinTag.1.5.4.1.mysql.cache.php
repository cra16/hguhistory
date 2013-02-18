<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListWithinTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = null;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl2_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl2_argument'}->checkFilter('number');
${'exclude_module_srl2_argument'}->createConditionValue();
if(!${'exclude_module_srl2_argument'}->isValid()) return ${'exclude_module_srl2_argument'}->getErrorMessage();
} else
${'exclude_module_srl2_argument'} = null;if(${'exclude_module_srl2_argument'} !== null) ${'exclude_module_srl2_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl3_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->createConditionValue();
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
} else
${'category_srl3_argument'} = null;if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
} else
${'member_srl4_argument'} = null;if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

${'s_tags5_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags5_argument'}->checkNotNull();
${'s_tags5_argument'}->createConditionValue();
if(!${'s_tags5_argument'}->isValid()) return ${'s_tags5_argument'}->getErrorMessage();
if(${'s_tags5_argument'} !== null) ${'s_tags5_argument'}->setColumnType('varchar');

${'page8_argument'} = new Argument('page', $args->{'page'});
${'page8_argument'}->ensureDefaultValue('1');
if(!${'page8_argument'}->isValid()) return ${'page8_argument'}->getErrorMessage();

${'page_count9_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count9_argument'}->ensureDefaultValue('10');
if(!${'page_count9_argument'}->isValid()) return ${'page_count9_argument'}->getErrorMessage();

${'list_count10_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count10_argument'}->ensureDefaultValue('20');
if(!${'list_count10_argument'}->isValid()) return ${'list_count10_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

${'order_type7_argument'} = new SortArgument('order_type7', $args->order_type);
${'order_type7_argument'}->ensureDefaultValue('asc');
if(!${'order_type7_argument'}->isValid()) return ${'order_type7_argument'}->getErrorMessage();

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
new ConditionWithArgument('`documents`.`module_srl`',$module_srl1_argument,"in")
,new ConditionWithArgument('`documents`.`module_srl`',$exclude_module_srl2_argument,"notin", 'and')
,new ConditionWithoutArgument('`documents`.`document_srl`','`tags`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl3_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`tags`.`tag`',$s_tags5_argument,"like", 'and')))
));
$query->setGroups(array(
'`documents`.`document_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, $order_type7_argument)
));
$query->setLimit(new Limit(${'list_count10_argument'}, ${'page8_argument'}, ${'page_count9_argument'}));
return $query; ?>