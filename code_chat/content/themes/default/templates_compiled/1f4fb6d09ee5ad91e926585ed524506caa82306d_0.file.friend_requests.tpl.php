<?php /* Smarty version 3.1.24, created on 2015-12-25 08:02:39
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/friend_requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:860486988567cf81f1835d4_95925748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f4fb6d09ee5ad91e926585ed524506caa82306d' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/friend_requests.tpl',
      1 => 1451029038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860486988567cf81f1835d4_95925748',
  'variables' => 
  array (
    'view' => 0,
    'system' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cf81f287658_60232948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cf81f287658_60232948')) {
function content_567cf81f287658_60232948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '860486988567cf81f1835d4_95925748';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8">

            <!-- friend requests -->
            <div class="panel panel-default">
                <?php if ($_smarty_tpl->tpl_vars['view']->value != "sent") {?>
                    <div class="panel-heading light">
                        <div class="mt5">
                            <strong><?php echo __("Các yeu cầu của bạn");?>
</strong>
                        </div>
                        <div class="mb5">
                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests/sent"><?php echo __("Xem các yêu cầu");?>
</a></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) > 0) {?>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                        </ul>
                        <?php } else { ?>
                        <p class="text-center text-muted">
                            <?php echo __("Không yêu cầu mới");?>

                        </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                            <span><?php echo __("Xem thêm");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <div class="panel-heading light">
                        <div class="mt5">
                            <strong><?php echo __("Yêu cầu kết bạn");?>
</strong>
                        </div>
                        <div class="mb5">
                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("View Received Requests");?>
</a></small>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) > 0) {?>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"cancel"), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                        </ul>
                        <?php } else { ?>
                        <p class="text-center text-muted">
                            <?php echo __("Không yêu cầu mới");?>

                        </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                            <span><?php echo __("Xem thêm");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>
                    </div>
                <?php }?>
            </div>
            <!-- friend requests -->

            <!-- people you may know -->
            <div class="panel panel-default">
                <div class="panel-heading light">
                    <div class="mt5">
                        <strong><?php echo __("Những người bạn có thể biết");?>
</strong>
                    </div>
                </div>
                <div class="panel-body">
                    
                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) > 0) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->_data['new_people'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                        <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add"), 0);
?>

                        <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                    </ul>
                    <?php } else { ?>
                    <p class="text-center text-muted">
                        <?php echo __("Không có dữ liệu nào");?>

                    </p>
                    <?php }?>

                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                    <!-- see-more -->
                    <div class="alert alert-info see-more js_see-more" data-get="new_people">
                        <span><?php echo __("Xem thêm");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                    <?php }?>

                </div>
            </div>
            <!-- people you may know -->
            
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