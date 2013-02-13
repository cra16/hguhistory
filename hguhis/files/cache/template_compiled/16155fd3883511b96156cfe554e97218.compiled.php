<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/image_link/tpl/popup.js--><?php $__tmp=array('modules/editor/components/image_link/tpl/popup.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/editor/components/image_link/tpl/popup.css--><?php $__tmp=array('modules/editor/components/image_link/tpl/popup.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/image_link/lang'); ?>
<h1 class="h1"><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
<form action="./" method="get" onSubmit="return false" id="fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <div class="table">
        <table width="100%" border="1" cellspacing="0">
        <col width="100" />
        <col />
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_url ?></th>
            <td><input type="text" id="image_url" value="<?php echo url_decode($__Context->manual_url) ?>" /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_scale ?></th>
            <td>
                <ul>
                    <li><input type="text" id="width" value="0" size="4" />px </li>
                    <li><input type="text" id="height" value="0" size="4" />px </li>
                    <li><button type="button" id="get_scale"><?php echo $__Context->lang->cmd_get_scale ?></button></li>
                </ul>
            </td>
        </tr>
        <tr>
            <th scope="row">URL</th>
            <td><input type="text" id="link_url" value=""/></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->urllink_open_window ?></th>
            <td><input type="checkbox" id="open_window" value="Y" /> <?php echo $__Context->lang->about_url_link_open_window ?></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_alt ?></th>
            <td><input type="text" id="image_alt" value=""/></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_align ?></th>
            <td>
                <div class="image_align">
                    <input type="radio" name="align" value="" id="align_normal" checked="checked"/>
                    <label for="align_normal">
                        <img src="/git/hguhistory/hguhis/modules/editor/components/image_link/tpl/images/align_normal.gif" alt="<?php echo $__Context->lang->image_align_normal ?>" />
                        <?php echo $__Context->lang->image_align_normal ?>
                    </label>
                </div>
                <div class="image_align">
                    <input type="radio" name="align" value="left" id="align_left" />
                    <label for="align_left">
                        <img src="/git/hguhistory/hguhis/modules/editor/components/image_link/tpl/images/align_left.gif" alt="<?php echo $__Context->lang->image_align_left ?>" />
                        <?php echo $__Context->lang->image_align_left ?>
                    </label>
                </div>
                <div class="image_align">
                    <input type="radio" name="align" value="middle" id="align_middle" />
                    <label for="align_middle">
                        <img src="/git/hguhistory/hguhis/modules/editor/components/image_link/tpl/images/align_middle.gif" alt="<?php echo $__Context->lang->image_align_middle ?>" />
                        <?php echo $__Context->lang->image_align_middle ?>
                    </label>
                </div>
                <div class="image_align">
                    <input type="radio" name="align" value="right" id="align_right" />
                    <label for="align_right">
                        <img src="/git/hguhistory/hguhis/modules/editor/components/image_link/tpl/images/align_right.gif" alt="<?php echo $__Context->lang->image_align_right ?>" />
                        <?php echo $__Context->lang->image_align_right ?>
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_border ?></th>
            <td><input type="text" id="image_border" value="0" size="2" />px</td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->image_margin ?></th>
            <td><input type="text" id="image_margin" value="0" size="2" />px</td>
        </tr>
        </table>
    </div>
    <div class="btnArea">
        <span class="btn"><button type="button" id="btn_insert"><?php echo $__Context->lang->cmd_insert ?></button></span>
        <span class="btn"><a href="./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php echo $__Context->component_info->component_name ?>" target="_blank" onclick="window.open('this.href','ComponentInfo','width=10,height=10');return false;"><?php echo $__Context->lang->about_component ?></a></span>
    </div>
</form>
