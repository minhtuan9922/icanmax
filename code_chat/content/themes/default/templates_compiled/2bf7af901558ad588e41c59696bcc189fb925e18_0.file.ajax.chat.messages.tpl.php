<?php /* Smarty version 3.1.24, created on 2015-12-25 10:29:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1055542037567d1aa49429b8_63165821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf7af901558ad588e41c59696bcc189fb925e18' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.messages.tpl',
      1 => 1451028802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055542037567d1aa49429b8_63165821',
  'variables' => 
  array (
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1aa49489b0_74095059',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1aa49489b0_74095059')) {
function content_567d1aa49489b0_74095059 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1055542037567d1aa49429b8_63165821';
$_from = $_smarty_tpl->tpl_vars['messages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['message'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['message']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
$foreach_message_Sav = $_smarty_tpl->tpl_vars['message'];
?>
<?php echo $_smarty_tpl->getSubTemplate ('__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['message'] = $foreach_message_Sav;
}
}
}
?>