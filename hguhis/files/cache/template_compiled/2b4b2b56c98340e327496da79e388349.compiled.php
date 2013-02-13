<?php if(!defined("__XE__"))exit;?>	<li>
		<input type="hidden" name="parent_key[]" value="<?php echo $__Context->item['parent_srl'] ?>" class="_parent_key" />
		<input type="hidden" name="item_key[]" value="<?php echo $__Context->item['node_srl'] ?>" class="_item_key" />
		<input type="hidden" name="module_srl[]" value="<?php echo $__Context->item['module_srl'] ?>" class="_module_srl_key" />
		<input type="hidden" name="item_layout_key[]" value="<?php echo $__Context->item['node_srl'] ?>" class="_item_layout_key" />
		<?php if($__Context->item['href']){ ?><a href="<?php echo $__Context->item['href'] ?>" class="ms" target="_blank"><?php echo $__Context->item['text'] ?></a><?php }else{;
echo $__Context->item['text'];
} ?>
		<span class="side">
			<?php if($__Context->item['layout_srl']){ ?><a href="<?php echo getUrl('act', 'dispLayoutAdminModify', 'layout_srl', $__Context->item['layout_srl']) ?>"><?php echo $__Context->lang->cmd_layout_management ?></a> | <?php } ?>
			<?php if($__Context->item['setup_index_act']){ ?><a href="<?php echo getUrl('', 'module', 'admin', 'act', $__Context->item['setup_index_act'], 'module_srl', $__Context->item['module_srl']) ?>"><?php echo $__Context->lang->cmd_module_manangement ?></a> | <?php } ?>
			<a href="#editMenu" class="modalAnchor _edit"><?php echo $__Context->lang->cmd_menu_management ?></a> | 
			<a href="#delete" class="_delete"><?php echo $__Context->lang->cmd_delete ?></a> | 
			<a href="#editMenu" class="modalAnchor _add _child"><?php echo $__Context->lang->add ?></a>
		</span>
		<?php if(count($__Context->item['list']>0)){ ?><ul>
		<?php if($__Context->item['list']&&count($__Context->item['list']))foreach($__Context->item['list'] as $__Context->idx=>$__Context->val){ ?>
		<?php $__Context->item = $__Context->val ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/menu/tpl','sitemap.item.html') ?>
		<?php } ?>
		</ul><?php } ?>
	</li>
