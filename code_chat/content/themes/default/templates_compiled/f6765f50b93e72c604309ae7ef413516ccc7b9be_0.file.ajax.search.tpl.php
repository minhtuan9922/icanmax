<?php /* Smarty version 3.1.24, created on 2016-12-08 01:04:48
         compiled from "D:/code_new/code_chat/content/themes/default/templates/ajax.search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:105775848b1b02eaff7_60860330%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6765f50b93e72c604309ae7ef413516ccc7b9be' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/ajax.search.tpl',
      1 => 1451028932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105775848b1b02eaff7_60860330',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5848b1b05833e8_53779762',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5848b1b05833e8_53779762')) {
function content_5848b1b05833e8_53779762 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '105775848b1b02eaff7_60860330';
?>
<div class="js_scroller">
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['results']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$foreach_result_Sav = $_smarty_tpl->tpl_vars['result'];
?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value['type'] == "user") {?>
                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['result']->value,'_connection'=>$_smarty_tpl->tpl_vars['result']->value['connection']), 0);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "page") {?>
                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['result']->value), 0);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "group") {?>
                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['result']->value), 0);
?>


            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
    </ul>
</div><?php }
}
?>