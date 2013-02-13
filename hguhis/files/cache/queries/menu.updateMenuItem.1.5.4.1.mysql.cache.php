<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");

${'name1_argument'} = new Argument('name', $args->{'name'});
${'name1_argument'}->checkNotNull();
if(!${'name1_argument'}->isValid()) return ${'name1_argument'}->getErrorMessage();
if(${'name1_argument'} !== null) ${'name1_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url2_argument'} = new Argument('url', $args->{'url'});
if(!${'url2_argument'}->isValid()) return ${'url2_argument'}->getErrorMessage();
} else
${'url2_argument'} = null;if(${'url2_argument'} !== null) ${'url2_argument'}->setColumnType('varchar');
if(isset($args->open_window)) {
${'open_window3_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window3_argument'}->isValid()) return ${'open_window3_argument'}->getErrorMessage();
} else
${'open_window3_argument'} = null;if(${'open_window3_argument'} !== null) ${'open_window3_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand4_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand4_argument'}->isValid()) return ${'expand4_argument'}->getErrorMessage();
} else
${'expand4_argument'} = null;if(${'expand4_argument'} !== null) ${'expand4_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn5_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn5_argument'}->isValid()) return ${'normal_btn5_argument'}->getErrorMessage();
} else
${'normal_btn5_argument'} = null;if(${'normal_btn5_argument'} !== null) ${'normal_btn5_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn6_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn6_argument'}->isValid()) return ${'hover_btn6_argument'}->getErrorMessage();
} else
${'hover_btn6_argument'} = null;if(${'hover_btn6_argument'} !== null) ${'hover_btn6_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn7_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn7_argument'}->isValid()) return ${'active_btn7_argument'}->getErrorMessage();
} else
${'active_btn7_argument'} = null;if(${'active_btn7_argument'} !== null) ${'active_btn7_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls8_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls8_argument'}->isValid()) return ${'group_srls8_argument'}->getErrorMessage();
} else
${'group_srls8_argument'} = null;if(${'group_srls8_argument'} !== null) ${'group_srls8_argument'}->setColumnType('text');

${'menu_item_srl9_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl9_argument'}->checkFilter('number');
${'menu_item_srl9_argument'}->checkNotNull();
${'menu_item_srl9_argument'}->createConditionValue();
if(!${'menu_item_srl9_argument'}->isValid()) return ${'menu_item_srl9_argument'}->getErrorMessage();
if(${'menu_item_srl9_argument'} !== null) ${'menu_item_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`name`', ${'name1_argument'})
,new UpdateExpression('`url`', ${'url2_argument'})
,new UpdateExpression('`open_window`', ${'open_window3_argument'})
,new UpdateExpression('`expand`', ${'expand4_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn5_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn6_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn7_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls8_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>