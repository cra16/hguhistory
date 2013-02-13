<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','delete_category.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','move_category.xml');$__xmlFilter->compile(); ?>
<?php Context::loadJavascriptPlugin('ui.tree'); ?>
<!--#Meta:modules/document/tpl/js/document_category.js--><?php $__tmp=array('modules/document/tpl/js/document_category.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
<script type="text/javascript">
    var category_title = "<?php echo $__Context->lang->category ?>";
</script>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/document/ruleset/insertCategory.xml", false, "", 0, "head", true, "") ?><form  id="fo_category" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertCategory" />
<input type="hidden" name="module" value="document" />
<input type="hidden" name="act" value="procDocumentInsertCategory" />
<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
<input type="hidden" name="xml_file" value="<?php echo $__Context->category_xml_file ?>" />
<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<div id="category_info" class="x" style="position:absolute"></div>
</form>
<div id="menu">
	<ul class="simpleTree">
		<li class="root" id='tree_0'><span><?php echo $__Context->lang->category ?></span></li>
	</ul>
</div>
<span style="float:right"><a href="#"  onclick="doReloadTreeCategory('<?php echo $__Context->module_info->module_srl ?>');return false;" class="button black"><span><?php echo $__Context->lang->cmd_remake_cache ?></span></a></span>
<script type="text/javascript">
    var simpleTreeCollection;
    var max_menu_depth = 999;
    var lang_confirm_delete = "<?php echo $__Context->lang->confirm_delete ?>";
    var xml_url = "<?php echo $__Context->category_xml_file ?>";
    doCategoryFormMove();
    Tree(xml_url);
</script>
