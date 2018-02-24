<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_publisher.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1403315723567c9ec75bb602_87436991%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7a6ce10657fac28dce2964135e9dd234e82b90' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_publisher.tpl',
      1 => 1449049886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403315723567c9ec75bb602_87436991',
  'variables' => 
  array (
    '_handle' => 0,
    '_page' => 0,
    '_group' => 0,
    '_privacy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec75eba34_47185487',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec75eba34_47185487')) {
function content_567c9ec75eba34_47185487 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1403315723567c9ec75bb602_87436991';
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
        <textarea class="js_autogrow js_mention js_publisher-scraber " placeholder="<?php echo __("What is on your mind?");?>
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
        <input type="text" placeholder="<?php echo __("Where are you?");?>
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
            <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title="<?php echo __("Shared with: Friends");?>
">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs"><?php echo __("Friends");?>
</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" data-title="<?php echo __("Shared with: Public");?>
" data-value="public"><i class="fa fa-globe"></i> <?php echo __("Public");?>
</a></li>
                    <li><a href="#" data-title="<?php echo __("Shared with: Friends");?>
" data-value="friends"><i class="fa fa-users"></i> <?php echo __("Friends");?>
</a></li>
                </ul>
            </div>
            <!-- privacy -->
            <?php }?>
            <button type="button" class="btn btn-primary js_publisher"><?php echo __("Post");?>
</button>
        </div>
        <!-- publisher-buttons -->
    </div>
    <!-- publisher-footer -->

</div><?php }
}
?>