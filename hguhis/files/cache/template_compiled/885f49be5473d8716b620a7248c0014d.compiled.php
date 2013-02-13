<?php if(!defined("__XE__"))exit;?><style type="text/css">
	#faceoff_migration_info img { border: 1px solid #ccc; padding: 5px; }
</style>
<h1 class="h1"><?php echo $__Context->lang->installed_layout ?></h1>
<?php if($__Context->layout == 'faceoff'){ ?><div class="message error">
	<p><?php echo $__Context->lang->faceoff_migration[0] ?></p>
	<p><a href="#faceoff_migration_info" class="modalAnchor"><?php echo $__Context->lang->faceoff_migration[1] ?></a></p>
</div><?php } ?>
<?php if($__Context->layout == 'faceoff'){ ?><div id="faceoff_migration_info" class="modal">
	<div class="fg">
		<ol>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[2] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/01.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/01_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[3] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/02.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/02_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[4] ?></p>
				<img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/03.png" alt="" />
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[5] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/04.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/04_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[6] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/05.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/git/hguhistory/hguhis/modules/layout/tpl/faceoff_migration/05_en.png" alt="" /><?php } ?>
			</li>
		</ol>
	</div>
</div><?php } ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
