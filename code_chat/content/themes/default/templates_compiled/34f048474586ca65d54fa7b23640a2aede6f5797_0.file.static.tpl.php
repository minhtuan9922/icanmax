<?php /* Smarty version 3.1.24, created on 2015-12-25 14:51:31
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/static.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:866168221567d57f3d04349_40012888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f048474586ca65d54fa7b23640a2aede6f5797' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/static.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866168221567d57f3d04349_40012888',
  'variables' => 
  array (
    'static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d57f3d49de7_92030887',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d57f3d49de7_92030887')) {
function content_567d57f3d49de7_92030887 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '866168221567d57f3d04349_40012888';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="page-title">
    <?php echo $_smarty_tpl->tpl_vars['static']->value['page_title'];?>

</div>

<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 text-readable ptb10">
            <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

        </div>
    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>