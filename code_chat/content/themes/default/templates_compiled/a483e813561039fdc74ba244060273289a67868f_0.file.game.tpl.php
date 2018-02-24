<?php /* Smarty version 3.1.24, created on 2015-12-25 10:25:10
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48515420567d198691d833_50474627%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a483e813561039fdc74ba244060273289a67868f' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/game.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48515420567d198691d833_50474627',
  'variables' => 
  array (
    'game' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1986962a46_16394258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1986962a46_16394258')) {
function content_567d1986962a46_16394258 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48515420567d198691d833_50474627';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
	<div class="row">

		<!-- left panel -->
		<div class="col-sm-12">
			<div class="post">
				<div class="post-body">
					<div class="post-header mb0">
						<div class="post-avatar">
							<div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['game']->value['thumbnail'];?>
);">
							</div>
						</div>
						<div class="post-meta">
							<!-- game name -->
							<h3 style="margin-top: 5px; margin-bottom: 0;"><?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
</h3>
							<!-- game name -->
						</div>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<iframe frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['game']->value['source'];?>
" width="940" height="560"></iframe>
			</div>

		</div>
		<!-- left panel -->

		

	</div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>