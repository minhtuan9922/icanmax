<?php /* Smarty version 3.1.24, created on 2015-12-25 07:05:13
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__widget.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1866343785567ceaa916dc80_98747599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7ca1a2401cc767f5df5c182eac29c4f0f9e781' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__widget.tpl',
      1 => 1451026877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866343785567ceaa916dc80_98747599',
  'variables' => 
  array (
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567ceaa917a3c5_47272825',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ceaa917a3c5_47272825')) {
function content_567ceaa917a3c5_47272825 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1866343785567ceaa916dc80_98747599';
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