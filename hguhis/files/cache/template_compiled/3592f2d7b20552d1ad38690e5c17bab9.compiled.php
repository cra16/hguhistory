<?php if(!defined("__XE__"))exit;?><!-- TRACKBACK -->
<div class="feedback" id="trackback">
	<div class="fbHeader">
		<h2><?php echo $__Context->lang->trackback ?> <em><?php echo $__Context->oDocument->getTrackbackCount() ?></em></h2>
		<p class="trackbackURL"><a href="<?php echo $__Context->oDocument->getTrackbackUrl() ?>" onclick="return false;"><?php echo $__Context->oDocument->getTrackbackUrl() ?></a></p>
	</div>
	<?php if($__Context->oDocument->getTrackbackCount()){ ?><ul class="fbList">
		<?php if($__Context->oDocument->getTrackbacks()&&count($__Context->oDocument->getTrackbacks()))foreach($__Context->oDocument->getTrackbacks() as $__Context->key=>$__Context->val){ ?><li class="fbItem" id="trackback_<?php echo $__Context->val->trackback_srl ?>">
			<div class="fbMeta">
				<h3 class="author"><a href="<?php echo $__Context->val->url ?>" title="<?php echo htmlspecialchars($__Context->val->blog_name) ?>"><?php echo htmlspecialchars($__Context->val->blog_name) ?></a></h3>
				<p class="time"><?php echo zdate($__Context->val->regdate, "Y.m.d H:i") ?></p>
			</div>
			<p class="xe_content"><strong><?php echo htmlspecialchars($__Context->val->title) ?></strong> <?php echo $__Context->val->excerpt ?></p>
			<?php if($__Context->grant->manager){ ?><p class="action"><a href="<?php echo getUrl('act','dispBoardDeleteTrackback','trackback_srl',$__Context->val->trackback_srl) ?>" class="delete"><?php echo $__Context->lang->cmd_delete ?></a></p><?php } ?>
		</li><?php } ?>
	</ul><?php } ?>
</div>
<!-- /TRACKBACK -->
