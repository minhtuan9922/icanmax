<?php /* Smarty version 3.1.24, created on 2015-12-26 09:41:18
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:691464056567e60be498220_01141910%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bd9182a492c9d21657b7889a6547a1acc3f40c' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/settings.tpl',
      1 => 1451122718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '691464056567e60be498220_01141910',
  'variables' => 
  array (
    'view' => 0,
    'system' => 0,
    'user' => 0,
    'i' => 0,
    'blocks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e60be8b33c6_53570598',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e60be8b33c6_53570598')) {
function content_567e60be8b33c6_53570598 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '691464056567e60be498220_01141910';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav">
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings"><i class="fa fa-wrench fa-fw fa-lg pr10"></i> <?php echo __("Thiết lập tài khoản");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Sửa hồ sơ");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><i class="fa fa-shield fa-fw fa-lg pr10"></i> <?php echo __("Thiết lập riêng tư");?>
</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/linked"><i class="fa fa-share-alt fa-fw fa-lg pr10"></i> <?php echo __("Liên kết tài khoản");?>
</a>
                                </li>
                            <?php }?>
                        <?php }?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking"><i class="fa fa-minus-circle fa-fw fa-lg pr10"></i> <?php echo __("Quản lý chặn");?>
</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-9">
            <div class="panel panel-default">

                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-wrench pr5 panel-icon"></i>
                            <strong><?php echo __("Thiết lập tài khoản");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#username" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Tên đăng nhập");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#email" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Bảo mật");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#password" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Mật khẩu");?>
</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- username tab -->
                        <div class="tab-pane active" id="username">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=username">
                                <div class="form-group">
                                    <label for="username"><?php echo __("Tên đăng nhập");?>
</label>
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" disabled="disabled">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" disabled="disabled"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- username tab -->
<?php echo '<script'; ?>
 id="phone" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title">Hướng dẫn thay đổi số điện thoại</h5>
    </div>
    <div class="modal-body">
        <p>Có người đăng nhập vào tài khoản này từ nơi khác! Nếu không phải là bạn vui lòng đổi mật khẩu. Vui lòng đăng nhập lại.</p>
    </div>
    <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
    </div>
<?php echo '</script'; ?>
>
                        <!-- email tab -->
                        <div class="tab-pane" id="email">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=email">
                                <div class="form-group">
                                    <label for="email"><?php echo __("Địa chỉ Email");?>
</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">
                                </div>
<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['phone'] == null) {?>
                                <div class="form-group">
                                    <label for="username"><?php echo __("Số điện thoại");?>
 (<a class="text-link" data-toggle="modal" data-url="#phone">Hướng dẫn</a>)</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['phone'];?>
">
                                </div>
<?php } else { ?>
                                <div class="form-group">
                                    <label for="username"><?php echo __("Số điện thoại");?>
 (<a class="text-link" data-toggle="modal" data-url="#phone">Hướng dẫn lấy mã</a>)</label>
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['phone'];?>
" disabled="disabled">
                                </div>
<?php }?>
                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- email tab -->

                        <!-- password tab -->
                        <div class="tab-pane" id="password">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=password">
                                <div class="form-group">
                                    <label for="current"><?php echo __("Mật khẩu cũ");?>
</label>
                                    <input type="password" class="form-control" name="current" id="current">
                                </div>
                                <div class="form-group">
                                    <label for="new"><?php echo __("Mật khẩu mới");?>
</label>
                                    <input type="password" class="form-control" name="new" id="new">
                                </div>
                                <div class="form-group">
                                    <label for="confirm"><?php echo __("Nhập lại mật khẩu mới");?>
</label>
                                    <input type="password" class="form-control" name="confirm" id="confirm">
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- password tab -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-wrench pr5 panel-icon"></i>
                            <strong><?php echo __("Sửa hồ sơ");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#basic" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Căn bản");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#work" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Nghề nghiệp");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#location" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Vị trí");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#education" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Học thức");?>
</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- basic tab -->
                        <div class="tab-pane active" id="basic">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=basic">
                                <div class="form-group">
                                    <label for="fullname"><?php echo __("Tên hiển thị");?>
</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="gender"><?php echo __("Tôi là");?>
</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="none"><?php echo __("Chọn giới tính");?>
:</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "M") {?>selected<?php }?> value="M"><?php echo __("Trai");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "F") {?>selected<?php }?> value="F"><?php echo __("Gái");?>
</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Sinh nhật");?>
</label>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_month">
                                                <option value="none"><?php echo __("Chọn tháng");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Tháng 1");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Tháng 2");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Tháng 3");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Tháng 4");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("Tháng 5");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Tháng 6");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Tháng 7");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Tháng 8");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Tháng 9");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Tháng 10");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Tháng 11");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Tháng 12");?>
</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_day">
                                                <option value="none"><?php echo __("Chọn ngày");?>
</option>
                                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_year">
                                                <option value="none"><?php echo __("Chọn năm");?>
</option>
                                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2015+1 - (1905) : 1905-(2015)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- basic tab -->

                        <!-- work tab -->
                        <div class="tab-pane" id="work">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=work">
                                <div class="form-group">
                                    <label for="work_title"><?php echo __("Nghề nghiệp");?>
</label>
                                    <input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="work_place"><?php echo __("Nơi làm việc");?>
</label>
                                    <input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- work tab -->

                        <!-- location tab -->
                        <div class="tab-pane" id="location">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=location">
                                
                                <div class="form-group">
                                    <label for="city"><?php echo __("Thành phố hiện tại");?>
</label>
                                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="hometown"><?php echo __("Quên nhà");?>
</label>
                                    <input type="text" class="form-control" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- location tab -->

                        <!-- education tab -->
                        <div class="tab-pane" id="education">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=education">
                                
                                <div class="form-group">
                                    <label for="edu_major"><?php echo __("Chính");?>
</label>
                                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="edu_school"><?php echo __("Trường học");?>
</label>
                                    <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="edu_class"><?php echo __("Lớp");?>
</label>
                                    <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo __("Lưu thay đổi");?>
</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- education tab -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-shield pr5 panel-icon"></i>
                        <strong><?php echo __("Privacy Settings");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=privacy">
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_chat">
                                    <?php echo __("Trò chuyện");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_chat" id="privacy_chat">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">
                                            <?php echo __("Ngoại tuyến");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">
                                            <?php echo __("Trực tuyến");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_birthdate">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("ngày sinh của bạn");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_birthdate" id="privacy_birthdate">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_work">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("nơi làm việc của tôi");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_work" id="privacy_work">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_location">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("vị trí của tôi");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_location" id="privacy_location">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_education">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("học thức");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_education" id="privacy_education">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_friends">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("bạn bè của tôi");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_friends" id="privacy_friends">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                                            <?php echo __("Chỉ tôi");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_pages">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("trang tôi thích");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_pages" id="privacy_pages">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                                            <?php echo __("Chỉ tôi");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_groups">
                                    <?php echo __("Ai có thể xem");?>
 <?php echo __("nhóm tôi tham gia");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_groups" id="privacy_groups">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Mọi người");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Bạn bè");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                                            <?php echo __("Chỉ tôi");?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-7 col-sm-offset-5">
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
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-share-alt pr5 panel-icon"></i>
                        <strong><?php echo __("Liên kết tài khoản");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-facebook-square fa-4x" style="color: #3B579D"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Ngắt kết nối");?>
</a>
                                                    <?php } else { ?>
                                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Kết nối");?>
</a>
                                                    <?php }?>
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        <?php echo __("Facebook");?>

                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                                    <?php echo __("Ngắt kết nối với tài khoản");?>
 <?php echo __("Facebook");?>

                                                    <?php } else { ?>
                                                    <?php echo __("Kết nối với tài khoản");?>
 <?php echo __("Facebook");?>

                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-twitter-square fa-4x" style="color: #55ACEE"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Ngắt kết nối");?>
</a>
                                                    <?php } else { ?>
                                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Kết nối");?>
</a>
                                                    <?php }?>
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        <?php echo __("Twitter");?>

                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                                    <?php echo __("Ngắt kết nối với tài khoản");?>
 <?php echo __("Twitter");?>

                                                    <?php } else { ?>
                                                    <?php echo __("Kết nối với tài khoản");?>
 <?php echo __("Twitter");?>

                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-google-plus-square fa-4x" style="color: #DC4A38"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Ngắt kết nối");?>
</a>
                                                    <?php } else { ?>
                                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Kết nối");?>
</a>
                                                    <?php }?>
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        <?php echo __("Google");?>

                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                                    <?php echo __("Ngắt kết nối với tài khoản");?>
 <?php echo __("Google");?>

                                                    <?php } else { ?>
                                                    <?php echo __("Kết nối với tài khoản");?>
 <?php echo __("Google");?>

                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php }?>
                                </ul>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-minus-circle pr5 panel-icon"></i>
                        <strong><?php echo __("Quản lý chặn");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?php echo __("Một khi bạn chặn ai đó , người đó không còn có thể nhìn thấy những điều mà bạn đăng trên dòng thời gian của bạn");?>
<br>
                            <?php echo __("Lưu ý : Không bao gồm các ứng dụng , trò chơi hoặc các nhóm bạn cả hai tham gia");?>

                        </div>

                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) > 0) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"blocked"), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                            </ul>
                        <?php } else { ?>
                            <p class="text-center text-muted">
                                <?php echo __("No blocked users");?>

                            </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="blocks">
                                <span><?php echo __("Xem thêm");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                        <?php }?>
                    </div>
                <?php }?>
                
            </div>
        </div>
        
    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>