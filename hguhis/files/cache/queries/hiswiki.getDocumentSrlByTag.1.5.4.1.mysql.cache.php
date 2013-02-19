<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentSrlByTag");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl21_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl21_argument'}->checkFilter('number');
${'module_srl21_argument'}->createConditionValue();
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
} else
${'module_srl21_argument'} = null;if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');

${'tag22_argument'} = new ConditionArgument('tag', $args->tag, 'equal');
${'tag22_argument'}->checkNotNull();
${'tag22_argument'}->createConditionValue();
if(!${'tag22_argument'}->isValid()) return ${'tag22_argument'}->getErrorMessage();
if(${'tag22_argument'} !== null) ${'tag22_argument'}->setColumnType('varchar');

${'page24_argument'} = new Argument('page', $args->{'page'});
${'page24_argument'}->ensureDefaultValue('1');
if(!${'page24_argument'}->isValid()) return ${'page24_argument'}->getErrorMessage();

${'page_count25_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count25_argument'}->ensureDefaultValue('10');
if(!${'page_count25_argument'}->isValid()) return ${'page_count25_argument'}->getErrorMessage();

${'list_count26_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count26_argument'}->ensureDefaultValue('20');
if(!${'list_count26_argument'}->isValid()) return ${'list_count26_argument'}->getErrorMessage();

${'sort_index23_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index23_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index23_argument'}->isValid()) return ${'sort_index23_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl21_argument,"in")
,new ConditionWithArgument('`tag`',$tag22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index23_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count26_argument'}, ${'page24_argument'}, ${'page_count25_argument'}));
return $query; ?>