<!--
Au<!--
Author: Mr.Lis
Author URL: http://ariweb.net
License: Creative Commons Attribution 3.0 Unported
-->
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $key?$key:"Shop dầy da dép da..."; ?>" />
    <!--css-->
    <?php $this->load->view("common/style");?>
    <!--js-->
    <?php $this->load->view("common/scripts");?>
</head>
<body>
	<?php $this->load->view('common/header');?>
	<?php $this->load->view('common/menu_home');?>
	<?php $this->load->view('common/content');?>
	<?php $this->load->view('common/footer');?>
</body>
</html>