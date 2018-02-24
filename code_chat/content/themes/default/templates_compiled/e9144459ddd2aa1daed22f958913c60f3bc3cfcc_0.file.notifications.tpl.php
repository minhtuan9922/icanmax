<?php /* Smarty version 3.1.24, created on 2015-12-25 08:46:53
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/notifications.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:815266578567d027df223e7_65227959%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9144459ddd2aa1daed22f958913c60f3bc3cfcc' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/notifications.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815266578567d027df223e7_65227959',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d027e093518_00218817',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d027e093518_00218817')) {
function content_567d027e093518_00218817 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '815266578567d027df223e7_65227959';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8">

            <!-- notifications -->
            <div class="panel panel-default">
                <div class="panel-heading light">
                    <div class="mt5">
                        <strong><?php echo __("Thông báo của bạn");?>
</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['notifications'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['notification']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
$foreach_notification_Sav = $_smarty_tpl->tpl_vars['notification'];
?>
                        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        <?php
$_smarty_tpl->tpl_vars['notification'] = $foreach_notification_Sav;
}
?>
                    </ul>

                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                    <!-- see-more -->
                    <div class="alert alert-info see-more js_see-more" data-get="notifications">
                        <span><?php echo __("Xem thêm");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                    <?php }?>

                </div>
            </div>
            <!-- notifications -->
            
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
        <?php echo $_smarty_tpl->getSubTemplate ('__ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo $_smarty_tpl->getSubTemplate ('__widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>

    </div>
</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>