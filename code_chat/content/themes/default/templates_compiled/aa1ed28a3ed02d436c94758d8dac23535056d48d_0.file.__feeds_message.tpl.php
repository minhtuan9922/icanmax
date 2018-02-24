<?php /* Smarty version 3.1.24, created on 2016-12-08 01:09:03
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101445848b2afa88336_40768989%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1ed28a3ed02d436c94758d8dac23535056d48d' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_message.tpl',
      1 => 1451053736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101445848b2afa88336_40768989',
  'variables' => 
  array (
    'message' => 0,
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5848b2afadea59_63221910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5848b2afadea59_63221910')) {
function content_5848b2afadea59_63221910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101445848b2afa88336_40768989';
?>
<li>
    <div class="conversation clearfix <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>right<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">
        <div class="conversation-user">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['user_name'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_picture'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_fullname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_fullname'];?>
">
            </a>
        </div>
        <div class="conversation-body">
            <div class="text">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

                <?php if ($_smarty_tpl->tpl_vars['message']->value['image'] != '') {?>
                    <span class="text-link js_lightbox-nodata <?php if ($_smarty_tpl->tpl_vars['message']->value['message'] != '') {?>mt5<?php }?>" data-image="<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                        <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                    </span>
                <?php }?>
            </div>
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>

            </div>
        </div>
    </div>
</li><?php }
}
?>