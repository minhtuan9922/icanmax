<?php /* Smarty version 3.1.24, created on 2015-12-26 02:35:41
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.who_shares.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1809547212567dfcfd392470_00887854%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc3510a9c6a578ba2e2802be45b5ed6f67ac5090' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.who_shares.tpl',
      1 => 1451028964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809547212567dfcfd392470_00887854',
  'variables' => 
  array (
    'posts' => 0,
    'system' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567dfcfd3e9be5_51697202',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567dfcfd3e9be5_51697202')) {
function content_567dfcfd3e9be5_51697202 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1809547212567dfcfd392470_00887854';
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("Những người chia sẽ nội dung này");?>
</h5>
</div>
<div class="modal-body">
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_snippet'=>true), 0);
?>

        <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['posts']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <!-- see-more -->
    <div class="alert alert-info see-more js_see-more" data-get="shares" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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