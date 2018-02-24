<?php /* Smarty version 3.1.24, created on 2015-12-26 04:16:45
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1358696350567e14ad1594c8_12369007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dfed0d4b2bd8b5d5163e6f2865e19c07e0738db' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_page.tpl',
      1 => 1451101615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1358696350567e14ad1594c8_12369007',
  'variables' => 
  array (
    '_parent' => 0,
    'system' => 0,
    '_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e14ad1eb6b0_33252094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e14ad1eb6b0_33252094')) {
function content_567e14ad1eb6b0_33252094 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1358696350567e14ad1594c8_12369007';
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item"><?php }?>
    <div class="data-container">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-down"></i>
                    <?php echo __("Bỏ thích");?>

                </button>
                <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Thích");?>

                </button>
                <?php }?>
            </div>
            <div>
                <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
" data-type="page">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</a>
                </span>
                <div><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Đã thích");?>
</div>
            </div>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
?>