<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl149_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl149_argument'}->isValid()) return ${'index_module_srl149_argument'}->getErrorMessage();
} else
${'index_module_srl149_argument'} = null;if(${'index_module_srl149_argument'} !== null) ${'index_module_srl149_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain150_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain150_argument'}->isValid()) return ${'domain150_argument'}->getErrorMessage();
} else
${'domain150_argument'} = null;if(${'domain150_argument'} !== null) ${'domain150_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language151_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language151_argument'}->isValid()) return ${'default_language151_argument'}->getErrorMessage();
} else
${'default_language151_argument'} = null;if(${'default_language151_argument'} !== null) ${'default_language151_argument'}->setColumnType('varchar');

${'site_srl152_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl152_argument'}->checkFilter('number');
${'site_srl152_argument'}->checkNotNull();
${'site_srl152_argument'}->createConditionValue();
if(!${'site_srl152_argument'}->isValid()) return ${'site_srl152_argument'}->getErrorMessage();
if(${'site_srl152_argument'} !== null) ${'site_srl152_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl149_argument'})
,new UpdateExpression('`domain`', ${'domain150_argument'})
,new UpdateExpression('`default_language`', ${'default_language151_argument'})
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl152_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>