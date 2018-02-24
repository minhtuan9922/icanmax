<?php /* Smarty version 3.1.24, created on 2016-12-08 01:09:03
         compiled from "D:/code_new/code_chat/content/themes/default/templates/messages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:317965848b2af8ac506_72643456%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334ab696046137745117efdbf65d4535245efb61' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/messages.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317965848b2af8ac506_72643456',
  'variables' => 
  array (
    'user' => 0,
    '_conversation' => 0,
    'system' => 0,
    'conversation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5848b2af96e8d5_13976371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5848b2af96e8d5_13976371')) {
function content_5848b2af96e8d5_13976371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317965848b2af8ac506_72643456';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">

        <!-- threads -->
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="panel panel-default panel-conversations">
                <div class="panel-heading">
                     <?php echo __("Trò chuyện");?>

                </div>
                <div class="panel-body js_live-messages-alt">
                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) > 0) {?>
                        <div class="js_scroller" data-slimScroll-height="100%">
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['conversations'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_conversation'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_conversation']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_conversation']->value) {
$_smarty_tpl->tpl_vars['_conversation']->_loop = true;
$foreach__conversation_Sav = $_smarty_tpl->tpl_vars['_conversation'];
?>
                                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('conversation'=>$_smarty_tpl->tpl_vars['_conversation']->value), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_conversation'] = $foreach__conversation_Sav;
}
?>
                            </ul>

                            <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-post see-more small mlr5 js_see-more" data-get="conversations">
                                <span><?php echo __("Xem tin nhắn trước");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- threads -->

        <!-- conversation -->
        <div class="col-lg-8 col-md-8 col-sm-8 js_conversation-container">
            <?php if ($_smarty_tpl->tpl_vars['conversation']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('ajax.chat.conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php } else { ?>
                <div class="panel panel-default panel-messages">
                    <div class="panel-heading clearfix">
                        <div class="pull-right flip">
                            <button type="button" class="btn btn-default js_chat-start">
                                <i class="fa fa-comment-o"></i>
                                <?php echo __("Tin nhắn mới");?>

                            </button>
                        </div>
                        <div class="mt5 text-muted"><?php echo __("Không có lựa chọn");?>
</div>
                    </div>
                    <div class="panel-body empty">
                        <h4><?php echo __("Chưa có trò chuyện nào được chọn");?>
</h4>
                        <span class="text-link js_chat-start"><?php echo __("Tin nhắn mới");?>
</span>
                    </div>
                </div>
            <?php }?>
        </div>
        <!-- conversation -->

    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>