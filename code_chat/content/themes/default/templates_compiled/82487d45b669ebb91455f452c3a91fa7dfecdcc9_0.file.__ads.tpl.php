<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/__ads.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1350279524567c9ec7634176_24654838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82487d45b669ebb91455f452c3a91fa7dfecdcc9' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/__ads.tpl',
      1 => 1446454134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350279524567c9ec7634176_24654838',
  'variables' => 
  array (
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec763cf58_23531641',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec763cf58_23531641')) {
function content_567c9ec763cf58_23531641 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1350279524567c9ec7634176_24654838';
if ($_smarty_tpl->tpl_vars['ads']->value) {?>
<!-- Ads -->
<div class="panel panel-default panel-widget">
    <div class="panel-heading">
        <strong><?php echo __("Sponsored");?>
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