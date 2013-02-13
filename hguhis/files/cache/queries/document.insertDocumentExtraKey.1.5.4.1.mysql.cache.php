<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl36_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl36_argument'}->checkFilter('number');
${'module_srl36_argument'}->checkNotNull();
if(!${'module_srl36_argument'}->isValid()) return ${'module_srl36_argument'}->getErrorMessage();
if(${'module_srl36_argument'} !== null) ${'module_srl36_argument'}->setColumnType('number');

${'var_idx37_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx37_argument'}->checkFilter('number');
${'var_idx37_argument'}->checkNotNull();
if(!${'var_idx37_argument'}->isValid()) return ${'var_idx37_argument'}->getErrorMessage();
if(${'var_idx37_argument'} !== null) ${'var_idx37_argument'}->setColumnType('number');

${'var_name38_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name38_argument'}->checkNotNull();
if(!${'var_name38_argument'}->isValid()) return ${'var_name38_argument'}->getErrorMessage();
if(${'var_name38_argument'} !== null) ${'var_name38_argument'}->setColumnType('varchar');

${'var_type39_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type39_argument'}->checkNotNull();
if(!${'var_type39_argument'}->isValid()) return ${'var_type39_argument'}->getErrorMessage();
if(${'var_type39_argument'} !== null) ${'var_type39_argument'}->setColumnType('varchar');

${'var_is_required40_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required40_argument'}->ensureDefaultValue('N');
${'var_is_required40_argument'}->checkNotNull();
if(!${'var_is_required40_argument'}->isValid()) return ${'var_is_required40_argument'}->getErrorMessage();
if(${'var_is_required40_argument'} !== null) ${'var_is_required40_argument'}->setColumnType('char');

${'var_search41_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search41_argument'}->ensureDefaultValue('N');
${'var_search41_argument'}->checkNotNull();
if(!${'var_search41_argument'}->isValid()) return ${'var_search41_argument'}->getErrorMessage();
if(${'var_search41_argument'} !== null) ${'var_search41_argument'}->setColumnType('char');
if(isset($args->var_default)) {
${'var_default42_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default42_argument'}->isValid()) return ${'var_default42_argument'}->getErrorMessage();
} else
${'var_default42_argument'} = null;if(${'var_default42_argument'} !== null) ${'var_default42_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc43_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc43_argument'}->isValid()) return ${'var_desc43_argument'}->getErrorMessage();
} else
${'var_desc43_argument'} = null;if(${'var_desc43_argument'} !== null) ${'var_desc43_argument'}->setColumnType('text');

${'eid44_argument'} = new Argument('eid', $args->{'eid'});
${'eid44_argument'}->checkNotNull();
if(!${'eid44_argument'}->isValid()) return ${'eid44_argument'}->getErrorMessage();
if(${'eid44_argument'} !== null) ${'eid44_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl36_argument'})
,new InsertExpression('`var_idx`', ${'var_idx37_argument'})
,new InsertExpression('`var_name`', ${'var_name38_argument'})
,new InsertExpression('`var_type`', ${'var_type39_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required40_argument'})
,new InsertExpression('`var_search`', ${'var_search41_argument'})
,new InsertExpression('`var_default`', ${'var_default42_argument'})
,new InsertExpression('`var_desc`', ${'var_desc43_argument'})
,new InsertExpression('`eid`', ${'eid44_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>