<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl17_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl17_argument'}->checkFilter('number');
${'module_srl17_argument'}->createConditionValue();
if(!${'module_srl17_argument'}->isValid()) return ${'module_srl17_argument'}->getErrorMessage();
} else
${'module_srl17_argument'} = null;if(${'module_srl17_argument'} !== null) ${'module_srl17_argument'}->setColumnType('number');

${'tag18_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag18_argument'}->checkNotNull();
${'tag18_argument'}->createConditionValue();
if(!${'tag18_argument'}->isValid()) return ${'tag18_argument'}->getErrorMessage();
if(${'tag18_argument'} !== null) ${'tag18_argument'}->setColumnType('varchar');

${'page20_argument'} = new Argument('page', $args->{'page'});
${'page20_argument'}->ensureDefaultValue('1');
if(!${'page20_argument'}->isValid()) return ${'page20_argument'}->getErrorMessage();

${'page_count21_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count21_argument'}->ensureDefaultValue('10');
if(!${'page_count21_argument'}->isValid()) return ${'page_count21_argument'}->getErrorMessage();

${'list_count22_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count22_argument'}->ensureDefaultValue('20');
if(!${'list_count22_argument'}->isValid()) return ${'list_count22_argument'}->getErrorMessage();

${'sort_index19_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index19_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index19_argument'}->isValid()) return ${'sort_index19_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl17_argument,"in")
,new ConditionWithArgument('`tag`',$tag18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index19_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count22_argument'}, ${'page20_argument'}, ${'page_count21_argument'}));
return $query; ?>