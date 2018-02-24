<?php /* Smarty version 3.1.24, created on 2016-12-07 10:05:36
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:315895847def02e5dd2_06587599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51fe12e77f68a8e1052e55222ca418706192caf5' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_header.tpl',
      1 => 1451028450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315895847def02e5dd2_06587599',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847def0470547_72621623',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847def0470547_72621623')) {
function content_5847def0470547_72621623 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '315895847def02e5dd2_06587599';
?>
<body 
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    class="visitor"
<?php } elseif ($_smarty_tpl->tpl_vars['system']->value['email_send_activation'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_activated']) {?>
    class="n_activated"
<?php } elseif (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?>
    class="n_live"
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    data-chat-enabled=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'];?>

<?php }?>
>
    
    <!-- main wrapper -->
    <div class="main-wrapper">
        
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['email_send_activation'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_activated']) {?>
        <!-- top-bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs">
                        <?php echo __("Xin vui lòng đến");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</span> <?php echo __("để hoàn tất quá trình đăng ký");?>
.
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php">
                            <?php echo __("Gửi lại email kích hoạt");?>

                        </span>
                         - 
                        <span class="text-link" data-toggle="modal" data-url="#activation-email-reset">
                            <?php echo __("Thay đổi Email");?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-bar -->
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?>
        <!-- top-bar alert-->
        <div class="top-bar alert-bar">
            <div class="container">
                <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
                <span class="hidden-xs"><?php echo __("Hệ thống này đã được tắt");?>
.</span>
                <span><?php echo __("Bật nó lên từ");?>
</span> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/settings"><?php echo __("Admin Panel");?>
</a>
            </div>
        </div>
        <!-- top-bar alert-->
        <?php }?>

        <div class="main-header">
            <div class="container header-container">
                
                <div class="brand-container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>hidden-xs<?php }?>">
                    <!-- brand -->
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
" class="brand"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
</a>
                    <!-- brand -->
                </div>

                <!-- navbar-collapse -->
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                        
                        <!-- search -->
                        <?php echo $_smarty_tpl->getSubTemplate ('_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        <!-- search -->

                        <!-- navbar-container -->
                        <div class="navbar-container">
                            <ul class="nav navbar-nav">
                                
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                                <!-- admin panel -->
                                <li class="is-admin">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin">
                                        <i class="fa fa-tachometer fa-lg"></i>
                                    </a>
                                </li>
                                <!-- admin panel -->
                                <?php }?>

                                <!-- home -->
                                <li <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>class="is-admin"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                                        <i class="fa fa-home fa-lg"></i>
                                    </a>
                                </li>
                                <!-- home -->
                                
                                <!-- friend requests -->
                                <?php echo $_smarty_tpl->getSubTemplate ('_header.friend_requests.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <!-- friend requests -->

                                <!-- messages -->
                                <?php echo $_smarty_tpl->getSubTemplate ('_header.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <!-- messages -->

                                <!-- notifications -->
                                <?php echo $_smarty_tpl->getSubTemplate ('_header.notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <!-- notifications -->

                                <!-- search -->
                                <li class="visible-xs-block <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>is-admin<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search">
                                        <i class="fa fa-search fa-lg"></i>
                                    </a>
                                </li>
                                <!-- search -->

                                <!-- user-menu -->
                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>is-admin<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">
                                        <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
</span>
                                        <i class="caret"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
"><?php echo __("Cá nhân");?>
</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings"><?php echo __("Cài đặt");?>
</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/page"><?php echo __("Tạo trang");?>
</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("Quản lý trang");?>
</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/group"><?php echo __("Tạo nhóm");?>
</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><?php echo __("Quản lý nhóm");?>
</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signout"><?php echo __("Đăng xuất");?>
</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- user-menu -->
                            </ul>
                        </div>
                        <!-- navbar-container -->
                        
                    <?php }?>
                </div>
                <!-- navbar-collapse -->

            </div>
        </div><?php }
}
?>