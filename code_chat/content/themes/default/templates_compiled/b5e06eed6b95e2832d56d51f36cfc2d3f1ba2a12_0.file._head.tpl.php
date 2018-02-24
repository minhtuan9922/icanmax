<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:13
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2112081749567c9eb9e72209_33364745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e06eed6b95e2832d56d51f36cfc2d3f1ba2a12' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_head.tpl',
      1 => 1446472184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2112081749567c9eb9e72209_33364745',
  'variables' => 
  array (
    'system' => 0,
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9eb9eca035_73880695',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9eb9eca035_73880695')) {
function content_567c9eb9eca035_73880695 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2112081749567c9eb9e72209_33364745';
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"> <![endif]-->
<!--[if IE 9]><html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--><html class="gt-ie8 gt-ie9 not-ie" dir="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['dir'];?>
"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    
    <!-- Title -->
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
    
    <!-- Meta -->
    <meta name="keywords" content="">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
">
    <meta name="author" content="Zamblek">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png" />
    
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/font-awesome/css/font-awesome.min.css">

    <!-- Twemoji-Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/twemoji-awesome/twemoji-awesome.min.css">

    <!-- Flag-Icon -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/flag-icon/flag-icon.min.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/bootstrap/css/bootstrap-social.min.css">

    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?>
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/bootstrap/css/bootstrap-rtl.min.css">
    <?php }?>

    <!-- Styles -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.css">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.responsive.480.css">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.responsive.768.css">
    <?php } else { ?>
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.rtl.css">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.responsive.480.rtl.css">
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.responsive.768.rtl.css">
    <?php }?>
    
    <!-- JS Files -->
    <?php echo $_smarty_tpl->getSubTemplate ('_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- JS Files -->
    
</head><?php }
}
?>