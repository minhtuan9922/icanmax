<?php /* Smarty version 3.1.24, created on 2016-12-07 10:10:23
         compiled from "D:/code_new/code_chat/content/themes/default/templates/admin.dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:267885847e00f1faeb1_90995484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb092b3d5e98a80a7249c54d839d37c15ff5f3e8' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/admin.dashboard.tpl',
      1 => 1451031542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267885847e00f1faeb1_90995484',
  'variables' => 
  array (
    'insights' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e00f2d6546_90393877',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e00f2d6546_90393877')) {
function content_5847e00f2d6546_90393877 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '267885847e00f1faeb1_90995484';
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