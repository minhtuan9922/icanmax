<?php /* Smarty version 3.1.24, created on 2015-12-25 08:45:47
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/reset.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1370875667567d023b3ceaa4_06966459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307f52a2aa8ca5433fec07773ea137059d086864' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/reset.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1370875667567d023b3ceaa4_06966459',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d023b44d5c0_39735366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d023b44d5c0_39735366')) {
function content_567d023b44d5c0_39735366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1370875667567d023b3ceaa4_06966459';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="page-title">
    <?php echo __("Khôi phục mật khẩu");?>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="js_ajax-forms" data-url="core/forget_password.php">
                <div class="form-group">
                    <label for="email"><?php echo __("Email");?>
</label>
                    <input name="email" id="email" type="text" class="form-control" required autofocus>
                    <p class="text-muted"><?php echo __("Nhập địa chỉ email bạn đã đăng ký và chúng tôi sẽ gửi email cho bạn một liên kết thiết lập lại");?>
.</p>
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
                <button type="submit" class="btn btn-lg btn-info btn-block"><?php echo __("Tiếp tục");?>
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