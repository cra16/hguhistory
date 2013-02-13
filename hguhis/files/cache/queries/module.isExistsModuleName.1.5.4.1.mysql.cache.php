<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl101_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl101_argument'}->ensureDefaultValue('0');
${'site_srl101_argument'}->checkNotNull();
${'site_srl101_argument'}->createConditionValue();
if(!${'site_srl101_argument'}->isValid()) return ${'site_srl101_argument'}->getErrorMessage();
if(${'site_srl101_argument'} !== null) ${'site_srl101_argument'}->setColumnType('number');

${'mid102_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid102_argument'}->checkNotNull();
${'mid102_argument'}->createConditionValue();
if(!${'mid102_argument'}->isValid()) return ${'mid102_argument'}->getErrorMessage();
if(${'mid102_argument'} !== null) ${'mid102_argument'}->setColumnType('varchar');

${'module_srl103_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl103_argument'}->ensureDefaultValue('0');
${'module_srl103_argument'}->checkNotNull();
${'module_srl103_argument'}->createConditionValue();
if(!${'module_srl103_argument'}->isValid()) return ${'module_srl103_argument'}->getErrorMessage();
if(${'module_srl103_argument'} !== null) ${'module_srl103_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl101_argument,"equal")
,new ConditionWithArgument('`mid`',$mid102_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl103_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>