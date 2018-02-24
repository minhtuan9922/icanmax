<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:35
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_notification.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75375847e0578d74d0_97772880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7dabac063c045770dc9bd4d7d32ff937fc6a29' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_notification.tpl',
      1 => 1451027722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75375847e0578d74d0_97772880',
  'variables' => 
  array (
    'notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e0579035c2_45774977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e0579035c2_45774977')) {
function content_5847e0579035c2_45774977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75375847e0578d74d0_97772880';
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