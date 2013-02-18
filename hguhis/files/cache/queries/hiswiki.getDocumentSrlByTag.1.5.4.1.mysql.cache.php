<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
} else
${'module_srl11_argument'} = null;if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

${'tag12_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag12_argument'}->checkNotNull();
${'tag12_argument'}->createConditionValue();
if(!${'tag12_argument'}->isValid()) return ${'tag12_argument'}->getErrorMessage();
if(${'tag12_argument'} !== null) ${'tag12_argument'}->setColumnType('varchar');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"in")
,new ConditionWithArgument('`tag`',$tag12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>