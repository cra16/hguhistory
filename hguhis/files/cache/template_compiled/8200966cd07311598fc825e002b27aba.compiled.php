<?php if(!defined("__XE__"))exit;
echo $__Context->page_content ?>
<?php if($__Context->grant->manager){ ?>
	<!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
    <div class="btnArea">
        <span class="btn"><button type="button" onclick="doRemoveWidgetCache(<?php echo $__Context->module_info->module_srl ?>); return false;"><?php echo $__Context->lang->cmd_remake_cache ?></button></span>
		<?php if($__Context->logged_info->is_admin=='Y'){ ?>
        <span class="btn"><a href="<?php echo getUrl('act','dispPageAdminInfo','module_srl',$__Context->module_info->module_srl) ?>"><?php echo $__Context->lang->cmd_setup ?>...</a></span>
        <?php } ?>
		<?php if($__Context->module_info->page_type != 'OUTSIDE'){ ?>
        <span class="btn"><a href="<?php echo getUrl('act','dispPageAdminContentModify','document_srl','') ?>"><?php echo $__Context->lang->cmd_page_modify ?>...</a></span>
        <?php } ?>
		<?php if($__Context->module_info->use_mobile =="Y" && $__Context->module_info->page_type != 'OUTSIDE'){ ?>
        <span class="btn"><a href="<?php echo getUrl('act','dispPageAdminMobileContent','module_srl',$__Context->module_info->module_srl) ?>">Mobile</a></span>
		<?php } ?>
    </div>
<?php } ?>
