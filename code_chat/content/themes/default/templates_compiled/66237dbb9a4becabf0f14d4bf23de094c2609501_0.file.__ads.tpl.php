<?php /* Smarty version 3.1.24, created on 2015-12-25 07:13:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__ads.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1648282947567cecb4d8cdb4_48765440%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66237dbb9a4becabf0f14d4bf23de094c2609501' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__ads.tpl',
      1 => 1451027570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648282947567cecb4d8cdb4_48765440',
  'variables' => 
  array (
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cecb4dd0e52_52717291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cecb4dd0e52_52717291')) {
function content_567cecb4dd0e52_52717291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1648282947567cecb4d8cdb4_48765440';
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