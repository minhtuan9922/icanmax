<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title?$title:"Website design by Nguyễn Thành Đạt"; ?></title>
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
<div class="container">
    <div class="row">
        <?php $this->load->view('common/breadcrumb')?>
        <?php $this->load->view('hmenu')?>
        <?php 
            $this->load->view('user/user_left');
        ?>
        <div class="col-md-9">
            <?php $this->load->view($content);?>
        </div>
    </div>
</div>
<?php $this->load->view('common/footer');?>
</body>
</html>