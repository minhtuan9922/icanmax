<?php /* Smarty version 3.1.24, created on 2015-12-25 08:49:17
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_photo.comments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:381709588567d030d4fd9a8_40378363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eaebc084abbf860f876469b0c15d4e659674efb' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_photo.comments.tpl',
      1 => 1451027782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381709588567d030d4fd9a8_40378363',
  'variables' => 
  array (
    'photo' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d030d527721_01654227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d030d527721_01654227')) {
function content_567d030d527721_01654227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '381709588567d030d4fd9a8_40378363';
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