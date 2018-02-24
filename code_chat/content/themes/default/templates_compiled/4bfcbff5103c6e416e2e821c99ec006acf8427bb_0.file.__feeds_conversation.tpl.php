<?php /* Smarty version 3.1.24, created on 2016-12-07 10:12:25
         compiled from "D:/code_new/code_chat/content/themes/default/templates/__feeds_conversation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76075847e089dfdf12_93209876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bfcbff5103c6e416e2e821c99ec006acf8427bb' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/__feeds_conversation.tpl',
      1 => 1451027616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76075847e089dfdf12_93209876',
  'variables' => 
  array (
    'conversation' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847e089efedf7_11427455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847e089efedf7_11427455')) {
function content_5847e089efedf7_11427455 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76075847e089dfdf12_93209876';
?>
<li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['seen']) {?>unread<?php }?>" data-last-message="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['last_message_id'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
        <a class="data-container js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['ids'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_left'];?>
" data-multiple="true" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
"  data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
            <div class="data-avatar">
                <div class="left-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_left'];?>
')"></div>
                <div class="right-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_right'];?>
')"></div>
            </div>
            <div class="data-content">
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
                    <div class="pull-right flip">
                        <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
                    </div>
                <?php }?>
                <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
                <div class="text">
                    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message'];?>

                    <?php } else { ?>
                        <i class="fa fa-picture-o"></i> <?php echo __('ảnh');?>

                    <?php }?>
                </div>
                <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
            </div>
        </a>
    <?php } else { ?>
        <a class="data-container js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['ids'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture'];?>
" data-multiple="false" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture'];?>
" alt="">
            <div class="data-content">
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
                    <div class="pull-right flip">
                        <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
                    </div>
                <?php }?>
                <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
                <div class="text">
                    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message'];?>

                    <?php } else { ?>
                        <i class="fa fa-picture-o"></i> <?php echo __('ảnh');?>

                    <?php }?>
                </div>
                <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
            </div>
        </a>
    <?php }?>
</li><?php }
}
?>