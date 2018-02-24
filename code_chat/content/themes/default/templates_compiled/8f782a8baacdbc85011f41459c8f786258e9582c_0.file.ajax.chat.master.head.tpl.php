<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:41
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.chat.master.head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:299445847df315491a5_41363789%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f782a8baacdbc85011f41459c8f786258e9582c' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1451103524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299445847df315491a5_41363789',
  'variables' => 
  array (
    'offline' => 0,
    'online_friends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df315a2304_72221164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df315a2304_72221164')) {
function content_5847df315a2304_72221164 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '299445847df315491a5_41363789';
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Không có ai");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        <?php echo __("Trò chuyện");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
?>