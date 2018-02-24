<?php /* Smarty version 3.1.24, created on 2015-12-25 05:57:06
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/static.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:394225501567cdab24ffc53_13217463%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f899eab244fefdb0c13f9208612efb730496ceaf' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/static.tpl',
      1 => 1446454826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394225501567cdab24ffc53_13217463',
  'variables' => 
  array (
    'static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cdab2544c40_39376190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cdab2544c40_39376190')) {
function content_567cdab2544c40_39376190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '394225501567cdab24ffc53_13217463';
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