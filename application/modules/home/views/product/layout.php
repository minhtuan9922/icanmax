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
    <style>
        .side-left,.sider-right{
            background: rgba(255, 255, 255, 0.7);
        }
        .lis-nav-slider{
            background: url("<?=base_url()?>assets/home/image/qMU6gu_simg_eefadc_1130x300_maxb.jpg") no-repeat center;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;
        }
    </style>
</head>
<body>
<?php $this->load->view('common/header');?>
<?php $this->load->view('common/menu_layout');?>
<div class="container">
    <div class="row">
        <?php $this->load->view('common/breadcrumb')?>
        <div class="col-md-9">
            <div class="row">
            <?php $this->load->view($content);?>
            </div>
        </div>
        <?php $this->load->view('product/product_left');?>
    </div>
</div>
<?php $this->load->view('common/footer');?>
</body>
</html>