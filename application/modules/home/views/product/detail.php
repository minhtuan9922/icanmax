<?php $img = @unserialize($pro_item->pro_images);?>
<div class="col-md-12">
	<h3 class="title-product"><?php echo $pro_item->pro_name?></h3>
</div>
<div class="col-md-5">
    <!--<div class="row">-->
        <div id="ztest">
            <a href="<?php /*echo base_url('uploads/products/').'/'.$pro_item->pro_folderimg.'/'.@$img[0] */?>" class="MagicZoom" data-options="zoomWidth:400px; zoomHeight:400px">
                <img id="imgSmile" src="<?php echo base_url('uploads/products/').'/'.$pro_item->pro_folderimg.'/'.@$img[0] ?>" alt="" class="img-thumbnail">
            </a>
        </div>
        <ul class="nav list-img" id="list-img">
            <?php for($i=0;$i<count($img);$i++):?>
                <li><img src="<?php echo base_url('uploads/products/').'/'.$pro_item->pro_folderimg.'/'.@$img[$i] ?>" class="img-thumbnail" alt=""></li>
            <?php endfor;?>
        </ul>
    <!--</div>-->
</div>
<script>
    MagicZoom.options = {
        'disable-zoom' : false,
        'selectors-change' : 'click',
        'zoom-align' : 'center'
    }
    $('#list-img').owlCarousel({
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
                items:3
            }
        }
    });
    $('.list-img img').click(function(){
        var src_re  = $( this).attr('src');
        $('#imgSmile').attr('src',src_re);
        $('#ztest a').attr('href',src_re);
    });
</script>
<div class="col-md-7">
    <p class="title-name-pro"><span class="title-defaul"><?=$this->lang->line('pro_name');?> :</span> <?=$pro_item->pro_name?></p>
    <p class="title-name-pro"><span class="title-defaul"><?=$this->lang->line('pro_code');?> :</span> <?=$pro_item->pro_code?></p>
    <p class="title-name-pro"><span class="title-defaul"><?=$this->lang->line('pro_price');?> :</span> <span class="title-price-detail"><?=number_format($pro_item->pro_price)?> vnđ</span></p>
    <p class="title-name-pro"><span class="title-defaul"><?=$this->lang->line('pro_info');?> :</span> <?=htmlspecialchars_decode($pro_item->pro_info)?></p>

    <div class="input-number">
        <input type="number" size="10" min="1" max="20" id="number_C" onchange="returnNumbercart();" value="1">
        <a href="<?=base_url('cart/add-i/').'/'.$pro_item->pro_id?>" id="link" onClick="returnNumbercart();" class="btn lis-btn-detail"><?=$this->lang->line('add_cart')?></a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="col-md-12">
    <!--<div class="row">-->
        <h2 class="title-content"><?=$this->lang->line('full_text')?></h2>
    <!--</div>-->
    <div class="detail">
        <?=htmlspecialchars_decode($pro_item->pro_full)?>
    </div>
</div>
<div class="col-md-12 pd0">
    <!--<div class="row">-->
        <h2 class="title-content"><?=$this->lang->line('comment')?></h2>
        <div class="fb-comments" data-href="<?php echo base_url('item-pro/view/').'/'.$pro_item->pro_id.'/'.replace(@$pro_item->pro_rewrite)?>" data-width="100%" data-numposts="5"></div>
    <!--</div>-->
</div>
<div class="col-md-12 pd0">
    <!--<div class="row">-->
        <h2 class="title-content"><?=$this->lang->line('pro_relate');?></h2>
    <!--</div>-->
    <div class="clearfix"></div>
    <div class="sider-product">
        <!--<div class="row">-->
            <div class="owl-carousel owl-theme">
                <?php if($pro_lq): $data['product'] = $pro_lq?>
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
                            items:3
                        }
                    }
                });
                function returnNumbercart(num){
                    var numbera  = $("#number_C").val();
                    var link    = $('#link').attr('href');
                    $('#link').attr('href',"<?=base_url('cart/add-i/').'/'.$pro_item->pro_id?>"+"/"+numbera);
                }
            </script>
        <!--</div>-->
    </div>
</div>