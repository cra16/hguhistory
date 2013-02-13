<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/tpl','header.html') ?>
<!-- 정보 -->
<div class="summary">
    <strong>Total</strong> <em><?php echo number_format($__Context->total_count) ?></em>, Page <strong><?php echo number_format($__Context->page) ?></strong>/<?php echo number_format($__Context->total_page) ?>
</div>
<!-- 목록 -->
<table cellspacing="0" class="rowTable">
<thead>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
        <th scope="col">
            <div>
                <input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
                <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
                <select name="module_category_srl">
                    <option value=""><?php echo $__Context->lang->module_category ?></option>
                    <option value="0" <?php if($__Context->module_category_srl==="0"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->not_exists ?></option>
                    <?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key => $__Context->val){ ?>
                    <option value="<?php echo $__Context->key ?>" <?php if($__Context->module_category_srl==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
                    <?php } ?>
                    <option value="">---------</option>
                    <option value="-1"><?php echo $__Context->lang->cmd_management ?></option>
                </select>
                <input type="submit" name="go_button" id="go_button" value="GO" class="buttonTypeGo" />
            </div>
        </th>
		<th scope="col" class="half_wide"><div><?php echo $__Context->lang->mid ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->browser_title ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
		<th scope="col"><div>설정</div></th>
		<th scope="col"><div>삭제</div></th>
    </tr>
</thead>
<tbody>
    <?php if($__Context->hiswiki_list&&count($__Context->hiswiki_list))foreach($__Context->hiswiki_list as $__Context->no => $__Context->val){ ?>
    <tr class="row<?php echo $__Context->cycle_idx ?>">
        <td class="center number"><?php echo $__Context->no ?></td>
        <td>
            <?php if(!$__Context->val->module_category_srl){ ?>
                <?php if($__Context->val->site_srl){ ?>
                <?php echo $__Context->lang->virtual_site ?>
                <?php }else{ ?>
                <?php echo $__Context->lang->not_exists ?>
                <?php } ?>
            <?php }else{ ?>
                <?php echo $__Context->module_category[$__Context->val->module_category_srl]->title ?>
            <?php } ?>
        </td>
		<td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
        <td><a href="<?php echo getUrl('','mid',$__Context->val->mid) ?>" title="<?php echo htmlspecialchars($__Context->lang->cmd_view) ?>"><?php echo $__Context->val->browser_title ?></a></td>
        <td class="nowrap"><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
        <td class="nowrap">
            <a href="<?php echo getUrl('act','dispHiswikiAdminModuleInfo','module_srl',$__Context->val->module_srl) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_setup ?></span></a> 
        </td>
		<td><a href="<?php echo getUrl('act','dispHiswikiAdminModuleDelete','module_srl', $__Context->val->module_srl) ?>" class="buttonSet buttonDelete" title="<?php echo $__Context->lang->cmd_delete ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<!-- 모듈 생성 버튼 -->
<div class="clear">
    <div class="fr">
		<a href="<?php echo getUrl('act','dispHiswikiAdminModuleInsert') ?>" class="button black strong"><span><?php echo $__Context->lang->cmd_make ?></span></a>
	</div>
</div>
<!-- 페이지 네비게이션 -->
<div class="pagination a1">
    <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
