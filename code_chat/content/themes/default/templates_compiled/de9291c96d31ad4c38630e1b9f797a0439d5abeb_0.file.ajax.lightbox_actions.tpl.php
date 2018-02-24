<?php /* Smarty version 3.1.24, created on 2015-12-25 08:49:17
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.lightbox_actions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1254867386567d030d45dd75_92285697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de9291c96d31ad4c38630e1b9f797a0439d5abeb' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.lightbox_actions.tpl',
      1 => 1451028806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254867386567d030d45dd75_92285697',
  'variables' => 
  array (
    'photo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d030d4d0083_92448386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d030d4d0083_92448386')) {
function content_567d030d4d0083_92448386 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1254867386567d030d45dd75_92285697';
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