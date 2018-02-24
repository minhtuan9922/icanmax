<script defer src="<?php echo base_url("assets/home/")?>/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/home/")?>/css/flexslider.css" type="text/css" media="screen" />
<script src="<?php echo base_url("assets/home/")?>/js/imagezoom.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>

<!--mycart-->
<link href="<?php echo base_url("assets/home/")?>/css/owl.carousel.css" rel="stylesheet">
<script src="<?php echo base_url("assets/home/")?>/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>

<!--content-->
<div class="content">
    <!--single-->
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-9 single-grid">
                    <div clas="single-top">
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php if(is_array($img)):?>
                                        <?php for($i=0;$i < count($img) ;$i++):?>
                                        <li data-thumb="<?php echo base_url("uploads/products")."/".$product->pro_folderimg."/".$img[$i]?>">
                                            <div class="thumb-image"> <img src="<?php echo base_url("uploads/products")."/".$product->pro_folderimg."/".$img[$i]?>" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <?php endfor;?>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </div>
                        <div class="single-right simpleCart_shelfItem">
                            <h4><?php echo $product->pro_name?></h4>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price"><?php echo number_format($product->pro_price)?> vnđ</p>
                            <div class="description">
                                <p><span>Giới Thiệu : </span> <?php echo $product->pro_info?></p>
                            </div>
                            <div class="color-quality">
                                <h6>Số lượng :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function(){
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function(){
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                        if(newVal>=1) divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="social-icon">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                                <a href="#"><i class="icon3"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 single-grid1">
                    <h3>HOT</h3>
                    <?php if($pro_hot):?>
                        <?php foreach($pro_hot as $item):?>
                            <?php
                            if($item->pro_images !=""){
                                $images = unserialize($item->pro_images);

                            }
                            ?>
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>">
                                    <img class="img-responsive " src="<?php echo base_url("uploads/products/")."/".$item->pro_folderimg."/".$images[0]?>" alt="">
                                </a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>"><?php echo $item->pro_name?> </a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1"><?php echo number_format($item->pro_price)?> vnđ</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <?php endforeach;?>
                    <?php endif;?>
                <div class="clearfix"> </div>
            </div>
                <div class="clearfix"> </div>
            <!--Product Description-->
            <div class="product-w3agile">
                <h3 class="tittle1">Chi tiết Sản Phẩm</h3>
                <div class="product-grids">
                    <div class="col-md-4 product-grid">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item">
                                <?php if(isset($pro_new[0])):?>
                                    <?php foreach($pro_new[0] as $item):?>
                                        <?php
                                        if($item->pro_images !=""){
                                            $images = unserialize($item->pro_images);

                                        }
                                        ?>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>">
                                                    <img class="img-responsive " src="<?php echo base_url("uploads/products/")."/".$item->pro_folderimg."/".$images[0]?>" alt="">
                                                </a>
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>"><?php echo $item->pro_name?> </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"><?php echo number_format($item->pro_price)?> vnđ</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                            <div class="item">
                                <?php if(isset($pro_new[1])):?>
                                    <?php foreach($pro_new[1] as $item):?>
                                        <?php
                                        if($item->pro_images !=""){
                                            $images = unserialize($item->pro_images);

                                        }
                                        ?>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>">
                                                    <img class="img-responsive " src="<?php echo base_url("uploads/products/")."/".$item->pro_folderimg."/".$images[0]?>" alt="">
                                                </a>
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="<?php echo base_url("product/view")."/".$item->pro_id."/".$item->pro_name_rewrite?>"><?php echo $item->pro_name?> </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"><?php echo number_format($item->pro_price)?> vnđ</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 product-grid1">
                        <div class="tab-wl3">
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Chi tiết</a></li>
                                    <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Comment</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="descr"><?php echo $product->pro_full?></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                        <div class="descr">
                                            <p>Comment facebook</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--Product Description-->
        </div>
    </div>
    <!--single-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Sản phẩm liên quan</h3>
            <div class="arrivals-grids">
                <?php $data['pro']=$product_lq;?>
                <?php $this->load->view("product/item_pro",$data);?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
</div>
<!--content-->