<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<span class="dummy"></span>
		<div id="content">
			<form method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
			<input type="hidden" name="act" value="dispInstallDBForm" />
				<ul class="form formDbSelect">
					<?php if(DB::getEnableList()&&count(DB::getEnableList()))foreach(DB::getEnableList() as $__Context->key => $__Context->val){ ?>
					<li>
						<input name="db_type" type="radio" value="<?php echo $__Context->val->db_type ?>" <?php if(!$__Context->val->enable){ ?>disabled="disabled"<?php } ?> id="db_type_<?php echo $__Context->val->db_type ?>" <?php if($__Context->val->db_type=="mysql"){ ?>checked="checked"<?php } ?> class="iRadio" id="cubrid" /> <label for="db_type_<?php echo $__Context->val->db_type ?>"><?php echo $__Context->val->db_type ?></label>
						<p><?php echo $__Context->lang->db_desc[$__Context->val->db_type] ?></p>
					</li>
					<?php } ?>
					<?php if(DB::getDisableList()&&count(DB::getDisableList()))foreach(DB::getDisableList() as $__Context->key => $__Context->val){ ?>
					<li>
						<input name="db_type" type="radio" value="<?php echo $__Context->val->db_type ?>" <?php if(!$__Context->val->enable){ ?>disabled="disabled"<?php } ?> id="db_type_<?php echo $__Context->val->db_type ?>" <?php if($__Context->val->db_type=="mysql"){ ?>checked="checked"<?php } ?> class="iRadio" id="cubrid" /> <label for="db_type_<?php echo $__Context->val->db_type ?>"><?php echo $__Context->val->db_type ?></label>
						<p><?php echo $__Context->lang->db_desc[$__Context->val->db_type] ?></p>
					</li>
					<?php } ?>
				</ul>
				<div class="ibtnArea">
					<div class="fLeft">
						<span class="ibtn icon"><span class="back"></span> <a href="<?php echo getUrl('', 'act', 'dispInstallCheckEnv') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
					</div>
					<div class="fRight">
						<span class="ibtn icon"><span class="check"></span> <input name="" type="submit" value="<?php echo $__Context->lang->cmd_next ?>" /></span>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
