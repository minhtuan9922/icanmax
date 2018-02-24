<?php /* Smarty version 3.1.24, created on 2015-12-26 08:57:09
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1166335631567e5665c047e0_23555161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '449c3fc1eb3450435e1e615492102bea9f7a481e' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post.tpl',
      1 => 1451102774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166335631567e5665c047e0_23555161',
  'variables' => 
  array (
    'single' => 0,
    'post' => 0,
    'user' => 0,
    'system' => 0,
    'photo' => 0,
    '_snippet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e5665f30e26_05580746',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e5665f30e26_05580746')) {
function content_567e5665f30e26_05580746 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1166335631567e5665c047e0_23555161';
if (!$_smarty_tpl->tpl_vars['single']->value) {?><li><?php }?>
    <!-- post -->
    <div class="post" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">

        <!-- post body -->
        <div class="post-body">
            <!-- post header -->
            <div class="post-header">
                <!-- post picture -->
                <div class="post-avatar">
                    <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['post']->value['post_picture'];?>
);">
                    </a>
                </div>
                <!-- post picture -->

                <!-- post meta -->
                <div class="post-meta">
                    <!-- post author name & menu -->
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                            <!-- post menu -->
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "user") {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || ($_smarty_tpl->tpl_vars['post']->value['in_group'] && $_smarty_tpl->tpl_vars['post']->value['group_admin'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'])) {?>
                                    <div class="pull-right flip">
                                        <button type="button" class="close js_delete-post"><span>&times;</span></button>
                                    </div>
                                <?php } else { ?>
                                    <div class="pull-right flip dropdown">
                                        <i class="fa fa-chevron-down dropdown-toggle" data-toggle="dropdown"></i>
                                        <ul class="dropdown-menu post-dropdown-menu">
                                            <li>
                                                <a href="#" class="js_hide-post">
                                                    <div class="action">
                                                        <i class="fa fa-eye-slash fa-fw"></i> <?php echo __("Ẩn bài viết này");?>

                                                    </div>
                                                    <div class="action-desc"><?php echo __("Xem bài viết ít hơn như thế này");?>
</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="js_hide-author" data-author-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
" data-author-name="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
">
                                                    <div class="action">
                                                        <i class="fa fa-minus-circle fa-fw"></i> <?php echo __("Bỏ theo dõi");?>
 <?php echo get_firstname($_smarty_tpl->tpl_vars['post']->value['user_fullname']);?>

                                                    </div>
                                                    <div class="action-desc"><?php echo __("Dừng nhìn thấy bài viết này");?>
</div>
                                                </a>
                                            </li>
                                            <li role="presentation" class="divider"></li>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3) {?>
                                            <li>
                                                <a href="#" class="js_delete-post">
                                                    <div class="action no-icon"><?php echo __("Xóa bài viết");?>
</div>
                                                </a>
                                            </li>
                                            <?php } else { ?>
                                            <li>
                                                <a href="#" class="js_report-post">
                                                    <div class="action no-icon"><?php echo __("Báo cáo bài viết");?>
</div>
                                                </a>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "page") {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['page_admin'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                                    <div class="pull-right flip">
                                        <button type="button" class="close js_delete-post"><span>&times;</span></button>
                                    </div>
                                <?php } else { ?>
                                    <div class="pull-right flip dropdown">
                                        <i class="fa fa-chevron-down dropdown-toggle" data-toggle="dropdown"></i>
                                        <ul class="dropdown-menu post-dropdown-menu">
                                            <li>
                                                <a href="#" class="js_hide-post">
                                                    <div class="action">
                                                        <i class="fa fa-eye-slash fa-fw"></i> <?php echo __("Ẩn bài viết này");?>

                                                    </div>
                                                    <div class="action-desc"><?php echo __("Xem bài viết ít hơn như thế này");?>
</div>
                                                </a>
                                            </li>
                                            <li role="presentation" class="divider"></li>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3) {?>
                                            <li>
                                                <a href="#" class="js_delete-post">
                                                    <div class="action no-icon"><?php echo __("Xóa bài viết");?>
</div>
                                                </a>
                                            </li>
                                            <?php } else { ?>
                                            <li>
                                                <a href="#" class="js_report-post">
                                                    <div class="action no-icon"><?php echo __("Báo cáo bài viết");?>
</div>
                                                </a>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                <?php }?>
                            <?php }?>
                            <!-- post menu -->
                        <?php }?>

                        <!-- post author name -->
                        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
</a>
                        </span>
                        <!-- post author name -->

                        <!-- post type meta -->
                        <span class="post-title">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared") {?>
                            <?php echo __("đã chia sẽ");?>
 
                            <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['user_id'];?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_author_url'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_author_name'];?>

                                </a><?php echo __("đã thêm");?>

                            </span> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_id'];?>
">
                            
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'photos') {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['photos_num'] > 1) {
echo __("ảnh");
} else {
echo __("một ảnh");
}?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'media') {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['media']['media_type'] != "soundcloud") {?>
                                    <?php echo __("video");?>

                                <?php } else { ?>
                                    <?php echo __("nhạc");?>

                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'link') {?>
                                <?php echo __("đường dẫn trang");?>

                            <?php } else { ?>
                                <?php echo __("bài viết");?>

                            <?php }?>
                            </a>

                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "đường dẫn trang") {?>
                            <?php echo __("chia sẽ link");?>


                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "photos") {?>
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 1) {?>
                                <?php echo __("đã thêm một ảnh");?>

                            <?php } else { ?>
                                <?php echo __("thêm");?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['photos_num'];?>
 <?php echo __("ảnh");?>

                            <?php }?>
                            
                        <?php }?>
                        </span>
                        <!-- post type meta -->
                    </div>
                    <!-- post author name & menu -->

                    <!-- post time & location & privacy -->
                    <div class="post-time">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</a>

                        <?php if ($_smarty_tpl->tpl_vars['post']->value['location']) {?>
                        ·
                        <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</span>
                        <?php }?>

                        - 
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                            <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title="<?php echo __("Hiển thị với");?>
: <?php echo __("Bạn bè");?>
"></i>
                        <?php } else { ?>
                            <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="<?php echo __("Hiển thị với");?>
: <?php echo __("Mọi người");?>
"></i>
                        <?php }?>
                    </div>
                    <!-- post time & location & privacy -->
                </div>
                <!-- post meta -->
            </div>
            <!-- post header -->

            <!-- post text -->
            <div class="post-text"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
            <!-- post text -->

            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "photos" && $_smarty_tpl->tpl_vars['post']->value['photos']) {?>
            <div class="mt10">
                <div class="post-images row">
                <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 1) {?>
                    <div class="col-xs-12">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
');">
                        </a>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 2) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['post']->value['photos'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['photo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
$foreach_photo_Sav = $_smarty_tpl->tpl_vars['photo'];
?>
                        <div class="col-xs-6">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
');"></a>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['photo'] = $foreach_photo_Sav;
}
?>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['post']->value['photos'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['photo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
$foreach_photo_Sav = $_smarty_tpl->tpl_vars['photo'];
?>
                        <div class="col-xs-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
');"></a>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['photo'] = $foreach_photo_Sav;
}
?>
                <?php }?>
                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "media" && $_smarty_tpl->tpl_vars['post']->value['media']) {?>
            <div class="mt10">
                <?php if ($_smarty_tpl->tpl_vars['post']->value['media']['media_type'] == "youtube") {?>
                    <div class="post-media">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_uid'];?>
" allowfullscreen=""></iframe>
                        </div>
                        <div class="post-media-meta">
                            <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_title'];?>
</a>
                            <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_text'];?>
</div>
                            <div class="source">youtube.com</div>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['media']['media_type'] == "vimeo") {?>
                    <div class="post-media">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_uid'];?>
"></iframe>
                        </div>
                        <div class="post-media-meta">
                            <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_title'];?>
</a>
                            <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_text'];?>
</div>
                            <div class="source">vimeo.com</div>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['media']['media_type'] == "soundcloud") {?>
                    <div class="post-media">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_uid'];?>
&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </div>
                        <div class="post-media-meta">
                            <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_title'];?>
</a>
                            <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_text'];?>
</div>
                            <div class="source">soundcloud.com</div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "link" && $_smarty_tpl->tpl_vars['post']->value['link']) {?>
            <div class="mt10">
                <div class="post-media">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['link']['source_thumbnail']) {?>
                        <div class="post-media-image">
                            <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_thumbnail'];?>
');"></div>
                        </div>
                    <?php }?>
                    <div class="post-media-meta">
                        <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_title'];?>
</a>
                        <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_text'];?>
</div>
                        <div class="source"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['post']->value['link']['source_host'], 'UTF-8');?>
</div>
                    </div>
                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared" && $_smarty_tpl->tpl_vars['post']->value['origin']) {?>
            <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>
            <span class="text-link js_show-attachments"><?php echo __("Hiện file đính kèm");?>
</span>
            <?php }?>
            <div class="mt10 <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>x-hidden<?php }?>">
                <div class="post-media">
                    <div class="post-media-meta">
                        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post_shared.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('origin'=>$_smarty_tpl->tpl_vars['post']->value['origin']), 0);
?>

                    </div>
                </div>
            </div>
            <?php }?>

            <!-- post actions & stats -->
            <div class="post-actions">
                <!-- post actions -->
                <?php if ($_smarty_tpl->tpl_vars['post']->value['i_like']) {?>
<button type="button" class="btn btn-default text-link js_unlike-post">
Bỏ thích
                    </button>
                <?php } else { ?>
<button type="button" class="btn btn-default text-link js_like-post">
Thích
                    </button>
                <?php }?>
<button type="button" class="btn btn-default text-link js_comment">
 <span class="glyphicon glyphicon-comment"></span> Bình luận
                </button>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                      
                    <span class="text-link js_share">
<button type="button" class="btn btn-default">
  <span class="fa fa-share"></span> Chia sẽ
</button>
                    </span>
                <?php }?>
                <!-- post actions -->
            </div>
            <!-- post actions & stats -->
        </div>
        <!-- post body -->

        <!-- post footer -->
        <div class="post-footer <?php if ($_smarty_tpl->tpl_vars['post']->value['likes'] == 0 && $_smarty_tpl->tpl_vars['post']->value['comments'] == 0 && $_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">

            <!-- post stats (likes & shares) -->
            <div class="post-stats clearfix <?php if ($_smarty_tpl->tpl_vars['post']->value['likes'] == 0 && $_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">
                <!-- shares -->
                <div class="pull-right flip js_post-shares <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">
                    <i class="fa fa-share"></i> 
                    <span class="text-link" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];
echo __("chia sẽ");?>

                    </span>
                </div>
                <!-- shares -->

                <!-- likes -->
                <span class="js_post-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 0) {?>x-hidden<?php }?>">
                    <i class="fa fa-thumbs-o-up"></i> <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><span class="js_post-likes-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</span> <?php echo __("người");?>
</span> <?php echo __("thích điều này");?>

                </span>
                <!-- likes -->
            </div>
            <!-- post stats (likes & shares) -->

            <!-- comments -->
            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <!-- comments -->
        </div>
        <!-- post footer -->

    </div>
    <!-- post -->
<?php if (!$_smarty_tpl->tpl_vars['single']->value) {?></li><?php }
}
}
?>