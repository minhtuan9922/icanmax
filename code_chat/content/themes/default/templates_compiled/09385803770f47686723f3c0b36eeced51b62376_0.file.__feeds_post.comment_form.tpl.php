<?php /* Smarty version 3.1.24, created on 2016-12-07 10:12:26
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comment_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:241475847e08a5b2596_65300377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09385803770f47686723f3c0b36eeced51b62376' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comment_form.tpl',
      1 => 1451027878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241475847e08a5b2596_65300377',
  'variables' => 
  array (
    'user' => 0,
    '_handle' => 0,
    '_id' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e08a5deaf0_64309849',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e08a5deaf0_64309849')) {
function content_5847e08a5deaf0_64309849 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '241475847e08a5b2596_65300377';
if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
<div class="comment" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
    <div class="comment-avatar">
        <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
            </a>
    </div>
    <div class="comment-data">
        <div class="x-form comment-form">
            <textarea class="js_autogrow js_mention js_post-comment " placeholder="<?php echo __("Viết bình luận");?>
"></textarea>
            <div class="x-form-tools">
                <div class="x-form-tools-attach">
                    <i class="fa fa-camera js_x-uploader" data-handle="comment"></i>
                </div>
                <div class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="fa fa-smile-o fa-lg"></i>
                </div>
                <?php echo $_smarty_tpl->getSubTemplate ('__emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
        </div>
        <div class="comment-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="loader loader_small"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
}
?>