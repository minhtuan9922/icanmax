<?php /* Smarty version 3.1.24, created on 2015-12-25 08:02:55
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_notification.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:743504557567cf82f597352_29622315%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f7a24ef6ad574576f8a5f6d3f34b6252b03ba5' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_notification.tpl',
      1 => 1451027721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743504557567cf82f597352_29622315',
  'variables' => 
  array (
    'notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf82f5b3999_06510068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf82f5b3999_06510068')) {
function content_567cf82f5b3999_06510068 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '743504557567cf82f597352_29622315';
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