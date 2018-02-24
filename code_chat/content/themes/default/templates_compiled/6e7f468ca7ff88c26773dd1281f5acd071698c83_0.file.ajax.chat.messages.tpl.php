<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:56
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.chat.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195375847e06c4e29a9_68910136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7f468ca7ff88c26773dd1281f5acd071698c83' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.chat.messages.tpl',
      1 => 1451028802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195375847e06c4e29a9_68910136',
  'variables' => 
  array (
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e06c4f4a45_79736970',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e06c4f4a45_79736970')) {
function content_5847e06c4f4a45_79736970 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '195375847e06c4e29a9_68910136';
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