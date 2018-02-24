<?php /* Smarty version 3.1.24, created on 2015-12-26 08:43:39
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1057249352567e533bdd2d90_08902448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba3758611ee6e47df13946ff1bdebde698f5555' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.users.tpl',
      1 => 1451119415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057249352567e533bdd2d90_08902448',
  'variables' => 
  array (
    'sub_view' => 0,
    'system' => 0,
    'data' => 0,
    'rows' => 0,
    'row' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e533c1ff5b6_28329015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e533c1ff5b6_28329015')) {
function content_567e533c1ff5b6_28329015 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1057249352567e533bdd2d90_08902448';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" class="btn btn-info">
                    <?php echo __("Go to this profile");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-users pr5 panel-icon"></i>
        <strong><?php echo __("Users");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != '' && $_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?> &rsaquo; <strong><?php echo __(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sub_view']->value));?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['user_fullname'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?>
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Đại diện");?>
</th>
                            <th><?php echo __("Tên đăng nhập");?>
</th>
                            <th><?php echo __("Tên hiển thị");?>
</th>
                            <th><?php echo __("IP");?>
</th>
                            <th><?php echo __("Tham gia");?>
</th>
                            <th><?php echo __("Kích hoạt");?>
</th>
                            <th><?php echo __("Hành động");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                        <tr>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</a></td>
                            <td>
                                <a target="_blank" class="x-image sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
);">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_fullname'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_ip'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_registered'],"%e %B %Y");?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['user_activated']) {?>
                                <span class="label label-success"><?php echo __("Vâng");?>
</span>
                                <?php } else { ?>
                                <span class="label label-danger"><?php echo __("Không");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
</span>
                            <?php echo __("ID tài khoản");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_registered'],"%e %B %Y");?>
</span>
                            <?php echo __("Tham gia");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_last_login'],"%e %B %Y");?>
</span>
                            <?php echo __("Đăng nhập cuối");?>

                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['friends'];?>
</span>
                            <?php echo __("Bạn bè");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followings'];?>
</span>
                            <?php echo __("Đang theo dõi");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followers'];?>
</span>
                            <?php echo __("Người theo dõi");?>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#basic" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Cơ bản");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#profile" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Hồ sơ");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#username" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Tên đăng nhập");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#email" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Email");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#password" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Mật khẩu");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#privacy" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Riêng tư");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- basic tab -->
                <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=basic">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Xác thực");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_verified" class="onoffswitch-checkbox" id="user_verified" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_verified']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_verified"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Khóa");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_blocked" class="onoffswitch-checkbox" id="user_blocked" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_blocked']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_blocked"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Kích hoạt Email");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_activated" class="onoffswitch-checkbox" id="user_activated" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_activated']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_activated"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Password Rested");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_reseted" class="onoffswitch-checkbox" id="user_reseted" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_reseted']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_reseted"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Chức vụ");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_group">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '1') {?>selected<?php }?>>
                                        <?php echo __("Admins");?>

                                    </option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '2') {?>selected<?php }?>>
                                        <?php echo __("Moderators");?>

                                    </option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '3') {?>selected<?php }?>>
                                        <?php echo __("Người dùng");?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("IP");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_ip'];?>
">
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
                <!-- basic tab -->

                <!-- profile tab -->
                <div class="tab-pane" id="profile">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=profile">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Tên hiển thị");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="user_fullname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_fullname'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Giới tính");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_gender">
                                    <option value="none"><?php echo __("Chọn giới tính");?>
:</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "M") {?>selected<?php }?> value="M">
                                        <?php echo __("Con trai");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "F") {?>selected<?php }?> value="F">
                                        <?php echo __("Con gái");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Sinh nhật");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_month">
                                            <option value="none"><?php echo __("Select Month");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Tháng 1");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Tháng 2");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Tháng 3");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Tháng 4");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("Tháng 5");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Tháng 6");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Tháng 7");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Tháng 8");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Tháng 9");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Tháng 10");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Tháng 11");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Tháng 12");?>
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Nghề nghiệp");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_title'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Nơi làm việc");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_place" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_place'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Thành phố hiện tại");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_current_city" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_current_city'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Nơi sinh");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_hometown" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_hometown'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Major");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_major" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_major'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Đã học tại");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_school" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_school'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Lớp");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_class'];?>
">
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
                <!-- profile tab -->

                <!-- username tab -->
                <div class="tab-pane" id="username">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=username&username=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Tên đăng nhập");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
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
                <!-- username tab -->

                <!-- email tab -->
                <div class="tab-pane" id="email">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=email&email=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_email'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Địa chỉ Email");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_email'];?>
">
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
                <!-- email tab -->

                <!-- password tab -->
                <div class="tab-pane" id="password">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=password">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Mật khẩu mới");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="user_password">
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
                <!-- password tab -->

                <!-- privacy tab -->
                <div class="tab-pane" id="privacy">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/user.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&edit=privacy">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Trò chuyện");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_chat_enabled">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">
                                        <?php echo __("Ngoại tuyến");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">
                                        <?php echo __("Trực tuyến");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Ai có thể xem của bạn");?>
 <?php echo __("birthdate");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_birthdate">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("work info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_work">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("location info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_location">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("education info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_education">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("friends");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_friends">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_pages">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_groups">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                        <!-- error -->

                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-5">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- privacy tab -->
            </div>
            <!-- tabs content -->
        </div>

    <?php }?>
</div><?php }
}
?>