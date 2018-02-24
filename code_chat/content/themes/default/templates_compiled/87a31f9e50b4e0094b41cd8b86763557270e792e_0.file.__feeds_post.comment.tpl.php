<?php /* Smarty version 3.1.24, created on 2016-12-07 10:21:18
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13005847e29ebf9cd0_63080799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a31f9e50b4e0094b41cd8b86763557270e792e' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_post.comment.tpl',
      1 => 1451102974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13005847e29ebf9cd0_63080799',
  'variables' => 
  array (
    'comment' => 0,
    'user' => 0,
    'post' => 0,
    'photo' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e29ed78f97_95668753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e29ed78f97_95668753')) {
function content_5847e29ed78f97_95668753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13005847e29ebf9cd0_63080799';
?>
<li>
    <div class="comment" data-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
">
        <div class="comment-avatar">
            <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_picture'];?>
);">
            </a>
        </div>
        <div class="comment-data">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['user_type'] == "user") {?>
                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['post']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['photo']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['comment']->value['post']['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                        <div class="comment-btn">
                            <button type="button" class="close js_delete-comment" data-toggle="tooltip" data-placement="top" title="<?php echo __("Xóa");?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    <?php } else { ?>
                        <div class="comment-btn">
                            <button type="button" class="close js_report-comment" data-toggle="tooltip" data-placement="top" title="<?php echo __("Báo cáo");?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['user_type'] == "page") {?>
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['page_admin'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['photo']->value['page_admin'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['comment']->value['post']['is_page_admin']) {?>
                        <div class="comment-btn">
                            <button type="button" class="close js_delete-comment" data-toggle="tooltip" data-placement="top" title="<?php echo __("Xóa");?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } else { ?>
                        <div class="comment-btn">
                            <button type="button" class="close js_report-comment" data-toggle="tooltip" data-placement="top" title="<?php echo __("Báo cáo");?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>
            <div class="mb5">
                <span class="text-semibold js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_author_url'];?>
" ><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_author_name'];?>
</a>
                </span>
                <?php echo $_smarty_tpl->tpl_vars['comment']->value['text'];?>

                <?php if ($_smarty_tpl->tpl_vars['comment']->value['image'] != '') {?>
                    <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['comment']->value['image'];?>
">
                        <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['comment']->value['image'];?>
">
                    </span>
                <?php }?>
            </div>
            <div>
                <span class="text-muted js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['comment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time'];?>
</span>
                · 
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['i_like']) {?>
                <a class="text-link js_unlike-comment"><?php echo __("Bỏ thích");?>
</a>
                <?php } else { ?>
                <a class="text-link js_like-comment"><?php echo __("Thích");?>
</a>
                <?php }?>
                <span class="js_comment-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['comment']->value['likes'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 0) {?>x-hidden<?php }?>">
                    · 
                    <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?comment_id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"><i class="fa fa-thumbs-o-up"></i> <span class="js_comment-likes-num"><?php echo $_smarty_tpl->tpl_vars['comment']->value['likes'];?>
</span></span>
                </span>
            </div>
        </div>
    </div>
</li><?php }
}
?>