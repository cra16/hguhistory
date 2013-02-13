<?php if(!defined("__XE__"))exit;
if($__Context->use_multilang_textarea){ ?>
	<style type="text/css">
		#langEditTextarea textarea { width: 258px; }
	</style>
	<div id="langEditTextarea" class="langEdit tgContent">
		<ul class="langList"></ul>
		<div class="langInput form">
			<h2><?php echo $__Context->lang->multilingual ?> <strong><?php echo $__Context->lang->cmd_modify ?>...</strong> | <a href="#langEdit"><?php echo $__Context->lang->cmd_insert ?></a></h2>
			<ul>
				<?php 
					/* move current language to the top */
					$__Context->a = array($__Context->lang_type=>$__Context->lang_supported[$__Context->lang_type]);
					unset($__Context->lang_supported[$__Context->lang_type]);
					$__Context->lang_supported = array_merge($__Context->a, $__Context->lang_supported);
				 ?>
				<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->code=>$__Context->name){ ?><li class="<?php echo $__Context->code ?>"><label for="<?php echo $__Context->code ?>_var1"><?php echo $__Context->name ?></label> <textarea id="<?php echo $__Context->code ?>_var1" rows="8" cols="42"></textarea></li><?php } ?>
			</ul>
			<div class="action">
				<div class="btnArea">
					<span class="btn small"><input type="submit" value="<?php echo $__Context->lang->use ?>|<?php echo $__Context->lang->use_after_save ?>" /></span>
				</div>
				<p><a href="<?php echo getUrl('act','dispModuleAdminLangcode') ?>"><?php echo $__Context->lang->multilingual_manager ?></a></p>
			</div>
		</div>
	</div>
<?php } ?>
