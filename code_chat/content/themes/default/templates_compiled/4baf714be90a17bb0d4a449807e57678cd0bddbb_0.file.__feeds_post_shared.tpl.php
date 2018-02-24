<?php /* Smarty version 3.1.24, created on 2015-12-26 02:35:41
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post_shared.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:474900538567dfcfd3f45a9_22842119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4baf714be90a17bb0d4a449807e57678cd0bddbb' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post_shared.tpl',
      1 => 1451039548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474900538567dfcfd3f45a9_22842119',
  'variables' => 
  array (
    'origin' => 0,
    'system' => 0,
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567dfcfd4d2895_36136430',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567dfcfd4d2895_36136430')) {
function content_567dfcfd4d2895_36136430 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '474900538567dfcfd3f45a9_22842119';
?>
<!-- post header -->
<div class="post-header">
    <!-- post picture -->
    <div class="post-avatar">
        <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['origin']->value['post_picture'];?>
);">
        </a>
    </div>
    <!-- post picture -->

    <!-- post meta -->
    <div class="post-meta">
        <!-- post author name -->
        <div>
            <!-- post author name -->
            <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['origin']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['origin']->value['user_id'];?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['origin']->value['post_author_name'];?>
</a>
            </span>
            <!-- post author name -->
        </div>
        <!-- post author name -->

        <!-- post time & location & privacy -->
        <div class="post-time">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['origin']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['origin']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['origin']->value['time'];?>
</a>

            <?php if ($_smarty_tpl->tpl_vars['origin']->value['location']) {?>
            ·
            <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['origin']->value['location'];?>
</span>
            <?php }?>

            - 
            <?php if ($_smarty_tpl->tpl_vars['origin']->value['privacy'] == "friends") {?>
            <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title="<?php echo __("Chia sẽ với");?>
: <?php echo __("Bạn bè");?>
"></i>
            <?php } else { ?>
            <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="<?php echo __("Chia sẽ với");?>
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
<div class="post-text text-muted"><?php echo $_smarty_tpl->tpl_vars['origin']->value['text'];?>
</div>
<!-- post text -->

<?php if ($_smarty_tpl->tpl_vars['origin']->value['post_type'] == "photos") {?>
    <div class="mt10">
        <div class="post-images row">
            <?php if ($_smarty_tpl->tpl_vars['origin']->value['photos_num'] == 1) {?>
                <div class="col-xs-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['origin']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['origin']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['origin']->value['photos'][0]['source'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['origin']->value['photos'][0]['source'];?>
');">
                    </a>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['origin']->value['photos_num'] == 2) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['origin']->value['photos'];
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
$_from = $_smarty_tpl->tpl_vars['origin']->value['photos'];
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
<?php } elseif ($_smarty_tpl->tpl_vars['origin']->value['post_type'] == "media") {?>
    <div class="mt10">
        <?php if ($_smarty_tpl->tpl_vars['origin']->value['media']['media_type'] == "youtube") {?>
            <div class="post-media">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_uid'];?>
" allowfullscreen=""></iframe>
                </div>
                <div class="post-media-meta">
                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['soucre_title'];?>
</a>
                    <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_text'];?>
</div>
                    <div class="source">youtube.com</div>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['origin']->value['media']['media_type'] == "vimeo") {?>
            <div class="post-media">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_uid'];?>
"></iframe>
                </div>
                <div class="post-media-meta">
                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['soucre_title'];?>
</a>
                    <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_text'];?>
</div>
                    <div class="source">vimeo.com</div>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['origin']->value['media']['media_type'] == "soundcloud") {?>
            <div class="post-media">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_uid'];?>
&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                </div>
                <div class="post-media-meta">
                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['soucre_title'];?>
</a>
                    <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['origin']->value['media']['source_text'];?>
</div>
                    <div class="source">soundcloud.com</div>
                </div>
            </div>
        <?php }?>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['origin']->value['post_type'] == "link") {?>
    <?php if ($_smarty_tpl->tpl_vars['origin']->value['link']['link_title'] || $_smarty_tpl->tpl_vars['origin']->value['link']['link_text'] || $_smarty_tpl->tpl_vars['origin']->value['link']['link_host']) {?>
        <div class="mt10">
            <div class="post-media">
                <?php if ($_smarty_tpl->tpl_vars['origin']->value['link']['link_thumbnail']) {?>
                    <div class="post-media-image">
                        <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['origin']->value['link']['link_thumbnail'];?>
');"></div>
                    </div>
                <?php }?>
                <div class="post-media-meta">
                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['origin']->value['link']['link_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['origin']->value['link']['link_title'];?>
</a>
                    <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['origin']->value['link']['link_text'];?>
</div>
                    <div class="source"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['origin']->value['link']['link_host'], 'UTF-8');?>
</div>
                </div>
            </div>
        </div>
    <?php }?>
<?php }
}
}
?>