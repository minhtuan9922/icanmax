<?php /* Smarty version 3.1.24, created on 2015-12-25 08:00:47
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_notification.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1809457728567cf7afb3f776_55994722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827ad765f5a9d1a617591bb2462c79ac6e344edd' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_notification.tpl',
      1 => 1451027721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809457728567cf7afb3f776_55994722',
  'variables' => 
  array (
    'notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf7afb5c075_47527200',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf7afb5c075_47527200')) {
function content_567cf7afb5c075_47527200 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1809457728567cf7afb3f776_55994722';
?>
<li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['notification']->value['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['notification_id'];?>
">
    <a class="data-container" href="<?php echo $_smarty_tpl->tpl_vars['notification']->value['url'];?>
">
        <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['notification']->value['user_picture'];?>
" alt="">
        <div class="data-content">
            <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['notification']->value['user_fullname'];?>
</span></div>
            <div><i class="fa <?php echo $_smarty_tpl->tpl_vars['notification']->value['icon'];?>
 pr5"></i> <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>
</div>
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
</div>
        </div>
    </a>
</li><?php }
}
?>