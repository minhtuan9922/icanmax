<!--Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="<?=base_url("assets/admin")?>/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold"><?php echo $this->session->userdata("session_fullname");?></span>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li <?php if(isset($home)) {echo $home;} ?>><a href="<?=base_url("admin")?>"><i class="icon-home4"></i> <span><?=$this->lang->line('home'); ?></span></a></li>
                    <li <?php if(isset($message)) {echo $message;} ?>><a href="<?=base_url("admin/message")?>"><i class="fa fa-comments-o" aria-hidden="true"></i> <span><?=$this->lang->line('message'); ?></span></a></li>
                    <li <?php if(isset($about)) {echo $about;} ?>><a href="<?=base_url("admin/about")?>"><i class="fa fa-info-circle" aria-hidden="true"></i> <span><?=$this->lang->line('about'); ?></span></a></li>
                    <li <?php if(isset($service)) {echo $service;} ?>><a href="<?=base_url("admin/service")?>"><i class="fa fa-cogs" aria-hidden="true"></i> <span><?=$this->lang->line('service'); ?></span></a></li>
                    <li <?php if(isset($admin_index)) {echo $admin_index;} ?>>
                        <a href="#"><i class="fa fa-user-secret"></i> <span><?=$this->lang->line('admin'); ?></span></a>
                        <ul>
                            <li <?php if(isset($admin_list)) {echo $admin_list;} ?>><a href="<?php echo base_url("admin/admin")?>"><i class="fa fa-users"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($admin_add)) {echo $admin_add;} ?>><a href="<?php echo base_url("admin/admin/add")?>"><i class="fa fa-user-plus"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span><?=$this->lang->line('customer'); ?></span></a>
                        <ul>
                            <li <?php if(isset($candidate)) {echo $candidate;} ?>><a href="<?php echo base_url("admin/cus/1")?>"><i class="fa fa-users"></i> <?=$this->lang->line('list_candidate'); ?></a></li>
                            <li <?php if(isset($recruiter_c)) {echo $recruiter_c;} ?>><a href="<?php echo base_url("admin/cus/2")?>"><i class="fa fa-users"></i> <?=$this->lang->line('list_recruiter'); ?></a></li>
                            <li <?php if(isset($custormer)) {echo $custormer;} ?>><a href="<?php echo base_url("admin/cus/3")?>"><i class="fa fa-users"></i> <?=$this->lang->line('list_customer'); ?></a></li>
                            <li <?php if(isset($shop)) {echo $shop;} ?>><a href="<?php echo base_url("admin/cus/4")?>"><i class="fa fa-users"></i> <?=$this->lang->line('list_shop'); ?></a></li>
                        </ul>
                    </li>

                    <li <?php if(isset($cate_index)) {echo $cate_index;} ?>>
                        <a href="#"><i class="icon-menu7"></i> <span><?=$this->lang->line('menu_product'); ?></span></a>
                        <ul>
                            <li <?php if(isset($cate_list)) {echo $cate_list;} ?>><a href="<?php echo base_url("admin/cate")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($cate_add)) {echo $cate_add;} ?>><a href="<?php echo base_url("admin/cate/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>

                    <li <?php if(isset($product_index)) {echo $product_index;} ?>>
                        <a href="#"><i class="icon-laptop"></i> <span><?=$this->lang->line('product'); ?></span></a>
                        <ul>
                            <li <?php if(isset($product_list)) {echo $product_list;} ?>><a href="<?php echo base_url("admin/product")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($product_add)) {echo $product_add;} ?>><a href="<?php echo base_url("admin/product")?>/add"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>

                    <li <?php if(isset($post_index)) {echo $post_index;} ?>>
                        <a href="#"><i class="icon-magazine"></i> <span><?=$this->lang->line('news'); ?></span></a>
                        <ul>
                            <li <?php if(isset($post_list)) {echo $post_list;} ?>><a href="<?php echo base_url("admin/post")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($post_add)) {echo $post_add;} ?>><a href="<?php echo base_url("admin/post/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li <?php if(isset($cago_index)) {echo $cago_index;} ?>>
                        <a href="#"><i class="icon-menu7"></i> <span><?=$this->lang->line('menu_news'); ?></span></a>
                        <ul>
                            <li <?php if(isset($cago_list)) {echo $cago_list;} ?>><a href="<?php echo base_url("admin/cago")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($cago_add)) {echo $cago_add;} ?>><a href="<?php echo base_url("admin/cago/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li <?php if(isset($recruiter_index)) {echo $recruiter_index;} ?>>
                        <a href="#"><i class="icon-magazine"></i> <span><?=$this->lang->line('recruit'); ?></span></a>
                        <ul>
                            <li <?php if(isset($recruiter_list)) {echo $recruiter_list;} ?>><a href="<?php echo base_url("admin/recruiter")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($recruiter_add)) {echo $recruiter_add;} ?>><a href="<?php echo base_url("admin/recruiter/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-menu7"></i> <span><?=$this->lang->line('menu_recruit'); ?></span></a>
                        <ul>
                        <!-- chức vụ -->
                            <li <?php if(isset($position_list)) {echo $position_list;} ?>><a href="<?php echo base_url("admin/position")?>"><i class="icon-list2"></i> <?=$this->lang->line('position'); ?></a></li>
                            <!-- Ngành nghề -->
                            <li <?php if(isset($career_list)) {echo $career_list;} ?>><a href="<?php echo base_url("admin/career")?>"><i class="icon-list2"></i> <?=$this->lang->line('career'); ?></a></li>
                            <!-- nơi làm việc -->
                            <li <?php if(isset($location_list)) {echo $location_list;} ?>><a href="<?php echo base_url("admin/location")?>"><i class="icon-list2"></i> <?=$this->lang->line('word_location'); ?></a></li>
                            <!-- mức lương -->
                            <li <?php if(isset($wage_list)) {echo $wage_list;} ?>><a href="<?php echo base_url("admin/wage")?>"><i class="icon-list2"></i> <?=$this->lang->line('wage'); ?></a></li>
                            <!-- kinh nghiệm -->
                            <li <?php if(isset($exp_list)) {echo $exp_list;} ?>><a href="<?php echo base_url("admin/exp")?>"><i class="icon-list2"></i> <?=$this->lang->line('exp'); ?></a></li>
                            <!-- Bằng cấp -->
                            <li <?php if(isset($certificate_list)) {echo $certificate_list;} ?>><a href="<?php echo base_url("admin/certificate")?>"><i class="icon-list2"></i> <?=$this->lang->line('certificate'); ?></a></li>

                        </ul>
                    </li>
                    <li <?php if(isset($banner_index)) {echo $banner_index;} ?>>
                        <a href="#"><i class="glyphicon glyphicon-picture"></i> <span><?=$this->lang->line('banner'); ?></span></a>
                        <ul>
                            <li <?php if(isset($banner_list)) {echo $banner_list;} ?>><a href="<?php echo base_url("admin/banner")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($banner_add)) {echo $banner_add;} ?>><a href="<?php echo base_url("admin/banner/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span><?=$this->lang->line('cart'); ?></span></a>
                        <ul>
                            <li><a href="<?php echo base_url("admin/cart")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li><a href="<?php echo base_url("admin/cart/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li <?php if(isset($landcate_index)) {echo $landcate_index;} ?>>
                        <a href="#"><i class="icon-menu7"></i> <span><?=$this->lang->line('menu_land'); ?></span></a>
                        <ul>
                            <li <?php if(isset($landcate_list)) {echo $landcate_list;} ?>><a href="<?php echo base_url("admin/landcate")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($landcate_add)) {echo $landcate_add;} ?>><a href="<?php echo base_url("admin/landcate/add")?>"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                        <ul>
                            <!-- Giá -->
                            <li <?php if(isset($price)) {echo $price;} ?>><a href="<?php echo base_url("admin/landcate/price")?>"><i class="icon-list2"></i> <?=$this->lang->line('price'); ?></a></li>
                            <!-- Diện tích -->
                            <li <?php if(isset($area)) {echo $area;} ?>><a href="<?php echo base_url("admin/landcate/area")?>"><i class="icon-list2"></i> <?=$this->lang->line('area'); ?></a></li>
                            <!-- Địa chỉ -->
                            <li <?php if(isset($land_location)) {echo $land_location;} ?>><a href="<?php echo base_url("admin/landcate/location")?>"><i class="icon-list2"></i> <?=$this->lang->line('location'); ?></a></li>
                        </ul>
                    </li>

                    <li <?php if(isset($land_index)) {echo $land_index;} ?>>
                        <a href="#"><i class="icon-laptop"></i> <span><?=$this->lang->line('land'); ?></span></a>
                        <ul>
                            <li <?php if(isset($land_list)) {echo $land_list;} ?>><a href="<?php echo base_url("admin/land")?>"><i class="icon-list2"></i> <?=$this->lang->line('list'); ?></a></li>
                            <li <?php if(isset($land_add)) {echo $land_add;} ?>><a href="<?php echo base_url("admin/land")?>/add"><i class=" icon-add"></i> <?=$this->lang->line('add_new'); ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-gear position-left"></i> <span>Setup site</span></a>
                        <ul>
                            <li <?php if(isset($seo)) {echo $seo;} ?>><a href="<?php echo base_url("admin/setup/seo")?>"><i class="fa fa-search"></i> SEO</a></li>
                            <li <?php if(isset($info)) {echo $info;} ?>><a href="<?php echo base_url("admin/setup/info")?>"><i class="fa fa-info-circle"></i> Info</a></li>
                            <li <?php if(isset($cache)) {echo $cache;} ?>><a href="<?php echo base_url("admin/setup/cache")?>"><i class=" icon-add"></i> Cache</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pie-chart"></i> <span>Statistical</span></a>
                        <ul>
                            <li><a href="<?php echo base_url("admin/Stati/pro")?>"><i class="icon-list2"></i> Product</a></li>
                            <li><a href="<?php echo base_url("admin/Stati/info")?>"><i class=" icon-add"></i> Info page</a></li>
                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->