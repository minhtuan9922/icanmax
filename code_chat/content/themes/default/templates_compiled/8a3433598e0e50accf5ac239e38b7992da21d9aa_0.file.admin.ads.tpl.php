<?php /* Smarty version 3.1.24, created on 2015-12-26 05:42:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.ads.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195221301567e28e0480f28_34735608%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3433598e0e50accf5ac239e38b7992da21d9aa' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.ads.tpl',
      1 => 1451028724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195221301567e28e0480f28_34735608',
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
  'unifunc' => 'content_567e28e05a51b3_89175900',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e28e05a51b3_89175900')) {
function content_567e28e05a51b3_89175900 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vnzuicom/public_html/fb/includes/libs/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '195221301567e28e0480f28_34735608';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/ads/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Thêm quảng cáo");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-usd pr5 panel-icon"></i>
        <strong><?php echo __("Ads");?>
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
                            <th><?php echo __("Thời gian");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {
echo __("Home Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "requests") {
echo __("Friends Requests Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {
echo __("Notifications Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {
echo __("Post Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {
echo __("Photo Page");
}?>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="ads" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/ads.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home"><?php echo __("Home Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "requests") {?>selected<?php }?> value="requests"><?php echo __("Friends Requests Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo __("Notifications Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post"><?php echo __("Post Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo __("Photo Page");?>
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
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle fa-lg"></i>
                <?php echo __("When you add mutiple ads at the samle location, they will be displayed randomly");?>

            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/ads.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option value="home"><?php echo __("Home Page");?>
</option>
                            <option value="requests"><?php echo __("Friends Requests Page");?>
</option>
                            <option value="notifications"><?php echo __("Notifications Page");?>
</option>
                            <option value="post"><?php echo __("Post Page");?>
</option>
                            <option value="photo"><?php echo __("Photo Page");?>
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