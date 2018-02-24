<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:36
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_header.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:261185847df2cde88d2_88367902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b493a08a63a0729a0d656af32255049a60fd5de' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_header.messages.tpl',
      1 => 1451028416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261185847df2cde88d2_88367902',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2ce3dcd2_25425898',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2ce3dcd2_25425898')) {
function content_5847df2ce3dcd2_25425898 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '261185847df2cde88d2_88367902';
?>
<li class="dropdown js_live-messages <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>is-admin<?php }?>">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-comments-o fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget">
        <div class="dropdown-widget-header">
            <?php echo __("Tin nhắn");?>

            <a class="pull-right flip flip flip text-link js_chat-start" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><?php echo __("Tin nhắn mới");?>
</a>
        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller">
                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) > 0) {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['conversations'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['conversation'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['conversation']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->_loop = true;
$foreach_conversation_Sav = $_smarty_tpl->tpl_vars['conversation'];
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php
$_smarty_tpl->tpl_vars['conversation'] = $foreach_conversation_Sav;
}
?>
                </ul>
                <?php } else { ?>
                <p class="text-center text-muted mt10">
                    <?php echo __("Không có tin nhắn nào");?>

                </p>
                <?php }?>
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><?php echo __("Xem tất cả");?>
</a>
    </div>
</li><?php }
}
?>