<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module4_argument'} = new Argument('module', $args->{'module'});
${'module4_argument'}->checkNotNull();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl5_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl5_argument'}->isValid()) return ${'module_category_srl5_argument'}->getErrorMessage();
} else
${'module_category_srl5_argument'} = null;if(${'module_category_srl5_argument'} !== null) ${'module_category_srl5_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl6_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl6_argument'}->isValid()) return ${'layout_srl6_argument'}->getErrorMessage();
} else
${'layout_srl6_argument'} = null;if(${'layout_srl6_argument'} !== null) ${'layout_srl6_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin7_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin7_argument'}->isValid()) return ${'skin7_argument'}->getErrorMessage();
} else
${'skin7_argument'} = null;if(${'skin7_argument'} !== null) ${'skin7_argument'}->setColumnType('varchar');

${'is_skin_fix8_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix8_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix8_argument'}->isValid()) return ${'is_skin_fix8_argument'}->getErrorMessage();
if(${'is_skin_fix8_argument'} !== null) ${'is_skin_fix8_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin9_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin9_argument'}->isValid()) return ${'mskin9_argument'}->getErrorMessage();
} else
${'mskin9_argument'} = null;if(${'mskin9_argument'} !== null) ${'mskin9_argument'}->setColumnType('varchar');
if(isset($args->menu_srl)) {
${'menu_srl10_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl10_argument'}->checkFilter('number');
if(!${'menu_srl10_argument'}->isValid()) return ${'menu_srl10_argument'}->getErrorMessage();
} else
${'menu_srl10_argument'} = null;if(${'menu_srl10_argument'} !== null) ${'menu_srl10_argument'}->setColumnType('number');

${'mid11_argument'} = new Argument('mid', $args->{'mid'});
${'mid11_argument'}->checkNotNull();
if(!${'mid11_argument'}->isValid()) return ${'mid11_argument'}->getErrorMessage();
if(${'mid11_argument'} !== null) ${'mid11_argument'}->setColumnType('varchar');

${'browser_title12_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title12_argument'}->checkNotNull();
if(!${'browser_title12_argument'}->isValid()) return ${'browser_title12_argument'}->getErrorMessage();
if(${'browser_title12_argument'} !== null) ${'browser_title12_argument'}->setColumnType('varchar');

${'description13_argument'} = new Argument('description', $args->{'description'});
${'description13_argument'}->ensureDefaultValue('');
if(!${'description13_argument'}->isValid()) return ${'description13_argument'}->getErrorMessage();
if(${'description13_argument'} !== null) ${'description13_argument'}->setColumnType('text');

${'is_default14_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default14_argument'}->ensureDefaultValue('N');
${'is_default14_argument'}->checkNotNull();
if(!${'is_default14_argument'}->isValid()) return ${'is_default14_argument'}->getErrorMessage();
if(${'is_default14_argument'} !== null) ${'is_default14_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content15_argument'} = new Argument('content', $args->{'content'});
if(!${'content15_argument'}->isValid()) return ${'content15_argument'}->getErrorMessage();
} else
${'content15_argument'} = null;if(${'content15_argument'} !== null) ${'content15_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent16_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent16_argument'}->isValid()) return ${'mcontent16_argument'}->getErrorMessage();
} else
${'mcontent16_argument'} = null;if(${'mcontent16_argument'} !== null) ${'mcontent16_argument'}->setColumnType('bigtext');

${'open_rss17_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss17_argument'}->ensureDefaultValue('Y');
${'open_rss17_argument'}->checkNotNull();
if(!${'open_rss17_argument'}->isValid()) return ${'open_rss17_argument'}->getErrorMessage();
if(${'open_rss17_argument'} !== null) ${'open_rss17_argument'}->setColumnType('char');

${'header_text18_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text18_argument'}->ensureDefaultValue('');
if(!${'header_text18_argument'}->isValid()) return ${'header_text18_argument'}->getErrorMessage();
if(${'header_text18_argument'} !== null) ${'header_text18_argument'}->setColumnType('text');

${'footer_text19_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text19_argument'}->ensureDefaultValue('');
if(!${'footer_text19_argument'}->isValid()) return ${'footer_text19_argument'}->getErrorMessage();
if(${'footer_text19_argument'} !== null) ${'footer_text19_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl20_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl20_argument'}->isValid()) return ${'mlayout_srl20_argument'}->getErrorMessage();
} else
${'mlayout_srl20_argument'} = null;if(${'mlayout_srl20_argument'} !== null) ${'mlayout_srl20_argument'}->setColumnType('number');

${'use_mobile21_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile21_argument'}->ensureDefaultValue('N');
if(!${'use_mobile21_argument'}->isValid()) return ${'use_mobile21_argument'}->getErrorMessage();
if(${'use_mobile21_argument'} !== null) ${'use_mobile21_argument'}->setColumnType('char');

${'site_srl22_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl22_argument'}->checkFilter('number');
${'site_srl22_argument'}->ensureDefaultValue('0');
${'site_srl22_argument'}->checkNotNull();
${'site_srl22_argument'}->createConditionValue();
if(!${'site_srl22_argument'}->isValid()) return ${'site_srl22_argument'}->getErrorMessage();
if(${'site_srl22_argument'} !== null) ${'site_srl22_argument'}->setColumnType('number');

${'module_srl23_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl23_argument'}->checkFilter('number');
${'module_srl23_argument'}->checkNotNull();
${'module_srl23_argument'}->createConditionValue();
if(!${'module_srl23_argument'}->isValid()) return ${'module_srl23_argument'}->getErrorMessage();
if(${'module_srl23_argument'} !== null) ${'module_srl23_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module4_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl5_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl6_argument'})
,new UpdateExpression('`skin`', ${'skin7_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix8_argument'})
,new UpdateExpression('`mskin`', ${'mskin9_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl10_argument'})
,new UpdateExpression('`mid`', ${'mid11_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title12_argument'})
,new UpdateExpression('`description`', ${'description13_argument'})
,new UpdateExpression('`is_default`', ${'is_default14_argument'})
,new UpdateExpression('`content`', ${'content15_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent16_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss17_argument'})
,new UpdateExpression('`header_text`', ${'header_text18_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text19_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl20_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile21_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl22_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl23_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>