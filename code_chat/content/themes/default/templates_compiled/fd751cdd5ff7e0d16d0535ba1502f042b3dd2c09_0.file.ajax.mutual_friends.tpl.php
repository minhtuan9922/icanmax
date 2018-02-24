<?php /* Smarty version 3.1.24, created on 2015-12-26 08:51:23
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.mutual_friends.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:554139724567e550b0af5d1_85583917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd751cdd5ff7e0d16d0535ba1502f042b3dd2c09' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.mutual_friends.tpl',
      1 => 1451028832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554139724567e550b0af5d1_85583917',
  'variables' => 
  array (
    'mutual_friends' => 0,
    'system' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e550b106ed5_20835395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e550b106ed5_20835395')) {
function content_567e550b106ed5_20835395 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '554139724567e550b0af5d1_85583917';
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("Bạn chung");?>
</h5>
</div>
<div class="modal-body">
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['mutual_friends']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_type'=>"remove"), 0);
?>

        <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['mutual_friends']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <!-- see-more -->
    <div class="alert alert-info see-more js_see-more" data-get="mutual_friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
        <span><?php echo __("Xem thêm");?>
</span>
        <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
    <?php }?>
    
</div>
<?php }
}
?>