<?php /* Smarty version 3.1.24, created on 2015-12-25 10:23:51
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.games.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:387064442567d1937ea12c1_90374524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b4ebff16c00ed8feaa9c1ff23c956ef1d7b1aff' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.games.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387064442567d1937ea12c1_90374524',
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
  'unifunc' => 'content_567d1938040fc8_61136391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1938040fc8_61136391')) {
function content_567d1938040fc8_61136391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '387064442567d1937ea12c1_90374524';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/games/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New game");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-gamepad pr5 panel-icon"></i>
        <strong><?php echo __("Games");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
                            <th><?php echo __("Thumbnail");?>
</th>
                            <th><?php echo __("Name");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['game_id'];?>
</td>
                            <td>
                                <a target="_blank" class="x-image sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['row']->value['game_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['row']->value['thumbnail'];?>
);">
                                </a>
                            </td>
                            <td>
                                <a target="_blank"href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['row']->value['game_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

                                </a>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="game" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['game_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/games/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['game_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/games.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['game_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Game Source");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="source"><?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
</textarea>
                        <span class="help-block">
                        <?php echo __("The source link of your embedded game");?>

                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Thumbnail");?>

                    </label>
                    <div class="col-sm-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['thumbnail'] == '') {?>
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title="<?php echo __("Remove");?>
">
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="thumbnail" value="">
                            </div>
                        <?php } else { ?>
                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail'];?>
')">
                                <button type="button" class="close js_x-image-remover" title="<?php echo __("Remove");?>
">
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="thumbnail" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumbnail'];?>
">
                            </div>
                        <?php }?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/games.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Game Source");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="source"></textarea>
                        <span class="help-block">
                        <?php echo __("The source link of your embedded game");?>

                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Thumbnail");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title="<?php echo __("Remove");?>
">
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="thumbnail" value="">
                        </div>
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