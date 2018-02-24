<?php /* Smarty version 3.1.24, created on 2015-12-25 07:27:13
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.notifications.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:769116677567cefd1c16fb4_06270152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd28d6a3522ff991480086d367f439cc7fbe739' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.notifications.tpl',
      1 => 1451028429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769116677567cefd1c16fb4_06270152',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cefd1c83410_02349844',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cefd1c83410_02349844')) {
function content_567cefd1c83410_02349844 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '769116677567cefd1c16fb4_06270152';
?>
<li class="dropdown js_live-notifications <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>is-admin<?php }?>">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-globe fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-header">
            <?php echo __("Thông báo");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller">
                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) > 0) {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['notifications'];
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
?>
                </ul>
                <?php } else { ?>
                <p class="text-center text-muted mt10">
                    <?php echo __("Không có thông báo nào");?>

                </p>
                <?php }?>
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/notifications"><?php echo __("Xem tất cả");?>
</a>
    </div>
</li><?php }
}
?>