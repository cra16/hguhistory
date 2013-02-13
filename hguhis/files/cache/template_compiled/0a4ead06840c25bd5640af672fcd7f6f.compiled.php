<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
    jQuery( function() { jQuery('.grant_default').change( function(event) { doShowGrantZone(); } ); doShowGrantZone() } );
</script>
<?php Context::addJsFile("modules/module/ruleset/insertModulesGrant.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" id="manageSelectedModuleGrant"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModulesGrant" />
	<input type="hidden" name="module" value="module" />
	<input type="hidden" name="act" value="procModuleAdminModuleGrantSetup" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="module_srls" value="<?php echo $__Context->module_srls ?>" />
    <h3 class="h3"><?php echo $__Context->lang->permission_setting ?></h3>
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
				<tr class="row<?php echo $__Context->cycle_idx ?>">
					<th scope="row"><?php echo $__Context->grant_item->title ?></th>
					<td >
						<select name="<?php echo $__Context->grant_name ?>_default" class="grant_default">
							<?php if($__Context->grant_item->default == 'guest'){ ?><option value="0"><?php echo $__Context->lang->grant_to_all ?></option><?php } ?>
							<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-1"><?php echo $__Context->lang->grant_to_login_user ?></option><?php } ?>
							<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-2" <?php if($__Context->default_grant[$__Context->grant_name]=='site'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_site_user ?></option><?php } ?>
							<option value=""><?php echo $__Context->lang->grant_to_group ?></option>
						</select>
						<div id="zone_<?php echo $__Context->grant_name ?>" style="display:none">
							<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl => $__Context->group_item){ ?>
							<input type="checkbox" class="checkbox" name="<?php echo $__Context->grant_name ?>[]" value="<?php echo $__Context->group_item->group_srl ?>" id="grant_<?php echo $__Context->grant_name ?>_<?php echo $__Context->group_srl ?>" />
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
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
	</div>
</form>
