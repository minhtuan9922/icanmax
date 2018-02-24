<?php /* Smarty version 3.1.24, created on 2016-12-07 10:12:26
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:36505847e08a4d1bd5_66560945%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c3deed866287e1ade5141cd67fea4fb170529f' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comments.tpl',
      1 => 1451027902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36505847e08a4d1bd5_66560945',
  'variables' => 
  array (
    'post' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e08a526750_31037291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e08a526750_31037291')) {
function content_5847e08a526750_31037291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36505847e08a4d1bd5_66560945';
?>
<div class="post-comments">

    <!-- previous comments -->
    <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <div class="pb10 js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
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
        <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['post']->value['post_comments'];
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
    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.comment_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id']), 0);
?>

    <!-- post a comment -->
    
</div><?php }
}
?>