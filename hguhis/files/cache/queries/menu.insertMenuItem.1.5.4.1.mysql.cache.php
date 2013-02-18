<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl166_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl166_argument'}->checkFilter('number');
${'menu_item_srl166_argument'}->checkNotNull();
if(!${'menu_item_srl166_argument'}->isValid()) return ${'menu_item_srl166_argument'}->getErrorMessage();
if(${'menu_item_srl166_argument'} !== null) ${'menu_item_srl166_argument'}->setColumnType('number');

${'parent_srl167_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl167_argument'}->checkFilter('number');
${'parent_srl167_argument'}->ensureDefaultValue('0');
if(!${'parent_srl167_argument'}->isValid()) return ${'parent_srl167_argument'}->getErrorMessage();
if(${'parent_srl167_argument'} !== null) ${'parent_srl167_argument'}->setColumnType('number');

${'menu_srl168_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl168_argument'}->checkFilter('number');
${'menu_srl168_argument'}->checkNotNull();
if(!${'menu_srl168_argument'}->isValid()) return ${'menu_srl168_argument'}->getErrorMessage();
if(${'menu_srl168_argument'} !== null) ${'menu_srl168_argument'}->setColumnType('number');

${'name169_argument'} = new Argument('name', $args->{'name'});
${'name169_argument'}->checkNotNull();
if(!${'name169_argument'}->isValid()) return ${'name169_argument'}->getErrorMessage();
if(${'name169_argument'} !== null) ${'name169_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url170_argument'} = new Argument('url', $args->{'url'});
if(!${'url170_argument'}->isValid()) return ${'url170_argument'}->getErrorMessage();
} else
${'url170_argument'} = null;if(${'url170_argument'} !== null) ${'url170_argument'}->setColumnType('varchar');
if(isset($args->open_window)) {
${'open_window171_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window171_argument'}->isValid()) return ${'open_window171_argument'}->getErrorMessage();
} else
${'open_window171_argument'} = null;if(${'open_window171_argument'} !== null) ${'open_window171_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand172_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand172_argument'}->isValid()) return ${'expand172_argument'}->getErrorMessage();
} else
${'expand172_argument'} = null;if(${'expand172_argument'} !== null) ${'expand172_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn173_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn173_argument'}->isValid()) return ${'normal_btn173_argument'}->getErrorMessage();
} else
${'normal_btn173_argument'} = null;if(${'normal_btn173_argument'} !== null) ${'normal_btn173_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn174_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn174_argument'}->isValid()) return ${'hover_btn174_argument'}->getErrorMessage();
} else
${'hover_btn174_argument'} = null;if(${'hover_btn174_argument'} !== null) ${'hover_btn174_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn175_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn175_argument'}->isValid()) return ${'active_btn175_argument'}->getErrorMessage();
} else
${'active_btn175_argument'} = null;if(${'active_btn175_argument'} !== null) ${'active_btn175_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls176_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls176_argument'}->isValid()) return ${'group_srls176_argument'}->getErrorMessage();
} else
${'group_srls176_argument'} = null;if(${'group_srls176_argument'} !== null) ${'group_srls176_argument'}->setColumnType('text');

${'listorder177_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder177_argument'}->checkNotNull();
if(!${'listorder177_argument'}->isValid()) return ${'listorder177_argument'}->getErrorMessage();
if(${'listorder177_argument'} !== null) ${'listorder177_argument'}->setColumnType('number');

${'regdate178_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate178_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate178_argument'}->isValid()) return ${'regdate178_argument'}->getErrorMessage();
if(${'regdate178_argument'} !== null) ${'regdate178_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl166_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl167_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl168_argument'})
,new InsertExpression('`name`', ${'name169_argument'})
,new InsertExpression('`url`', ${'url170_argument'})
,new InsertExpression('`open_window`', ${'open_window171_argument'})
,new InsertExpression('`expand`', ${'expand172_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn173_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn174_argument'})
,new InsertExpression('`active_btn`', ${'active_btn175_argument'})
,new InsertExpression('`group_srls`', ${'group_srls176_argument'})
,new InsertExpression('`listorder`', ${'listorder177_argument'})
,new InsertExpression('`regdate`', ${'regdate178_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>