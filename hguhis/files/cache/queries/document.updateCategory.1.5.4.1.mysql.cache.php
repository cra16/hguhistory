<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateCategory");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title1_argument'} = new Argument('title', $args->{'title'});
if(!${'title1_argument'}->isValid()) return ${'title1_argument'}->getErrorMessage();
} else
${'title1_argument'} = null;if(${'title1_argument'} !== null) ${'title1_argument'}->setColumnType('varchar');

${'description2_argument'} = new Argument('description', $args->{'description'});
${'description2_argument'}->ensureDefaultValue('');
if(!${'description2_argument'}->isValid()) return ${'description2_argument'}->getErrorMessage();
if(${'description2_argument'} !== null) ${'description2_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order3_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();
} else
${'list_order3_argument'} = null;if(${'list_order3_argument'} !== null) ${'list_order3_argument'}->setColumnType('number');

${'last_update4_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update4_argument'}->isValid()) return ${'last_update4_argument'}->getErrorMessage();
if(${'last_update4_argument'} !== null) ${'last_update4_argument'}->setColumnType('date');
if(isset($args->expand)) {
${'expand5_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand5_argument'}->isValid()) return ${'expand5_argument'}->getErrorMessage();
} else
${'expand5_argument'} = null;if(${'expand5_argument'} !== null) ${'expand5_argument'}->setColumnType('char');
if(isset($args->parent_srl)) {
${'parent_srl6_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl6_argument'}->checkFilter('number');
if(!${'parent_srl6_argument'}->isValid()) return ${'parent_srl6_argument'}->getErrorMessage();
} else
${'parent_srl6_argument'} = null;if(${'parent_srl6_argument'} !== null) ${'parent_srl6_argument'}->setColumnType('number');
if(isset($args->group_srls)) {
${'group_srls7_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls7_argument'}->isValid()) return ${'group_srls7_argument'}->getErrorMessage();
} else
${'group_srls7_argument'} = null;if(${'group_srls7_argument'} !== null) ${'group_srls7_argument'}->setColumnType('text');
if(isset($args->color)) {
${'color8_argument'} = new Argument('color', $args->{'color'});
if(!${'color8_argument'}->isValid()) return ${'color8_argument'}->getErrorMessage();
} else
${'color8_argument'} = null;if(${'color8_argument'} !== null) ${'color8_argument'}->setColumnType('varchar');

${'category_srl9_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl9_argument'}->checkFilter('number');
${'category_srl9_argument'}->checkNotNull();
${'category_srl9_argument'}->createConditionValue();
if(!${'category_srl9_argument'}->isValid()) return ${'category_srl9_argument'}->getErrorMessage();
if(${'category_srl9_argument'} !== null) ${'category_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title1_argument'})
,new UpdateExpression('`description`', ${'description2_argument'})
,new UpdateExpression('`list_order`', ${'list_order3_argument'})
,new UpdateExpression('`last_update`', ${'last_update4_argument'})
,new UpdateExpression('`expand`', ${'expand5_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl6_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls7_argument'})
,new UpdateExpression('`color`', ${'color8_argument'})
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>