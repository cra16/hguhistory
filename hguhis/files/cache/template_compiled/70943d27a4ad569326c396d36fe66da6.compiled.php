<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
	<span class="dummy"></span>
	<div id="content">
		<div class="table">
			<table border="1" cellspacing="0">
				<tbody>
					<?php if($__Context->checklist&&count($__Context->checklist))foreach($__Context->checklist as $__Context->key => $__Context->val){ ?>
					<tr>
						<th scope="row"><?php echo $__Context->lang->install_checklist_title[$__Context->key];
if($__Context->key == 'php_version'){ ?> (Ver. <?php echo $__Context->phpversion ?>)<?php } ?></th>
						<td><?php if($__Context->val){;
echo $__Context->lang->enable;
}else{ ?><strong><?php echo $__Context->lang->disable ?></strong><br /><?php echo $__Context->lang->install_checklist_desc[$__Context->key];
} ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
		<div class="ibtnArea">
			<div class="fLeft">
				<span class="ibtn icon"><span class="back"></span> <a href="<?php echo getUrl('') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
			</div>
			<div class="fRight">
				<span class="ibtn icon"><span class="check"></span><?php if($__Context->install_enable){ ?><a href="<?php echo getUrl('','act','dispInstallSelectDB') ?>"><?php echo $__Context->lang->cmd_install_next ?></a><?php }else{ ?><a href="<?php echo getUrl('','act',$__Context->act) ?>"><?php echo $__Context->lang->cmd_install_fix_checklist ?></a><?php } ?></span>
			</div>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
