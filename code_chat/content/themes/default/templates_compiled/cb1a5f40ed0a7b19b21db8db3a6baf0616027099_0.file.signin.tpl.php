<?php /* Smarty version 3.1.24, created on 2015-12-25 10:20:31
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1686784891567d186fd8cf86_36694233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1a5f40ed0a7b19b21db8db3a6baf0616027099' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/signin.tpl',
      1 => 1451038827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686784891567d186fd8cf86_36694233',
  'variables' => 
  array (
    'highlight' => 0,
    'system' => 0,
    'username_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d186fe491b4_46941874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d186fe491b4_46941874')) {
function content_567d186fe491b4_46941874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1686784891567d186fd8cf86_36694233';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="mb20 text-center"><?php echo __("Đăng nhập");?>
</h3>

            <?php if ($_smarty_tpl->tpl_vars['highlight']->value) {?>
            <div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                    <div class="mb20">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> <?php echo __("Login with");?>
 <?php echo __("Facebook");?>

                        </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-block btn-social btn-twitter">
                            <i class="fa fa-twitter"></i> <?php echo __("Login with");?>
 <?php echo __("Twitter");?>

                        </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-block btn-social btn-google">
                            <i class="fa fa-google"></i> <?php echo __("Login with");?>
 <?php echo __("Google");?>

                        </a>
                        <?php }?>
                    </div>
                    <div class="hr-heading mb10">
                        <div class="hr-heading-text">
                            <?php echo __("hoặc");?>

                        </div>
                    </div>
                <?php }?>
            <?php }?>

            <form class="js_ajax-forms" data-url="core/signin.php">
                <div class="form-group">
                    <label for="username_email"><?php echo __("Email");?>
 <?php echo __("hoặc");?>
 <?php echo __("Tên đăng nhập");?>
</label>
                    <input name="username_email" id="username_email" value="<?php echo $_smarty_tpl->tpl_vars['username_email']->value;?>
" type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password"><?php echo __("Mật khẩu");?>
</label>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="checkbox clearfix">
                    <label>
                        <input name="remember" type="checkbox"> <?php echo __("Lưu đăng nhập");?>

                    </label>
                </div>
                <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block"><?php echo __("Đăng nhập");?>
</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
            
            <div class="mt20">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Quên mật khẩu?");?>
</a>
            </div>

        </div>
    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>