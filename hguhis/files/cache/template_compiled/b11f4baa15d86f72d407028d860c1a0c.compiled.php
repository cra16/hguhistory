<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/module/tpl/filter','insert_grant.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
    jQuery( function() { jQuery('.grant_default').change( function(event) { doShowGrantZone(); } ); doShowGrantZone() } );
</script>
<form action="./" method="post" onsubmit="return procFilter(this, insert_grant)" id="fo_obj" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="admin_member" value="<?php if($__Context->admin_member&&count($__Context->admin_member))foreach($__Context->admin_member as $__Context->key => $__Context->val){;
if($__Context->member_config->identifier == 'email_address'){;
echo $__Context->val->email_address ?>,<?php }else{;
echo $__Context->val->user_id ?>,<?php };
} ?>" />
	
	<h2 class="h2"><?php echo $__Context->lang->module_admin ?></h2>
	<p><?php echo $__Context->lang->about_admin_id ?></p>
	<ul>
		<li>
			<p class="q">
				<?php if($__Context->member_config->identifier == 'email_address'){ ?>
					<?php echo $__Context->lang->admin_email_address ?>
				<?php }else{ ?>
					<?php echo $__Context->lang->admin_id ?>
				<?php } ?>
			</p>
			<p class="a">
				<select name="_admin_member" multiple="multiple" size="<?php echo count($__Context->admin_member)?count($__Context->admin_member):1 ?>" style="width:290px">
					<?php if($__Context->admin_member&&count($__Context->admin_member))foreach($__Context->admin_member as $__Context->key => $__Context->val){ ?>
					<option value="<?php if($__Context->member_config->identifier=='email_address'){;
echo $__Context->val->email_address;
}else{;
echo $__Context->val->user_id;
} ?>"><?php echo $__Context->val->nick_name ?> (<?php if($__Context->member_config->identifier=='email_address'){;
echo $__Context->val->email_address;
}else{;
echo $__Context->val->user_id;
} ?>)</option>
					<?php } ?>
				</select>
				<br />
				<input type="text" name="admin_id" />
				<span class="btn"><button type="button" onclick="doInsertAdmin()"><?php echo $__Context->lang->cmd_insert ?></button></span>
				<span class="btn"><button type="button" onclick="doDeleteAdmin()"><?php echo $__Context->lang->cmd_delete ?></button></span>
			</p>
		</li>
	</ul>
	<h2 class="h2"><?php echo $__Context->lang->permission_setting ?></h2>
	<p><?php echo $__Context->lang->about_grant_deatil ?></p>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th scope="col"><?php echo $__Context->lang->grant ?></th>
					<th scope="col" colspan="3"><?php echo $__Context->lang->target ?></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->grant_list&&count($__Context->grant_list))foreach($__Context->grant_list as $__Context->grant_name => $__Context->grant_item){ ?>
				<tr>
					<th scope="row"><?php echo $__Context->grant_item->title ?></th>
					<td >
						<select name="<?php echo $__Context->grant_name ?>_default" class="grant_default">
							<?php if($__Context->grant_item->default == 'guest'){ ?><option value="0" <?php if($__Context->default_grant[$__Context->grant_name]=='all'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_all ?></option><?php } ?>
							<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-1" <?php if($__Context->default_grant[$__Context->grant_name]=='member'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_login_user ?></option><?php } ?>
							<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-2" <?php if($__Context->default_grant[$__Context->grant_name]=='site'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_site_user ?></option><?php } ?>
							<option value="" <?php if($__Context->default_grant[$__Context->grant_name]=='group'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_group ?></option>
						</select>
						<div id="zone_<?php echo $__Context->grant_name ?>" style="display:none">
							<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl => $__Context->group_item){ ?>
							<input type="checkbox" class="checkbox" name="<?php echo $__Context->grant_name ?>" value="<?php echo $__Context->group_item->group_srl ?>" id="grant_<?php echo $__Context->grant_name ?>_<?php echo $__Context->group_srl ?>" <?php if(is_array($__Context->selected_group[$__Context->grant_name])&&in_array($__Context->group_srl,$__Context->selected_group[$__Context->grant_name])){ ?>checked="checked"<?php } ?>/>
							<label for="grant_<?php echo $__Context->grant_name ?>_<?php echo $__Context->group_srl ?>"><?php echo $__Context->group_item->title ?></label>
							<?php } ?>
						</div>
						
						</td>
					</tr>
				<?php } ?>
				</tbody>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
