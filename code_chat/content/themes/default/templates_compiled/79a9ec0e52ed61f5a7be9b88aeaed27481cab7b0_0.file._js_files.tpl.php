<?php /* Smarty version 3.1.24, created on 2016-12-07 10:05:35
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_js_files.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31645847deefe8cf11_58332440%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a9ec0e52ed61f5a7be9b88aeaed27481cab7b0' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_js_files.tpl',
      1 => 1451123524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31645847deefe8cf11_58332440',
  'variables' => 
  array (
    'system' => 0,
    'secret' => 0,
    'page' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847def0126861_85248195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847def0126861_85248195')) {
function content_5847def0126861_85248195 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31645847deefe8cf11_58332440';
?>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/html5shiv/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->

<!-- Initialize -->
<?php echo '<script'; ?>
 type="text/javascript">
    // initialize vars
    var site_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
";
    var ajax_path = site_path+'/includes/ajax/';
    var uploads_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
";
    var secret = '<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    // initialize translated strings
    var __ = [];
    __["Add Friend"] = '<?php echo __("Thêm bạn");?>
';
    __["Friends"] = '<?php echo __("Bạn bè");?>
';
    __["Friend Request Sent"] = '<?php echo __("Đã gửi yêu cầu");?>
';
    __["Following"] = '<?php echo __("Đang theo dõi");?>
';
    __["Follow"] = '<?php echo __("Theo dõi");?>
';
    __["Remove"] = '<?php echo __("Gỡ bỏ");?>
';
    __["Error"] = '<?php echo __("Lỗi");?>
';
    __["Success"] = '<?php echo __("Thành công");?>
';
    __["Loading"] = '<?php echo __("Đang xử lý...");?>
';
    __["Like"] = '<?php echo __("Thích");?>
';
    __["Unlike"] = '<?php echo __("Bỏ thích");?>
';
    __["Joined"] = '<?php echo __("Tham gia");?>
';
    __["Join Group"] = '<?php echo __("Tham gia nhóm");?>
';
    __["Delete"] = '<?php echo __("Xóa");?>
';
    __["Delete Cover"] = '<?php echo __("Xóa ảnh bìa");?>
';
    __["Delete Picture"] = '<?php echo __("Xóa ảnh");?>
';
    __["Delete Post"] = '<?php echo __("Xóa bài đăng");?>
';
    __["Delete Comment"] = '<?php echo __("Xóa bình luận");?>
';
    __["Delete Conversation"] = '<?php echo __("Xóa cuộc trò chuyện");?>
';
    __["Share Post"] = '<?php echo __("Chia sẽ bài đăng");?>
';
    __["Report User"] = '<?php echo __("Báo cáo tài khoản");?>
';
    __["Block User"] = '<?php echo __("Chặn");?>
';
    __["Unblock User"] = '<?php echo __("Bỏ chặn");?>
';
    __["Are you sure you want to delete this?"] = '<?php echo __("Bạn có chắc chắn muốn xóa nội dung này?");?>
';
    __["Are you sure you want to remove your cover photo?"] = '<?php echo __("Bạn có chắc chắn muốn xóa ảnh bìa của bạn?");?>
';
    __["Are you sure you want to remove your profile picture?"] = '<?php echo __("Bạn có chắc là bạn muốn loại ảnh đại diện của bạn?");?>
';
    __["Are you sure you want to delete this post?"] = '<?php echo __("Bạn có chắc muốn xóa bài viết này?");?>
';
    __["Are you sure you want to share this post?"] = '<?php echo __("Bạn có chắc chắn bạn muốn chia sẻ nội dung này lên dòng thời gian của bạn?");?>
';
    __["Are you sure you want to delete this comment?"] = '<?php echo __("Bạn có chắc muốn xóa bình luận này?");?>
';
    __["Are you sure you want to delete this conversation?"] = '<?php echo __("Bạn có chắc chắn muốn xóa cuộc trò chuyện này?");?>
';
    __["Are you sure you want to report this user?"] = '<?php echo __("Bạn có chắc muốn báo cáo người dùng này?");?>
';
    __["Are you sure you want to block this user?"] = '<?php echo __("Bạn có chắc chắn bạn muốn chặn người dùng này?");?>
';
    __["Are you sure you want to unblock this user?"] = '<?php echo __("Bạn có chắc chắn bạn muốn bỏ chặn người dùng này?");?>
';
    __["There is some thing went worng!"] = '<?php echo __("Đã có lỗi xãy ra! Vui lòng thử lại.");?>
';
    __["There is no more data to show"] = 'Không có dữ liệu để hiển thị';
    __["This has been shared to your Timeline"] = '<?php echo __("Nội dung này đã được chia sẻ lên dòng bạn thời gian");?>
';
<?php echo '</script'; ?>
>
<!-- Initialize -->

<!-- jQuery & jQuery UI -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/jquery/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/jquery/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
<!-- jQuery & jQuery UI -->

<!-- Bootstrap -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->

<!-- Mustache -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/mustache/mustache.min.js"><?php echo '</script'; ?>
>
<!-- Mustache -->

<!-- Plugins -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/autogrow/autogrow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/moment/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/form/jquery.form.js"><?php echo '</script'; ?>
>
<!-- Plugins -->

<?php if ($_smarty_tpl->tpl_vars['page']->value == "admin") {?>
    <!-- dataTables -->
    <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/dataTables/dataTables.bootstrap.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/dataTables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/dataTables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- dataTables -->

    <!-- metisMenu -->
    <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/metisMenu/metisMenu.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/plugins/metisMenu/metisMenu.js"><?php echo '</script'; ?>
>
    <!-- metisMenu -->
<?php }?>

<!-- Sngine -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/core.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/user.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/chat.js"><?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value == "admin") {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/js/admin.js"><?php echo '</script'; ?>
>
<?php }?>
<!-- Sngine --><?php }
}
?>