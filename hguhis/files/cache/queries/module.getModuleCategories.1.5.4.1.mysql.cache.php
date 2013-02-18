<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleCategorySrl)) {
${'moduleCategorySrl5_argument'} = new ConditionArgument('moduleCategorySrl', $args->moduleCategorySrl, 'in');
${'moduleCategorySrl5_argument'}->createConditionValue();
if(!${'moduleCategorySrl5_argument'}->isValid()) return ${'moduleCategorySrl5_argument'}->getErrorMessage();
} else
${'moduleCategorySrl5_argument'} = null;if(${'moduleCategorySrl5_argument'} !== null) ${'moduleCategorySrl5_argument'}->setColumnType('number');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('title');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_categories`', '`module_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$moduleCategorySrl5_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "asc")
));
$query->setLimit();
return $query; ?>