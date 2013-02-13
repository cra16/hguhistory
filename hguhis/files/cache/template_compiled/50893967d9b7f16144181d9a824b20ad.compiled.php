<?php if(!defined("__XE__"))exit;?><!-- display trackback -->
<div class="trackbackBox">
    <div class="trackbackUrl"><a name="trackback" href="<?php echo $__Context->oDocument->getTrackbackUrl() ?>" onclick="return false;"><?php echo $__Context->lang->trackback_url ?> : <?php echo $__Context->oDocument->getTrackbackUrl() ?></a></div>
    <?php if($__Context->oDocument->getTrackbackCount()){ ?>
        <?php if($__Context->oDocument->getTrackbacks()&&count($__Context->oDocument->getTrackbacks()))foreach($__Context->oDocument->getTrackbacks() as $__Context->key => $__Context->val){ ?>
        <div class="trackbackItem">
            <a name="trackback_<?php echo $__Context->val->trackback_srl ?>"></a>
            <address>
                <a href="<?php echo $__Context->val->url ?>" onclick="winopen(this.href);return false;"><?php echo htmlspecialchars($__Context->val->title) ?> - <?php echo htmlspecialchars($__Context->val->blog_name) ?></a>
                <a href="<?php echo getUrl('act','dispBoardDeleteTrackback','trackback_srl',$__Context->val->trackback_srl) ?>"><img src="/git/hguhistory/hguhis/modules/board/skins/xe_board/images/common/buttonDeleteX.gif" border="0" alt="delete" width="12" height="13" /></a>
                <span class="date">
                    <?php echo zdate($__Context->val->regdate, "Y.m.d H:i") ?>
                    (<?php echo $__Context->val->ipaddress ?>)
                </span>
            </address>
            <div>
                <a href="<?php echo $__Context->val->url ?>" onclick="winopen(this.href);return false;"><?php echo $__Context->val->excerpt ?></a> 
            </div>
        </div>
        <?php } ?>
    <?php } ?>
</div>
