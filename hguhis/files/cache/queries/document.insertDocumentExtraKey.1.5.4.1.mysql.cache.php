<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl31_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl31_argument'}->checkFilter('number');
${'module_srl31_argument'}->checkNotNull();
if(!${'module_srl31_argument'}->isValid()) return ${'module_srl31_argument'}->getErrorMessage();
if(${'module_srl31_argument'} !== null) ${'module_srl31_argument'}->setColumnType('number');

${'var_idx32_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx32_argument'}->checkFilter('number');
${'var_idx32_argument'}->checkNotNull();
if(!${'var_idx32_argument'}->isValid()) return ${'var_idx32_argument'}->getErrorMessage();
if(${'var_idx32_argument'} !== null) ${'var_idx32_argument'}->setColumnType('number');

${'var_name33_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name33_argument'}->checkNotNull();
if(!${'var_name33_argument'}->isValid()) return ${'var_name33_argument'}->getErrorMessage();
if(${'var_name33_argument'} !== null) ${'var_name33_argument'}->setColumnType('varchar');

${'var_type34_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type34_argument'}->checkNotNull();
if(!${'var_type34_argument'}->isValid()) return ${'var_type34_argument'}->getErrorMessage();
if(${'var_type34_argument'} !== null) ${'var_type34_argument'}->setColumnType('varchar');

${'var_is_required35_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required35_argument'}->ensureDefaultValue('N');
${'var_is_required35_argument'}->checkNotNull();
if(!${'var_is_required35_argument'}->isValid()) return ${'var_is_required35_argument'}->getErrorMessage();
if(${'var_is_required35_argument'} !== null) ${'var_is_required35_argument'}->setColumnType('char');

${'var_search36_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search36_argument'}->ensureDefaultValue('N');
${'var_search36_argument'}->checkNotNull();
if(!${'var_search36_argument'}->isValid()) return ${'var_search36_argument'}->getErrorMessage();
if(${'var_search36_argument'} !== null) ${'var_search36_argument'}->setColumnType('char');
if(isset($args->var_default)) {
${'var_default37_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default37_argument'}->isValid()) return ${'var_default37_argument'}->getErrorMessage();
} else
${'var_default37_argument'} = null;if(${'var_default37_argument'} !== null) ${'var_default37_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc38_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc38_argument'}->isValid()) return ${'var_desc38_argument'}->getErrorMessage();
} else
${'var_desc38_argument'} = null;if(${'var_desc38_argument'} !== null) ${'var_desc38_argument'}->setColumnType('text');

${'eid39_argument'} = new Argument('eid', $args->{'eid'});
${'eid39_argument'}->checkNotNull();
if(!${'eid39_argument'}->isValid()) return ${'eid39_argument'}->getErrorMessage();
if(${'eid39_argument'} !== null) ${'eid39_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl31_argument'})
,new InsertExpression('`var_idx`', ${'var_idx32_argument'})
,new InsertExpression('`var_name`', ${'var_name33_argument'})
,new InsertExpression('`var_type`', ${'var_type34_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required35_argument'})
,new InsertExpression('`var_search`', ${'var_search36_argument'})
,new InsertExpression('`var_default`', ${'var_default37_argument'})
,new InsertExpression('`var_desc`', ${'var_desc38_argument'})
,new InsertExpression('`eid`', ${'eid39_argument'})
));
$query->setTables(array(
new Table('`xe_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>