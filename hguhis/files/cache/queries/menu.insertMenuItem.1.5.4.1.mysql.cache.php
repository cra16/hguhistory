<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl1_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl1_argument'}->checkFilter('number');
${'menu_item_srl1_argument'}->checkNotNull();
if(!${'menu_item_srl1_argument'}->isValid()) return ${'menu_item_srl1_argument'}->getErrorMessage();
if(${'menu_item_srl1_argument'} !== null) ${'menu_item_srl1_argument'}->setColumnType('number');

${'parent_srl2_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl2_argument'}->checkFilter('number');
${'parent_srl2_argument'}->ensureDefaultValue('0');
if(!${'parent_srl2_argument'}->isValid()) return ${'parent_srl2_argument'}->getErrorMessage();
if(${'parent_srl2_argument'} !== null) ${'parent_srl2_argument'}->setColumnType('number');

${'menu_srl3_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl3_argument'}->checkFilter('number');
${'menu_srl3_argument'}->checkNotNull();
if(!${'menu_srl3_argument'}->isValid()) return ${'menu_srl3_argument'}->getErrorMessage();
if(${'menu_srl3_argument'} !== null) ${'menu_srl3_argument'}->setColumnType('number');

${'name4_argument'} = new Argument('name', $args->{'name'});
${'name4_argument'}->checkNotNull();
if(!${'name4_argument'}->isValid()) return ${'name4_argument'}->getErrorMessage();
if(${'name4_argument'} !== null) ${'name4_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url5_argument'} = new Argument('url', $args->{'url'});
if(!${'url5_argument'}->isValid()) return ${'url5_argument'}->getErrorMessage();
} else
${'url5_argument'} = null;if(${'url5_argument'} !== null) ${'url5_argument'}->setColumnType('varchar');
if(isset($args->open_window)) {
${'open_window6_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window6_argument'}->isValid()) return ${'open_window6_argument'}->getErrorMessage();
} else
${'open_window6_argument'} = null;if(${'open_window6_argument'} !== null) ${'open_window6_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand7_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand7_argument'}->isValid()) return ${'expand7_argument'}->getErrorMessage();
} else
${'expand7_argument'} = null;if(${'expand7_argument'} !== null) ${'expand7_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn8_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn8_argument'}->isValid()) return ${'normal_btn8_argument'}->getErrorMessage();
} else
${'normal_btn8_argument'} = null;if(${'normal_btn8_argument'} !== null) ${'normal_btn8_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn9_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn9_argument'}->isValid()) return ${'hover_btn9_argument'}->getErrorMessage();
} else
${'hover_btn9_argument'} = null;if(${'hover_btn9_argument'} !== null) ${'hover_btn9_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn10_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn10_argument'}->isValid()) return ${'active_btn10_argument'}->getErrorMessage();
} else
${'active_btn10_argument'} = null;if(${'active_btn10_argument'} !== null) ${'active_btn10_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls11_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls11_argument'}->isValid()) return ${'group_srls11_argument'}->getErrorMessage();
} else
${'group_srls11_argument'} = null;if(${'group_srls11_argument'} !== null) ${'group_srls11_argument'}->setColumnType('text');

${'listorder12_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder12_argument'}->checkNotNull();
if(!${'listorder12_argument'}->isValid()) return ${'listorder12_argument'}->getErrorMessage();
if(${'listorder12_argument'} !== null) ${'listorder12_argument'}->setColumnType('number');

${'regdate13_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate13_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl1_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl2_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl3_argument'})
,new InsertExpression('`name`', ${'name4_argument'})
,new InsertExpression('`url`', ${'url5_argument'})
,new InsertExpression('`open_window`', ${'open_window6_argument'})
,new InsertExpression('`expand`', ${'expand7_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn8_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn9_argument'})
,new InsertExpression('`active_btn`', ${'active_btn10_argument'})
,new InsertExpression('`group_srls`', ${'group_srls11_argument'})
,new InsertExpression('`listorder`', ${'listorder12_argument'})
,new InsertExpression('`regdate`', ${'regdate13_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>