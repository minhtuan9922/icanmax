<?php /* Smarty version 3.1.24, created on 2016-12-07 10:11:56
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.chat.conversation.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75445847e06c46ccd1_27464693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35196ad6fe99addb881481273da9215b7b9ca5d0' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.chat.conversation.messages.tpl',
      1 => 1451028740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75445847e06c46ccd1_27464693',
  'variables' => 
  array (
    'conversation' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e06c4d43e2_20685640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e06c4d43e2_20685640')) {
function content_5847e06c4d43e2_20685640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75445847e06c46ccd1_27464693';
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
<!-- see-more -->
<div class="alert alert-post see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
  data-get="messages">
    <span><?php echo __("Xem tin nhắn cũ");?>
</span>
    <div class="loader loader_small x-hidden"></div>
</div>
<!-- see-more -->
<?php }?>

<ul>
    <?php echo $_smarty_tpl->getSubTemplate ('ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0);
?>

</ul><?php }
}
?>