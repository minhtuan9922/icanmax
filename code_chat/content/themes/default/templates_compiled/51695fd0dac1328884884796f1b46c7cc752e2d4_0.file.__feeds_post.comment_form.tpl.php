<?php /* Smarty version 3.1.24, created on 2015-12-25 07:22:23
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post.comment_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:693016560567ceeaf51d8b1_82291128%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51695fd0dac1328884884796f1b46c7cc752e2d4' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_post.comment_form.tpl',
      1 => 1451027877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '693016560567ceeaf51d8b1_82291128',
  'variables' => 
  array (
    'user' => 0,
    '_handle' => 0,
    '_id' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567ceeaf534aa7_83875042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567ceeaf534aa7_83875042')) {
function content_567ceeaf534aa7_83875042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '693016560567ceeaf51d8b1_82291128';
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