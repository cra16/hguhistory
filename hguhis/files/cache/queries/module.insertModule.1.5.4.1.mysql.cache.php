<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl126_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl126_argument'}->ensureDefaultValue('0');
${'site_srl126_argument'}->checkNotNull();
if(!${'site_srl126_argument'}->isValid()) return ${'site_srl126_argument'}->getErrorMessage();
if(${'site_srl126_argument'} !== null) ${'site_srl126_argument'}->setColumnType('number');

${'module_srl127_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl127_argument'}->checkNotNull();
if(!${'module_srl127_argument'}->isValid()) return ${'module_srl127_argument'}->getErrorMessage();
if(${'module_srl127_argument'} !== null) ${'module_srl127_argument'}->setColumnType('number');

${'module_category_srl128_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl128_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl128_argument'}->isValid()) return ${'module_category_srl128_argument'}->getErrorMessage();
if(${'module_category_srl128_argument'} !== null) ${'module_category_srl128_argument'}->setColumnType('number');

${'mid129_argument'} = new Argument('mid', $args->{'mid'});
${'mid129_argument'}->checkNotNull();
if(!${'mid129_argument'}->isValid()) return ${'mid129_argument'}->getErrorMessage();
if(${'mid129_argument'} !== null) ${'mid129_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin130_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin130_argument'}->isValid()) return ${'skin130_argument'}->getErrorMessage();
} else
${'skin130_argument'} = null;if(${'skin130_argument'} !== null) ${'skin130_argument'}->setColumnType('varchar');

${'is_skin_fix131_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix131_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix131_argument'}->isValid()) return ${'is_skin_fix131_argument'}->getErrorMessage();
if(${'is_skin_fix131_argument'} !== null) ${'is_skin_fix131_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin132_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin132_argument'}->isValid()) return ${'mskin132_argument'}->getErrorMessage();
} else
${'mskin132_argument'} = null;if(${'mskin132_argument'} !== null) ${'mskin132_argument'}->setColumnType('varchar');

${'browser_title133_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title133_argument'}->checkNotNull();
if(!${'browser_title133_argument'}->isValid()) return ${'browser_title133_argument'}->getErrorMessage();
if(${'browser_title133_argument'} !== null) ${'browser_title133_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl134_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl134_argument'}->isValid()) return ${'layout_srl134_argument'}->getErrorMessage();
} else
${'layout_srl134_argument'} = null;if(${'layout_srl134_argument'} !== null) ${'layout_srl134_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description135_argument'} = new Argument('description', $args->{'description'});
if(!${'description135_argument'}->isValid()) return ${'description135_argument'}->getErrorMessage();
} else
${'description135_argument'} = null;if(${'description135_argument'} !== null) ${'description135_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content136_argument'} = new Argument('content', $args->{'content'});
if(!${'content136_argument'}->isValid()) return ${'content136_argument'}->getErrorMessage();
} else
${'content136_argument'} = null;if(${'content136_argument'} !== null) ${'content136_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent137_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent137_argument'}->isValid()) return ${'mcontent137_argument'}->getErrorMessage();
} else
${'mcontent137_argument'} = null;if(${'mcontent137_argument'} !== null) ${'mcontent137_argument'}->setColumnType('bigtext');

${'module138_argument'} = new Argument('module', $args->{'module'});
${'module138_argument'}->checkNotNull();
if(!${'module138_argument'}->isValid()) return ${'module138_argument'}->getErrorMessage();
if(${'module138_argument'} !== null) ${'module138_argument'}->setColumnType('varchar');

${'is_default139_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default139_argument'}->ensureDefaultValue('N');
${'is_default139_argument'}->checkNotNull();
if(!${'is_default139_argument'}->isValid()) return ${'is_default139_argument'}->getErrorMessage();
if(${'is_default139_argument'} !== null) ${'is_default139_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl140_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl140_argument'}->checkFilter('number');
if(!${'menu_srl140_argument'}->isValid()) return ${'menu_srl140_argument'}->getErrorMessage();
} else
${'menu_srl140_argument'} = null;if(${'menu_srl140_argument'} !== null) ${'menu_srl140_argument'}->setColumnType('number');

${'open_rss141_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss141_argument'}->ensureDefaultValue('Y');
${'open_rss141_argument'}->checkNotNull();
if(!${'open_rss141_argument'}->isValid()) return ${'open_rss141_argument'}->getErrorMessage();
if(${'open_rss141_argument'} !== null) ${'open_rss141_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text142_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text142_argument'}->isValid()) return ${'header_text142_argument'}->getErrorMessage();
} else
${'header_text142_argument'} = null;if(${'header_text142_argument'} !== null) ${'header_text142_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text143_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text143_argument'}->isValid()) return ${'footer_text143_argument'}->getErrorMessage();
} else
${'footer_text143_argument'} = null;if(${'footer_text143_argument'} !== null) ${'footer_text143_argument'}->setColumnType('text');

${'regdate144_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate144_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate144_argument'}->isValid()) return ${'regdate144_argument'}->getErrorMessage();
if(${'regdate144_argument'} !== null) ${'regdate144_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl145_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl145_argument'}->isValid()) return ${'mlayout_srl145_argument'}->getErrorMessage();
} else
${'mlayout_srl145_argument'} = null;if(${'mlayout_srl145_argument'} !== null) ${'mlayout_srl145_argument'}->setColumnType('number');

${'use_mobile146_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile146_argument'}->ensureDefaultValue('N');
if(!${'use_mobile146_argument'}->isValid()) return ${'use_mobile146_argument'}->getErrorMessage();
if(${'use_mobile146_argument'} !== null) ${'use_mobile146_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl126_argument'})
,new InsertExpression('`module_srl`', ${'module_srl127_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl128_argument'})
,new InsertExpression('`mid`', ${'mid129_argument'})
,new InsertExpression('`skin`', ${'skin130_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix131_argument'})
,new InsertExpression('`mskin`', ${'mskin132_argument'})
,new InsertExpression('`browser_title`', ${'browser_title133_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl134_argument'})
,new InsertExpression('`description`', ${'description135_argument'})
,new InsertExpression('`content`', ${'content136_argument'})
,new InsertExpression('`mcontent`', ${'mcontent137_argument'})
,new InsertExpression('`module`', ${'module138_argument'})
,new InsertExpression('`is_default`', ${'is_default139_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl140_argument'})
,new InsertExpression('`open_rss`', ${'open_rss141_argument'})
,new InsertExpression('`header_text`', ${'header_text142_argument'})
,new InsertExpression('`footer_text`', ${'footer_text143_argument'})
,new InsertExpression('`regdate`', ${'regdate144_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl145_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile146_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>