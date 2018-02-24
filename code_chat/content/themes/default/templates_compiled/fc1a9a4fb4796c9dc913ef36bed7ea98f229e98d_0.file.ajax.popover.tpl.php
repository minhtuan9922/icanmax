<?php /* Smarty version 3.1.24, created on 2015-12-25 09:54:44
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.popover.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1581002485567d1264ce4388_50740092%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc1a9a4fb4796c9dc913ef36bed7ea98f229e98d' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.popover.tpl',
      1 => 1451028916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581002485567d1264ce4388_50740092',
  'variables' => 
  array (
    'type' => 0,
    'profile' => 0,
    'system' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1264e0bcd3_31968914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1264e0bcd3_31968914')) {
function content_567d1264e0bcd3_31968914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1581002485567d1264ce4388_50740092';
if ($_smarty_tpl->tpl_vars['type']->value == "user") {?>
    <!-- user popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>
                <div class="user-card-cover" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');"></div>
            <?php } else { ?>
                <div class="user-card-cover no-cover"></div>
            <?php }?>
            <div class="user-card-avatar">
                <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title="<?php echo __("Hồ sơ xác minh");?>
" class="fa fa-check"></i>
                <?php }?>
                <div class="info">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("theo dõi");?>
</a>
                </div>
            </div>
        </div>
        <div class="user-card-meta">
            <!-- mutual friends -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                <div class="mb10">
                    <i class="fa fa-users fa-fw pr5"></i>
                    <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("bạn chung");?>
</span>
                </div>
            <?php }?>
            <!-- mutual friends -->
            <!-- work -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_work_title'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-briefcase fa-fw pr5"></i>
                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("tại");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- work -->
            <!-- hometown -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_hometown'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-map-marker fa-fw pr5"></i>
                        <?php echo __("Từ");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- hometown -->
        </div>
        <div class="footer">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <i class="fa fa-check fa-fw"></i> <?php echo __("Bạn bè");?>

                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                    <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Xác nhận");?>
</div>
                    <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Từ chối");?>
</div>
                <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                    <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <i class="fa fa-check fa-user-plus"></i> <?php echo __("Yêu cầu kết bạn");?>

                    </div>
                <?php } else { ?>
                    <div class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <i class="fa fa-check fa-user-plus"></i> <?php echo __("Thêm bạn");?>

                    </div>
                <?php }?>

                <div class="btn-group">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                        <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <i class="fa fa-check"></i>
                            <?php echo __("Đang theo dõi");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <i class="fa fa-rss"></i>
                            <?php echo __("Theo dõi");?>

                        </button>
                    <?php }?>
                    <button type="button" class="btn btn-default js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
"><?php echo __("Message");?>
</button>
                </div>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                    <i class="fa fa-pencil"></i> <?php echo __("Cập nhật thông tin");?>

                </a>
            <?php }?>
        </div>
    </div>
    <!-- user popover -->
<?php } else { ?>
    <!-- page popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_cover']) {?>
                <div class="user-card-cover" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_cover'];?>
');"></div>
            <?php } else { ?>
                <div class="user-card-cover no-cover"></div>
            <?php }?>
            <div class="user-card-avatar">
                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title="<?php echo __("Hồ sơ xác minh");?>
" class="fa fa-check"></i>
                <?php }?>
                <div class="info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_likes'];?>
 <?php echo __("Đã thích");?>
</div>
            </div>
        </div>
        <div class="footer">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_like']) {?>
                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Bỏ thích");?>

                </button>
            <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Thích");?>

                </button>
            <?php }?>
        </div>
    </div>
    <!-- page popover -->
<?php }
}
}
?>