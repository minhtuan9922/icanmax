<?php /* Smarty version 3.1.24, created on 2015-12-25 09:31:52
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/signup_social.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2066037038567d0d08b25c00_18278724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83aa72f6ec06f8bc69faa3316c1787731baf86dc' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/signup_social.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2066037038567d0d08b25c00_18278724',
  'variables' => 
  array (
    'user_profile' => 0,
    'provider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d0d08bd6d07_26644755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d0d08bd6d07_26644755')) {
function content_567d0d08bd6d07_26644755 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2066037038567d0d08b25c00_18278724';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="mb20 text-center"><?php echo __("Welcome");?>
 <?php echo $_smarty_tpl->tpl_vars['user_profile']->value->displayName;?>
</h3>

            <div class="text-center">
                <img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->photoURL;?>
" width="99" height="99">
            </div>
            
            <form class="js_ajax-forms" data-url="core/signup_social.php">
                <div class="form-group">
                    <label for="full_name"><?php echo __("Full name");?>
</label>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->displayName;?>
" name="full_name" id="full_name" type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="username"><?php echo __("Username");?>
</label>
                    <input name="username" id="username" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email"><?php echo __("Email");?>
</label>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->email;?>
" name="email" id="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password"><?php echo __("Password");?>
</label>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender"><?php echo __("I am");?>
</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="none"><?php echo __("Select Sex");?>
:</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user_profile']->value->gender == "male") {?>selected<?php }?> value="Male"><?php echo __("Male");?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['user_profile']->value->gender == "female") {?>selected<?php }?> value="Female"><?php echo __("Female");?>
</option>
                    </select>
                </div>
                <p class="text-muted">
                    <?php echo __("By clicking Sign Up, you agree to our");?>
 <a href="#"><?php echo __("Terms");?>
</a>
                </p>
                <input value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->photoURL;?>
" name="avatar" type="hidden">
                <input value="<?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
" name="provider" type="hidden">
                <button type="submit" class="btn btn-lg btn-success btn-block"><?php echo __("Sign Up");?>
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