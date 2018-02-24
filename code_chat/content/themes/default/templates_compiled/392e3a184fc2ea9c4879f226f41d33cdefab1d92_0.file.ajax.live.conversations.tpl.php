<?php /* Smarty version 3.1.24, created on 2015-12-25 08:47:52
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.conversations.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45274320567d02b8855444_16923240%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392e3a184fc2ea9c4879f226f41d33cdefab1d92' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.conversations.tpl',
      1 => 1451028815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45274320567d02b8855444_16923240',
  'variables' => 
  array (
    'conversations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d02b8891235_21179056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d02b8891235_21179056')) {
function content_567d02b8891235_21179056 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45274320567d02b8855444_16923240';
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