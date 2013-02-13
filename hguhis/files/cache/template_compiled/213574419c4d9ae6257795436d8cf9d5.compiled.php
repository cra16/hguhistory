<?php if(!defined("__XE__"))exit;?>
<input type="hidden" name="category_srl" value="<?php echo $__Context->category_info->category_srl ?>" />
<input type="hidden" name="parent_srl" value="<?php echo $__Context->category_info->parent_srl ?>" />
<div class="layer" boxModelController" style="display:block">
	<button type="button" class="xButton layerClose" title="Close this layer." onclick="jQuery(this).closest('#category_info').hide();">X</button>
	<h4 class="xeAdmin h3"><?php echo $__Context->lang->category ?></h4>
	<div class="layerBody table">
		<table cellspacing="0" class="rowTable">
			<?php if($__Context->category_info->parent_category_title){ ?>
			<tr>
				<th scope="row"><?php echo $__Context->lang->parent_category_title ?></th>
				<td class="wide"><?php echo $__Context->category_info->parent_category_title ?></td>
			</tr>
			<?php } ?>
			<tr>
				<th scope="row"><?php echo $__Context->lang->category_title ?></th>
				<td>
					<input type="text" name="category_title" id="category_name" value="<?php echo $__Context->category_info->title ?>"  />
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','category_name') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php echo $__Context->lang->category_color ?></th>
				<td>
					<input type="text" name="category_color" value="<?php echo htmlspecialchars($__Context->category_info->color) ?>" class="color-indicator" />
					<p><?php echo $__Context->lang->about_category_color ?></p>
				</td>
			</tr>
			
			<tr>
				<th scope="row"><?php echo $__Context->lang->category_description ?></th>
				<td >
					<textarea name="category_description" id="category_description" rows="8" cols="42"><?php echo htmlspecialchars($__Context->category_info->description) ?></textarea>
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','category_description') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
					<p><?php echo $__Context->lang->about_category_description ?></p>				
				</td>
			</tr>
			
			<tr >
				<th scope="row2"><?php echo $__Context->lang->category_group_srls ?></th>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?>
					<div><input type="checkbox" name="group_srls[]" value="<?php echo $__Context->key ?>" id="group_<?php echo $__Context->key ?>" <?php if(is_array($__Context->category_info->group_srls)&&in_array($__Context->key, $__Context->category_info->group_srls)){ ?>checked="checked"<?php } ?> class="checkbox" /> <label for="group_<?php echo $__Context->key ?>"><?php echo $__Context->val->title ?></label></div>
					<?php } ?>
					<p><?php echo $__Context->lang->about_category_group_srls ?></p>
				</td>
			</tr>
			
			<tr>
				<th scope="row"><?php echo $__Context->lang->expand ?></th>
				<td>
					<input type="checkbox" name="expand" value="Y" <?php if($__Context->category_info->expand=="Y"){ ?>checked="checked"<?php } ?> class="checkbox" />
					<p><?php echo $__Context->lang->about_expand ?></p>
				</td>
			</tr>
			<tr>
	            <th scope="row" colspan="2" class="button">
						<span class="buttonAction actionBlue"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
				</th>
	        </tr>
		</table>
	</div>
</div>
<script type="text/javascript">
jQuery(function(){
    jQuery('input.color-indicator').xe_colorpicker();
});
</script>
