<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getPopularDocuments");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl38_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl38_argument'}->checkFilter('number');
${'module_srl38_argument'}->createConditionValue();
if(!${'module_srl38_argument'}->isValid()) return ${'module_srl38_argument'}->getErrorMessage();
} else
${'module_srl38_argument'} = null;if(${'module_srl38_argument'} !== null) ${'module_srl38_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate39_argument'} = new ConditionArgument('regdate', $args->regdate, 'more');
${'regdate39_argument'}->createConditionValue();
if(!${'regdate39_argument'}->isValid()) return ${'regdate39_argument'}->getErrorMessage();
} else
${'regdate39_argument'} = null;if(${'regdate39_argument'} !== null) ${'regdate39_argument'}->setColumnType('date');

${'list_count41_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count41_argument'}->ensureDefaultValue('5');
if(!${'list_count41_argument'}->isValid()) return ${'list_count41_argument'}->getErrorMessage();

${'sort_index40_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index40_argument'}->ensureDefaultValue('readed_count');
if(!${'sort_index40_argument'}->isValid()) return ${'sort_index40_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl38_argument,"equal")
,new ConditionWithArgument('`regdate`',$regdate39_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index40_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count41_argument'}));
return $query; ?>