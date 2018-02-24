<?php /* Smarty version 3.1.24, created on 2015-12-25 07:04:52
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.languages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:871993583567cea946c9ee5_94476902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786b60afb9e2e5e7b9d4572809a4ef797491c6d5' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.languages.tpl',
      1 => 1451026877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871993583567cea946c9ee5_94476902',
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
  'unifunc' => 'content_567cea9483b518_51968966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cea9483b518_51968966')) {
function content_567cea9483b518_51968966 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '871993583567cea946c9ee5_94476902';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/languages/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Language");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-globe pr5 panel-icon"></i>
        <strong><?php echo __("Languages");?>
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
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Code");?>
</th>
                            <th><?php echo __("Flag");?>
</th>
                            <th><?php echo __("Dir");?>
</th>
                            <th><?php echo __("Default");?>
</th>
                            <th><?php echo __("Enabled");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
                            <td><span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['row']->value['flag_icon'];?>
"></span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['enabled']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="language" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/languages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/language.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['language_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="onoffswitch">
                            <input type="checkbox" name="default" class="onoffswitch-checkbox" id="default" <?php if ($_smarty_tpl->tpl_vars['data']->value['default']) {?>checked<?php }?>>
                            <label class="onoffswitch-label" for="default"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="onoffswitch">
                            <input type="checkbox" name="enabled" class="onoffswitch-checkbox" id="enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['enabled']) {?>checked<?php }?>>
                            <label class="onoffswitch-label" for="enabled"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                        <span class="help-block">
                            <?php echo __("Language country_code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                        <span class="help-block">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Flag Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="flag_icon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['flag_icon'];?>
">
                        <span class="help-block">
                            <?php echo __("The country flag code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_3166-1"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="dir">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "LTR") {?>selected<?php }?> value="LTR">LTR</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "RTL") {?>selected<?php }?> value="RTL">RTL</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

                        </span>
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
                <?php echo __("Before add a new language you need to know 'gettext'");?>

            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/language.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="onoffswitch">
                            <input type="checkbox" name="default" class="onoffswitch-checkbox" id="default">
                            <label class="onoffswitch-label" for="default"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="onoffswitch">
                            <input type="checkbox" name="enabled" class="onoffswitch-checkbox" id="enabled">
                            <label class="onoffswitch-label" for="enabled"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="code">
                        <span class="help-block">
                            <?php echo __("Language country_code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                        <span class="help-block">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Flag Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="flag_icon">
                        <span class="help-block">
                            <?php echo __("The country flag code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_3166-1"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="dir">
                            <option value="LTR">LTR</option>
                            <option value="RTL">RTL</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

                        </span>
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