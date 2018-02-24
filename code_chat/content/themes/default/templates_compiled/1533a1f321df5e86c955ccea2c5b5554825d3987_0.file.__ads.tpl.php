<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:37
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__ads.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57315847df2d14c7b9_99389756%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1533a1f321df5e86c955ccea2c5b5554825d3987' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__ads.tpl',
      1 => 1451027570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57315847df2d14c7b9_99389756',
  'variables' => 
  array (
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2d1651b5_93438632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2d1651b5_93438632')) {
function content_5847df2d1651b5_93438632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57315847df2d14c7b9_99389756';
if ($_smarty_tpl->tpl_vars['ads']->value) {?>
<!-- Ads -->
<div class="panel panel-default panel-widget">
    <div class="panel-heading">
        <strong><?php echo __("Tài trợ");?>
</strong>
    </div>
    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['ads']->value['code'];?>
</div>
</div>
<!-- Ads -->
<?php }
}
}
?>