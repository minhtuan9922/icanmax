<?php /* Smarty version 3.1.24, created on 2015-12-25 08:13:47
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.static.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:240235523567cfabbb84240_64953525%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8461b62ebd606dcd0c325a433430845ae47a20e' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.static.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240235523567cfabbb84240_64953525',
  'variables' => 
  array (
    'sub_view' => 0,
    'system' => 0,
    'data' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfabbc4f420_90397650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfabbc4f420_90397650')) {
function content_567cfabbc4f420_90397650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '240235523567cfabbb84240_64953525';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/static/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Page");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-file pr5 panel-icon"></i>
        <strong><?php echo __("Static Pages");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __('Add New');?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Page URL");?>
</th>
                            <th><?php echo __("Page Title");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
</td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['page_url'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>
</td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="static" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/static/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/static.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("URL");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_url'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="page_text" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_text'];?>
</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/static.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("URL");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_url">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="page_title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="page_text" rows="8"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
    <?php }?>
</div><?php }
}
?>