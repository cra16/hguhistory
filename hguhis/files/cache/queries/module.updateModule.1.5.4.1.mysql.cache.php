<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module252_argument'} = new Argument('module', $args->{'module'});
${'module252_argument'}->checkNotNull();
if(!${'module252_argument'}->isValid()) return ${'module252_argument'}->getErrorMessage();
if(${'module252_argument'} !== null) ${'module252_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl253_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl253_argument'}->isValid()) return ${'module_category_srl253_argument'}->getErrorMessage();
} else
${'module_category_srl253_argument'} = null;if(${'module_category_srl253_argument'} !== null) ${'module_category_srl253_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl254_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl254_argument'}->isValid()) return ${'layout_srl254_argument'}->getErrorMessage();
} else
${'layout_srl254_argument'} = null;if(${'layout_srl254_argument'} !== null) ${'layout_srl254_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin255_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin255_argument'}->isValid()) return ${'skin255_argument'}->getErrorMessage();
} else
${'skin255_argument'} = null;if(${'skin255_argument'} !== null) ${'skin255_argument'}->setColumnType('varchar');

${'is_skin_fix256_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix256_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix256_argument'}->isValid()) return ${'is_skin_fix256_argument'}->getErrorMessage();
if(${'is_skin_fix256_argument'} !== null) ${'is_skin_fix256_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin257_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin257_argument'}->isValid()) return ${'mskin257_argument'}->getErrorMessage();
} else
${'mskin257_argument'} = null;if(${'mskin257_argument'} !== null) ${'mskin257_argument'}->setColumnType('varchar');
if(isset($args->menu_srl)) {
${'menu_srl258_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl258_argument'}->checkFilter('number');
if(!${'menu_srl258_argument'}->isValid()) return ${'menu_srl258_argument'}->getErrorMessage();
} else
${'menu_srl258_argument'} = null;if(${'menu_srl258_argument'} !== null) ${'menu_srl258_argument'}->setColumnType('number');

${'mid259_argument'} = new Argument('mid', $args->{'mid'});
${'mid259_argument'}->checkNotNull();
if(!${'mid259_argument'}->isValid()) return ${'mid259_argument'}->getErrorMessage();
if(${'mid259_argument'} !== null) ${'mid259_argument'}->setColumnType('varchar');

${'browser_title260_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title260_argument'}->checkNotNull();
if(!${'browser_title260_argument'}->isValid()) return ${'browser_title260_argument'}->getErrorMessage();
if(${'browser_title260_argument'} !== null) ${'browser_title260_argument'}->setColumnType('varchar');

${'description261_argument'} = new Argument('description', $args->{'description'});
${'description261_argument'}->ensureDefaultValue('');
if(!${'description261_argument'}->isValid()) return ${'description261_argument'}->getErrorMessage();
if(${'description261_argument'} !== null) ${'description261_argument'}->setColumnType('text');

${'is_default262_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default262_argument'}->ensureDefaultValue('N');
${'is_default262_argument'}->checkNotNull();
if(!${'is_default262_argument'}->isValid()) return ${'is_default262_argument'}->getErrorMessage();
if(${'is_default262_argument'} !== null) ${'is_default262_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content263_argument'} = new Argument('content', $args->{'content'});
if(!${'content263_argument'}->isValid()) return ${'content263_argument'}->getErrorMessage();
} else
${'content263_argument'} = null;if(${'content263_argument'} !== null) ${'content263_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent264_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent264_argument'}->isValid()) return ${'mcontent264_argument'}->getErrorMessage();
} else
${'mcontent264_argument'} = null;if(${'mcontent264_argument'} !== null) ${'mcontent264_argument'}->setColumnType('bigtext');

${'open_rss265_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss265_argument'}->ensureDefaultValue('Y');
${'open_rss265_argument'}->checkNotNull();
if(!${'open_rss265_argument'}->isValid()) return ${'open_rss265_argument'}->getErrorMessage();
if(${'open_rss265_argument'} !== null) ${'open_rss265_argument'}->setColumnType('char');

${'header_text266_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text266_argument'}->ensureDefaultValue('');
if(!${'header_text266_argument'}->isValid()) return ${'header_text266_argument'}->getErrorMessage();
if(${'header_text266_argument'} !== null) ${'header_text266_argument'}->setColumnType('text');

${'footer_text267_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text267_argument'}->ensureDefaultValue('');
if(!${'footer_text267_argument'}->isValid()) return ${'footer_text267_argument'}->getErrorMessage();
if(${'footer_text267_argument'} !== null) ${'footer_text267_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl268_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl268_argument'}->isValid()) return ${'mlayout_srl268_argument'}->getErrorMessage();
} else
${'mlayout_srl268_argument'} = null;if(${'mlayout_srl268_argument'} !== null) ${'mlayout_srl268_argument'}->setColumnType('number');

${'use_mobile269_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile269_argument'}->ensureDefaultValue('N');
if(!${'use_mobile269_argument'}->isValid()) return ${'use_mobile269_argument'}->getErrorMessage();
if(${'use_mobile269_argument'} !== null) ${'use_mobile269_argument'}->setColumnType('char');

${'site_srl270_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl270_argument'}->checkFilter('number');
${'site_srl270_argument'}->ensureDefaultValue('0');
${'site_srl270_argument'}->checkNotNull();
${'site_srl270_argument'}->createConditionValue();
if(!${'site_srl270_argument'}->isValid()) return ${'site_srl270_argument'}->getErrorMessage();
if(${'site_srl270_argument'} !== null) ${'site_srl270_argument'}->setColumnType('number');

${'module_srl271_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl271_argument'}->checkFilter('number');
${'module_srl271_argument'}->checkNotNull();
${'module_srl271_argument'}->createConditionValue();
if(!${'module_srl271_argument'}->isValid()) return ${'module_srl271_argument'}->getErrorMessage();
if(${'module_srl271_argument'} !== null) ${'module_srl271_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module252_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl253_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl254_argument'})
,new UpdateExpression('`skin`', ${'skin255_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix256_argument'})
,new UpdateExpression('`mskin`', ${'mskin257_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl258_argument'})
,new UpdateExpression('`mid`', ${'mid259_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title260_argument'})
,new UpdateExpression('`description`', ${'description261_argument'})
,new UpdateExpression('`is_default`', ${'is_default262_argument'})
,new UpdateExpression('`content`', ${'content263_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent264_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss265_argument'})
,new UpdateExpression('`header_text`', ${'header_text266_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text267_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl268_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile269_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl270_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl271_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>