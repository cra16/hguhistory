<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl11_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl11_argument'}->checkFilter('number');
${'menu_srl11_argument'}->checkNotNull();
${'menu_srl11_argument'}->createConditionValue();
if(!${'menu_srl11_argument'}->isValid()) return ${'menu_srl11_argument'}->getErrorMessage();
if(${'menu_srl11_argument'} !== null) ${'menu_srl11_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl12_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl12_argument'}->checkFilter('number');
${'parent_srl12_argument'}->createConditionValue();
if(!${'parent_srl12_argument'}->isValid()) return ${'parent_srl12_argument'}->getErrorMessage();
} else
${'parent_srl12_argument'} = null;if(${'parent_srl12_argument'} !== null) ${'parent_srl12_argument'}->setColumnType('number');

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl11_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "desc")
));
$query->setLimit();
return $query; ?>