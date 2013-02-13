<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListPage");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = null;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl4_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl4_argument'}->checkFilter('number');
${'exclude_module_srl4_argument'}->createConditionValue();
if(!${'exclude_module_srl4_argument'}->isValid()) return ${'exclude_module_srl4_argument'}->getErrorMessage();
} else
${'exclude_module_srl4_argument'} = null;if(${'exclude_module_srl4_argument'} !== null) ${'exclude_module_srl4_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl5_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl5_argument'}->createConditionValue();
if(!${'category_srl5_argument'}->isValid()) return ${'category_srl5_argument'}->getErrorMessage();
} else
${'category_srl5_argument'} = null;if(${'category_srl5_argument'} !== null) ${'category_srl5_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice6_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice6_argument'}->createConditionValue();
if(!${'s_is_notice6_argument'}->isValid()) return ${'s_is_notice6_argument'}->getErrorMessage();
} else
${'s_is_notice6_argument'} = null;if(${'s_is_notice6_argument'} !== null) ${'s_is_notice6_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->checkFilter('number');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = null;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList8_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList8_argument'}->createConditionValue();
if(!${'statusList8_argument'}->isValid()) return ${'statusList8_argument'}->getErrorMessage();
} else
${'statusList8_argument'} = null;if(${'statusList8_argument'} !== null) ${'statusList8_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division9_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division9_argument'}->createConditionValue();
if(!${'division9_argument'}->isValid()) return ${'division9_argument'}->getErrorMessage();
} else
${'division9_argument'} = null;if(${'division9_argument'} !== null) ${'division9_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division10_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division10_argument'}->createConditionValue();
if(!${'last_division10_argument'}->isValid()) return ${'last_division10_argument'}->getErrorMessage();
} else
${'last_division10_argument'} = null;if(${'last_division10_argument'} !== null) ${'last_division10_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title11_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title11_argument'}->createConditionValue();
if(!${'s_title11_argument'}->isValid()) return ${'s_title11_argument'}->getErrorMessage();
} else
${'s_title11_argument'} = null;if(${'s_title11_argument'} !== null) ${'s_title11_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content12_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content12_argument'}->createConditionValue();
if(!${'s_content12_argument'}->isValid()) return ${'s_content12_argument'}->getErrorMessage();
} else
${'s_content12_argument'} = null;if(${'s_content12_argument'} !== null) ${'s_content12_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name13_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name13_argument'}->createConditionValue();
if(!${'s_user_name13_argument'}->isValid()) return ${'s_user_name13_argument'}->getErrorMessage();
} else
${'s_user_name13_argument'} = null;if(${'s_user_name13_argument'} !== null) ${'s_user_name13_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id14_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id14_argument'}->createConditionValue();
if(!${'s_user_id14_argument'}->isValid()) return ${'s_user_id14_argument'}->getErrorMessage();
} else
${'s_user_id14_argument'} = null;if(${'s_user_id14_argument'} !== null) ${'s_user_id14_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name15_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name15_argument'}->createConditionValue();
if(!${'s_nick_name15_argument'}->isValid()) return ${'s_nick_name15_argument'}->getErrorMessage();
} else
${'s_nick_name15_argument'} = null;if(${'s_nick_name15_argument'} !== null) ${'s_nick_name15_argument'}->setColumnType('varchar');
if(isset($args->s_email_addres)) {
${'s_email_addres16_argument'} = new ConditionArgument('s_email_addres', $args->s_email_addres, 'like');
${'s_email_addres16_argument'}->createConditionValue();
if(!${'s_email_addres16_argument'}->isValid()) return ${'s_email_addres16_argument'}->getErrorMessage();
} else
${'s_email_addres16_argument'} = null;if(${'s_email_addres16_argument'} !== null) ${'s_email_addres16_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage17_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage17_argument'}->createConditionValue();
if(!${'s_homepage17_argument'}->isValid()) return ${'s_homepage17_argument'}->getErrorMessage();
} else
${'s_homepage17_argument'} = null;if(${'s_homepage17_argument'} !== null) ${'s_homepage17_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags18_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags18_argument'}->createConditionValue();
if(!${'s_tags18_argument'}->isValid()) return ${'s_tags18_argument'}->getErrorMessage();
} else
${'s_tags18_argument'} = null;if(${'s_tags18_argument'} !== null) ${'s_tags18_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl19_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl19_argument'}->createConditionValue();
if(!${'s_member_srl19_argument'}->isValid()) return ${'s_member_srl19_argument'}->getErrorMessage();
} else
${'s_member_srl19_argument'} = null;if(${'s_member_srl19_argument'} !== null) ${'s_member_srl19_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count20_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count20_argument'}->createConditionValue();
if(!${'s_readed_count20_argument'}->isValid()) return ${'s_readed_count20_argument'}->getErrorMessage();
} else
${'s_readed_count20_argument'} = null;if(${'s_readed_count20_argument'} !== null) ${'s_readed_count20_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count21_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count21_argument'}->createConditionValue();
if(!${'s_voted_count21_argument'}->isValid()) return ${'s_voted_count21_argument'}->getErrorMessage();
} else
${'s_voted_count21_argument'} = null;if(${'s_voted_count21_argument'} !== null) ${'s_voted_count21_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count22_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count22_argument'}->createConditionValue();
if(!${'s_blamed_count22_argument'}->isValid()) return ${'s_blamed_count22_argument'}->getErrorMessage();
} else
${'s_blamed_count22_argument'} = null;if(${'s_blamed_count22_argument'} !== null) ${'s_blamed_count22_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count23_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count23_argument'}->createConditionValue();
if(!${'s_comment_count23_argument'}->isValid()) return ${'s_comment_count23_argument'}->getErrorMessage();
} else
${'s_comment_count23_argument'} = null;if(${'s_comment_count23_argument'} !== null) ${'s_comment_count23_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count24_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count24_argument'}->createConditionValue();
if(!${'s_trackback_count24_argument'}->isValid()) return ${'s_trackback_count24_argument'}->getErrorMessage();
} else
${'s_trackback_count24_argument'} = null;if(${'s_trackback_count24_argument'} !== null) ${'s_trackback_count24_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count25_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count25_argument'}->createConditionValue();
if(!${'s_uploaded_count25_argument'}->isValid()) return ${'s_uploaded_count25_argument'}->getErrorMessage();
} else
${'s_uploaded_count25_argument'} = null;if(${'s_uploaded_count25_argument'} !== null) ${'s_uploaded_count25_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate26_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate26_argument'}->createConditionValue();
if(!${'s_regdate26_argument'}->isValid()) return ${'s_regdate26_argument'}->getErrorMessage();
} else
${'s_regdate26_argument'} = null;if(${'s_regdate26_argument'} !== null) ${'s_regdate26_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update27_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update27_argument'}->createConditionValue();
if(!${'s_last_update27_argument'}->isValid()) return ${'s_last_update27_argument'}->getErrorMessage();
} else
${'s_last_update27_argument'} = null;if(${'s_last_update27_argument'} !== null) ${'s_last_update27_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress28_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress28_argument'}->createConditionValue();
if(!${'s_ipaddress28_argument'}->isValid()) return ${'s_ipaddress28_argument'}->getErrorMessage();
} else
${'s_ipaddress28_argument'} = null;if(${'s_ipaddress28_argument'} !== null) ${'s_ipaddress28_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date29_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date29_argument'}->createConditionValue();
if(!${'start_date29_argument'}->isValid()) return ${'start_date29_argument'}->getErrorMessage();
} else
${'start_date29_argument'} = null;if(${'start_date29_argument'} !== null) ${'start_date29_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date30_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date30_argument'}->createConditionValue();
if(!${'end_date30_argument'}->isValid()) return ${'end_date30_argument'}->getErrorMessage();
} else
${'end_date30_argument'} = null;if(${'end_date30_argument'} !== null) ${'end_date30_argument'}->setColumnType('date');
if(isset($args->list_order)) {
${'list_order31_argument'} = new ConditionArgument('list_order', $args->list_order, 'less');
${'list_order31_argument'}->checkFilter('number');
${'list_order31_argument'}->createConditionValue();
if(!${'list_order31_argument'}->isValid()) return ${'list_order31_argument'}->getErrorMessage();
} else
${'list_order31_argument'} = null;if(${'list_order31_argument'} !== null) ${'list_order31_argument'}->setColumnType('number');
if(isset($args->rev_list_order)) {
${'rev_list_order32_argument'} = new ConditionArgument('rev_list_order', $args->rev_list_order, 'more');
${'rev_list_order32_argument'}->checkFilter('number');
${'rev_list_order32_argument'}->createConditionValue();
if(!${'rev_list_order32_argument'}->isValid()) return ${'rev_list_order32_argument'}->getErrorMessage();
} else
${'rev_list_order32_argument'} = null;if(${'rev_list_order32_argument'} !== null) ${'rev_list_order32_argument'}->setColumnType('number');
if(isset($args->update_order)) {
${'update_order33_argument'} = new ConditionArgument('update_order', $args->update_order, 'less');
${'update_order33_argument'}->checkFilter('number');
${'update_order33_argument'}->createConditionValue();
if(!${'update_order33_argument'}->isValid()) return ${'update_order33_argument'}->getErrorMessage();
} else
${'update_order33_argument'} = null;if(${'update_order33_argument'} !== null) ${'update_order33_argument'}->setColumnType('number');
if(isset($args->rev_update_order)) {
${'rev_update_order34_argument'} = new ConditionArgument('rev_update_order', $args->rev_update_order, 'more');
${'rev_update_order34_argument'}->checkFilter('number');
${'rev_update_order34_argument'}->createConditionValue();
if(!${'rev_update_order34_argument'}->isValid()) return ${'rev_update_order34_argument'}->getErrorMessage();
} else
${'rev_update_order34_argument'} = null;if(${'rev_update_order34_argument'} !== null) ${'rev_update_order34_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(`document_srl`)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl3_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl4_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl5_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice6_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList8_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division9_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division10_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title11_argument,"like")
,new ConditionWithArgument('`content`',$s_content12_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name13_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id14_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name15_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_addres16_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage17_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags18_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl19_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count20_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count21_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count22_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count23_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count24_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count25_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate26_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update27_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress28_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date29_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date30_argument,"less", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$list_order31_argument,"less", 'and')
,new ConditionWithArgument('`list_order`',$rev_list_order32_argument,"more", 'and')
,new ConditionWithArgument('`update_order`',$update_order33_argument,"less", 'and')
,new ConditionWithArgument('`update_order`',$rev_update_order34_argument,"more", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>