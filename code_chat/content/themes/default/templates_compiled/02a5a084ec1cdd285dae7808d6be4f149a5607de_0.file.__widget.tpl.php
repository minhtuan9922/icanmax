<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/__widget.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1534589860567c9ec7640048_88460209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a5a084ec1cdd285dae7808d6be4f149a5607de' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/__widget.tpl',
      1 => 1447311668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534589860567c9ec7640048_88460209',
  'variables' => 
  array (
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec7648374_94896951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec7648374_94896951')) {
function content_567c9ec7648374_94896951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1534589860567c9ec7640048_88460209';
if ($_smarty_tpl->tpl_vars['widget']->value) {?>
<!-- Widget -->
<div class="panel panel-default panel-widget">
    <div class="panel-heading">
        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
    </div>
    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
</div>
<!-- Widget -->
<?php }
}
}
?>