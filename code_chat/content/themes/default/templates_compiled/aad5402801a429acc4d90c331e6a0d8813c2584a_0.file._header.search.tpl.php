<?php /* Smarty version 3.1.24, created on 2015-12-25 07:27:23
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:283100294567cefdbc99d04_65689044%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad5402801a429acc4d90c331e6a0d8813c2584a' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/_header.search.tpl',
      1 => 1451028439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283100294567cefdbc99d04_65689044',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cefdbce0393_97506462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cefdbce0393_97506462')) {
function content_567cefdbce0393_97506462 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '283100294567cefdbc99d04_65689044';
?>
<form class="navbar-form pull-left flip hidden-xs">
    <input id="search-input" type="text" class="form-control" placeholder="<?php echo __("Tìm kiếm bạn bè, trang, nhóm và #hashtags");?>
" autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search">
        <div class="dropdown-widget-header">
            <?php echo __("Kết quả tìm kiếm");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="loader loader_small ptb10"></div>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("Xem tất cả");?>
</a>
    </div>
</form><?php }
}
?>