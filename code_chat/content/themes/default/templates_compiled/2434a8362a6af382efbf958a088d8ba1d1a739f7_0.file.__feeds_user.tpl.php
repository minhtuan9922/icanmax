<?php /* Smarty version 3.1.24, created on 2015-12-25 05:51:36
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/__feeds_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29436009567cd968d58919_20148729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2434a8362a6af382efbf958a088d8ba1d1a739f7' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/__feeds_user.tpl',
      1 => 1447587670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29436009567cd968d58919_20148729',
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
  'unifunc' => 'content_567cd968e0f858_66209092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cd968e0f858_66209092')) {
function content_567cd968e0f858_66209092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29436009567cd968d58919_20148729';
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
"><?php echo __("Confirm");?>
</div>
                <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "add") {?>
                <div class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Add Friend");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "cancel") {?>
                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "remove") {?>
                <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "follow") {?>
                <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-rss"></i>
                    <?php echo __("Follow");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "unfollow") {?>
                <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Following");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "blocked") {?>
                <div class="btn btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-trash fa-fw"></i> <?php echo __("Unblock");?>

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
 <?php echo __("mutual friends");?>
</span>
            </div>
            <?php }?>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
?>