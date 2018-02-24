<?php /* Smarty version 3.1.24, created on 2015-12-25 09:37:38
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1307740704567d0e62ba14c3_77448350%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7970a32a7e7a5e3eeecd03bcc87e55f99c66a991' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.posts.tpl',
      1 => 1451028927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1307740704567d0e62ba14c3_77448350',
  'variables' => 
  array (
    'posts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d0e62be47a5_88583594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d0e62be47a5_88583594')) {
function content_567d0e62be47a5_88583594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1307740704567d0e62ba14c3_77448350';
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