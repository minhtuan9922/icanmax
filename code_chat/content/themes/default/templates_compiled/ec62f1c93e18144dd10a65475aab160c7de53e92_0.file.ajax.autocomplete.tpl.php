<?php /* Smarty version 3.1.24, created on 2015-12-26 02:59:25
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.autocomplete.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:782029077567e028d0f8cf5_08166293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec62f1c93e18144dd10a65475aab160c7de53e92' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.autocomplete.tpl',
      1 => 1451028744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '782029077567e028d0f8cf5_08166293',
  'variables' => 
  array (
    'users' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e028d1404d3_65145710',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e028d1404d3_65145710')) {
function content_567e028d1404d3_65145710 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '782029077567e028d0f8cf5_08166293';
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
        <div class="data-container clickable small js_tag-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
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