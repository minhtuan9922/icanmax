<?php /* Smarty version 3.1.24, created on 2016-12-12 07:42:30
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.lightbox_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20377584e54e6771541_21670140%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd6f8aac76f6590b6e8ea5c8d3c5c4b620bf9b3a' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.lightbox_footer.tpl',
      1 => 1451028812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20377584e54e6771541_21670140',
  'variables' => 
  array (
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_584e54e69214b5_85992455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584e54e69214b5_85992455')) {
function content_584e54e69214b5_85992455 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20377584e54e6771541_21670140';
?>
<div class="post-footer">

	<!-- post stats -->
	<div class="post-stats <?php ob_start();
echo $_smarty_tpl->tpl_vars['photo']->value['likes'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 0) {?>x-hidden<?php }?>">
		<!-- likes -->
		<span class="js_photo-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['photo']->value['likes'];
$_tmp2=ob_get_clean();
if ($_tmp2 == 0) {?>x-hidden<?php }?>">
			<i class="fa fa-thumbs-o-up"></i> <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?photo_id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
"><span class="js_photo-likes-num"><?php echo $_smarty_tpl->tpl_vars['photo']->value['likes'];?>
</span> <?php echo __("mọi người");?>
</span> <?php echo __("thích điều này");?>

		</span>
		<!-- likes -->
	</div>
	<!-- post stats -->

	<!-- comments -->
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_photo.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<!-- comments -->
</div><?php }
}
?>