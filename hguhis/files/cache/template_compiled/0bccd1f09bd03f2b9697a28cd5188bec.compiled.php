<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<span class="dummy"></span>
		<div id="content">
			<div class="agreement">
				<div class="desc">
					<ul style="list-style:none">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li style="position:relative; margin:0 0 4px 0">
							<?php if($__Context->l==$__Context->key){ ?><i style="position:absolute;top:0;left:-16px;font-style:normal;font-weight:bold;color:red" title="Selected Language">&#10004;</i><?php } ?>
							<?php if($__Context->l!=$__Context->key){ ?><a href="<?php echo getUrl('l', $__Context->key) ?>"><?php echo $__Context->val ?></a><?php } ?>
							<?php if($__Context->l==$__Context->key){ ?><strong><?php echo $__Context->val ?></strong><?php } ?>
						</li><?php } ?>
					</ul>
				</div>
				<div class="ibtnArea">
					<div class="fRight">
						<span class="ibtn icon"><span class="check"></span> <a href="<?php echo getUrl('', 'act', 'dispInstallCheckEnv') ?>" ><?php echo $__Context->lang->cmd_next ?></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
