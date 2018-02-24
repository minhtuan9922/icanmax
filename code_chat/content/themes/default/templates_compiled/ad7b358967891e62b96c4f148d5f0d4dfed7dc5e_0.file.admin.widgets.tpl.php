<?php /* Smarty version 3.1.24, created on 2015-12-26 04:24:51
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.widgets.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:724879886567e16932f4048_69588344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7b358967891e62b96c4f148d5f0d4dfed7dc5e' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.widgets.tpl',
      1 => 1451103889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724879886567e16932f4048_69588344',
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
  'unifunc' => 'content_567e16934349b2_20182442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e16934349b2_20182442')) {
function content_567e16934349b2_20182442 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '724879886567e16932f4048_69588344';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/widgets/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Thêm mới");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-cubes pr5 panel-icon"></i>
        <strong><?php echo __("Chức năng");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __('Thêm mới');?>
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
                            <th><?php echo __("Tiêu đề");?>
</th>
                            <th><?php echo __("Vị trí");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {
echo __("Trang chủ");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "requests") {
echo __("Trang yêu cầu kết bạn");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {
echo __("Trang thông báo");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {
echo __("Trang bài viết");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {
echo __("Trang ảnh");
}?>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="widget" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/widgets/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['widget_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Tiêu đề");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Vị trí");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home"><?php echo __("Trang chủ");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "requests") {?>selected<?php }?> value="requests"><?php echo __("Trang yêu cầu kết bạn");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo __("Trang thông báo");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post"><?php echo __("Trang bài viết");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo __("Trang ảnh");?>
</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="code" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle fa-lg"></i>
                <?php echo __("When you add mutiple widgets at the samle location, they will be displayed randomly");?>

            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Tiêu đề");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Vị trí");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option value="home"><?php echo __("Trang chủ");?>
</option>
                            <option value="requests"><?php echo __("Yêu cầu kết bạn");?>
</option>
                            <option value="notifications"><?php echo __("Trang thông báo");?>
</option>
                            <option value="post"><?php echo __("Trang bài viết");?>
</option>
                            <option value="photo"><?php echo __("Trang ảnh");?>
</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="code" rows="8"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Thêm mới");?>
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