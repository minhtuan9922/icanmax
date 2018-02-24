<?php /* Smarty version 3.1.24, created on 2015-12-25 08:19:07
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1541748326567cfbfbd0cb35_28120277%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd25853fe18ee2a8f5a8dff23e58a5f9080fc2d' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.dashboard.tpl',
      1 => 1451031542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541748326567cfbfbd0cb35_28120277',
  'variables' => 
  array (
    'insights' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfbfbdf0d07_54414153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfbfbdf0d07_54414153')) {
function content_567cfbfbdf0d07_54414153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1541748326567cfbfbd0cb35_28120277';
?>
<div class="row">
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-user bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users'];?>
</span><br>
                <span class="text-bg"><?php echo __("Người dùng");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users"><?php echo __("Quản lý người dùng");?>
</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-male bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_males'];?>
</span><br>
                <span><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_males_percent'];?>
%</span><br>
                <span class="text-bg"><?php echo __("Con trai");?>
</span><br>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-female bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_females'];?>
</span><br>
                <span><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_females_percent'];?>
%</span><br>
                <span class="text-bg"><?php echo __("Con gái");?>
</span><br>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="stat-panel danger">
            <div class="stat-cell">
                <i class="fa fa-minus-circle bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['banned'];?>
</span><br>
                <span class="text-bg"><?php echo __("Bị khóa");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/banned"><?php echo __("Manage Banned");?>
</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel warning">
            <div class="stat-cell">
                <i class="fa fa-envelope bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['not_activated'];?>
</span><br>
                <span class="text-bg"><?php echo __("Chưa kích hoạt");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users"><?php echo __("Quản lý người dùng");?>
</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-clock-o bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['online'];?>
</span><br>
                <span class="text-bg"><?php echo __("Trực tuyến");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/online"><?php echo __("Đang trực tuyến");?>
</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel success">
            <div class="stat-cell">
                <i class="fa fa-newspaper-o bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts'];?>
</span><br>
                <span class="text-bg"><?php echo __("Bài đăng");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/reports"><?php echo __("Quản lý báo cáo");?>
</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel success">
            <div class="stat-cell">
                <i class="fa fa-comments bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['comments'];?>
</span><br>
                <span class="text-bg"><?php echo __("Bình luận");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/reports"><?php echo __("Quản lý báo cáo");?>
</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-flag bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['pages'];?>
</span><br>
                <span class="text-bg"><?php echo __("Trang");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/pages"><?php echo __("Quản lý trang");?>
</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-users bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['groups'];?>
</span><br>
                <span class="text-bg"><?php echo __("Nhóm");?>
</span><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/groups"><?php echo __("Quản lý nhóm");?>
</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-comments-o bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['messages'];?>
</span><br>
                <span class="text-bg"><?php echo __("Tin nhắn");?>
</span><br>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-globe bg-icon"></i>
                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['notifications'];?>
</span><br>
                <span class="text-bg"><?php echo __("Thông báo");?>
</span><br>
            </div>
        </div>
    </div>
</div><?php }
}
?>