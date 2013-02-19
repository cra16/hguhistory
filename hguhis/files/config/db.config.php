<?php if(!defined("__ZBXE__")) exit();
$db_info->master_db = array('db_type' => 'mysql','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'apmsetup','db_database' => 'hguhis','db_table_prefix' => 'xe_');
$db_info->slave_db = array(array('db_type' => 'mysql','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'apmsetup','db_database' => 'hguhis','db_table_prefix' => 'xe_'));
$db_info->default_url = 'http://localhost/git/hguhistory/hguhis/';
$db_info->use_rewrite = 'N';
$db_info->time_zone = '+0900';
$db_info->use_prepared_statements = 'Y';
$db_info->qmail_compatibility = 'N';
$db_info->use_db_session = 'N';
$db_info->use_ssl = 'none';
$db_info->use_sso = 'N';
$db_info->use_cdn = 'N';
$db_info->use_html5 = 'N';
$db_info->use_mobile_view = 'Y';
$db_info->admin_ip_list = '';
?>