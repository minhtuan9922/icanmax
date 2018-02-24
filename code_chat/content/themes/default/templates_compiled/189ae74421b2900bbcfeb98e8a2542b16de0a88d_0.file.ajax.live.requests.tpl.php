<?php /* Smarty version 3.1.24, created on 2015-12-25 08:00:47
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2103409460567cf7afa5b7f3_12483030%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189ae74421b2900bbcfeb98e8a2542b16de0a88d' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.requests.tpl',
      1 => 1451028823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103409460567cf7afa5b7f3_12483030',
  'variables' => 
  array (
    'requests' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf7afa9d275_36847988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf7afa9d275_36847988')) {
function content_567cf7afa9d275_36847988 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2103409460567cf7afa5b7f3_12483030';
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