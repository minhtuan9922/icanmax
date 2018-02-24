<?php /* Smarty version 3.1.24, created on 2016-12-12 07:42:30
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_photo.comments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12894584e54e69b4740_83425005%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd918506e1317d62e75c7fbfcc5b296438e723c00' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_photo.comments.tpl',
      1 => 1451027782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12894584e54e69b4740_83425005',
  'variables' => 
  array (
    'photo' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_584e54e6a894c8_14142359',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584e54e6a894c8_14142359')) {
function content_584e54e6a894c8_14142359 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12894584e54e69b4740_83425005';
?>
<div class="post-comments">

    <!-- previous comments -->
    <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <div class="pb10 js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-remove="true">
        <span class="text-link">
            <i class="fa fa-comment-o"></i>
            <?php echo __("Xem bình luận trước");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
    </div>
    <?php }?>
    <!-- previous comments -->

    <!-- comments -->
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['photo']->value['photo_comments'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$foreach_comment_Sav = $_smarty_tpl->tpl_vars['comment'];
?>
            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php
$_smarty_tpl->tpl_vars['comment'] = $foreach_comment_Sav;
}
?>
        <?php }?>
    </ul>
    <!-- comments -->

    <!-- post a comment -->
    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.comment_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->tpl_vars['photo']->value['photo_id']), 0);
?>

    <!-- post a comment -->
    
</div><?php }
}
?>