<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/member_admin_list.js--><?php $__tmp=array('modules/member/tpl/js/member_admin_list.js','body','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
	xe.lang.msg_select_user = '<?php echo $__Context->lang->msg_select_user ?>';
	xe.lang.msg_delete_user = '<?php echo $__Context->lang->msg_delete_user ?>';
</script>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="" class="form" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<h1 class="h1"><?php echo $__Context->lang->user_list ?></h1>
	<div class="table even">
		<div class="cnb">
			<a href="<?php echo getUrl('filter_type', '', 'page', '') ?>"<?php if($__Context->filter_type==''){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cmd_show_all_member ?></a>
			|
			<a href="<?php echo getUrl('filter_type', 'super_admin', 'page', '') ?>"<?php if($__Context->filter_type==super_admin){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cmd_show_super_admin_member ?></a>
			|
			<a href="<?php echo getUrl('filter_type', 'enable', 'page', '') ?>"<?php if($__Context->filter_type==enable){ ?> class="active"<?php } ?>><?php echo $__Context->lang->approval ?></a>
			|
			<a href="<?php echo getUrl('filter_type', 'disable', 'page', '') ?>"<?php if($__Context->filter_type==disable){ ?> class="active"<?php } ?>><?php echo $__Context->lang->denied ?></a>
		</div>
		<table width="100%" border="1" cellspacing="0" class="_memberList">
			<caption>
				<?php echo $__Context->filter_type_title ?>(<?php echo $__Context->total_count ?>)
				<span class="side">
					<span class="btn"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert') ?>"><?php echo $__Context->lang->cmd_make ?></a></span>
					<span class="btn"><a href="#listManager" class="modalAnchor _member"><?php echo $__Context->lang->cmd_selected_user_manage ?>...</a></span>
				</span>
			</caption>
			<thead>
				<tr>
					<th scope="col" class="nowr"><?php echo $__Context->lang->email ?></th>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><th scope="col" class="nowr"><?php echo $__Context->title ?></th><?php } ?>
					<th scope="col" class="nowr"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'regdate', 'sort_order', ($__Context->sort_order == 'asc') ? 'desc' : 'asc') ?>"><?php echo $__Context->lang->signup_date;
if($__Context->sort_index == 'regdate'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
					<th scope="col" class="nowr"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'last_login', 'sort_order',  ($__Context->sort_order == 'asc') ? 'desc' : 'asc') ?>"><?php echo $__Context->lang->last_login;
if($__Context->sort_index == 'last_login'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
					<th scope="col"><?php echo $__Context->lang->member_group ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_view ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_modify ?>...</th>
					<th scope="col">
						<input type="checkbox" title="Check All" data-name="user" />
					</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th scope="col" class="nowr"><?php echo $__Context->lang->email ?></th>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><th scope="col" class="nowr"><?php echo $__Context->title ?></th><?php } ?>
					<th scope="col" class="nowr"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'regdate', 'sort_order', ($__Context->sort_order == 'asc') ? 'desc' : 'asc') ?>"><?php echo $__Context->lang->signup_date;
if($__Context->sort_index == 'regdate'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
					<th scope="col" class="nowr"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'last_login', 'sort_order',  ($__Context->sort_order == 'asc') ? 'desc' : 'asc') ?>"><?php echo $__Context->lang->last_login;
if($__Context->sort_index == 'last_login'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
					<th scope="col"><?php echo $__Context->lang->member_group ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->status ?></th>
					<th scope="col class="nowr""><?php echo $__Context->lang->cmd_view ?></th>
					<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_modify ?>...</th>
					<th scope="col">
						<input type="checkbox" title="Check All" data-name="user" />
					</th>
				</tr>
			</tfoot>
			<tbody>
				<?php if($__Context->member_list&&count($__Context->member_list))foreach($__Context->member_list as $__Context->no=>$__Context->member_info){ ?><tr>
<?php $__Context->member_info = get_object_vars($__Context->member_info) ?>
					<td class="nowr">
						<a href="#popup_menu_area" class="cMenu member_<?php echo $__Context->member_info['member_srl'] ?>">Info</a>
						<span class="masked"><?php echo getEncodeEmailAddress($__Context->member_info['email_address']) ?></span>
					</td>
					<?php  $__Context->member_info['group_list'] = implode(', ', $__Context->member_info['group_list']) ?>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><td class="nowr"><?php echo $__Context->member_info[$__Context->name] ?></td><?php } ?>
					<td class="nowr"><?php echo zdate($__Context->member_info['regdate'], 'Y-m-d') ?></td>
					<td class="nowr"><?php echo zdate($__Context->member_info['last_login'], 'Y-m-d') ?></td>
					<td><?php echo $__Context->member_info['group_list'] ?>&nbsp;</td>
					<?php  $__Context->lang_denied = ($__Context->member_info['denied'] == 'N')?$__Context->lang->approval:$__Context->lang->denied ?>
					<td class="nowr"><?php echo $__Context->lang_denied ?></td>
					<td class="nowr">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInfo', 'member_srl', $__Context->member_info['member_srl']) ?>"><?php echo $__Context->lang->cmd_view ?></a>
					</td>
					<td class="nowr"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert', 'member_srl', $__Context->member_info['member_srl']) ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></td>
					<?php $__Context->used_values = '' ?>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?>
						<?php $__Context->used_values .= "\t".$__Context->member_info[$__Context->name] ?>
					<?php } ?>
					<td><input type="checkbox" name="user" value="<?php echo $__Context->member_info['member_srl']."\t".$__Context->member_info['email_address'].$__Context->used_values."\t".$__Context->member_info['group_list']."\t".$__Context->lang_denied ?>"<?php if($__Context->member_info['is_admin'] == 'Y'){ ?> disabled="disabled"<?php } ?>/></td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>
	<div class="btnArea">
		<span class="side">
			<span class="btn"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert') ?>"><?php echo $__Context->lang->cmd_make ?></a></span>
			<span class="btn"><a href="#listManager" class="modalAnchor _member"><?php echo $__Context->lang->cmd_selected_user_manage ?>...</a></span>
		</span>
	</div>
