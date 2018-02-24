<!--coppy-->
<div class="nav-footer home">
    <div class="cont-nav-footer container">
        <div class="row">
            <!--<h3 class="title-nav-bottom"><?/*=$this->lang->line('menu_product')*/?></h3>-->
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="row">
                    <?php /*pre($cate_pro);*/ if($cate_pro):?>
                        <?php foreach($cate_pro as $item):?>
                            <div class="col-md-3 col-sm-4">
                                <!--<div class="row">-->
                                    <div class="item-menu-bottom">
                                        <ul class="nav">
                                            <li>
                                                <h4 class="title-menu-bottom"><a href="<?php echo base_url('cate-pro').'/'.$item->cate_id.'/'.$item->cate_rewrite?>" class="title"><?php echo $item->cate_name?></a></h4>
                                            </li>
                                            <?php  if(count((array)@$item->child) >0): $i=0;?>
                                                <ul class="nav children-nav-footer">
                                                    <?php foreach($item->child as $ite): if($i==2){break;}?>
                                                        <li><a href="<?php echo base_url('cate-pro').'/'.$ite->cate_id.'/'.str_replace(',','',$ite->cate_rewrite) ?>"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $ite->cate_name?></a></li>
                                                    <?php $i++; endforeach;?>
                                                </ul>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                <!--</div>-->
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="title-nav-bottom"></h3>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="row">
                    <?php if($cate_building):?>
                        <?php foreach($cate_building as $item):?>
                            <div class="col-md-3 col-sm-4">
                                <!--<div class="row">-->
                                    <div class="item-menu-bottom">
                                        <ul class="nav">
                                            <li>
                                                <h4 class="title-menu-bottom"><a href="<?php echo base_url('cate-building').'/'.$item->cate_id.'/'.$item->cate_rewrite?>" class="title"><?php echo $item->cate_name?></a></h4>
                                            </li>
                                            <?php if(count((array)$item->child) >0): $i=0;?>
                                                <ul class="nav children-nav-footer">
                                                    <?php foreach($item->child as $ite): if($i==2){break;}?>
                                                        <li><a href="<?php echo base_url('cate-building').'/'.$ite->cate_id.'/'.$ite->cate_rewrite?>"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $ite->cate_name?></a></li>
                                                    <?php $i++; endforeach;?>
                                                </ul>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                <!--</div>-->
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--coppy-->

<div class="footer-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-content">
                <div class="row">
                    <div class="col-md-5 content-left">
                        <!--<div class="row">-->
                            <ul class="footer-nav">
                                <li class="title-left-footer"> Về chúng tôi
                                    <ul class="child-footer">
                                        <li><a href=".">Giới thiệu Icanmax.com</a></li>
                                        <li><a href=".">Quy chế hoạt động</a></li>
                                        <li><a href=".">Các mức chế tài vi phạm</a></li>
                                        <li><a href=".">Hỗ trợ</a></li>
                                    </ul>
                                </li>

                                <li class="title-left-footer"> Dành cho người người dùng
                                    <ul class="child-footer">
                                        <li><a href=".">Bảo vệ người mua</a></li>
                                        <li><a href=".">Quy định dành cho người mua</a></li>
                                        <li><a href=".">Quy định dành cho người đăng tin</a></li>
                                        <li><a href=".">Giải quyết khiếu nại</a></li>
                                        <li><a href=".">Hướng dẫn mua hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                          <!--  </p>
                        </div>-->
                    </div>
                    <div class="col-md-7 content-right">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                <p class="nav-dsi text-center">
                                    <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/home/img/logoicanmax.png" class="img-responsive"></a>
                                    <div class="clearfix"></div>
                                    <span class="title-intro-page">Website tổng hợp đầu tiên tại Việt Nam <br> Trải nghiệm mới - niềm vui mới</span>
                                </p>
                                </center>
                            </div>

                            <ul class="col-md-6 nav-right-footer">
                                <li class="title-copyright">Copyright@2016 icanmax.com</li>
                                <li> Công ty DSIVIET</li>
                                <li>Cơ quan cấp: Sở Kế hoạch và Đầu tư TPHCM.</li>
                                <li>Địa chỉ : 5-7 Hoang Viet Street, Unit#307, Ward 4th, Tan Binh District, Ho Chi Minh City, S.R of Viet Nam</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<!--<div class="col-md-2 content-mid text-center">
    <b><p class="title-mid-footer ">
            Liên kết</b>
    </p>
    <div class="col-md-6 icon-left">
        <a href="https://www.facebook.com/" class="nav_fb" target="_blank"><i
                class="fa fa-facebook-square" aria-hidden="true"></i></a></p>
        <a href="https://www.google.com.vn/" class="nav_google" target="_blank"><i
                class="fa fa-google-plus-square" aria-hidden="true"></i></a>
    </div>
    <div class="col-md-6 icon-left">
        <a href="https://twitter.com" class="nav_tw" target="_blank" value="tw"><i
                class="fa fa-twitter" aria-hidden="true"></i></a></p>
        <a href="https://mail.google.com" class="nav_gmail" target="_blank"><i
                class="fa fa-envelope-o" aria-hidden="true"></i></a>
    </div>
</div>-->