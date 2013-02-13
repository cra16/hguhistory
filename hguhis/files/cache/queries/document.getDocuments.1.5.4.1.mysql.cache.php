<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls11_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls11_argument'}->checkNotNull();
${'document_srls11_argument'}->createConditionValue();
if(!${'document_srls11_argument'}->isValid()) return ${'document_srls11_argument'}->getErrorMessage();
if(${'document_srls11_argument'} !== null) ${'document_srls11_argument'}->setColumnType('number');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'list_order12_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order12_argument'}->ensureDefaultValue('list_order');
if(!${'list_order12_argument'}->isValid()) return ${'list_order12_argument'}->getErrorMessage();

${'order_type13_argument'} = new SortArgument('order_type13', $args->order_type);
${'order_type13_argument'}->ensureDefaultValue('asc');
if(!${'order_type13_argument'}->isValid()) return ${'order_type13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls11_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order12_argument'}, $order_type13_argument)
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>