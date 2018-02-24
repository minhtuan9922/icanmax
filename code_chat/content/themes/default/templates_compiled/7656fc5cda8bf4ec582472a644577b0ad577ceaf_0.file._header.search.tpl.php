<?php /* Smarty version 3.1.24, created on 2016-12-07 10:06:36
         compiled from "D:/code_new/code_chat/content/themes/default/templates/_header.search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46805847df2ccf57b1_03273078%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7656fc5cda8bf4ec582472a644577b0ad577ceaf' => 
    array (
      0 => 'D:/code_new/code_chat/content/themes/default/templates/_header.search.tpl',
      1 => 1451028440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46805847df2ccf57b1_03273078',
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5847df2cd4b791_06301761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5847df2cd4b791_06301761')) {
function content_5847df2cd4b791_06301761 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46805847df2ccf57b1_03273078';
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