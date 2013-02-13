<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/layout/tpl','header.html') ?>
<!--#Meta:modules/layout/tpl/js/adminList.js--><?php $__tmp=array('modules/layout/tpl/js/adminList.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<script type="text/javascript">
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
</script>
<h2 class="h2"><?php echo $__Context->layout_info->title ?> ver <?php echo $__Context->layout_info->version ?> (<?php echo $__Context->layout_info->layout ?>)</h2>
<div class="table even easyList">
	<table width="100%" border="1" cellspacing="0">
		<thead>
			<tr>
				<th scope="col" class="nowr"><?php echo $__Context->lang->no ?></th>
				<th scope="col" class="title"><?php echo $__Context->lang->title ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->regdate ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_layout_management ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_layout_edit ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_copy ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->no=>$__Context->layout){ ?><tr>
				<td class="nowr"><?php echo $__Context->no+1 ?></td>
				<td class="title"><?php echo $__Context->layout->title ?></td>
				<td class="nowr"><?php echo zdate($__Context->layout->regdate, "Y-m-d") ?></td>
				<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminModify', 'layout_srl', $__Context->layout->layout_srl) ?>"><?php echo $__Context->lang->cmd_layout_management ?></a></td>
				<td class="nowr"><a href="<?php echo getUrl('act', 'dispLayoutAdminEdit', 'layout_srl', $__Context->layout->layout_srl) ?>"><?php echo $__Context->lang->cmd_layout_edit ?></a></td>
				<td class="nowr"><a href="<?php echo getUrl('', 'module', 'layout', 'act', 'dispLayoutAdminCopyLayout', 'layout_srl', $__Context->layout->layout_srl) ?>" onclick="popopen(this.href);return false;" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a></td>
				<td class="nowr">
					<?php Context::addJsFile("modules/layout/ruleset/deleteLayout.xml", false, "", 0, "head", true, "") ?><form class="layout_delete_form"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteLayout" />
						<input type="hidden" name="module" value="layout" />
						<input type="hidden" name="act" value="procLayoutAdminDelete" />
						<input type="hidden" name="layout_srl" value="<?php echo $__Context->layout->layout_srl ?>" />
						<input class="text" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" />
					</form>
				</td>
			</tr><?php } ?>
		</tbody>
	</table>
</div>
<?php if($__Context->layout_info->layout != 'faceoff'){ ?><div class="btnArea">
	<span class="btn"><a href="#insertLayout" class="modalAnchor"><?php echo $__Context->lang->cmd_insert ?>...</a></span>
</div><?php } ?>
<div id="insertLayout" class="modal">
	<div class="fg">
		<h2></h2>
		
		<?php Context::addJsFile("modules/layout/ruleset/insertLayout.xml", false, "", 0, "head", true, "") ?><form  action="./" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertLayout" />
			<input type="hidden" name="module" value="layout" />
			<input type="hidden" name="act" value="procLayoutAdminInsert" />
			<input type="hidden" name="layout" value="<?php echo $__Context->layout_info->layout ?>" />
			<input type="hidden" name="_layout_type" value="<?php echo $__Context->type ?>" />
			<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', 'dispLayoutAdminInstanceList') ?>" />
			<ul>
				<li>
					<p class="q"><?php echo $__Context->lang->layout ?></p>
					<p class="a"><?php echo $__Context->layout_info->title ?> ver <?php echo $__Context->layout_info->version ?> (<?php echo $__Context->layout_info->layout ?>)</p>
				</li>
				<?php if($__Context->layout_info->path){ ?><li>
					<p class="q"><?php echo $__Context->lang->path ?></p>
					<p class="a"><?php echo $__Context->layout_info->path ?></p>
				</li><?php } ?>
				<?php if($__Context->layout_info->description){ ?><li>
					<p class="q"><?php echo $__Context->lang->description ?></p>
					<p class="a"><?php echo $__Context->layout_info->description ?></p>
				</li><?php } ?>
				<li>
					<p class="q"><?php echo $__Context->lang->author ?></p>
					<p class="a"><a href="<?php echo $__Context->layout_info->author->homepage ?>" target="_blank"><?php echo $__Context->layout_info->layout->author->name ?></a></p>
				</li>
				<li>
					<p class="q"><?php echo $__Context->lang->title ?></p>
					<p class="a">
						<input type="text" name="title" value="" />
					</p>
					<p class="desc"><?php echo $__Context->lang->about_title ?></p>
				</li>
			</ul>
			<div class="btnArea">
				<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_insert ?>" /></span>
			</div>
		</form>
	</div>
</div>
