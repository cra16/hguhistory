<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl24_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl24_argument'}->checkFilter('number');
${'menu_item_srl24_argument'}->checkNotNull();
if(!${'menu_item_srl24_argument'}->isValid()) return ${'menu_item_srl24_argument'}->getErrorMessage();
if(${'menu_item_srl24_argument'} !== null) ${'menu_item_srl24_argument'}->setColumnType('number');

${'parent_srl25_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl25_argument'}->checkFilter('number');
${'parent_srl25_argument'}->ensureDefaultValue('0');
if(!${'parent_srl25_argument'}->isValid()) return ${'parent_srl25_argument'}->getErrorMessage();
if(${'parent_srl25_argument'} !== null) ${'parent_srl25_argument'}->setColumnType('number');

${'menu_srl26_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl26_argument'}->checkFilter('number');
${'menu_srl26_argument'}->checkNotNull();
if(!${'menu_srl26_argument'}->isValid()) return ${'menu_srl26_argument'}->getErrorMessage();
if(${'menu_srl26_argument'} !== null) ${'menu_srl26_argument'}->setColumnType('number');

${'name27_argument'} = new Argument('name', $args->{'name'});
${'name27_argument'}->checkNotNull();
if(!${'name27_argument'}->isValid()) return ${'name27_argument'}->getErrorMessage();
if(${'name27_argument'} !== null) ${'name27_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url28_argument'} = new Argument('url', $args->{'url'});
if(!${'url28_argument'}->isValid()) return ${'url28_argument'}->getErrorMessage();
} else
${'url28_argument'} = null;if(${'url28_argument'} !== null) ${'url28_argument'}->setColumnType('varchar');
if(isset($args->open_window)) {
${'open_window29_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window29_argument'}->isValid()) return ${'open_window29_argument'}->getErrorMessage();
} else
${'open_window29_argument'} = null;if(${'open_window29_argument'} !== null) ${'open_window29_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand30_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand30_argument'}->isValid()) return ${'expand30_argument'}->getErrorMessage();
} else
${'expand30_argument'} = null;if(${'expand30_argument'} !== null) ${'expand30_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn31_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn31_argument'}->isValid()) return ${'normal_btn31_argument'}->getErrorMessage();
} else
${'normal_btn31_argument'} = null;if(${'normal_btn31_argument'} !== null) ${'normal_btn31_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn32_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn32_argument'}->isValid()) return ${'hover_btn32_argument'}->getErrorMessage();
} else
${'hover_btn32_argument'} = null;if(${'hover_btn32_argument'} !== null) ${'hover_btn32_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn33_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn33_argument'}->isValid()) return ${'active_btn33_argument'}->getErrorMessage();
} else
${'active_btn33_argument'} = null;if(${'active_btn33_argument'} !== null) ${'active_btn33_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls34_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls34_argument'}->isValid()) return ${'group_srls34_argument'}->getErrorMessage();
} else
${'group_srls34_argument'} = null;if(${'group_srls34_argument'} !== null) ${'group_srls34_argument'}->setColumnType('text');

${'listorder35_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder35_argument'}->checkNotNull();
if(!${'listorder35_argument'}->isValid()) return ${'listorder35_argument'}->getErrorMessage();
if(${'listorder35_argument'} !== null) ${'listorder35_argument'}->setColumnType('number');

${'regdate36_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate36_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate36_argument'}->isValid()) return ${'regdate36_argument'}->getErrorMessage();
if(${'regdate36_argument'} !== null) ${'regdate36_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl24_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl25_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl26_argument'})
,new InsertExpression('`name`', ${'name27_argument'})
,new InsertExpression('`url`', ${'url28_argument'})
,new InsertExpression('`open_window`', ${'open_window29_argument'})
,new InsertExpression('`expand`', ${'expand30_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn31_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn32_argument'})
,new InsertExpression('`active_btn`', ${'active_btn33_argument'})
,new InsertExpression('`group_srls`', ${'group_srls34_argument'})
,new InsertExpression('`listorder`', ${'listorder35_argument'})
,new InsertExpression('`regdate`', ${'regdate36_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>