<?php if(!defined("__XE__"))exit;?><script>
var confirm_restore_msg = '<?php echo $__Context->lang->confirm_restore ?>';
var no_text_comment = '<?php echo $__Context->lang->no_text_comment ?>';
</script>
<!--#Meta:modules/trash/tpl/js/trash_admin.js--><?php $__tmp=array('modules/trash/tpl/js/trash_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
	<?php Context::addJsFile("modules/trash/ruleset/emptyTrash.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="emptyTrash" />
		<input type="hidden" name="module" value="trash" />
		<input type="hidden" name="act" value="procTrashAdminEmptyTrash" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="is_all" value="true" />
		<h1 class="h1"><?php echo $__Context->lang->trash ?></h1>
		<div class="table even">
			<table width="100%" border="1" cellspacing="0" id="trashListTable">
				<caption>
					<?php echo $__Context->lang->trash ?>(<?php echo number_format($__Context->total_count) ?>)
					<span class="side"><span class="btn"><a href="#listManager" class="modalAnchor" onclick="getTrashList();"><?php echo $__Context->lang->document_manager ?></a></span>
					<span class="btn"><button type="submit" name="is_all" value="true"><?php echo $__Context->lang->empty_trash_all ?></button></span></span>
				</caption>
				<thead>
					<tr>
						<th scope="col" class="title"><?php echo $__Context->lang->document ?>(<?php echo $__Context->lang->origin_module_type ?>)</th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->trash_nick_name ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->trash_date ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
						<th scope="col" class="title"><?php echo $__Context->lang->trash_description ?></th>
						<th scope="col"><input type="checkbox" title="Check All" data-name="cart" /></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th scope="col" class="title"><?php echo $__Context->lang->document ?>(<?php echo $__Context->lang->origin_module_type ?>)</th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->trash_nick_name ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->trash_date ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
						<th scope="col" class="title"><?php echo $__Context->lang->trash_description ?></th>
						<th scope="col"><input type="checkbox" title="Check All" data-name="cart" /></th>
					</tr>
				</tfoot>
				<tbody>
    				<?php if($__Context->trash_list&&count($__Context->trash_list))foreach($__Context->trash_list as $__Context->no => $__Context->oTrashVO){ ?>
					<tr>
						<td class="title"><?php if(!trim($__Context->oTrashVO->getTitle()) && $__Context->oTrashVO->getOriginModule() == 'comment'){ ?><strong><?php echo $__Context->lang->no_text_comment ?></strong><?php }else{;
echo $__Context->oTrashVO->getTitle();
} ?> (<?php if($__Context->oTrashVO->getOriginModule() == 'document'){;
echo $__Context->lang->document;
}else{;
echo $__Context->lang->comment;
} ?>)</td>
						<td class="nowr"><span class="member_<?php echo $__Context->oTrashVO->getRemoverSrl() ?>"><?php echo htmlspecialchars($__Context->oTrashVO->getNickName()) ?></span></td>
						<td class="nowr"><?php echo zdate($__Context->oTrashVO->getRegdate(), "Y-m-d H:i:s") ?></td>
						<td class="nowr"><?php echo $__Context->oTrashVO->getIpaddress() ?></td>
						<td class="title"><?php echo $__Context->oTrashVO->getDescription() ?></td>
						<td><input type="checkbox" name="cart" value="<?php echo $__Context->oTrashVO->getTrashSrl() ?>" /></td>
					</tr>
    				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="btnArea">
			<span class="btn"><a href="#listManager" class="modalAnchor" onclick="getTrashList();"><?php echo $__Context->lang->document_manager ?></a></span>
			<span class="btn"><button type="submit" name="is_all" value="true"><?php echo $__Context->lang->empty_trash_all ?></button></span>
		</div>
	</form>
	<div class="modal" id="listManager">
		<?php Context::addJsFile("modules/trash/ruleset/emptyTrash.xml", false, "", 0, "head", true, "") ?><form  id="fo_list" action="./" method="post" class="fg form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="emptyTrash" />
		<input type="hidden" name="module" value="trash" />
		<input type="hidden" name="act" value="procTrashAdminEmptyTrash" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="is_all" value="false" />
		<input type="hidden" name="origin_module" value="<?php echo $__Context->origin_module ?>" />
			<h2 class="h2"><?php echo $__Context->lang->document_manager ?></h2>
			<div class="table even">
				<table width="100%" border="1" cellspacing="0" id="trashManageListTable">
					<caption><?php echo $__Context->lang->selected_document ?> <strong id="selectedTrashCount">0</strong></caption>
					<thead>
						<tr>
							<th scope="col" class="title"><?php echo $__Context->lang->document ?></th>
							<th scope="col" class="nowr"><?php echo $__Context->lang->trash_nick_name ?></th>
							<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<div class="btnArea">
				<span class="btn"><button type="submit" name="is_all" value="false"><?php echo $__Context->lang->cmd_delete ?></button></span>
				<span class="btn"><button type="submit" name="act" value="procTrashAdminRestore"><?php echo $__Context->lang->cmd_restore ?></button></span>
			</div>
		</form>
	</div>
<div class="search">
	<form action="" class="pagination"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
  	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
  	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<a href="<?php echo getUrl('page', '') ?>" class="direction">&laquo; FIRST</a>
	<?php if($__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="<?php echo getUrl('page', '') ?>">1</a>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
	<?php } ?>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php $__Context->last_page = $__Context->page_no ?>
		<?php if($__Context->page_no == $__Context->page){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
		<?php if($__Context->page_no != $__Context->page){ ?><a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<?php if($__Context->last_page != $__Context->page_navigation->last_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>"><?php echo $__Context->page_navigation->last_page ?></a>
	<?php } ?>
	<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="direction">LAST &raquo;</a>
	<?php if($__Context->isGoTo){ ?><span id="goTo" class="tgContent">
		<input name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
		<button type="submit">Go</button>
	</span><?php } ?>
	</form>
</div>
