<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls15_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls15_argument'}->checkNotNull();
${'document_srls15_argument'}->createConditionValue();
if(!${'document_srls15_argument'}->isValid()) return ${'document_srls15_argument'}->getErrorMessage();
if(${'document_srls15_argument'} !== null) ${'document_srls15_argument'}->setColumnType('number');

${'page18_argument'} = new Argument('page', $args->{'page'});
${'page18_argument'}->ensureDefaultValue('1');
if(!${'page18_argument'}->isValid()) return ${'page18_argument'}->getErrorMessage();

${'page_count19_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count19_argument'}->ensureDefaultValue('10');
if(!${'page_count19_argument'}->isValid()) return ${'page_count19_argument'}->getErrorMessage();

${'list_count20_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count20_argument'}->ensureDefaultValue('20');
if(!${'list_count20_argument'}->isValid()) return ${'list_count20_argument'}->getErrorMessage();

${'list_order16_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order16_argument'}->ensureDefaultValue('list_order');
if(!${'list_order16_argument'}->isValid()) return ${'list_order16_argument'}->getErrorMessage();

${'order_type17_argument'} = new SortArgument('order_type17', $args->order_type);
${'order_type17_argument'}->ensureDefaultValue('asc');
if(!${'order_type17_argument'}->isValid()) return ${'order_type17_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls15_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order16_argument'}, $order_type17_argument)
));
$query->setLimit(new Limit(${'list_count20_argument'}, ${'page18_argument'}, ${'page_count19_argument'}));
return $query; ?>