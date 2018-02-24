<?php /* Smarty version 3.1.24, created on 2015-12-25 07:31:29
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/_publisher.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1069182782567cf0d15002f9_91822825%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b121e14fabd7be6f5b0d98c566283c8df410196' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/_publisher.tpl',
      1 => 1451028681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069182782567cf0d15002f9_91822825',
  'variables' => 
  array (
    '_handle' => 0,
    '_page' => 0,
    '_group' => 0,
    '_privacy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf0d15a8f02_51767070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf0d15a8f02_51767070')) {
function content_567cf0d15a8f02_51767070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1069182782567cf0d15002f9_91822825';
?>
<div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_page']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value;?>
"<?php } elseif ($_smarty_tpl->tpl_vars['_group']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value;?>
"<?php }?>>

    <!-- publisher loader -->
    <div class="publisher-loader">
        <div class="loader loader_small"></div>
    </div>
    <!-- publisher loader -->

    <!-- post message -->
    <div class="relative">
        <textarea class="js_autogrow js_mention js_publisher-scraber " placeholder="<?php echo __("Bạn đang nghĩ gì?");?>
"></textarea>
    </div>
    <!-- post message -->

    <!-- publisher scraber -->
    <div class="publisher-scraber"></div>
    <!-- publisher scraber -->

    <!-- post attachments -->
    <div class="publisher-attachments attachments clearfix x-hidden">
        <ul>
            <li class="loading">
                <div class="loader loader_small"></div>
            </li>
        </ul>
    </div>
    <!-- post attachments -->

    <!-- post location -->
    <div class="publisher-meta">
        <i class="fa fa-map-marker fa-fw"></i>
        <input type="text" placeholder="<?php echo __("Bạn đang ở đâu?");?>
">
    </div>
    <!-- post location -->
    
    <!-- publisher-footer -->
    <div class="publisher-footer clearfix">
        <!-- publisher-tools -->
        <ul class="publisher-tools">
            <li>
                <span class="publisher-tools-attach">
                    <i class="fa fa-camera fa-lg fa-fw js_x-uploader" data-handle="publisher"></i>
                </span>
            </li>
            <li>
                <span class="js_publisher_meta">
                    <i class="fa fa-map-marker fa-lg fa-fw"></i>
                </span>
            </li>
            <li class="relative">
                <span class="js_emoji-menu-toggle">
                    <i class="fa fa-smile-o fa-lg fa-fw"></i>
                </span>
                <?php echo $_smarty_tpl->getSubTemplate ('__emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </li>
        </ul>
        <!-- publisher-tools -->

        <!-- publisher-buttons -->
        <div class="pull-right flip mt5">
            <?php if ($_smarty_tpl->tpl_vars['_privacy']->value) {?>
            <!-- privacy -->
            <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title="<?php echo __("Ai sẽ nhìn thấy nội dung này?");?>
">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs"><?php echo __("Bạn bè");?>
</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" data-title="<?php echo __("Ai sẽ nhìn thấy nội dung này?");?>
" data-value="public"><i class="fa fa-globe"></i> <?php echo __("Mọi người");?>
</a></li>
                    <li><a href="#" data-title="<?php echo __("Ai sẽ nhìn thấy nội dung này?");?>
" data-value="friends"><i class="fa fa-users"></i> <?php echo __("Bạn bè");?>
</a></li>
                </ul>
            </div>
            <!-- privacy -->
            <?php }?>
            <button type="button" class="btn btn-primary js_publisher"><?php echo __("Đăng");?>
</button>
        </div>
        <!-- publisher-buttons -->
    </div>
    <!-- publisher-footer -->

</div><?php }
}
?>