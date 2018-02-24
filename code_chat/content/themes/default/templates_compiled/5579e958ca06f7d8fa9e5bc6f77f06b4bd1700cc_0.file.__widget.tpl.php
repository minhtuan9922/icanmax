<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:37
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__widget.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:251845847df2d171b33_57911393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5579e958ca06f7d8fa9e5bc6f77f06b4bd1700cc' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__widget.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251845847df2d171b33_57911393',
  'variables' => 
  array (
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2d180752_17013567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2d180752_17013567')) {
function content_5847df2d180752_17013567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '251845847df2d171b33_57911393';
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