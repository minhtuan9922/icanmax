<?php /* Smarty version 3.1.24, created on 2015-12-26 11:37:05
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1910553839567e7be141eb32_07727373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ccf78f2d2ac6b0f61c7cc27bc4613486dde7b8e' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_game.tpl',
      1 => 1451027654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910553839567e7be141eb32_07727373',
  'variables' => 
  array (
    'system' => 0,
    '_game' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e7be1471b46_78233364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e7be1471b46_78233364')) {
function content_567e7be1471b46_78233364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1910553839567e7be141eb32_07727373';
?>
<li class="feeds-item">
    <div class="data-container">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
"><?php echo __("Bắt đầu");?>
</a>
            </div>
            <div>
                <span class="name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
                </span>
            </div>
        </div>
    </div>
</li><?php }
}
?>