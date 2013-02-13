<?php if(!defined("__XE__"))exit;?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/hiswiki/tpl/filter','admin_insert.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/hiswiki/tpl/js/hiswiki_admin.js--><?php $__tmp=array('modules/hiswiki/tpl/js/hiswiki_admin.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, admin_insert)" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
<input type="hidden" name="front_page_srl" value="<?php echo $__Context->module_info->front_page_srl ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->mid ?></div></th>
        <td>
            <input type="text" name="mid" value="<?php echo $__Context->module_info->mid ?>" class="inputTypeText w200" />
            <p><?php echo $__Context->lang->about_mid ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->module_category ?></div></th>
        <td>
            <select name="module_category_srl">
                <option value="0"><?php echo $__Context->lang->notuse ?></option>
                <?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_module_category ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->browser_title ?></div></th>
        <td>
            <input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>"  class="inputTypeText w400" id="browser_title"/>
            <a href="<?php echo getUrl('','module','module','act','dispHiswikiAdminModuleLangcode','target','browser_title') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
            <p><?php echo $__Context->lang->about_browser_title ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->layout ?></div></th>
        <td>
            <select name="layout_srl">
	            <option value="0"><?php echo $__Context->lang->notuse ?></option>
	            <?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> ($val->layout)</option><?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_layout ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->skin ?></div></th>
        <td>
            <select name="skin">
            	<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_skin ?></p>
        </td>
    </tr>
   <tr>
        <th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
        <td>
            <textarea name="description" class="inputTypeTextArea fullWidth"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
            <p><?php echo $__Context->lang->about_description ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->header_text ?></div></th>
        <td>
            <textarea name="header_text" class="inputTypeTextArea fullWidth" id="header_text"><?php echo htmlspecialchars($__Context->module_info->header_text) ?></textarea>
            <a href="<?php echo getUrl('','module','module','act','dispHiswikiAdminModuleLangcode','target','header_text') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
            <p><?php echo $__Context->lang->about_header_text ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->footer_text ?></div></th>
        <td>
            <textarea name="footer_text" class="inputTypeTextArea fullWidth" id="footer_text"><?php echo htmlspecialchars($__Context->module_info->footer_text) ?></textarea>
            <a href="<?php echo getUrl('','module','module','act','dispHiswikiAdminModulelangcode','target','footer_text') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
            <p><?php echo $__Context->lang->about_footer_text ?></p>
        </td>
    </tr>
    
    
    <tr>
    	<th scope="row"><div>요청게시판 연동</div></th>
    	<td>
    		<p>
    			<select class="module_list">
    				<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key=>$__Context->val){;
if($__Context->key!='page'&&$__Context->key!='hiswiki'){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->title ?></option><?php }} ?>
    			</select>
    			<select class="select_module_list" name="link_board">
    			</select>
    		</p>
    		<p>요청 게시판을 연동시키실 수 있으십니다. 먼저 board, bodex, beluxe 등의 모듈을 사용하여 게시판을 생성해 연결해 주세요..</p>
    	</td>
    </tr>
    
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
  	</tr>
    </table>
</form>
