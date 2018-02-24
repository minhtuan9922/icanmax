<?php /* Smarty version 3.1.24, created on 2015-12-25 15:25:59
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:106832198567d600712ed13_06277596%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccff13b5e34e8429e49b8a74b344d0684a57bffc' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.search.tpl',
      1 => 1451028932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106832198567d600712ed13_06277596',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d600718f9a0_53031736',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d600718f9a0_53031736')) {
function content_567d600718f9a0_53031736 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '106832198567d600712ed13_06277596';
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