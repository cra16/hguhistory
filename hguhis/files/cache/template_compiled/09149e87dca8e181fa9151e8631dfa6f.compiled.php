<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','header.html') ?>
<!--#Meta:modules/layout/tpl/js/adminList.js--><?php $__tmp=array('modules/layout/tpl/js/adminList.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<div class="table even easyList">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','sub_tab.html') ?>
	<table width="100%" border="1" cellspacing="0">
		<caption>
				<span class="side"><button type="button" class="text"><span class="hide"><?php echo $__Context->lang->simple_view ?></span><span class="show"><?php echo $__Context->lang->detail_view ?></span></button></span>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="nowr"><?php echo $__Context->lang->number ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->layout_name ?></th>
				<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->regdate ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_layout_management ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_layout_edit ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_copy ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
<?php $__Context->count=1 ?>
			<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->layout){ ?>
<?php $__Context->layout_name = $__Context->layout['title'] ?>
<?php unset($__Context->layout['title']) ?>
			<?php if($__Context->layout&&count($__Context->layout))foreach($__Context->layout as $__Context->no=>$__Context->item){ ?><tr>
				<?php if($__Context->no === 0){ ?><td class="nowr" rowspan="<?php echo count($__Context->layout) ?>" ><?php echo $__Context->count++ ?></td><?php } ?>
				<?php if($__Context->no === 0){ ?><td class="nowr" rowspan="<?php echo count($__Context->layout) ?>" ><?php echo $__Context->layout_name ?></td><?php } ?>
				<td class="title"><?php echo $__Context->item->title ?></td>
				<td class="nowr"><?php echo zdate($__Context->item->regdate, "Y-m-d") ?></td>
				<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminModify', 'layout_srl', $__Context->item->layout_srl) ?>"><?php echo $__Context->lang->cmd_layout_management ?></a></td>
				<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminEdit', 'layout_srl', $__Context->item->layout_srl) ?>"><?php echo $__Context->lang->cmd_layout_edit ?></a></td>
				<td class="nowr"><a href="<?php echo getUrl('', 'module', 'layout', 'act', 'dispLayoutAdminCopyLayout', 'layout_srl', $__Context->item->layout_srl) ?>" onclick="popopen(this.href);return false;" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a></td>
				<td class="nowr">
					<?php Context::addJsFile("modules/layout/ruleset/deleteLayout.xml", false, "", 0, "head", true, "") ?><form class="layout_delete_form"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteLayout" />
						<input type="hidden" name="module" value="layout" />
						<input type="hidden" name="act" value="procLayoutAdminDelete" />
						<input type="hidden" name="layout_srl" value="<?php echo $__Context->item->layout_srl ?>" />
						<input class="text" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" />
					</form>
				</td>
			</tr><?php } ?>
			<?php } ?>
		</tbody>
	</table>
</div>
