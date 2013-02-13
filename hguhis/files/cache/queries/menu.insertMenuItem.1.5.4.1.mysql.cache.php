<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl70_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl70_argument'}->checkFilter('number');
${'menu_item_srl70_argument'}->checkNotNull();
if(!${'menu_item_srl70_argument'}->isValid()) return ${'menu_item_srl70_argument'}->getErrorMessage();
if(${'menu_item_srl70_argument'} !== null) ${'menu_item_srl70_argument'}->setColumnType('number');

${'parent_srl71_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl71_argument'}->checkFilter('number');
${'parent_srl71_argument'}->ensureDefaultValue('0');
if(!${'parent_srl71_argument'}->isValid()) return ${'parent_srl71_argument'}->getErrorMessage();
if(${'parent_srl71_argument'} !== null) ${'parent_srl71_argument'}->setColumnType('number');

${'menu_srl72_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl72_argument'}->checkFilter('number');
${'menu_srl72_argument'}->checkNotNull();
if(!${'menu_srl72_argument'}->isValid()) return ${'menu_srl72_argument'}->getErrorMessage();
if(${'menu_srl72_argument'} !== null) ${'menu_srl72_argument'}->setColumnType('number');

${'name73_argument'} = new Argument('name', $args->{'name'});
${'name73_argument'}->checkNotNull();
if(!${'name73_argument'}->isValid()) return ${'name73_argument'}->getErrorMessage();
if(${'name73_argument'} !== null) ${'name73_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url74_argument'} = new Argument('url', $args->{'url'});
if(!${'url74_argument'}->isValid()) return ${'url74_argument'}->getErrorMessage();
} else
${'url74_argument'} = null;if(${'url74_argument'} !== null) ${'url74_argument'}->setColumnType('varchar');
if(isset($args->open_window)) {
${'open_window75_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window75_argument'}->isValid()) return ${'open_window75_argument'}->getErrorMessage();
} else
${'open_window75_argument'} = null;if(${'open_window75_argument'} !== null) ${'open_window75_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand76_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand76_argument'}->isValid()) return ${'expand76_argument'}->getErrorMessage();
} else
${'expand76_argument'} = null;if(${'expand76_argument'} !== null) ${'expand76_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn77_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn77_argument'}->isValid()) return ${'normal_btn77_argument'}->getErrorMessage();
} else
${'normal_btn77_argument'} = null;if(${'normal_btn77_argument'} !== null) ${'normal_btn77_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn78_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn78_argument'}->isValid()) return ${'hover_btn78_argument'}->getErrorMessage();
} else
${'hover_btn78_argument'} = null;if(${'hover_btn78_argument'} !== null) ${'hover_btn78_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn79_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn79_argument'}->isValid()) return ${'active_btn79_argument'}->getErrorMessage();
} else
${'active_btn79_argument'} = null;if(${'active_btn79_argument'} !== null) ${'active_btn79_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls80_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls80_argument'}->isValid()) return ${'group_srls80_argument'}->getErrorMessage();
} else
${'group_srls80_argument'} = null;if(${'group_srls80_argument'} !== null) ${'group_srls80_argument'}->setColumnType('text');

${'listorder81_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder81_argument'}->checkNotNull();
if(!${'listorder81_argument'}->isValid()) return ${'listorder81_argument'}->getErrorMessage();
if(${'listorder81_argument'} !== null) ${'listorder81_argument'}->setColumnType('number');

${'regdate82_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate82_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate82_argument'}->isValid()) return ${'regdate82_argument'}->getErrorMessage();
if(${'regdate82_argument'} !== null) ${'regdate82_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl70_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl71_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl72_argument'})
,new InsertExpression('`name`', ${'name73_argument'})
,new InsertExpression('`url`', ${'url74_argument'})
,new InsertExpression('`open_window`', ${'open_window75_argument'})
,new InsertExpression('`expand`', ${'expand76_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn77_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn78_argument'})
,new InsertExpression('`active_btn`', ${'active_btn79_argument'})
,new InsertExpression('`group_srls`', ${'group_srls80_argument'})
,new InsertExpression('`listorder`', ${'listorder81_argument'})
,new InsertExpression('`regdate`', ${'regdate82_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>