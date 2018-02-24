<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:41
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.chat.master.content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:35375847df3163b243_79353121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e720c5ac4910c222f811e559efbb9e2644e506b8' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.chat.master.content.tpl',
      1 => 1451028758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35375847df3163b243_79353121',
  'variables' => 
  array (
    'online_friends' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df31665f99_43677597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df31665f99_43677597')) {
function content_5847df31665f99_43677597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35375847df3163b243_79353121';
?>
<ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['online_friends']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
    <li class="feeds-item">
        <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
">
            <div class="data-content">
                <div class="pull-right flip">
                    <i class="fa fa-circle"></i>
                </div>
                <div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
</strong></div>
            </div>
        </div>
    </li>
    <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
</ul><?php }
}
?>