<div class="banner-w3">
    <div class="demo-1">
        <div id="example1" class="core-slider core-slider__carousel example_1">
            <div class="core-slider_viewport">
                <div class="core-slider_list">
                    <?php if($slide && $slide != NULL):?>
                        <?php foreach($slide as $item):?>
                        <div class="core-slider_item">
                            <img src="<?php echo base_url("uploads/banner")."/".$item['slide_image'];?>" class="img-responsive" alt="<?php echo $item['slide_image'];?>" width="100%" height="300" style="width: 100%;height: 350px !important;">
                        </div>
                        <?php endforeach;?>
                    <?php else:?>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url("assets/home/")?>/Image/b1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url("assets/home/")?>/Image/b2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url("assets/home/")?>/Image/b3.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url("assets/home/")?>/Image/b4.jpg" class="img-responsive" alt="">
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="core-slider_nav">
                <div class="core-slider_arrow core-slider_arrow__right"></div>
                <div class="core-slider_arrow core-slider_arrow__left"></div>
            </div>
            <div class="core-slider_control-nav"></div>
        </div>
    </div>
    <link href="<?php echo base_url("assets/home/")?>/css/coreSlider.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url("assets/home/")?>/js/coreSlider.js"></script>
    <script>
        $('#example1').coreSlider({
            pauseOnHover: false,
            interval: 3000,
            controlNavEnabled: true
        });

    </script>

</div>