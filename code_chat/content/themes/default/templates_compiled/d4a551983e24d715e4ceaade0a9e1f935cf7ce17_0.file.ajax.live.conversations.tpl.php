<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:52
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.live.conversations.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:276265847e0684b4db4_95886831%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a551983e24d715e4ceaade0a9e1f935cf7ce17' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.live.conversations.tpl',
      1 => 1451028816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276265847e0684b4db4_95886831',
  'variables' => 
  array (
    'conversations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e0684fe679_50342236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e0684fe679_50342236')) {
function content_5847e0684fe679_50342236 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '276265847e0684b4db4_95886831';
$_from = $_smarty_tpl->tpl_vars['conversations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['conversation'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['conversation']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->_loop = true;
$foreach_conversation_Sav = $_smarty_tpl->tpl_vars['conversation'];
?>
<?php echo $_smarty_tpl->getSubTemplate ('__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['conversation'] = $foreach_conversation_Sav;
}
}
}
?>