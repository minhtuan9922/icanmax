<?php /* Smarty version 3.1.24, created on 2015-12-25 07:12:20
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.friend_requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:292108570567cec54def991_00409558%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7e5b67babba7d3e1b8f367363e01d3f06d7cf5' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.friend_requests.tpl',
      1 => 1451027538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292108570567cec54def991_00409558',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cec54eaaba4_64606482',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cec54eaaba4_64606482')) {
function content_567cec54eaaba4_64606482 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '292108570567cec54def991_00409558';
?>
<li class="dropdown js_live-requests <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>is-admin<?php }?>">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-users fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget js_dropdown-keepopen">
        <div class="dropdown-widget-header">
            <?php echo __("Yêu cầu kết bạn");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller">
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
                <p class="text-center text-muted mt10">
                    <?php echo __("Không có yêu cầu nào");?>

                </p>
                <?php }?>
                
                <!-- People You May Know -->
                <div class="title">
                    <?php echo __("Bạn có thể biết những người này");?>

                </div>
                
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
                <p class="text-center text-muted mt10">
                    <?php echo __("Không có dữ liệu để hiển thị");?>

                </p>
                <?php }?>
                <!-- People You May Know -->
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("Xem tất cả");?>
</a>
    </div>
</li><?php }
}
?>