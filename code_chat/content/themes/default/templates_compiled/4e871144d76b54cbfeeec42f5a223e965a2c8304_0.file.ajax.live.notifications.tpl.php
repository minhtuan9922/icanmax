<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:35
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.live.notifications.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:325365847e0578bf658_16818166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e871144d76b54cbfeeec42f5a223e965a2c8304' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.live.notifications.tpl',
      1 => 1451028820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325365847e0578bf658_16818166',
  'variables' => 
  array (
    'notifications' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e0578caee2_34668056',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e0578caee2_34668056')) {
function content_5847e0578caee2_34668056 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '325365847e0578bf658_16818166';
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