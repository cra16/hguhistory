<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title96_argument'} = new Argument('title', $args->{'title'});
if(!${'title96_argument'}->isValid()) return ${'title96_argument'}->getErrorMessage();
} else
${'title96_argument'} = null;if(${'title96_argument'} !== null) ${'title96_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars97_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars97_argument'}->isValid()) return ${'extra_vars97_argument'}->getErrorMessage();
} else
${'extra_vars97_argument'} = null;if(${'extra_vars97_argument'} !== null) ${'extra_vars97_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout98_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout98_argument'}->isValid()) return ${'layout98_argument'}->getErrorMessage();
} else
${'layout98_argument'} = null;if(${'layout98_argument'} !== null) ${'layout98_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path99_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path99_argument'}->isValid()) return ${'layout_path99_argument'}->getErrorMessage();
} else
${'layout_path99_argument'} = null;if(${'layout_path99_argument'} !== null) ${'layout_path99_argument'}->setColumnType('varchar');

${'layout_srl100_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl100_argument'}->checkFilter('number');
${'layout_srl100_argument'}->checkNotNull();
${'layout_srl100_argument'}->createConditionValue();
if(!${'layout_srl100_argument'}->isValid()) return ${'layout_srl100_argument'}->getErrorMessage();
if(${'layout_srl100_argument'} !== null) ${'layout_srl100_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title96_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars97_argument'})
,new UpdateExpression('`layout`', ${'layout98_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path99_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl100_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>