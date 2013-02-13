<?php if(!defined("__XE__"))exit;?><div class="sct well">
	<h2><?php echo $__Context->lang->favorite ?></h2>
	<ul class="nav nav-list">
		<?php if($__Context->favorite_list&&count($__Context->favorite_list))foreach($__Context->favorite_list as $__Context->favorite){ ?><li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', $__Context->favorite->admin_index_act) ?>"><?php echo $__Context->favorite->title ?></a>
			<form class="action" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="module" value="admin" />
				<input type="hidden" name="act" value="procAdminToggleFavorite" />
				<input type="hidden" name="site_srl" value="0" />
				<input type="hidden" name="module_name" value="<?php echo $__Context->favorite->module ?>" />
				<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
				<button type="submit" class="text" title="<?php echo $__Context->lang->cmd_delete ?>">&times;</button>
			</form>
		</li><?php } ?>
		<?php if(!is_array($__Context->favorite_list) || count($__Context->favorite_list) < 1){ ?><li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminContent') ?>"><?php echo $__Context->lang->no_data ?></a></li><?php } ?>
	</ul>
</div>