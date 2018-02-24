<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:27
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_header.search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1084815828567c9ec74b9c49_00389125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43255105cd922ccabee06d57afe5194312644423' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_header.search.tpl',
      1 => 1447145476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1084815828567c9ec74b9c49_00389125',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9ec74ff0e1_44127422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9ec74ff0e1_44127422')) {
function content_567c9ec74ff0e1_44127422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1084815828567c9ec74b9c49_00389125';
?>
<form class="navbar-form pull-left flip hidden-xs">
    <input id="search-input" type="text" class="form-control" placeholder="<?php echo __("Search for people, pages and #hashtags");?>
" autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search">
        <div class="dropdown-widget-header">
            <?php echo __("Search Results");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="loader loader_small ptb10"></div>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
    </div>
</form><?php }
}
?>