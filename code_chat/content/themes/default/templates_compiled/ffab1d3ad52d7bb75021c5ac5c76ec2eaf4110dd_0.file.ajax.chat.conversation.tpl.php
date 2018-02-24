<?php /* Smarty version 3.1.24, created on 2015-12-25 10:29:56
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.conversation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1273889677567d1aa4907822_95348941%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffab1d3ad52d7bb75021c5ac5c76ec2eaf4110dd' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.chat.conversation.tpl',
      1 => 1451028751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273889677567d1aa4907822_95348941',
  'variables' => 
  array (
    'conversation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1aa492acb6_78245008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1aa492acb6_78245008')) {
function content_567d1aa492acb6_78245008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1273889677567d1aa4907822_95348941';
?>
<div class="panel panel-default panel-messages" data-cid=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
>
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default js_chat-start">
                    <i class="fa fa-comment-o"></i>
                    <?php echo __("Tin nhắn mới");?>

                </button>
                <button type="button" class="btn btn-default js_delete-conversation">
                    <i class="fa fa-trash-o"></i>
                    <?php echo __("Xóa");?>

                </button>
            </div>
        </div>
        <div class="mt5">
            <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
                <?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_html'];?>

            <?php } else { ?>
                <span title="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span>
            <?php }?>
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px">
            <?php echo $_smarty_tpl->getSubTemplate ('ajax.chat.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="loader loader_small"></div>
                </li>
            </ul>
        </div>
        <div class="chat-form-container">
            <div class="x-form chat-form">
                <div class="chat-form-message">
                    <textarea class="js_autogrow  js_post-message" placeholder="<?php echo __("Viết tin nhắn");?>
"></textarea>
                </div>
                <div class="x-form-tools">
                    <div class="x-form-tools-attach">
                        <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                    </div>
                    <div class="x-form-tools-emoji js_emoji-menu-toggle">
                        <i class="fa fa-smile-o fa-lg"></i>
                    </div>
                    <?php echo $_smarty_tpl->getSubTemplate ('__emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>