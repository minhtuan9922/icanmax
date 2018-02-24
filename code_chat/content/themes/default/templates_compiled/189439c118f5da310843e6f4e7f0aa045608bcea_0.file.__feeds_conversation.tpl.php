<?php /* Smarty version 3.1.24, created on 2015-12-25 08:47:52
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_conversation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:352062653567d02b8896086_10931423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189439c118f5da310843e6f4e7f0aa045608bcea' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_conversation.tpl',
      1 => 1451027615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '352062653567d02b8896086_10931423',
  'variables' => 
  array (
    'conversation' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d02b8904bc2_74291248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d02b8904bc2_74291248')) {
function content_567d02b8904bc2_74291248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '352062653567d02b8896086_10931423';
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