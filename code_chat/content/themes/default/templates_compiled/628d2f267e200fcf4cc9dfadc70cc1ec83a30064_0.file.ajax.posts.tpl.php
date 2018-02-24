<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:45
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212735847e061d4ca99_49986821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628d2f267e200fcf4cc9dfadc70cc1ec83a30064' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.posts.tpl',
      1 => 1451028928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212735847e061d4ca99_49986821',
  'variables' => 
  array (
    'posts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e061d99460_82946367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e061d99460_82946367')) {
function content_5847e061d99460_82946367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212735847e061d4ca99_49986821';
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
}
}
?>