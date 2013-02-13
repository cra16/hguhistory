<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/poll_maker/tpl/popup.js--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:modules/editor/components/poll_maker/tpl/popup.css--><?php $__tmp=array('modules/editor/components/poll_maker/tpl/popup.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/components/poll_maker/tpl/filter','insert_poll.xml');$__xmlFilter->compile(); ?>
<?php Context::loadLang('modules/editor/components/poll_maker/lang'); ?>
<?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<script type="text/javascript">
    var msg_poll_cannot_modify = "<?php echo $__Context->lang->msg_poll_cannot_modify ?>";
</script>
<h1 class="h1"><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
<form action="./" method="post" id="fo_component" onSubmit="procFilter(this, insert_poll); return false;"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="component" value="<?php echo $__Context->component_info->component_name ?>" />
	<input type="hidden" name="method" value="insertPoll" />
	<input type="hidden" name="poll_srl" value="" />
    <div class="table">
        <table width="100%" border="1" cellspacing="0">
        <col width="100" />
        <col />
        <tr>
            <th scope="row"><?php echo $__Context->lang->poll_stop_date ?></th>
            <td>
            <input type="hidden" name="stop_date" id="stop_date" value="<?php echo date('Ymd',time()+60*60*24*30) ?>" />
            <input type="text" class="inputDate" value="<?php echo date('Y-m-d',time()+60*60*24*30) ?>" readonly="readonly" />
<script type="text/javascript">
(function($){
    $(function(){
        var option = {
            changeMonth:true,
            changeYear:true,
            gotoCurrent: false
            ,yearRange:'-100:+10'
            , onSelect:function(){
                $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""));
            }
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
    });
})(jQuery);
</script>
            </td>
        </tr>
        <tr>
            <th scope="row"><?php echo $__Context->lang->skin ?></th>
            <td>
                <select name="skin">
                    <?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->skin=>$__Context->skin_info){ ?>
                    <option value="<?php echo $__Context->skin ?>"><?php echo $__Context->skin_info->title ?> (skin by <?php echo $__Context->skin_info->maker->name ?>)</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        </table>
        <div id="poll_source" style="display:none">
			<div class="table">
				<table width="100%" border="1" cellspacing="0">
					<col width="100" />
					<col />
					<tr>
						<th scope="row"><div><label><?php echo $__Context->lang->poll_chk_count ?></label></div></th>
						<td><input type="text" name="checkcount_tidx" value="1" size="1"  /></td>
					</tr>
					<tr>
						<th scope="row"><div><?php echo $__Context->lang->poll_title ?></div></th>
						<td><input type="text" name="title_tidx" /></td>
					</tr>
					
					<tr>
						<th scope="row"><div><?php echo $__Context->lang->poll_item ?> 1</div></th>
						<td><input type="text" name="item_tidx_1" /></td>
					</tr>
					
					<tr>
						<th scope="row"><div><?php echo $__Context->lang->poll_item ?> 2</div></th>
						<td><input type="text" name="item_tidx_2" /></td>
					</tr>
				</table>
			</div>
			<button type="button" class="_add_item"><?php echo $__Context->lang->cmd_add_item ?></button>
			<button type="button" class="_del_item"><?php echo $__Context->lang->cmd_del_item ?></button>
			<button type="button" class="_del_poll"><?php echo $__Context->lang->cmd_del_poll ?></button>
        </div>
    </div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" /></span>
		<span class="btn"><button type="button" id="add_poll"><?php echo $__Context->lang->cmd_add_poll ?></button></span>
		<span class="btn"><a href="./?module=editor&amp;act=dispEditorComponentInfo&amp;component_name=<?php echo $__Context->component_info->component_name ?>" target="_blank"><?php echo $__Context->lang->about_component ?></a></span>
    </div>
</form>
