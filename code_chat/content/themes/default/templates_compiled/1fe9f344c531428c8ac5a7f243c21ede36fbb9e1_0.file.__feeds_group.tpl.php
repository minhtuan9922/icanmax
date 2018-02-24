<?php /* Smarty version 3.1.24, created on 2015-12-25 10:28:16
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_group.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:445797617567d1a40d61d64_36428109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe9f344c531428c8ac5a7f243c21ede36fbb9e1' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_group.tpl',
      1 => 1451027730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445797617567d1a40d61d64_36428109',
  'variables' => 
  array (
    '_parent' => 0,
    'system' => 0,
    '_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1a40dd40e7_44194818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1a40dd40e7_44194818')) {
function content_567d1a40dd40e7_44194818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '445797617567d1a40d61d64_36428109';
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item"><?php }?>
    <div class="data-container">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined']) {?>
                <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Đã tham gia");?>

                </button>
                <?php } else { ?>
                <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
">
                    <i class="fa fa-user-plus"></i>
                    <?php echo __("Tham gia nhóm");?>

                </button>
                <?php }?>
            </div>
            <div>
                <span class="name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</a>
                </span>
                <div><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Thành viên");?>
</div>
            </div>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
?>