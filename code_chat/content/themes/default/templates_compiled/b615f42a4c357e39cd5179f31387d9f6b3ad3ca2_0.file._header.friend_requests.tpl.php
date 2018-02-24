<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_header.friend_requests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2010905566567c9ec7503cb8_93096469%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b615f42a4c357e39cd5179f31387d9f6b3ad3ca2' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_header.friend_requests.tpl',
      1 => 1446902486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2010905566567c9ec7503cb8_93096469',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec7551904_53253658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec7551904_53253658')) {
function content_567c9ec7551904_53253658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2010905566567c9ec7503cb8_93096469';
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
            <?php echo __("Friend Requests");?>

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
                    <?php echo __("No new requests");?>

                </p>
                <?php }?>
                
                <!-- People You May Know -->
                <div class="title">
                    <?php echo __("People You May Know");?>

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
                    <?php echo __("No people available");?>

                </p>
                <?php }?>
                <!-- People You May Know -->
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("See All");?>
</a>
    </div>
</li><?php }
}
?>