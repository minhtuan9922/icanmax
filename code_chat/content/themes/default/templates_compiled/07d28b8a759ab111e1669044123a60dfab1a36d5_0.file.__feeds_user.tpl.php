<?php /* Smarty version 3.1.24, created on 2015-12-26 08:51:23
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2075771860567e550b10c591_18580417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d28b8a759ab111e1669044123a60dfab1a36d5' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_user.tpl',
      1 => 1451039524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075771860567e550b10c591_18580417',
  'variables' => 
  array (
    '_parent' => 0,
    '_user' => 0,
    '_small' => 0,
    'system' => 0,
    '_connection' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e550b1866e8_39123082',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e550b1866e8_39123082')) {
function content_567e550b1866e8_39123082 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2075771860567e550b10c591_18580417';
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item" data-id="<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"><?php }?>
    <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_connection']->value == "request") {?>
                <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo __("Chấp nhận");?>
</div>
                <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo __("Từ chối");?>
</div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "add") {?>
                <div class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Thêm bạn");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "cancel") {?>
                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Yêu cầu kết bạn");?>

                </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "remove") {?>
                <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-fw"></i> <?php echo __("Bạn bè");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "follow") {?>
                <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-rss"></i>
                    <?php echo __("Theo dõi");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "unfollow") {?>
                <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Đang theo dõi");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "blocked") {?>
                <div class="btn btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-trash fa-fw"></i> <?php echo __("Bỏ chặn");?>

                </div>
                <?php }?>
            </div>
            <div>
                <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
</a>
                </span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['_connection']->value != "me" && $_smarty_tpl->tpl_vars['_user']->value['mutual_friends_count'] > 0) {?>
            <div>
                <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['mutual_friends_count'];?>
 <?php echo __("bạn chung");?>
</span>
            </div>
            <?php }?>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
?>