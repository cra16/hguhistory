<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl6_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl6_argument'}->ensureDefaultValue('0');
${'site_srl6_argument'}->checkNotNull();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

${'module_srl7_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl7_argument'}->checkNotNull();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

${'module_category_srl8_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl8_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl8_argument'}->isValid()) return ${'module_category_srl8_argument'}->getErrorMessage();
if(${'module_category_srl8_argument'} !== null) ${'module_category_srl8_argument'}->setColumnType('number');

${'mid9_argument'} = new Argument('mid', $args->{'mid'});
${'mid9_argument'}->checkNotNull();
if(!${'mid9_argument'}->isValid()) return ${'mid9_argument'}->getErrorMessage();
if(${'mid9_argument'} !== null) ${'mid9_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin10_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin10_argument'}->isValid()) return ${'skin10_argument'}->getErrorMessage();
} else
${'skin10_argument'} = null;if(${'skin10_argument'} !== null) ${'skin10_argument'}->setColumnType('varchar');

${'is_skin_fix11_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix11_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix11_argument'}->isValid()) return ${'is_skin_fix11_argument'}->getErrorMessage();
if(${'is_skin_fix11_argument'} !== null) ${'is_skin_fix11_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin12_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin12_argument'}->isValid()) return ${'mskin12_argument'}->getErrorMessage();
} else
${'mskin12_argument'} = null;if(${'mskin12_argument'} !== null) ${'mskin12_argument'}->setColumnType('varchar');

${'browser_title13_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title13_argument'}->checkNotNull();
if(!${'browser_title13_argument'}->isValid()) return ${'browser_title13_argument'}->getErrorMessage();
if(${'browser_title13_argument'} !== null) ${'browser_title13_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl14_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl14_argument'}->isValid()) return ${'layout_srl14_argument'}->getErrorMessage();
} else
${'layout_srl14_argument'} = null;if(${'layout_srl14_argument'} !== null) ${'layout_srl14_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description15_argument'} = new Argument('description', $args->{'description'});
if(!${'description15_argument'}->isValid()) return ${'description15_argument'}->getErrorMessage();
} else
${'description15_argument'} = null;if(${'description15_argument'} !== null) ${'description15_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content16_argument'} = new Argument('content', $args->{'content'});
if(!${'content16_argument'}->isValid()) return ${'content16_argument'}->getErrorMessage();
} else
${'content16_argument'} = null;if(${'content16_argument'} !== null) ${'content16_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent17_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent17_argument'}->isValid()) return ${'mcontent17_argument'}->getErrorMessage();
} else
${'mcontent17_argument'} = null;if(${'mcontent17_argument'} !== null) ${'mcontent17_argument'}->setColumnType('bigtext');

${'module18_argument'} = new Argument('module', $args->{'module'});
${'module18_argument'}->checkNotNull();
if(!${'module18_argument'}->isValid()) return ${'module18_argument'}->getErrorMessage();
if(${'module18_argument'} !== null) ${'module18_argument'}->setColumnType('varchar');

${'is_default19_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default19_argument'}->ensureDefaultValue('N');
${'is_default19_argument'}->checkNotNull();
if(!${'is_default19_argument'}->isValid()) return ${'is_default19_argument'}->getErrorMessage();
if(${'is_default19_argument'} !== null) ${'is_default19_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl20_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl20_argument'}->checkFilter('number');
if(!${'menu_srl20_argument'}->isValid()) return ${'menu_srl20_argument'}->getErrorMessage();
} else
${'menu_srl20_argument'} = null;if(${'menu_srl20_argument'} !== null) ${'menu_srl20_argument'}->setColumnType('number');

${'open_rss21_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss21_argument'}->ensureDefaultValue('Y');
${'open_rss21_argument'}->checkNotNull();
if(!${'open_rss21_argument'}->isValid()) return ${'open_rss21_argument'}->getErrorMessage();
if(${'open_rss21_argument'} !== null) ${'open_rss21_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text22_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text22_argument'}->isValid()) return ${'header_text22_argument'}->getErrorMessage();
} else
${'header_text22_argument'} = null;if(${'header_text22_argument'} !== null) ${'header_text22_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text23_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text23_argument'}->isValid()) return ${'footer_text23_argument'}->getErrorMessage();
} else
${'footer_text23_argument'} = null;if(${'footer_text23_argument'} !== null) ${'footer_text23_argument'}->setColumnType('text');

${'regdate24_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate24_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate24_argument'}->isValid()) return ${'regdate24_argument'}->getErrorMessage();
if(${'regdate24_argument'} !== null) ${'regdate24_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl25_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl25_argument'}->isValid()) return ${'mlayout_srl25_argument'}->getErrorMessage();
} else
${'mlayout_srl25_argument'} = null;if(${'mlayout_srl25_argument'} !== null) ${'mlayout_srl25_argument'}->setColumnType('number');

${'use_mobile26_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile26_argument'}->ensureDefaultValue('N');
if(!${'use_mobile26_argument'}->isValid()) return ${'use_mobile26_argument'}->getErrorMessage();
if(${'use_mobile26_argument'} !== null) ${'use_mobile26_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl6_argument'})
,new InsertExpression('`module_srl`', ${'module_srl7_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl8_argument'})
,new InsertExpression('`mid`', ${'mid9_argument'})
,new InsertExpression('`skin`', ${'skin10_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix11_argument'})
,new InsertExpression('`mskin`', ${'mskin12_argument'})
,new InsertExpression('`browser_title`', ${'browser_title13_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl14_argument'})
,new InsertExpression('`description`', ${'description15_argument'})
,new InsertExpression('`content`', ${'content16_argument'})
,new InsertExpression('`mcontent`', ${'mcontent17_argument'})
,new InsertExpression('`module`', ${'module18_argument'})
,new InsertExpression('`is_default`', ${'is_default19_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl20_argument'})
,new InsertExpression('`open_rss`', ${'open_rss21_argument'})
,new InsertExpression('`header_text`', ${'header_text22_argument'})
,new InsertExpression('`footer_text`', ${'footer_text23_argument'})
,new InsertExpression('`regdate`', ${'regdate24_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl25_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile26_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>