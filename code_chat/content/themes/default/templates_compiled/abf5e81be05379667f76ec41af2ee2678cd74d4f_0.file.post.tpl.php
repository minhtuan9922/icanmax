<?php /* Smarty version 3.1.24, created on 2015-12-25 10:43:53
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/post.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:351630449567d1de93ce296_96411794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf5e81be05379667f76ec41af2ee2678cd74d4f' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/post.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351630449567d1de93ce296_96411794',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1de9414ae9_57562767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1de9414ae9_57562767')) {
function content_567d1de9414ae9_57562767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '351630449567d1de93ce296_96411794';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
	<div class="row">

		<!-- left panel -->
		<div class="col-sm-8">
		<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('single'=>true), 0);
?>

		</div>
		<!-- left panel -->

		<!-- right panel -->
		<div class="col-sm-4">
		<?php echo $_smarty_tpl->getSubTemplate ('__ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo $_smarty_tpl->getSubTemplate ('__widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
		<!-- right panel -->

	</div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>