<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getSearchHiswikiDoc");
$query->setAction("select");
$query->setPriority("");
if(isset($args->topic)) {
${'topic1_argument'} = new ConditionArgument('topic', $args->topic, 'like');
${'topic1_argument'}->createConditionValue();
if(!${'topic1_argument'}->isValid()) return ${'topic1_argument'}->getErrorMessage();
} else
${'topic1_argument'} = null;if(${'topic1_argument'} !== null) ${'topic1_argument'}->setColumnType('varchar');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('10');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('topic');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`topic`')
,new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_hiswiki_doc`', '`hiswiki_doc`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`topic`',$topic1_argument,"like")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>