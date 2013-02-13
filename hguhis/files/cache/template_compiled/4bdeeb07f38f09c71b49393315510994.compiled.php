<?php if(!defined("__XE__"))exit;?><div class="cnb">
	<?php if($__Context->type == 'M'){ ?><a href="<?php echo getUrl('act', 'dispLayoutAdminInstalledList', 'type', 'P') ?>">PC(<?php echo $__Context->pcLayoutCount ?>)</a><?php } ?>
	<?php if($__Context->type != 'M'){ ?>PC(<?php echo $__Context->pcLayoutCount ?>)<?php } ?>
	|
	<?php if($__Context->type != 'M'){ ?><a href="<?php echo getUrl('act', 'dispLayoutAdminInstalledList', 'type', 'M') ?>">Mobile(<?php echo $__Context->mobileLayoutCount ?>)</a><?php } ?>
	<?php if($__Context->type == 'M'){ ?>Mobile(<?php echo $__Context->mobileLayoutCount ?>)<?php } ?>
</div>
<div class="cnb">
	<?php if($__Context->act != 'dispLayoutAdminAllInstanceList'){ ?><a href="<?php echo getUrl('act', 'dispLayoutAdminAllInstanceList', 'layout_srl', '') ?>"><?php echo $__Context->lang->instance_layout ?></a><?php } ?>
	<?php if($__Context->act == 'dispLayoutAdminAllInstanceList'){;
echo $__Context->lang->instance_layout;
} ?>
	|
	<?php if($__Context->act != 'dispLayoutAdminInstalledList'){ ?><a href="<?php echo getUrl('act', 'dispLayoutAdminInstalledList') ?>"><?php echo $__Context->lang->installed_layout ?></a><?php } ?>
	<?php if($__Context->act == 'dispLayoutAdminInstalledList'){;
echo $__Context->lang->installed_layout;
} ?>
</div>
