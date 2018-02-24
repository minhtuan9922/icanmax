<?php /* Smarty version 3.1.24, created on 2015-12-25 08:25:51
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.reports.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1494592006567cfd8f3829b5_50552200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259804daea25566e890c38f6aa55386832805ed6' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.reports.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1494592006567cfd8f3829b5_50552200',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfd8f4815f7_59030327',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfd8f4815f7_59030327')) {
function content_567cfd8f4815f7_59030327 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1494592006567cfd8f3829b5_50552200';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-bell pr5 panel-icon"></i>
        <strong><?php echo __("Reports");?>
</strong>
    </div>
    <div class="panel-body with-table">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
                <thead>
                    <tr>
                        <th><?php echo __("ID");?>
</th>
                        <th><?php echo __("Reporter Picture");?>
</th>
                        <th><?php echo __("Reporter Name");?>
</th>
                        <th><?php echo __("Node");?>
</th>
                        <th><?php echo __("Time");?>
</th>
                        <th><?php echo __("Actions");?>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
</td>
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
                                <?php echo $_smarty_tpl->tpl_vars['row']->value['user_fullname'];?>

                            </a>
                        </td>
                        <td>
                            <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
<br>
                        </td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "user") {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "post") {?>
                                <a class="btn btn-xs btn-info js_open_window" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" target="_blank">
                                    <i class="fa fa-search"></i>
                                </a>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="post" data-node="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "comment") {?>
                                <a class="btn btn-xs btn-info js_open_window" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                                    <i class="fa fa-search"></i>
                                </a>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="comment" data-node="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            <?php }?>
                            <button class="btn btn-xs btn-warning js_admin-deleter" data-handle="report" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                <i class="fa fa-eye"></i>
                            </button>
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
</div><?php }
}
?>