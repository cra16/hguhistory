<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateModuleMenu");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl15_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl15_argument'}->isValid()) return ${'menu_srl15_argument'}->getErrorMessage();
} else
${'menu_srl15_argument'} = null;if(${'menu_srl15_argument'} !== null) ${'menu_srl15_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl16_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl16_argument'}->isValid()) return ${'layout_srl16_argument'}->getErrorMessage();
} else
${'layout_srl16_argument'} = null;if(${'layout_srl16_argument'} !== null) ${'layout_srl16_argument'}->setColumnType('number');

${'mid17_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid17_argument'}->checkNotNull();
${'mid17_argument'}->createConditionValue();
if(!${'mid17_argument'}->isValid()) return ${'mid17_argument'}->getErrorMessage();
if(${'mid17_argument'} !== null) ${'mid17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl15_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl16_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>