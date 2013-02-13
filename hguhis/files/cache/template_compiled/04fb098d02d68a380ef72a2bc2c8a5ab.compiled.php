<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/rss/ruleset/insertRssModuleConfig.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertRssModuleConfig" />
	<input type="hidden" name="module" value="rss" />
	<input type="hidden" name="act" value="procRssAdminInsertModuleConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->rss_config->module_srl?$__Context->rss_config->module_srl:$__Context->module_srls ?>" />
	
    <h3 class="h3"><?php echo $__Context->lang->open_rss ?></h3>
    <p><?php echo $__Context->lang->about_open_rss ?></p>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>
				<th scope="row"><label for="open_rss"><?php echo $__Context->lang->open_rss ?></label></th>
				<td class="text">
					<select name="open_rss" id="open_rss">
						<?php if($__Context->lang->open_rss_types&&count($__Context->lang->open_rss_types))foreach($__Context->lang->open_rss_types as $__Context->key=>$__Context->val){ ?>
						<option value="<?php echo $__Context->key ?>" <?php if(!$__Context->rss_config->open_rss && $__Context->key=='N'){ ?>selected="selected"<?php }elseif($__Context->rss_config->open_rss==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="open_total_feed"><?php echo $__Context->lang->open_feed_to_total ?></label></th>
				<td class="text">
					<select name="open_total_feed" id="open_total_feed">
						<option value="N" <?php if(!$__Context->rss_config->open_total_feed || $__Context->rss_config->open_total_feed == 'N'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
						<option value="T_N" <?php if($__Context->rss_config->open_total_feed == 'T_N'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="feed_description"><?php echo $__Context->lang->description ?></label></th>
				<td class="text">
					<textarea name="feed_description" id="feed_description" rows="8" cols="42"><?php echo $__Context->rss_config->feed_description ?></textarea>
					<p class="desc"><?php echo $__Context->lang->about_feed_description ?></p>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="feed_copyright"><?php echo $__Context->lang->feed_copyright ?></label></th>
				<td class="text">
					<input type="text"  name="feed_copyright" id="feed_copyright" value="<?php echo htmlspecialchars($__Context->rss_config->feed_copyright) ?>" />
					<p class="desc"><?php echo $__Context->lang->about_feed_copyright ?></p>
				</td>
			</tr>
		</table>
	</div>
    <div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/></span>
	</div>
</form>
