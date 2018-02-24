<?php /* Smarty version 3.1.24, created on 2015-12-26 04:27:46
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.verified.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1970948474567e1742a64707_09108431%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00fa142fc5aa3f3692cfd94698c8a1a6bffa3bd' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.verified.tpl',
      1 => 1451104062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970948474567e1742a64707_09108431',
  'variables' => 
  array (
    'sub_view' => 0,
    'rows' => 0,
    'system' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e1742b605d2_78441264',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e1742b605d2_78441264')) {
function content_567e1742b605d2_78441264 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1970948474567e1742a64707_09108431';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-check-circle pr5 panel-icon"></i>
        <strong><?php echo __("Xác thực");?>
</strong> &rsaquo; <strong><?php echo __(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sub_view']->value));?>
</strong>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "users") {?>
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
                            <td class="post-avatar">
                                <a target="_blank" class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "pages") {?>
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Đại diện");?>
</th>
                            <th><?php echo __("URL");?>
</th>
                            <th><?php echo __("Tiêu đề");?>
</th>
                            <th><?php echo __("Đã thích");?>
</th>
                            <th><?php echo __("Xác thực");?>
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
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>

                                </a>
                            </td>
                            <td class="post-avatar">
                                <a target="_blank" class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['row']->value['page_picture'];?>
);">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_likes'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['page_verified']) {?>
                                <span class="label label-success"><?php echo __("Vâng");?>
</span>
                                <?php } else { ?>
                                <span class="label label-danger"><?php echo __("Không");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_delete-page" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/pages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
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

    <?php }?>
</div><?php }
}
?>