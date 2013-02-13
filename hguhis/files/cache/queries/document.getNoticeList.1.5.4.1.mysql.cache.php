<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getNoticeList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = null;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl5_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl5_argument'}->createConditionValue();
if(!${'category_srl5_argument'}->isValid()) return ${'category_srl5_argument'}->getErrorMessage();
} else
${'category_srl5_argument'} = null;if(${'category_srl5_argument'} !== null) ${'category_srl5_argument'}->setColumnType('number');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl4_argument,"in")
,new ConditionWithoutArgument('`is_notice`',"'Y'","equal", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit();
return $query; ?>