<?php /* Smarty version 3.1.24, created on 2015-12-25 10:20:06
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1693928240567d1856a3e467_43892256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57118c595384ff3758c309e3c0eb54c291292525' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/signup.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693928240567d1856a3e467_43892256',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1856ae7484_27245598',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1856ae7484_27245598')) {
function content_567d1856ae7484_27245598 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1693928240567d1856a3e467_43892256';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="mb20 text-center"><?php echo __("Đăng ký");?>
</h3>

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
                            <?php echo __("or");?>

                        </div>
                    </div>
                <?php }?>
            <?php }?>
            
            <form class="js_ajax-forms" data-url="core/signup.php">
                <div class="form-group">
                    <label for="full_name"><?php echo __("Tên hiển thị");?>
</label>
                    <input name="full_name" id="full_name" type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="username"><?php echo __("Tên đăng nhập");?>
</label>
                    <input name="username" id="username" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email"><?php echo __("Email");?>
</label>
                    <input name="email" id="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password"><?php echo __("Mật khẩu");?>
</label>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender"><?php echo __("Tôi là");?>
</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="none"><?php echo __("Chọn giới tính");?>
:</option>
                        <option value="Male"><?php echo __("Trai");?>
</option>
                        <option value="Female"><?php echo __("Gái");?>
</option>
                    </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                <div class="form-group">
                    <!-- reCAPTCHA -->
                    <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                    <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                    <!-- reCAPTCHA -->
                </div>
                <?php }?>
                <p class="text-muted">
                    <?php echo __("Bằng cách nhấn vào nút đăng ký là bạn đã đồng ý với ");?>
 <a href="/static/terms"><?php echo __("Các điều khoản");?>
</a>  của chúng tôi.
                </p>
                <button type="submit" class="btn btn-lg btn-success btn-block"><?php echo __("Tạo Tài Khoản");?>
</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>

        </div>

    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>