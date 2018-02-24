<?php /* Smarty version 3.1.24, created on 2015-12-25 08:47:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.conversation.messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1807972234567d02bc567466_00757415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02671f89341c230481c50a489b9ce781db6a2f0' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.conversation.messages.tpl',
      1 => 1451028740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807972234567d02bc567466_00757415',
  'variables' => 
  array (
    'conversation' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d02bc603ee1_94462877',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d02bc603ee1_94462877')) {
function content_567d02bc603ee1_94462877 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1807972234567d02bc567466_00757415';
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