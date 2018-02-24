<?php /* Smarty version 3.1.24, created on 2015-12-25 08:25:20
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:131462039567cfd70dec6e0_30466881%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c85e9766c3afe4159194f734c22bd62d4d2212' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.settings.tpl',
      1 => 1451031917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131462039567cfd70dec6e0_30466881',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfd71016f02_47816338',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfd71016f02_47816338')) {
function content_567cfd71016f02_47816338 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '131462039567cfd70dec6e0_30466881';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-cog pr5 panel-icon"></i>
        <strong><?php echo __("Thiết lập");?>
</strong>
    </div>
    <div class="panel-body">
        <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php">
            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Phiên bản hệ thống");?>

                </label>
                <div class="col-sm-9">
                    <span class="help-block">
                        <?php echo $_smarty_tpl->tpl_vars['system']->value['version'];?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Tình trạng");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="system_live" class="onoffswitch-checkbox" id="system_live" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_live']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="system_live"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Chọn tắt để tắt toàn bộ trang web, chọn bật để khởi động trang web");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Thông báo tắt trang web");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="system_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_message'];?>
</textarea>
                    <span class="help-block">
                        <?php echo __("Thông báo cho người dùng khi tắt trang web");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Website Title");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_title" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                    <span class="help-block">
                        <?php echo __("Tiêu đề trang");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Mô tả trang");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="system_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_description'];?>
</textarea>
                    <span class="help-block">
                        <?php echo __("Description of your website");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Tên miền trang");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_domain" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_domain'];?>
">
                    <span class="help-block">
                        <?php echo __("Like: sngine.com (without 'www')");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Đường dẫn trang");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_url" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                    <span class="help-block">
                        <?php echo __("The path of your system");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Thư mục upload");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_uploads_directory" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads_directory'];?>
">
                    <span class="help-block">
                        <?php echo __("The path of uploads directory");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Tình trạng đăng ký");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="users_can_register" class="onoffswitch-checkbox" id="users_can_register" <?php if ($_smarty_tpl->tpl_vars['system']->value['users_can_register']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="users_can_register"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Chọn bật hoặc tắt đăng ký người dùng mới");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Email xác nhận");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_send_activation" class="onoffswitch-checkbox" id="email_send_activation" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_send_activation']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="email_send_activation"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Kích hoạt để buộc người dùng xác nhận Email khi đăng ký");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Đăng nhận qua mạng xã hội");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="social_login_enabled" class="onoffswitch-checkbox" id="social_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="social_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn registration/login via social media (Facebook, Twitter and etc) On and Off");?>

                    </span>
                </div>
            </div>

            <!-- facebook -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Facebook Login");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="facebook_login_enabled" class="onoffswitch-checkbox" id="facebook_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="facebook_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn registration/login via Facebook On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Facebook App ID");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="facebook_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_appid'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Facebook App Secret");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="facebook_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_secret'];?>
">
                </div>
            </div>
            <!-- facebook -->

            <!-- twitter -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Twitter Login");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="twitter_login_enabled" class="onoffswitch-checkbox" id="twitter_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="twitter_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn registration/login via Twitter On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Twitter App ID");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="twitter_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_appid'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Twitter App Secret");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="twitter_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_secret'];?>
">
                </div>
            </div>
            <!-- twitter -->

            <!-- google -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Google Login");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="google_login_enabled" class="onoffswitch-checkbox" id="google_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="google_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn registration/login via Google On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Google App ID");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="google_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_appid'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Google App Secret");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="google_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_secret'];?>
">
                </div>
            </div>
            <!-- google -->

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Emails");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_smtp_enabled" class="onoffswitch-checkbox" id="email_smtp_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="email_smtp_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Enable/Disable SMTP email system");?>
<br/>
                        <?php echo __("PHP mail() function will be used in case of disabled");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Server");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_server" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_server'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Require Authentication");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_smtp_authentication" class="onoffswitch-checkbox" id="email_smtp_authentication" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_authentication']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="email_smtp_authentication"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Enable/Disable SMTP email system");?>
<br/>
                        <?php echo __("PHP mail() function will be used in case of disabled");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Port");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_port'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Username");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_username'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("SMTP Password");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_password'];?>
">
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("reCAPTCHA Enabled");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="reCAPTCHA_enabled" class="onoffswitch-checkbox" id="reCAPTCHA_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="reCAPTCHA_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn reCAPTCHA On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("reCAPTCHA Site Key");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="reCAPTCHA_site_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("reCAPTCHA Secret Key");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="reCAPTCHA_secret_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_secret_key'];?>
">
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Minimum Results");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="min_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results'];?>
">
                    <span class="help-block">
                        <?php echo __("The Min number of results per request");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Minimum Even Results");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="min_results_even" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results_even'];?>
">
                    <span class="help-block">
                        <?php echo __("The Min even number of results per request");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Maximum Results");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="max_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
">
                    <span class="help-block">
                        <?php echo __("The Max number of results per request");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Games Enabled");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="games_enabled" class="onoffswitch-checkbox" id="games_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="games_enabled"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn the games On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>
                </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
            <!-- error -->
        </form>
    </div>
</div><?php }
}
?>