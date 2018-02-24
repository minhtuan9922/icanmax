<?php /* Smarty version 3.1.24, created on 2015-12-25 08:47:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1855865698567d02bc60ad89_07219774%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adae06ecd71c00c4b4d6cbe9e8800ec0ec93392' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.messages.tpl',
      1 => 1451028802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855865698567d02bc60ad89_07219774',
  'variables' => 
  array (
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d02bc644788_59367469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d02bc644788_59367469')) {
function content_567d02bc644788_59367469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1855865698567d02bc60ad89_07219774';
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