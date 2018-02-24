<?php /* Smarty version 3.1.24, created on 2015-12-25 08:47:27
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.mention.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:830612420567d029fc4e4a4_92910327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e548a053dd371db9695dfd301362ca3a8fef6e' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.mention.tpl',
      1 => 1451028827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830612420567d029fc4e4a4_92910327',
  'variables' => 
  array (
    'users' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d029fc918c9_68053613',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d029fc918c9_68053613')) {
function content_567d029fc918c9_68053613 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '830612420567d029fc4e4a4_92910327';
?>
<ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
        <li>
            <div class="data-container clickable small js_mention-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
">
                <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="">
                <div class="data-content">
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