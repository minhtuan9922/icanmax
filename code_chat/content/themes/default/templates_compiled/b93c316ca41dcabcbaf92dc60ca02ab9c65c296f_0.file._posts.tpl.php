<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_posts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1025741071567c9ec75f7b18_13788370%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93c316ca41dcabcbaf92dc60ca02ab9c65c296f' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_posts.tpl',
      1 => 1445966074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1025741071567c9ec75f7b18_13788370',
  'variables' => 
  array (
    '_get' => 0,
    'posts' => 0,
    'system' => 0,
    '_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec762e746_54894049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec762e746_54894049')) {
function content_567c9ec762e746_54894049 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1025741071567c9ec75f7b18_13788370';
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
				<span><?php echo __("More Stories");?>
</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
			<!-- see-more -->
		</div>
	<?php } else { ?>
		<ul class="js_posts_stream mb20" data-get="newsfeed">
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong><?php echo __("No posts to show");?>
</strong></p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests" class="btn btn-info"><?php echo __("Find Friends");?>
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
				<span><?php echo __("More Stories");?>
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
				<p class="mb10"><strong><?php echo __("No posts to show");?>
</strong></p>
			</div>
		</ul>
	<?php }?>

<?php }
}
}
?>