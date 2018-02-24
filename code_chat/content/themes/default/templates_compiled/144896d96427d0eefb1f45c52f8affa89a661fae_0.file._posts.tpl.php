<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:37
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:236985847df2d0ca8d8_68118612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '144896d96427d0eefb1f45c52f8affa89a661fae' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_posts.tpl',
      1 => 1451028668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236985847df2d0ca8d8_68118612',
  'variables' => 
  array (
    '_get' => 0,
    'posts' => 0,
    'system' => 0,
    '_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2d13c9b3_64997628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2d13c9b3_64997628')) {
function content_5847df2d13c9b3_64997628 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '236985847df2d0ca8d8_68118612';
if ($_smarty_tpl->tpl_vars['_get']->value == "newsfeed") {?>
	
	<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
		<div>
			<ul class="js_posts_stream" data-get="newsfeed">
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
				<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
			</ul>

			<!-- see-more -->
			<div class="alert alert-post mb20 see-more js_see-more" data-get="newsfeed">
				<span><?php echo __("Xem thêm bài đăng");?>
</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
			<!-- see-more -->
		</div>
	<?php } else { ?>
		<ul class="js_posts_stream mb20" data-get="newsfeed">
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong><?php echo __("Không có bài đăng nào");?>
</strong></p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests" class="btn btn-info"><?php echo __("Tìm bạn bè");?>
</a>
			</div>
		</ul>
	<?php }?>

<?php } else { ?>

	<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
		<div>
			<ul class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
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
				<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
			</ul>

			<!-- see-more -->
			<div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
				<span><?php echo __("Xem thêm bài đăng");?>
</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
			<!-- see-more -->
		</div>
	<?php } else { ?>
		<ul class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong><?php echo __("Không có bài đăng nào");?>
</strong></p>
			</div>
		</ul>
	<?php }?>

<?php }
}
}
?>