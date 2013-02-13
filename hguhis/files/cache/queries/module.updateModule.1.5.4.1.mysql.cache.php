<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module1_argument'} = new Argument('module', $args->{'module'});
${'module1_argument'}->checkNotNull();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl2_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl2_argument'}->isValid()) return ${'module_category_srl2_argument'}->getErrorMessage();
} else
${'module_category_srl2_argument'} = null;if(${'module_category_srl2_argument'} !== null) ${'module_category_srl2_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl3_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl3_argument'}->isValid()) return ${'layout_srl3_argument'}->getErrorMessage();
} else
${'layout_srl3_argument'} = null;if(${'layout_srl3_argument'} !== null) ${'layout_srl3_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin4_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin4_argument'}->isValid()) return ${'skin4_argument'}->getErrorMessage();
} else
${'skin4_argument'} = null;if(${'skin4_argument'} !== null) ${'skin4_argument'}->setColumnType('varchar');

${'is_skin_fix5_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix5_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix5_argument'}->isValid()) return ${'is_skin_fix5_argument'}->getErrorMessage();
if(${'is_skin_fix5_argument'} !== null) ${'is_skin_fix5_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin6_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin6_argument'}->isValid()) return ${'mskin6_argument'}->getErrorMessage();
} else
${'mskin6_argument'} = null;if(${'mskin6_argument'} !== null) ${'mskin6_argument'}->setColumnType('varchar');
if(isset($args->menu_srl)) {
${'menu_srl7_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl7_argument'}->checkFilter('number');
if(!${'menu_srl7_argument'}->isValid()) return ${'menu_srl7_argument'}->getErrorMessage();
} else
${'menu_srl7_argument'} = null;if(${'menu_srl7_argument'} !== null) ${'menu_srl7_argument'}->setColumnType('number');

${'mid8_argument'} = new Argument('mid', $args->{'mid'});
${'mid8_argument'}->checkNotNull();
if(!${'mid8_argument'}->isValid()) return ${'mid8_argument'}->getErrorMessage();
if(${'mid8_argument'} !== null) ${'mid8_argument'}->setColumnType('varchar');

${'browser_title9_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title9_argument'}->checkNotNull();
if(!${'browser_title9_argument'}->isValid()) return ${'browser_title9_argument'}->getErrorMessage();
if(${'browser_title9_argument'} !== null) ${'browser_title9_argument'}->setColumnType('varchar');

${'description10_argument'} = new Argument('description', $args->{'description'});
${'description10_argument'}->ensureDefaultValue('');
if(!${'description10_argument'}->isValid()) return ${'description10_argument'}->getErrorMessage();
if(${'description10_argument'} !== null) ${'description10_argument'}->setColumnType('text');

${'is_default11_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default11_argument'}->ensureDefaultValue('N');
${'is_default11_argument'}->checkNotNull();
if(!${'is_default11_argument'}->isValid()) return ${'is_default11_argument'}->getErrorMessage();
if(${'is_default11_argument'} !== null) ${'is_default11_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content12_argument'} = new Argument('content', $args->{'content'});
if(!${'content12_argument'}->isValid()) return ${'content12_argument'}->getErrorMessage();
} else
${'content12_argument'} = null;if(${'content12_argument'} !== null) ${'content12_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent13_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent13_argument'}->isValid()) return ${'mcontent13_argument'}->getErrorMessage();
} else
${'mcontent13_argument'} = null;if(${'mcontent13_argument'} !== null) ${'mcontent13_argument'}->setColumnType('bigtext');

${'open_rss14_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss14_argument'}->ensureDefaultValue('Y');
${'open_rss14_argument'}->checkNotNull();
if(!${'open_rss14_argument'}->isValid()) return ${'open_rss14_argument'}->getErrorMessage();
if(${'open_rss14_argument'} !== null) ${'open_rss14_argument'}->setColumnType('char');

${'header_text15_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text15_argument'}->ensureDefaultValue('');
if(!${'header_text15_argument'}->isValid()) return ${'header_text15_argument'}->getErrorMessage();
if(${'header_text15_argument'} !== null) ${'header_text15_argument'}->setColumnType('text');

${'footer_text16_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text16_argument'}->ensureDefaultValue('');
if(!${'footer_text16_argument'}->isValid()) return ${'footer_text16_argument'}->getErrorMessage();
if(${'footer_text16_argument'} !== null) ${'footer_text16_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl17_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl17_argument'}->isValid()) return ${'mlayout_srl17_argument'}->getErrorMessage();
} else
${'mlayout_srl17_argument'} = null;if(${'mlayout_srl17_argument'} !== null) ${'mlayout_srl17_argument'}->setColumnType('number');

${'use_mobile18_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile18_argument'}->ensureDefaultValue('N');
if(!${'use_mobile18_argument'}->isValid()) return ${'use_mobile18_argument'}->getErrorMessage();
if(${'use_mobile18_argument'} !== null) ${'use_mobile18_argument'}->setColumnType('char');

${'site_srl19_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl19_argument'}->checkFilter('number');
${'site_srl19_argument'}->ensureDefaultValue('0');
${'site_srl19_argument'}->checkNotNull();
${'site_srl19_argument'}->createConditionValue();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');

${'module_srl20_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl20_argument'}->checkFilter('number');
${'module_srl20_argument'}->checkNotNull();
${'module_srl20_argument'}->createConditionValue();
if(!${'module_srl20_argument'}->isValid()) return ${'module_srl20_argument'}->getErrorMessage();
if(${'module_srl20_argument'} !== null) ${'module_srl20_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module1_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl2_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl3_argument'})
,new UpdateExpression('`skin`', ${'skin4_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix5_argument'})
,new UpdateExpression('`mskin`', ${'mskin6_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl7_argument'})
,new UpdateExpression('`mid`', ${'mid8_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title9_argument'})
,new UpdateExpression('`description`', ${'description10_argument'})
,new UpdateExpression('`is_default`', ${'is_default11_argument'})
,new UpdateExpression('`content`', ${'content12_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent13_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss14_argument'})
,new UpdateExpression('`header_text`', ${'header_text15_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text16_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl17_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile18_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl19_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>