<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getPopularDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
} else
${'module_srl6_argument'} = null;if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate7_argument'} = new ConditionArgument('regdate', $args->regdate, 'more');
${'regdate7_argument'}->createConditionValue();
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
} else
${'regdate7_argument'} = null;if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('5');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('readed_count');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate7_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}));
return $query; ?>