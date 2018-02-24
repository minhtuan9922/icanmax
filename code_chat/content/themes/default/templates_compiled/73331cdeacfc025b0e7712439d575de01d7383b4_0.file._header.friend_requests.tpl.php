<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:36
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_header.friend_requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:268495847df2cd58dd0_69644220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73331cdeacfc025b0e7712439d575de01d7383b4' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_header.friend_requests.tpl',
      1 => 1451027538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268495847df2cd58dd0_69644220',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2cdda999_20681750',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2cdda999_20681750')) {
function content_5847df2cdda999_20681750 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '268495847df2cd58dd0_69644220';
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