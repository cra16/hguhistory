<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/tpl/js/board_admin.js--><?php $__tmp=array('modules/board/tpl/js/board_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<h1 class="h1"><?php echo $__Context->lang->board_management ?></h1>
<?php if($__Context->module_info){ ?>
	<?php if($__Context->module_info->mid){ ?>
		<h2 class="h2">
			<?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?>
			|
			<a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"><?php echo $__Context->lang->view ?></a>
		</h2>
	<?php } ?>
	<div class="cnb">
		<ul>
			<?php if($__Context->module=='admin'){ ?><li<?php if($__Context->act=='dispBoardAdminContent'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminContent','module_srl','', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_board_list ?></a></li><?php } ?>
			<?php if($__Context->module!='admin'){ ?><li><a href="<?php echo getUrl('act','', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_back ?></a></li><?php } ?>
			<li<?php if($__Context->act=='dispBoardAdminBoardInfo'||$__Context->act=='dispBoardAdminInsertBoard'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminBoardInfo', 'selected_var_idx', '', 'type', '') ?>"><?php if($__Context->module_srl){;
echo $__Context->lang->cmd_view_info;
}else{;
echo $__Context->lang->cmd_create_board;
} ?></a></li>
			<?php if($__Context->module_srl){ ?>
				<li<?php if($__Context->act=='dispBoardAdminCategoryInfo'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminCategoryInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_category ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminExtraVars'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminExtraVars', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->extra_vars ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminListSetup'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminListSetup', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_list_setting ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminGrantInfo'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminGrantInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_grant ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminBoardAdditionSetup'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminBoardAdditionSetup', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminSkinInfo'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li>
				<li<?php if($__Context->act=='dispBoardAdminMobileSkinInfo'){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispBoardAdminMobileSkinInfo', 'selected_var_idx', '', 'type', '') ?>"><?php echo $__Context->lang->cmd_manage_mobile_skin ?></a></li>
			<?php } ?>
		</ul>
	</div>
<?php } ?>
