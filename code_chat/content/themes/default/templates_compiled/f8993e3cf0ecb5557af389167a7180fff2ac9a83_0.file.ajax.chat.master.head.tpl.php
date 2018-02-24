<?php /* Smarty version 3.1.24, created on 2015-12-26 04:18:45
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.master.head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1284621894567e1525db3db6_41673100%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8993e3cf0ecb5557af389167a7180fff2ac9a83' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1451103523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284621894567e1525db3db6_41673100',
  'variables' => 
  array (
    'offline' => 0,
    'online_friends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e1525dfb483_96904199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e1525dfb483_96904199')) {
function content_567e1525dfb483_96904199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1284621894567e1525db3db6_41673100';
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