</form>
<div class="modal" id="listManager">
	<?php Context::addJsFile("modules/member/ruleset/updateSeletecdMemberInfo.xml", false, "", 0, "head", true, "") ?><form action="./"  class="fg form" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="updateSeletecdMemberInfo" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminSelectedMemberManage" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', $__Context->act) ?>" />
		<h2 class="h2"><?php echo $__Context->lang->cmd_selected_user_manage ?></h2>
		<div class="table even">
			<table width="100%" border="1" cellspacing="0">
				<thead>
					<tr>
						<th scope="col"><?php echo $__Context->lang->email_address ?></th>
						<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><th scope="col"><?php echo $__Context->title ?></th><?php } ?>
						<th scope="col" class="text"><?php echo $__Context->lang->member_group ?></th>
						<th scope="col"><?php echo $__Context->lang->status ?></th>
					</tr>
				</thead>
				<tbody id="popupBody">
				</tbody>
			</table>
		</div>
		<p class="q"><?php echo $__Context->lang->status ?></p>
		<p>
			<input type="radio" name="denied" id="approval" value="N" > <label for="approval"><?php echo $__Context->lang->approval ?></label>
			<input type="radio" name="denied" id="deny" value="Y" > <label for="deny"><?php echo $__Context->lang->denied ?></label>
		</p>
		<p class="q"><?php echo $__Context->lang->member_group ?></p>
		<p>
			<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?>
			<input type="checkbox" name="groups[]" id="g<?php echo $__Context->val->group_srl ?>" value="<?php echo $__Context->val->group_srl ?>"/> <label for="g<?php echo $__Context->val->group_srl ?>"><?php echo $__Context->val->title ?></label>
			<?php } ?>
		</p>
		<p class="q"><label for="message"><?php echo $__Context->lang->about_send_message ?></label></p>
		<p>
			<textarea rows="8" cols="42" id="message" style="width:98%" name="message" ></textarea>
		</p>
		<div class="btnArea">
			<span class="btn"><button type="submit" name="type" value="modify"><?php echo $__Context->lang->cmd_modify ?>...</button></span>
			<span class="btn"><button type="submit" name="type" value="delete"><?php echo $__Context->lang->cmd_delete ?></button></span>
		</div>
	</form>
</div>
<div class="search">
	<form action="" class="pagination" method="post"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="error_return_url" value="" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<?php if($__Context->order_target){ ?><input type="hidden" name="order_target" value="<?php echo $__Context->order_target ?>" /><?php } ?>
		<?php if($__Context->order_type){ ?><input type="hidden" name="order_type" value="<?php echo $__Context->order_type ?>" /><?php } ?>
		<?php if($__Context->category_srl){ ?><input type="hidden" name="category_srl" value="<?php echo $__Context->category_srl ?>" /><?php } ?>
		<?php if($__Context->childrenList){ ?><input type="hidden" name="childrenList" value="<?php echo $__Context->childrenList ?>" /><?php } ?>
		<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
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
	<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
        <select name="selected_group_srl">
            <option value="0">그룹 전체</option>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->group_srl ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
            <?php } ?>
        </select>
		<select name="search_target">
			<option value=""><?php echo $__Context->lang->search_target ?></option>
			<?php $__Context->lang->search_target_list = array_merge($__Context->lang->search_target_list, $__Context->usedIdentifiers) ?>
			<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
		<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" />
		<a href="<?php echo getUrl('search_target', '', 'search_keyword', '') ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
	</form>
</div>
<script type="text/javascript">
jQuery(function($){
	var clickedBTN = '';
	$('.btnArea button').click(function(){
		clickedBTN = $(this).val();
	});
	var CheckConfirm = xe.createPlugin('checkConfirm', {
		API_BEFORE_VALIDATE : function(sender, params){
			if (clickedBTN == 'delete') return confirm(xe.lang.msg_delete_user);
		}
	});
	var checkConfirm = new CheckConfirm();
	var v = xe.getApp('Validator')[0];
	v.registerPlugin(checkConfirm);
});
</script>
