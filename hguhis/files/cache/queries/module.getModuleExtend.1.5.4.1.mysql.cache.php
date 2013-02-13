<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtend");
$query->setAction("select");
$query->setPriority("");
if(isset($args->parent_module)) {
${'parent_module3_argument'} = new ConditionArgument('parent_module', $args->parent_module, 'equal');
${'parent_module3_argument'}->createConditionValue();
if(!${'parent_module3_argument'}->isValid()) return ${'parent_module3_argument'}->getErrorMessage();
} else
${'parent_module3_argument'} = null;if(${'parent_module3_argument'} !== null) ${'parent_module3_argument'}->setColumnType('varchar');
if(isset($args->extend_module)) {
${'extend_module4_argument'} = new ConditionArgument('extend_module', $args->extend_module, 'equal');
${'extend_module4_argument'}->createConditionValue();
if(!${'extend_module4_argument'}->isValid()) return ${'extend_module4_argument'}->getErrorMessage();
} else
${'extend_module4_argument'} = null;if(${'extend_module4_argument'} !== null) ${'extend_module4_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type5_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type5_argument'}->createConditionValue();
if(!${'type5_argument'}->isValid()) return ${'type5_argument'}->getErrorMessage();
} else
${'type5_argument'} = null;if(${'type5_argument'} !== null) ${'type5_argument'}->setColumnType('varchar');
if(isset($args->kind)) {
${'kind6_argument'} = new ConditionArgument('kind', $args->kind, 'equal');
${'kind6_argument'}->createConditionValue();
if(!${'kind6_argument'}->isValid()) return ${'kind6_argument'}->getErrorMessage();
} else
${'kind6_argument'} = null;if(${'kind6_argument'} !== null) ${'kind6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_extend`', '`module_extend`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_module`',$parent_module3_argument,"equal")
,new ConditionWithArgument('`extend_module`',$extend_module4_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type5_argument,"equal", 'and')
,new ConditionWithArgument('`kind`',$kind6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>