<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getSiteModules");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = null;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->site_keyword)) {
${'site_keyword2_argument'} = new ConditionArgument('site_keyword', $args->site_keyword, 'equal');
${'site_keyword2_argument'}->createConditionValue();
if(!${'site_keyword2_argument'}->isValid()) return ${'site_keyword2_argument'}->getErrorMessage();
} else
${'site_keyword2_argument'} = null;if(${'site_keyword2_argument'} !== null) ${'site_keyword2_argument'}->setColumnType('varchar');

${'sort_index24_argument'} = new Argument('sort_index2', $args->{'sort_index2'});
${'sort_index24_argument'}->ensureDefaultValue('modules.mid');
if(!${'sort_index24_argument'}->isValid()) return ${'sort_index24_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index1', $args->{'sort_index1'});
${'sort_index13_argument'}->ensureDefaultValue('modules.module');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`sites`.`domain`')
,new SelectExpression('`modules`.`site_srl`')
,new SelectExpression('`modules`.`module`')
,new SelectExpression('`modules`.`module_category_srl`')
,new SelectExpression('`modules`.`layout_srl`')
,new SelectExpression('`modules`.`mid`')
,new SelectExpression('`modules`.`browser_title`')
,new SelectExpression('`modules`.`module_srl`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sites`.`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`sites`.`domain`',$site_keyword2_argument,"equal", 'and')
,new ConditionWithoutArgument('`sites`.`site_srl`','`modules`.`site_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "asc")
,new OrderByColumn(${'sort_index24_argument'}, "asc")
));
$query->setLimit();
return $query; ?>