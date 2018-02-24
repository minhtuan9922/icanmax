<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:28
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/ajax.chat.master.head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:385624426567c9ec8c25434_45264448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c30c57a5f0cd1dde7554d47115d9f2ae90fd40' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1442760546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385624426567c9ec8c25434_45264448',
  'variables' => 
  array (
    'offline' => 0,
    'online_friends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec8c6e874_91730021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec8c6e874_91730021')) {
function content_567c9ec8c6e874_91730021 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '385624426567c9ec8c25434_45264448';
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        <?php echo __("Chat");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
?>