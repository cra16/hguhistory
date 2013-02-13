<?php if(!defined("__XE__"))exit;?><!-- display the document contents -->
<?php if(!$__Context->module_info->document_title_format){ ?>
    <?php  $__Context->module_info->document_title_format = 'h4' ?>
<?php } ?>
<div class="boardRead">
    <div class="originalContent">
        <div class="readHeader">
            <div class="titleAndUser">
                <div class="title">
                    <<?php echo $__Context->module_info->document_title_format ?>><a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a></<?php echo $__Context->module_info->document_title_format ?>>
                </div>
                <?php if($__Context->module_info->display_author!='N'){ ?>
                <div class="userInfo">
                    <?php if(!$__Context->oDocument->getMemberSrl()){ ?>
                        <div class="author">
                        <?php if($__Context->oDocument->isExistsHomepage()){ ?>
                            <a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->oDocument->getNickName() ?></a>
                        <?php }else{ ?>
                            <?php echo $__Context->oDocument->getNickName() ?>
                        <?php } ?>
                        </div>
                    <?php }else{ ?>
                        <div class="author"><span class="member_<?php echo $__Context->oDocument->get('member_srl') ?>"><?php echo $__Context->oDocument->getNickName() ?></span></div>
                    <?php } ?>
                </div>
                <?php } ?>
                
            </div>
            <div class="dateAndCount">
                <div class="uri" title="<?php echo $__Context->lang->document_url ?>"><a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getPermanentUrl() ?></a></div>
                <div class="date" title="<?php echo $__Context->lang->regdate ?>">
                    <strong><?php echo $__Context->oDocument->getRegdate('Y.m.d') ?></strong> <?php echo $__Context->oDocument->getRegdate('H:i:s') ?> <?php if($__Context->grant->manager || $__Context->module_info->display_ip_address!='N'){ ?>(<?php echo $__Context->oDocument->getIpaddress() ?>)<?php } ?>
                </div>
                <div class="readedCount" title="<?php echo $__Context->lang->readed_count ?>"><?php echo $__Context->oDocument->get('readed_count') ?></div>
                <?php if($__Context->oDocument->get('voted_count')!=0 || $__Context->oDocument->get('blamed_count')!=0){ ?>
                <div class="votedCount" title="<?php echo $__Context->lang->voted_count ?>">
					<a href="#layer_voted_member" class="voted_member_<?php echo $__Context->oDocument->document_srl ?> document votedup"><?php echo $__Context->oDocument->get('voted_count') ?></a> / <a href="#layer_voted_member" class="voted_member_<?php echo $__Context->oDocument->document_srl ?> document voteddown"><?php echo $__Context->oDocument->get('blamed_count') ?></a>
                </div>
                <?php } ?>
                <div class="replyAndTrackback">
                    <?php if($__Context->grant->write_comment && $__Context->oDocument->allowComment()) { ?>
                    <div class="replyCount"><a href="#comment" title="<?php echo $__Context->lang->comment ?>"><strong><?php echo $__Context->oDocument->getCommentcount() ?></strong></a></div>
                    <?php } ?>
                    <?php if($__Context->oDocument->allowTrackback() && $__Context->oDocument->getTrackbackCount() ){ ?>
                    <div class="trackbackCount"><a href="#trackback" title="<?php echo $__Context->lang->trackback ?>"><strong><?php echo $__Context->oDocument->getTrackbackCount() ?></strong></a></div>
                    <?php } ?>
                </div>
                <?php if($__Context->module_info->use_category == "Y" && $__Context->oDocument->get('category_srl')){ ?>
                <div class="category" title="<?php echo $__Context->lang->category ?>"><a href="<?php echo getUrl('category',$__Context->oDocument->get('category_srl'), 'document_srl', '') ?>"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a></div>
                <?php } ?>
                
            </div>
            
        </div>
        
        <?php if($__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted()) ){ ?>
        <table cellspacing="0" summary="" class="extraVarsList">
        <col width="150" />
        <col />
        <?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key => $__Context->val){ ?>
        <tr>
            <th><?php echo $__Context->val->name ?></th>
            <td><?php echo $__Context->val->getValueHTML() ?></td>
        </tr>
        <?php } ?>
        </table>
        <?php } ?>
        <div class="readBody">
            <div class="contentBody">
                <?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
                    <div class="secretContent">
                        <form action="./" method="get" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                        <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
                        <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
                        <input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
                            <div class="title"><?php echo $__Context->lang->msg_is_secret ?></div>
                            <div class="content"><input type="password" name="password" id="cpw" class="iText" /><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" /></span></div>
                        </form>
                    </div>
                <?php }else{ ?>
                    <?php echo $__Context->oDocument->getContent() ?>
                <?php } ?>
                <!-- display signature / profile image-->
                <?php if($__Context->module_info->display_sign != 'N' && ($__Context->oDocument->getProfileImage() || $__Context->oDocument->getSignature())){ ?>
                    <div class="memberSignature">
                    <?php if($__Context->oDocument->getProfileImage()){ ?>
                        <div class="profile"><img src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="profile" /></div>
                    <?php } ?>
                    <?php if($__Context->oDocument->getSignature()){ ?>
                        <div class="signature"><?php echo $__Context->oDocument->getSignature() ?></div>
                    <?php } ?>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php  $__Context->tag_list = $__Context->oDocument->get('tag_list')  ?>
        <?php if(count($__Context->tag_list)){ ?>
        <div class="tag">
            <ul>
                <?php for($__Context->i=0;$__Context->i<count($__Context->tag_list);$__Context->i++){ ?>
                    <?php  $__Context->tag = $__Context->tag_list[$__Context->i];  ?>
                    <li><a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>" rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a><?php if($__Context->i<count($__Context->tag_list)-1){ ?>,&nbsp;<?php } ?></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
        <?php if($__Context->oDocument->hasUploadedFiles()){ ?>
        <div class="fileAttached">
            <?php  $__Context->uploaded_list = $__Context->oDocument->getUploadedFiles()  ?>
            <ul>
                <?php if($__Context->uploaded_list&&count($__Context->uploaded_list))foreach($__Context->uploaded_list as $__Context->key => $__Context->file){ ?>
                <li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> (<?php echo FileHandler::filesize($__Context->file->file_size) ?>)(<?php echo number_format($__Context->file->download_count) ?>)</a></li>
                <?php } ?>
            </ul>
            
        </div>
        <?php } ?>
    </div>
    <!-- list, modify/delete button -->
    <div class="btnArea">
        <?php if($__Context->module_info->default_style != 'blog' || ($__Context->module_info->default_style == 'blog' && Context::get('document_srl'))){ ?>
        <span class="btn"><a href="<?php echo getUrl('document_srl','') ?>"><?php if($__Context->module_info->default_style != 'blog'){;
echo $__Context->lang->cmd_list;
}else{;
echo $__Context->lang->cmd_view_all;
} ?></a></span>
        <?php } ?>
        <?php if($__Context->oDocument->isEditable()){ ?>
        <span class="btn"><a href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></span>
        <span class="btn"><a href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_delete ?></a></span>
        <?php } ?>
    </div>
</div>
<!-- trackback -->
<?php if($__Context->oDocument->allowTrackback()){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','trackback.html') ?>
<?php } ?>
<!-- comments -->
<a name="comment"></a>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','comment.html') ?>
<!-- comments form -->
<?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment() ){ ?>
    <form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="boardEditor" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
    <input type="hidden" name="comment_srl" value="" />
    <input type="hidden" name="content" value="" />
        <div class="boardWrite commentEditor">
            <div class="userNameAndPw">
                <?php if(!$__Context->is_logged){ ?>
                <label for="userName"><?php echo $__Context->lang->writer ?></label>
                <input type="text" name="nick_name" value="" class="userName iText" id="userName"/>
                <label for="userPw"><?php echo $__Context->lang->password ?></label>
                <input type="password" name="password" value="" id="userPw" class="userPw iText" />
                <label for="emailAddress"><?php echo $__Context->lang->email_address ?></label>
                <input type="text" name="email_address" value="" id="emailAddress" class="emailAddress iText"/>
                <label for="homePage"><?php echo $__Context->lang->homepage ?></label>
                <input type="text" name="homepage" value="" id="homePage" class="homePage iText"/>
                <?php }else{ ?>
                <input type="checkbox" name="notify_message" value="Y" id="notify_message" />
                <label for="notify_message"><?php echo $__Context->lang->notify ?></label>
                <?php } ?>
                <?php if($__Context->module_info->secret=="Y"){ ?>
                <input type="checkbox" name="is_secret" value="Y" id="is_secret" />
                <label for="is_secret"><?php echo $__Context->lang->secret ?></label>
                <?php } ?>
            </div>
            <div class="editor"><?php echo $__Context->oDocument->getCommentEditor() ?></div>
        </div>
        <div class="btnArea">
            <span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_comment_registration ?>" /></span>
        </div>
    </form>
<?php } ?>
