<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:14
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1810529583567c9eba13a342_02110668%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4749338d6e62bae7019461b33ff0c785bdf5b7e2' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_footer.tpl',
      1 => 1449134416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810529583567c9eba13a342_02110668',
  'variables' => 
  array (
    'system' => 0,
    'static_pages' => 0,
    'static_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9eba167477_20293475',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9eba167477_20293475')) {
function content_567c9eba167477_20293475 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1810529583567c9eba13a342_02110668';
?>

<!-- footer -->
<div class="container">
	<div class="row footer">
		<div class="col-lg-6 col-md-6 col-sm-6">
			&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 links">
			<?php if (count($_smarty_tpl->tpl_vars['static_pages']->value) > 0) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['static_pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['static_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['static_page']->_loop = false;
$_smarty_tpl->tpl_vars['static_page']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['static_page']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->_loop = true;
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration == $_smarty_tpl->tpl_vars['static_page']->total;
$foreach_static_page_Sav = $_smarty_tpl->tpl_vars['static_page'];
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

					</a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
				<?php
$_smarty_tpl->tpl_vars['static_page'] = $foreach_static_page_Sav;
}
?>
			<?php }?>
		</div>
	</div>
</div>
<!-- footer -->

</div>
<!-- main wrapper -->

<!-- JS Templates -->
<?php echo $_smarty_tpl->getSubTemplate ('_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- JS Templates -->

<!-- Chat Audio -->
<audio id="chat_audio">
	<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/sounds/notify.ogg" type="audio/ogg">
	<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/sounds/notify.mp3" type="audio/mpeg">
	<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/sounds/notify.wav" type="audio/wav">
</audio>
<!-- Chat Audio -->

</body>
</html><?php }
}
?>