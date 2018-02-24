<?php /* Smarty version 3.1.24, created on 2015-12-25 08:25:52
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.pages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:81204053567cfd90500961_79000859%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd61b767346e1c4f782f78f44563253108e04304' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.pages.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81204053567cfd90500961_79000859',
  'variables' => 
  array (
    'sub_view' => 0,
    'system' => 0,
    'data' => 0,
    'rows' => 0,
    'row' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfd90665706_45451374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfd90665706_45451374')) {
function content_567cfd90665706_45451374 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '81204053567cfd90500961_79000859';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['data']->value['page_name'];?>
" class="btn btn-info">
                    <?php echo __("Go to this page");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Pages");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
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
                            <th><?php echo __("Picture");?>
</th>
                            <th><?php echo __("URL");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Likes");?>
</th>
                            <th><?php echo __("Verified");?>
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
                                <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-10 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
</span>
                            <?php echo __("Page ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_likes'];?>
</span>
                            <?php echo __("Likes");?>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#basic" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Page Info");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- basic tab -->
                <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/page.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Verified Page");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="page_verified" class="onoffswitch-checkbox" id="page_verified" <?php if ($_smarty_tpl->tpl_vars['data']->value['page_verified']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="page_verified"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Category");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="page_category">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['categories'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['data']->value['page_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                </select>
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
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="page_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_name'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="page_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_description'];?>
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
            </div>
            <!-- tabs content -->
        </div>
    <?php }?>
</div><?php }
}
?>