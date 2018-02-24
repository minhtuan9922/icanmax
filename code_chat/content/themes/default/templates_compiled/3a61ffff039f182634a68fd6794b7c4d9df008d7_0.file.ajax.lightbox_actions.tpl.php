<?php /* Smarty version 3.1.24, created on 2016-12-12 07:42:30
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.lightbox_actions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:224584e54e60617e9_43061590%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a61ffff039f182634a68fd6794b7c4d9df008d7' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.lightbox_actions.tpl',
      1 => 1451028806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224584e54e60617e9_43061590',
  'variables' => 
  array (
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_584e54e639c122_90099781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584e54e639c122_90099781')) {
function content_584e54e639c122_90099781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '224584e54e60617e9_43061590';
?>
<!-- post actions -->
<div class="post-actions">
	<?php if ($_smarty_tpl->tpl_vars['photo']->value['i_like']) {?>
		<span class="text-link js_unlike-photo"><?php echo __("Bỏ thích");?>
</span> - 
	<?php } else { ?>
		<span class="text-link js_like-photo"><?php echo __("Thích");?>
</span> - 
	<?php }?>
	<span class="text-link js_comment"><?php echo __("Bình luận");?>
</span>
</div>
<!-- post actions --><?php }
}
?>