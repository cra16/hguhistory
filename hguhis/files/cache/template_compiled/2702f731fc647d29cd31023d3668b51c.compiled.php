<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
xe.lang.msg_empty_search_target = '<?php echo $__Context->lang->msg_empty_search_target ?>';
xe.lang.msg_empty_search_keyword = '<?php echo $__Context->lang->msg_empty_search_keyword ?>';
</script>
<!--#Meta:modules/document/tpl/js/document_admin.js--><?php $__tmp=array('modules/document/tpl/js/document_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
	<form id="fo_list" action="./" method="get" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="document" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<h1 class="h1"><?php echo $__Context->lang->document ?></h1>
		<div class="table even">
			<div class="cnb">
				<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>" <?php if($__Context->search_keyword == ''){ ?>class="active"<?php } ?>><?php echo $__Context->lang->all ?></a>
				| <a href="<?php echo getUrl('search_target', 'is_secret', 'search_keyword', 'N') ?>" <?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?>class="active"<?php } ?>><?php echo $__Context->status_name_list['PUBLIC'] ?></a>
				| <a href="<?php echo getUrl('search_target', 'is_secret', 'search_keyword', 'Y') ?>" <?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?>class="active"<?php } ?>><?php echo $__Context->status_name_list['SECRET'] ?></a>
				| <a href="<?php echo getUrl('search_target', 'is_secret', 'search_keyword', 'temp') ?>" <?php if($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'temp'){ ?>class="active"<?php } ?>><?php echo $__Context->status_name_list['TEMP'] ?></a>
				| <a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminDeclared') ?>"><?php echo $__Context->lang->cmd_declared_list ?></a>
			</div>
			<table width="100%" border="1" cellspacing="0" id="documentListTable">
				<caption>
					<?php if($__Context->search_keyword == ''){ ?>
					<?php echo $__Context->lang->all ?>
					<?php }elseif($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'N'){ ?>
					<?php echo $__Context->status_name_list['PUBLIC'] ?>
					<?php }elseif($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'Y'){ ?>
					<?php echo $__Context->status_name_list['SECRET'] ?>
					<?php }elseif($__Context->search_target == 'is_secret' && $__Context->search_keyword == 'temp'){ ?>
					<?php echo $__Context->status_name_list['TEMP'] ?>
					<?php } ?>
					(<?php echo number_format($__Context->total_count) ?>)
					<div class="side">
						<span class="btn"><a href="#listManager" class="modalAnchor" onclick="getDocumentList();"><?php echo $__Context->lang->document_manager ?>...</a></span>
					</div>
				</caption>
				<thead>
					<tr>
						<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->readed_count ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_vote ?>(+/-)</th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
						<th scope="col"><input type="checkbox" data-name="cart" title="Check All" /></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->readed_count ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_vote ?>(+/-)</th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->date ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->ipaddress ?></th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
						<th scope="col"><input type="checkbox" data-name="cart" title="Check All" /></th>
					</tr>
				</tfoot>
				<tbody>
					<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->oDocument){ ?>
					<tr>
						<td class="title"><a href="<?php echo getUrl('','document_srl',$__Context->oDocument->document_srl) ?>" target="_blank"><?php if(trim($__Context->oDocument->getTitle())){;
echo $__Context->oDocument->getTitle();
}else{ ?><em><?php echo $__Context->lang->no_title_document ?></em><?php } ?></a></td>
						<td class="nowr"><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?>"><?php echo $__Context->oDocument->getNickName() ?></a></td>
						<td class="nowr"><?php echo $__Context->oDocument->get('readed_count') ?></td>
						<td class="nowr"><?php echo $__Context->oDocument->get('voted_count') ?>/<?php echo $__Context->oDocument->get('blamed_count') ?></td>
						<td class="nowr"><?php echo $__Context->oDocument->getRegdate("Y-m-d H:i") ?></td>
						<td class="nowr"><a href="<?php echo getUrl('search_target','ipaddress','search_keyword',$__Context->oDocument->get('ipaddress')) ?>"><?php echo $__Context->oDocument->get('ipaddress') ?></a></td>
						<td class="nowr"><?php echo $__Context->status_name_list[$__Context->oDocument->get('status')] ?></td>
						<td><input type="checkbox" name="cart" value="<?php echo $__Context->oDocument->document_srl ?>" /></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<div class="btnArea">
				<span class="btn"><a href="#listManager" class="modalAnchor" onclick="getDocumentList();"><?php echo $__Context->lang->document_manager ?>...</a></span>
			</div>
		</div>
	</form>
	<div class="modal" id="listManager">
		<form action="./" method="post" class="fg form" id="manageForm"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="document" />
		<input type="hidden" name="act" value="procDocumentManageCheckedDocument" />
		<input type="hidden" name="type" value="" />
		<?php if(!empty($__Context->search_target) && !empty($__Context->search_keyword)){ ?><input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList', 'is_secret', $__Context->is_secret, 'search_target', $__Context->search_target, 'search_keyword', $__Context->search_keyword) ?>" /><?php } ?>
			<h2 class="h2"><?php echo $__Context->lang->document_manager ?></h2>
			<div class="table even">
				<table width="100%" border="1" cellspacing="0" id="documentManageListTable">
					<caption><?php echo $__Context->lang->selected_document ?> <strong id="selectedDocumentCount"></strong></caption>
					<thead>
						<tr>
							<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
							<th scope="col" class="nowr"><?php echo $__Context->lang->writer ?></th>
							<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<p class="q"><label for="site"><?php echo $__Context->lang->selected_document_move ?></label></p>
			<div class="a">
				<input type="text" name="site_keyword" id="site" />
				<span class="desc"><a href="#suggestion" class="tgAnchor" onclick="getModuleList();"><?php echo $__Context->lang->find_site ?></a></span>
				<p>
					<select name="target_module" id="module_list" style="width:290px">
						<option><?php echo $__Context->lang->select_module ?></option>
					</select>
				</p>
				<p>
					<select name="module_srl" id="mid_list" style="width:290px">
						<option><?php echo $__Context->lang->select_module_id ?></option>
					</select>
				</p>
				<p>
					<select id="target_category" name="target_category" style="width:290px">
						<option><?php echo $__Context->lang->select_category ?></option>
					</select>
				</p>
			</div>
			<p class="q"><label for="message"><?php echo $__Context->lang->message_notice ?></label></p>
			<p>
				<textarea rows="8" cols="42" name="message_content" id="message" style="width:98%"></textarea>
			</p>
			<div class="btnArea">
				<span class="btn"><button type="submit" name="type" value="trash"><?php echo $__Context->lang->cmd_trash ?></button></span>
				<span class="btn"><button type="submit" name="type" value="delete"><?php echo $__Context->lang->cmd_delete ?></button></span>
				<span class="btn"><button type="submit" name="type" value="move"><?php echo $__Context->lang->cmd_move ?></button></span>
				<span class="btn"><button type="submit" name="type" value="copy"><?php echo $__Context->lang->cmd_copy ?></button></span>
			</div>
		</form>
	</div>
	<div class="search">
<form action="./" class="pagination"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
	<?php if($__Context->search_target){ ?><input type="hidden" name="search_target" value="<?php echo $__Context->search_target ?>" /><?php } ?>
	<a href="<?php echo getUrl('page', '') ?>" class="direction">&laquo; <?php echo $__Context->lang->first_page ?></a>
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
	<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="direction"><?php echo $__Context->lang->last_page ?> &raquo;</a>
	<?php if($__Context->isGoTo){ ?><span id="goTo" class="tgContent">
		<input name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
		<button type="submit">Go</button>
	</span><?php } ?>
</form>
		<form action="./" method="get" class="adminSearch" onsubmit="return checkSearch(this)"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<input type="hidden" name="error_return_url" value="" />
            <select name="search_target">
                <option value=""><?php echo $__Context->lang->search_target ?></option>
                <?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key => $__Context->val){ ?>
                <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
                <?php } ?>
			</select>
            <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
			<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" />
			<a href="#"><?php echo $__Context->lang->cmd_cancel ?></a>
		</form>
	</div>
