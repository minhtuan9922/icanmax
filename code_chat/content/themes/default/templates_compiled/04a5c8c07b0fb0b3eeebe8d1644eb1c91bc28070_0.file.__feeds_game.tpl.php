<?php /* Smarty version 3.1.24, created on 2015-12-25 10:24:50
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_game.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:749652220567d1972300ca2_24900231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04a5c8c07b0fb0b3eeebe8d1644eb1c91bc28070' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/__feeds_game.tpl',
      1 => 1451027654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749652220567d1972300ca2_24900231',
  'variables' => 
  array (
    'system' => 0,
    '_game' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d1972354a67_69915875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d1972354a67_69915875')) {
function content_567d1972354a67_69915875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '749652220567d1972300ca2_24900231';
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