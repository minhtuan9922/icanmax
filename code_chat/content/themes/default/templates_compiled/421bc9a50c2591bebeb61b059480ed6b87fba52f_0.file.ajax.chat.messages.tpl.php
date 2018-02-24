<?php /* Smarty version 3.1.24, created on 2016-12-08 01:09:03
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.chat.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:104035848b2afa11fd2_56123715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '421bc9a50c2591bebeb61b059480ed6b87fba52f' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.chat.messages.tpl',
      1 => 1451028802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104035848b2afa11fd2_56123715',
  'variables' => 
  array (
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5848b2afa1f340_63628591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5848b2afa1f340_63628591')) {
function content_5848b2afa1f340_63628591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104035848b2afa11fd2_56123715';
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