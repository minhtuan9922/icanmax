<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:35
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.live.requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195945847e057725fb3_60883240%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe11a3973dba78c45aa56afb75dcf511ec6564f' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.live.requests.tpl',
      1 => 1451028824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195945847e057725fb3_60883240',
  'variables' => 
  array (
    'requests' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e05777aee8_93473206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e05777aee8_93473206')) {
function content_5847e05777aee8_93473206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '195945847e057725fb3_60883240';
$_from = $_smarty_tpl->tpl_vars['requests']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
}
}
?>