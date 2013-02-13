<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','header.html') ?>
<div class="table even easyList dsTg">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','sub_tab.html') ?>
	<table width="100%" border="1" cellspacing="0">
		<caption>
				<span class="side"><button type="button" class="text"><span class="hide"><?php echo $__Context->lang->simple_view ?></span><span class="show"><?php echo $__Context->lang->detail_view ?></span></button></span>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="title"><?php echo $__Context->lang->layout_name ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->version ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->author ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->path ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->layout){ ?>
			<tr>
				<?php if($__Context->layout->title){ ?>
					<td class="title">
						<p><a href="<?php echo getUrl('act', 'dispLayoutAdminInstanceList', 'type', $__Context->type, 'layout', $__Context->layout->layout) ?>"><?php echo $__Context->layout->title ?></a></p>
						<p><?php echo $__Context->layout->description ?></p>
						<?php if($__Context->layout->need_update == 'Y'){ ?><p class="update">
							<?php echo $__Context->lang->msg_avail_easy_update ?> <a href="<?php echo $__Context->layout->update_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a>
						</p><?php } ?>
					</td>
					<td class="nowr"><?php echo $__Context->layout->version ?></td>
					<td class="nowr">
						<?php if($__Context->layout->author&&count($__Context->layout->author))foreach($__Context->layout->author as $__Context->author){ ?>
							<?php if($__Context->author->homepage){ ?><a href="<?php echo $__Context->author->homepage ?>" target="_blank"><?php echo $__Context->author->name ?></a><?php } ?>
							<?php if(!$__Context->author->homepage){;
echo $__Context->author->name;
} ?>
						<?php } ?>
					</td>
					<td class="nowr"><?php echo $__Context->layout->path ?></td>
					<td class="nowr"><?php if($__Context->layout->remove_url){ ?><a href="<?php echo $__Context->layout->remove_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></td>
				<?php } ?>
				<?php if(!$__Context->layout->title){ ?>
					<td class="title">
						<p><a href="<?php echo getUrl('act', 'dispLayoutAdminInstanceList', 'type', $__Context->type, 'layout', $__Context->layout->layout) ?>"><?php echo $__Context->layout->layout ?></a></p>
						<?php if($__Context->layout->need_update == 'Y'){ ?><p class="update">
							<?php echo $__Context->lang->msg_avail_easy_update ?> <a href="<?php echo $__Context->layout->update_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a>
						</p><?php } ?>
					</td>
					<td class="nowr">-</td>
					<td class="nowr">-</td>
					<td class="nowr"><?php echo $__Context->layout->path ?></td>
					<td class="nowr"><?php if($__Context->layout->remove_url){ ?><a href="<?php echo $__Context->layout->remove_url ?>&amp;return_url={urlencodegetRequestUriByServerEnviroment()}"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
