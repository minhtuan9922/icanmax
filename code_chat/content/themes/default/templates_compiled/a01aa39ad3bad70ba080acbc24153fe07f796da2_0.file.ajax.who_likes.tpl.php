<?php /* Smarty version 3.1.24, created on 2015-12-25 10:37:28
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.who_likes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:406241972567d1c68b2b141_77467221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01aa39ad3bad70ba080acbc24153fe07f796da2' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.who_likes.tpl',
      1 => 1451028955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406241972567d1c68b2b141_77467221',
  'variables' => 
  array (
    'users' => 0,
    '_user' => 0,
    'system' => 0,
    'get' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1c68b947d8_02763979',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1c68b947d8_02763979')) {
function content_567d1c68b947d8_02763979 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '406241972567d1c68b2b141_77467221';
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("Những người thích nội dung này");?>
</h5>
</div>
<div class="modal-body">
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
        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0);
?>

        <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['users']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <!-- see-more -->
    <div class="alert alert-info see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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