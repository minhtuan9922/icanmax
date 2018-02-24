<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:13
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_js_files.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1714532411567c9eb9ecf533_41801212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f12c4e1ec14cc9cac8d0aa400c448c3a324ba8' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_js_files.tpl',
      1 => 1446490902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714532411567c9eb9ecf533_41801212',
  'variables' => 
  array (
    'system' => 0,
    'secret' => 0,
    'page' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9eba03f496_19452015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9eba03f496_19452015')) {
function content_567c9eba03f496_19452015 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1714532411567c9eb9ecf533_41801212';
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
    __["Add Friend"] = '<?php echo __("Add Friend");?>
';
    __["Friends"] = '<?php echo __("Friends");?>
';
    __["Friend Request Sent"] = '<?php echo __("Friend Request Sent");?>
';
    __["Following"] = '<?php echo __("Following");?>
';
    __["Follow"] = '<?php echo __("Follow");?>
';
    __["Remove"] = '<?php echo __("Remove");?>
';
    __["Error"] = '<?php echo __("Error");?>
';
    __["Success"] = '<?php echo __("Success");?>
';
    __["Loading"] = '<?php echo __("Loading");?>
';
    __["Like"] = '<?php echo __("Like");?>
';
    __["Unlike"] = '<?php echo __("Unlike");?>
';
    __["Joined"] = '<?php echo __("Joined");?>
';
    __["Join Group"] = '<?php echo __("Join Group");?>
';
    __["Delete"] = '<?php echo __("Delete");?>
';
    __["Delete Cover"] = '<?php echo __("Delete Cover");?>
';
    __["Delete Picture"] = '<?php echo __("Delete Picture");?>
';
    __["Delete Post"] = '<?php echo __("Delete Post");?>
';
    __["Delete Comment"] = '<?php echo __("Delete Comment");?>
';
    __["Delete Conversation"] = '<?php echo __("Delete Conversation");?>
';
    __["Share Post"] = '<?php echo __("Share Post");?>
';
    __["Report User"] = '<?php echo __("Report User");?>
';
    __["Block User"] = '<?php echo __("Block User");?>
';
    __["Unblock User"] = '<?php echo __("Unblock User");?>
';
    __["Are you sure you want to delete this?"] = '<?php echo __("Are you sure you want to delete this?");?>
';
    __["Are you sure you want to remove your cover photo?"] = '<?php echo __("Are you sure you want to remove your cover photo?");?>
';
    __["Are you sure you want to remove your profile picture?"] = '<?php echo __("Are you sure you want to remove your profile picture?");?>
';
    __["Are you sure you want to delete this post?"] = '<?php echo __("Are you sure you want to delete this post?");?>
';
    __["Are you sure you want to share this post?"] = '<?php echo __("Are you sure you want to share this post?");?>
';
    __["Are you sure you want to delete this comment?"] = '<?php echo __("Are you sure you want to delete this comment?");?>
';
    __["Are you sure you want to delete this conversation?"] = '<?php echo __("Are you sure you want to delete this conversation?");?>
';
    __["Are you sure you want to report this user?"] = '<?php echo __("Are you sure you want to report this user?");?>
';
    __["Are you sure you want to block this user?"] = '<?php echo __("Are you sure you want to block this user?");?>
';
    __["Are you sure you want to unblock this user?"] = '<?php echo __("Are you sure you want to unblock this user?");?>
';
    __["There is some thing went worng!"] = '<?php echo __("There is some thing went worng!");?>
';
    __["There is no more data to show"] = 'There is no more data to show';
    __["This has been shared to your Timeline"] = '<?php echo __("This has been shared to your Timeline");?>
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