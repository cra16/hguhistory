<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/document/tpl/filter','manage_checked_document.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<h1 class="h1"><?php echo $__Context->lang->cmd_manage_document ?></h1>
<form action="./" method="get" id="fo_management"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="document" />
<input type="hidden" name="type" value="" />
<?php if(count($__Context->document_list)==0){ ?>
<?php echo $__Context->lang->msg_not_selected_document ?>
<?php }else{ ?>
<div class="table">
	<table width="100%" border="1" cellspacing="0">
	<tr>
		<th scope="row"><label for="textfield1"><?php echo $__Context->lang->checked_count ?> (<?php echo count($__Context->document_list) ?>)</label></th>
		<td>
			<input type="checkbox" onclick="XE.checkboxToggleAll()" checked="checked"/> <?php echo $__Context->lang->cmd_select ?>
			<ul class="document_list_box">
				<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->key => $__Context->document){ ?>
				<li class="document_list"><input type="checkbox" checked="checked" name="cart" value="<?php echo $__Context->document->document_srl ?>" onclick="doAddDocumentCart(this);"/> <address><?php echo $__Context->document->getNickName() ?></address> <span class="document_title"><?php echo $__Context->document->getTitle() ?></span></li>
				<?php } ?>
			</ul>
		</td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->move_target_module ?></th>
		<td>
			<input type="hidden" name="target_module" id="target_module" value="<?php echo $__Context->module_srl ?>" />
			<input type="text" name="_target_module" id="_target_module" value="<?php echo $__Context->mid ?> (<?php echo $__Context->browser_title ?>)" readonly="readonly" /><a href="<?php echo getUrl('','module','module','act','dispModuleSelectList','id','target_module','type','single') ?>" onclick="popopen(this.href,'ModuleSelect');return false;" class="button green"><span><?php echo $__Context->lang->cmd_select ?></span></a>
		</td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->category ?></th>
		<td>
		  <select id="target_category" name="target_category">
		  </select>
		</td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->cmd_send_message ?></th>
		<td>
			<textarea name="message_content" rows="8" cols="42"></textarea>
		</td>
	</tr>
	</table>
</div>
<div class="btnArea">
    <button type="button" onclick="doManageDocument('trash');"><?php echo $__Context->lang->cmd_trash ?></button>
    <button type="button" onclick="doManageDocument('delete');"><?php echo $__Context->lang->cmd_delete ?></button>
    <button type="button" onclick="doManageDocument('move');"><?php echo $__Context->lang->cmd_move ?></button>
    <button type="button" onclick="doManageDocument('copy');"><?php echo $__Context->lang->cmd_copy ?></button>
</div>
<script type="text/javascript">
    jQuery(function() { doGetCategoryFromModule(<?php echo $__Context->module_srl ?>); } );
</script>
<?php } ?>
</form>
