<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','header.html') ?>
<div class="table even easyList dsTg">
	<table width="100%" border="1" cellspacing="0">
		<caption>
		All(<?php echo count($__Context->module_list) ?>)
		<span class="side"><button type="button" class="text"><span class="hide"><?php echo $__Context->lang->simple_view ?></span><span class="show"><?php echo $__Context->lang->detail_view ?></span></button></span>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="nowr"><?php echo $__Context->lang->favorite ?></th>
				<th scope="col" class="title"><?php echo $__Context->lang->module_name ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->version ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->author ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->path ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key => $__Context->val){ ?>
			<tr>
				<td class="nowr">
					<?php if(in_array($__Context->val->module,$__Context->favoriteModuleList)){ ?>
					<button type="button" class="fvOn" onclick="doToggleFavoriteModule(this, '<?php echo $__Context->val->module ?>'); return false;"><?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->on ?>)</button>
					<?php }else{ ?>
					<button type="button" class="fvOff" onclick="doToggleFavoriteModule(this, '<?php echo $__Context->val->module ?>'); return false;"><?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->off ?>)</button>
					<?php } ?>
				</td>
				<td class="title">
					<p>
						<?php if($__Context->val->admin_index_act){ ?>	
						<a href="<?php echo getUrl('','module','admin','act',$__Context->val->admin_index_act) ?>"><?php echo $__Context->val->title ?></a>
						<?php }else{ ?>
						<strong><?php echo $__Context->val->title ?></strong>
						<?php } ?>
					</p>
					<p><?php echo $__Context->val->description ?></p>
					<?php if($__Context->val->need_install){ ?><p class="update"><?php echo $__Context->lang->msg_avail_install ?> <button class="text" type="button" onclick="doInstallModule('<?php echo $__Context->val->module ?>')"><?php echo $__Context->lang->msg_do_you_like_install ?></button></p><?php } ?>
					<?php if($__Context->val->need_update){ ?><p class="update"><?php echo $__Context->lang->msg_avail_update ?> <button class="text" type="button" onclick="doUpdateModule('<?php echo $__Context->val->module ?>')"><?php echo $__Context->lang->msg_do_you_like_update ?></button></p><?php } ?>
					<?php if($__Context->val->need_autoinstall_update == 'Y'){ ?><p class="update"><?php echo $__Context->lang->msg_avail_easy_update ?><a href="<?php echo $__Context->val->update_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a></p><?php } ?>
				</td>
				<td class="nowr"><?php echo $__Context->val->version ?></td>
				<td class="nowr">
					<?php if($__Context->val->author&&count($__Context->val->author))foreach($__Context->val->author as $__Context->author){ ?>
						<?php if($__Context->author->homepage){ ?>
							<a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;" target="_blank"><?php echo $__Context->author->name ?></a>
						<?php }else{ ?>
							<?php echo $__Context->author->name ?>
						<?php } ?>
					<?php } ?>
				</td>
				<td class="nowr"><?php echo $__Context->val->path ?></td>
				<td class="nowr">
					<?php if($__Context->val->delete_url){ ?>
					<a href="<?php echo $__Context->val->delete_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->cmd_delete ?></a>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
