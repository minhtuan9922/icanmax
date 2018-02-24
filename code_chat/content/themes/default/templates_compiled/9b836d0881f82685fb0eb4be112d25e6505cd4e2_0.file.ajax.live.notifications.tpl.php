<?php /* Smarty version 3.1.24, created on 2015-12-25 08:00:47
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.notifications.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1850181808567cf7afb34e31_68382985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b836d0881f82685fb0eb4be112d25e6505cd4e2' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.live.notifications.tpl',
      1 => 1451028819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850181808567cf7afb34e31_68382985',
  'variables' => 
  array (
    'notifications' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf7afb3bb06_71964105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf7afb3bb06_71964105')) {
function content_567cf7afb3bb06_71964105 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1850181808567cf7afb34e31_68382985';
$_from = $_smarty_tpl->tpl_vars['notifications']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['notification']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
$foreach_notification_Sav = $_smarty_tpl->tpl_vars['notification'];
?>
<?php echo $_smarty_tpl->getSubTemplate ('__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['notification'] = $foreach_notification_Sav;
}
}
}
?>