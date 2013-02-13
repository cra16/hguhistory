<?php if(!defined("__ZBXE__")) exit();
$db_info->master_db = array('db_type' => 'mysql','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'apmsetup','db_database' => 'hguhis','db_table_prefix' => 'xe_');
$db_info->slave_db = array(array('db_type' => 'mysql','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'apmsetup','db_database' => 'hguhis','db_table_prefix' => 'xe_'));
$db_info->default_url = 'http://localhost/git/hguhistory/hguhis/';
$db_info->lang_type = 'ko';
$db_info->use_rewrite = 'N';
$db_info->time_zone = '+0900';
?>