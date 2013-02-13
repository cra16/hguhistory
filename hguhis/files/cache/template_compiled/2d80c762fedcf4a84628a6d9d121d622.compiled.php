<?php if(!defined("__XE__"))exit;?><div class="lnb">
	<h2 class="h2"><?php echo $__Context->gnbUrlList[$__Context->parentSrl]['text'] ?></h2>
	<ul>
		<?php if(count($__Context->gnbUrlList[$__Context->parentSrl]['list']) > 0){ ?>
		<?php if($__Context->gnbUrlList[$__Context->parentSrl]['list']&&count($__Context->gnbUrlList[$__Context->parentSrl]['list']))foreach($__Context->gnbUrlList[$__Context->parentSrl]['list'] AS $__Context->key=>$__Context->value){ ?>
		<li <?php if($__Context->value['text'] == $__Context->subMenuTitle){ ?>class="active"<?php } ?>><a href="<?php echo htmlspecialchars(html_entity_decode($__Context->value['href'])) ?>"><?php echo $__Context->value['text'] ?></a></li>
		<?php } ?>
		<?php } ?>
	</ul>
</div>