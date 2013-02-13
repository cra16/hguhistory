<?php if(!defined("__XE__"))exit;?>
<h3 class="xeAdmin"><span class="gray">Hiswiki</span></h3>
<div class="infoText">한동대 특화된 위키리스트입니다.</div>
<?php if($__Context->module_info){ ?>
<div class="header4">
    <?php if($__Context->module_info->mid){ ?><h4 class="xeAdmin">
    	<?php echo $__Context->module_info->mid ?> <span class="vr">|</span> <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>" onclick="window.open(this.href); return false;" class="view">View</a>
    </h4><?php } ?>
    <ul class="localNavigation">
        <?php if($__Context->module=='admin'){ ?>
        <li<?php if($__Context->act=='dispHiswikiAdminModuleList'){ ?> class="on"<?php } ?>>
        	<a href="<?php echo getUrl('act','dispHiswikiAdminModuleList','module_srl','') ?>">목록</a>
        </li>
        <?php }else{ ?>
        <li><a href="<?php echo getUrl('act','') ?>">돌아가기</a></li>
        <?php } ?>
        <li<?php if($__Context->act=='dispHiswikiAdminModuleInfo'||$__Context->act=='dispHiswikiAdminModuleInsert'){ ?> class="on"<?php } ?>>
        	<?php if($__Context->module_srl){ ?><a href="<?php echo getUrl('act','dispHiswikiAdminModuleInsert', 'module_srl', $__Context->module_srl) ?>">모듈 설정</a><?php } ?>
        	<?php if(!$__Context->module_srl){ ?><a href="<?php echo getUrl('act','dispHiswikiAdminModuleInsert') ?>">삽입</a><?php } ?>
        </li>
		
        <?php if($__Context->module_srl){ ?>
        <li<?php if($__Context->act=='dispHiswikiAdminCategoryInfo'){ ?> class="on"<?php } ?>>
        	<a href="<?php echo getUrl('act','dispHiswikiAdminCategoryInfo') ?>">카테고리 설정</a>
        </li>
        <li<?php if($__Context->act=='dispHiswikiAdminGrantInfo'){ ?> class="on"<?php } ?>>
        	<a href="<?php echo getUrl('act','dispHiswikiAdminGrantInfo') ?>">권한 설정</a>
        </li>
        <li<?php if($__Context->act=='dispHiswikiAdminSkinInfo'){ ?> class="on"<?php } ?>>
        	<a href="<?php echo getUrl('act','dispHiswikiAdminSkinInfo') ?>">스킨 설정</a>
        </li>
        <li<?php if($__Context->act=='dispHiswikiAdminModuleDelete'){ ?> class="on"<?php } ?>>
        	<a href="<?php echo getUrl('act', 'dispHiswikiAdminModuleDelete') ?>">모듈 삭제</a>
        </li>
		<?php } ?>
    </ul>
</div>
<?php } ?>
