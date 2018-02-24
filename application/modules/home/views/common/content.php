<div class="container">
    <div class="row">
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center shopping-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <p class=""><?=$this->lang->line('shop_online')?></p></div></a>
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center rao-vat"><i class="fa fa-money" aria-hidden="true"></i></i> <p><?=$this->lang->line('ad_free')?></p></div></a>
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center tuyen-dung"><i class="fa fa-group" aria-hidden="true"></i> <p><?=$this->lang->line('recruiter')?></p></div></a>
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center ung-vien"> <i class="fa fa-address-card-o" aria-hidden="true"></i> <p><?=$this->lang->line('search_job')?></p></div></a>
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center bds-ban"><i class="fa fa-edit" aria-hidden="true"></i> <p><?=$this->lang->line('land_sell')?></p></div></a>
        <a href=""><div class="col-md-2 col-sm-4 col-xs-6 text-center bds-mua"> <i class="fa fa-handshake-o" aria-hidden="true"></i> <p><?=$this->lang->line('land_buy')?></p></div></a>
    </div>
</div>
<script>
    $('.shopping-icon').hover(function(){
        $(".shopping-icon>i").toggleClass('animated swing');
        $(".shopping-icon>p").toggleClass('animated tada');
    });
    $('.rao-vat').hover(function(){
        $(".rao-vat>i").toggleClass('animated jello');
        $(".rao-vat>p").toggleClass('animated tada');
    });

    $('.tuyen-dung').hover(function(){
        $(".tuyen-dung>i").toggleClass('animated swing');
        $(".tuyen-dung>p").toggleClass('animated tada');
    });
    $('.bds-ban').hover(function(){
        $(".bds-ban>i").toggleClass('animated swing');
        $(".bds-ban>p").toggleClass('animated tada');
    });
    $('.ung-vien').hover(function(){
        $(".ung-vien>i").toggleClass('animated jello');
        $(".ung-vien>p").toggleClass('animated tada');
    });
    $('.bds-mua').hover(function(){
        $(".bds-mua>i").toggleClass('animated jello');
        $(".bds-mua>p").toggleClass('animated tada');
    });
</script>
<div class="lis-content">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                       <h2 class="title-content"><?=$this->lang->line('pro_vip');?></h2>
                   </div>
                <div class="col-md-12 sider-product">
                    <!--<div class="row">-->
                        <div class="owl-carousel owl-theme">
                            <?php if($pro_vip): $data['product'] = $pro_vip?>
                                <?php $this->load->view('product/item_pro',$data);?>
                            <?php endif;?>
                        </div>
                        <script type="text/javascript">
                            $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                nav:true,
                                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                responsive:{
                                    0:{
                                        items:1
                                    },
                                    600:{
                                        items:3
                                    },
                                    1000:{
                                        items:4
                                    }
                                }
                            })
                        </script>
                    <!--</div>-->
                </div>
            </div>

            <div class="row">
                    <div class="col-md-12">
                       <h2 class="title-content"><?=$this->lang->line('pro_hot');?></h2>
                   </div>
                   <div class="col-md-10 title-slit">
                      <img src="">
                   </div>
                <div class="col-md-12 sider-product">
                    <!--<div class="row">-->
                        <div class="owl-carousel owl-theme">
                            <?php if($pro_hot): $data['product'] = $pro_hot?>
                                <?php $this->load->view('product/item_pro',$data);?>
                            <?php endif;?>
                        </div>
                        <script type="text/javascript">
                            $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                nav:true,
                                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                                '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                responsive:{
                                    0:{
                                        items:1
                                    },
                                    600:{
                                        items:3
                                    },
                                    1000:{
                                        items:4
                                    }
                                }
                            })
                        </script>
                    <!--</div>-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-content"><?=$this->lang->line('pro_new');?></h2>
                </div>
                <div class="col-md-10 title-slit">
                    <img src="">
                </div>
                <div class="col-md-12 sider-product">
                    <!--<div class="row">-->
                        <div class="owl-carousel owl-theme">
                            <?php if($pro_new): $data['product'] = $pro_new?>
                                <?php $this->load->view('product/item_pro',$data);?>
                            <?php endif;?>
                        </div>
                        <script type="text/javascript">
                            $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                nav:true,
                                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                responsive:{
                                    0:{
                                        items:1
                                    },
                                    600:{
                                        items:3
                                    },
                                    1000:{
                                        items:5
                                    }
                                }
                            })
                        </script>
                    <!--</div>-->
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="title-news-cont">
                    <div class="col-md-12">
                       <h2 class="title-content"><?=$this->lang->line('news_recruiter');?></h2>
                    </div>
                   <div class="col-md-10 title-slit-news">
                      <img src="">
                   </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                           	<div class="title-content-news text-center">
                            	<p class="title-news-left"><?=$this->lang->line('breaking_news')?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
							<div class="list-item-post-home col">
								<?php /*pre($post_new); */if($post_new):?>
									<?php foreach($post_new as $item):?>
										<div class="news-img">
											<div class="row">
												<div class="col-md-3 col-sm-3 col-xs-5">
													 <a href="<?php echo base_url('itempost/view').'/'.$item->pro_id.'/'.$item->pro_name_rewrite?>">
														<img src="<?php echo base_url('uploads/posts/thumb').'/'.$item->pro_img_seo?>" width="100%" height="100%" class="img-thumbnail">
													</a>
												</div>
												<div class="col-md-9 col-sm-9 col-xs-7 lis-text-menu">
													<!--<div class="row">-->
														<a href="<?php echo base_url('itempost/view').'/'.$item->pro_id.'/'.$item->pro_name_rewrite?>">
															<p class="title-item-post"><?=htmlspecialchars_decode($item->pro_name);?>....</p>
														</a>
													<!--</div>-->
												</div>
											</div>
											<p class="user-date-item-post">
												<span class="user-item-post"><i class="fa fa-user-circle-o" aria-hidden="true"></i> :<i>Admin</i></span> -
												<span class="date-item-post"><i class="fa fa-calendar-o" aria-hidden="true"></i> :<i><?php $date=date_create($item->creatdate); echo date_format($date,'d-m-Y');?></i></span>
											</p>
										</div>
									<?php endforeach;?>
								<?php endif;?>
								<!--<div class="col-md-12 view-add">
									<a href=".">
										Xem thêm >>>
									</a>
								</div> -->
							</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                	<div class="recruiter-home">
						<div class="row">
                            <div class="col-md-12">
                               	<div class="title-content-news text-center">
									<p class="title-news-left">
										<a href="<?php echo base_url('page/3/recruiter')?>"><?=$this->lang->line('job_vip')?></a>
									</p>
                            	</div>
                            </div>
                            <div class="col-md-12">
                               	<div class="title-news-right">
									<div class="list-item-post-home">
										<table class="table table-striped">
											<thead>
											<tr>
												<th>Tiêu đề</th>
												<th>Vị trí </th>
												<th>Khu vực</th>
												<th>Mức lương</th>
												<th>Hạn nộp</th>
											</tr>
											</thead>
											<tbody>
											<?php $data['recruiter'] = $recruiter_vip;$this->load->view('recruiter/item',$data);?>
											</tbody>
										</table>
									</div>
                                </div>
                            </div>
                            <!--<div class="col-md-12 view-add-right">
                                <a href="<?php /*echo base_url('page/3/recruiter')*/?>">
                                    Xem thêm >>>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="container product-hot"></div>