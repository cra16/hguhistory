<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl9_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->checkNotNull();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

${'var_idx10_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx10_argument'}->checkFilter('number');
${'var_idx10_argument'}->checkNotNull();
if(!${'var_idx10_argument'}->isValid()) return ${'var_idx10_argument'}->getErrorMessage();
if(${'var_idx10_argument'} !== null) ${'var_idx10_argument'}->setColumnType('number');

${'var_name11_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name11_argument'}->checkNotNull();
if(!${'var_name11_argument'}->isValid()) return ${'var_name11_argument'}->getErrorMessage();
if(${'var_name11_argument'} !== null) ${'var_name11_argument'}->setColumnType('varchar');

${'var_type12_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type12_argument'}->checkNotNull();
if(!${'var_type12_argument'}->isValid()) return ${'var_type12_argument'}->getErrorMessage();
if(${'var_type12_argument'} !== null) ${'var_type12_argument'}->setColumnType('varchar');

${'var_is_required13_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required13_argument'}->ensureDefaultValue('N');
${'var_is_required13_argument'}->checkNotNull();
if(!${'var_is_required13_argument'}->isValid()) return ${'var_is_required13_argument'}->getErrorMessage();
if(${'var_is_required13_argument'} !== null) ${'var_is_required13_argument'}->setColumnType('char');

${'var_search14_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search14_argument'}->ensureDefaultValue('N');
${'var_search14_argument'}->checkNotNull();
if(!${'var_search14_argument'}->isValid()) return ${'var_search14_argument'}->getErrorMessage();
if(${'var_search14_argument'} !== null) ${'var_search14_argument'}->setColumnType('char');
if(isset($args->var_default)) {
${'var_default15_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default15_argument'}->isValid()) return ${'var_default15_argument'}->getErrorMessage();
} else
${'var_default15_argument'} = null;if(${'var_default15_argument'} !== null) ${'var_default15_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc16_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc16_argument'}->isValid()) return ${'var_desc16_argument'}->getErrorMessage();
} else
${'var_desc16_argument'} = null;if(${'var_desc16_argument'} !== null) ${'var_desc16_argument'}->setColumnType('text');

${'eid17_argument'} = new Argument('eid', $args->{'eid'});
${'eid17_argument'}->checkNotNull();
if(!${'eid17_argument'}->isValid()) return ${'eid17_argument'}->getErrorMessage();
if(${'eid17_argument'} !== null) ${'eid17_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl9_argument'})
,new InsertExpression('`var_idx`', ${'var_idx10_argument'})
,new InsertExpression('`var_name`', ${'var_name11_argument'})
,new InsertExpression('`var_type`', ${'var_type12_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required13_argument'})
,new InsertExpression('`var_search`', ${'var_search14_argument'})
,new InsertExpression('`var_default`', ${'var_default15_argument'})
,new InsertExpression('`var_desc`', ${'var_desc16_argument'})
,new InsertExpression('`eid`', ${'eid17_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>