<?php if(!defined("__XE__"))exit;
$__Context->db_info   = Context::getDBInfo();
	$__Context->lang_type = Context::getLangType();
	$__Context->ssl_actions = Context::getSSLActions();
	$__Context->css_files=Context::getCssFile();
	$__Context->js_files=Context::getJsFile();
 ?>
<?php if($__Context->db_info->use_html5=='Y'){ ?>
<!DOCTYPE html>
<?php }else{ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php } ?>
<html lang="<?php echo $__Context->lang_type ?>"<?php if($__Context->db_info->use_html5!='Y'){ ?> xmlns="http://www.w3.org/1999/xhtml"<?php } ?>>
<head>
<!-- META -->
	<?php if($__Context->db_info->use_html5=='Y'){ ?><meta charset="UTF-8"/><?php };
if($__Context->db_info->use_html5!='Y'){ ?><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><?php } ?>
	<meta name="Generator" content="XpressEngine" />
<!-- TITLE -->
	<title><?php echo Context::getBrowserTitle() ?></title>
<!-- CSS -->
<?php if($__Context->css_files&&count($__Context->css_files))foreach($__Context->css_files as $__Context->key=>$__Context->css_file){ ?>
<?php if($__Context->css_file['targetie']){ ?><!--[if <?php echo $__Context->css_file['targetie'] ?>]><?php } ?>
	<link rel="stylesheet" href="<?php echo $__Context->css_file['file'] ?>"<?php if($__Context->db_info->use_html5!='Y'){ ?> type="text/css"<?php } ?> media="<?php echo $__Context->css_file['media'] ?>" />
<?php if($__Context->css_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
<!-- JS -->
<?php if($__Context->js_files&&count($__Context->js_files))foreach($__Context->js_files as $__Context->key=>$__Context->js_file){ ?>
<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php } ?>
	<script<?php if($__Context->db_info->use_html5!='Y'){ ?> type="text/javascript"<?php } ?> src="<?php echo $__Context->js_file['file'] ?>"></script>
<?php if($__Context->js_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
	<?php if($__Context->db_info->use_html5=='Y'){ ?><!--[if lt IE 9]><script src="/git/hguhistory/hguhis/common/js/html5.js"></script><![endif]--><?php } ?>
<!-- RSS -->
	<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $__Context->rss_url ?>" /><?php };
if($__Context->general_rss_url){ ?><link rel="alternate" type="application/rss+xml" title="Site RSS" href="<?php echo $__Context->general_rss_url ?>" /><?php } ?>
	<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Atom" href="<?php echo $__Context->atom_url ?>" /><?php };
if($__Context->general_rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Site Atom" href="<?php echo $__Context->general_atom_url ?>" /><?php } ?>
<!-- ICON -->
	<?php if($__Context->favicon_url){ ?><link rel="shortcut icon" href="<?php echo $__Context->favicon_url ?>" /><?php } ?>
	<?php if($__Context->mobicon_url){ ?><link rel="apple-touch-icon" href="<?php echo $__Context->mobicon_url ?>" /><?php } ?>
<?php echo Context::getHtmlHeader() ?>
</head>
<body<?php echo Context::getBodyClass() ?>>
	<script<?php if($__Context->db_info->use_html5!='Y'){ ?> type="text/javascript"<?php } ?>>
	//<![CDATA[
	var current_url = "<?php echo $__Context->current_url ?>";
	var request_uri = "<?php echo $__Context->request_uri ?>";
<?php if($__Context->vid){ ?>var xeVid = "<?php echo $__Context->vid ?>";<?php } ?>
var current_mid = "<?php echo $__Context->mid ?>";
var waiting_message = "<?php echo $__Context->lang->msg_call_server ?>";
var ssl_actions = new Array(<?php if(count($__Context->ssl_actions)){ ?>"<?php echo implode('","',array_keys($__Context->ssl_actions)) ?>"<?php } ?>);
var default_url = "<?php echo Context::getDefaultUrl() ?>";
<?php if(Context::get('_http_port')){ ?>var http_port = <?php echo Context::get("_http_port") ?>;<?php } ?>
<?php if(Context::get('_https_port')){ ?>var https_port = <?php echo Context::get("_https_port") ?>;<?php } ?>
<?php if(Context::get('_use_ssl') && Context::get('_use_ssl') == 'always'){ ?>var enforce_ssl = true;<?php } ?>
	xe.current_lang = "<?php echo $__Context->lang_type ?>";
	//]]>
	</script>
	<?php echo Context::getBodyHeader() ?>
	<?php echo $__Context->content ?>
	<?php echo Context::getHtmlFooter() ?>
<!-- ETC -->
	<div class="wfsr"></div>
<?php  $__Context->js_body_files = Context::getJsFile('body')  ?>
<?php if($__Context->js_body_files&&count($__Context->js_body_files))foreach($__Context->js_body_files as $__Context->key=>$__Context->js_file){ ?>
	<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php } ?><script<?php if($__Context->db_info->use_html5!='Y'){ ?> type="text/javascript"<?php } ?> src="<?php echo $__Context->js_file['file'] ?>"></script><?php if($__Context->js_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
</body>
</html>
