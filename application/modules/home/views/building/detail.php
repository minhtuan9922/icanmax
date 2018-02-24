<div class="pm-title">
    <h1><?=$land_item->pro_name?></h1>
</div>
<b>Giới thiệu</b>
<div class="pm-desc"><?=htmlspecialchars_decode($land_item->pro_info)?></div>
<div class="pm-img">
    <div class="img-single">
        <img src="<?= base_url('uploads/lands') ?>/<?=$land_item->pro_img_seo_forder?>/<?=$land_item->pro_img_seo?>" class="img-responsive img-thumbnail" alt="">
    </div>
    <ol class="nav detail-img">
        <?php $img = unserialize($land_item->pro_images);?>
        <?php for($i=0;$i<count($img);$i++):?>
        <li class="img-src">
            <div class="img-opacity"></div>
            <img class="img-responsive img-thumbnail" src="<?=base_url('uploads/lands') ?>/<?=$land_item->pro_folderimg?>/<?=$img[$i]?>" alt="">
        </li>
        <?php endfor;?>
    </ol>
</div>
<script>
    $('.img-src img').click(function(){
        var re_src = $(this).attr('src');
        $('.img-single img').attr('src',re_src);
    });
</script>
<b>Chi tiết</b>
<div class="pm-desc">
    <?=htmlspecialchars_decode($land_item->pro_full)?>
</div>
<br>
<b>Bình luận</b>
<hr>
<div class="fb-comments" data-href="<?php echo base_url('view-building').'/'.$land_item->pro_id.'/'.replace(@$land_item->pro_rewrite)?>" data-width="100%" data-numposts="5"></div>

<div class="user-contact" id="us-contact">
    <h3>Liên hệ người bán : <span class="us-text"><?=$land_item->user_name?> </span></h3>
    <div class="us-info">
        <p class="us-add"><i class="fa fa-map-marker us-text" aria-hidden="true"></i> Địa chỉ : <?=$land_item->user_address?></p>
        <p class="us-em"><i class="fa fa-envelope-o us-text" aria-hidden="true"></i> Email : <?=$land_item->user_email?></p>
        <p class="us-ph"><i class="fa fa-phone us-text" aria-hidden="true"></i> Điện thoại : <?=$land_item->user_phone?></p>
    </div>
    <div class="us-chat"><i class="fa fa-comments-o fa-5x" aria-hidden="true"></i> <span class="text-chat">Chat với người bán</span></div>
    <div class="us-close"><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
</div>
<div class="user-contact-show">
    <h3>Liên hệ người bán</h3>
    <div class="us-show"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
</div>
<script>
    $('.us-close').click(function(){
        $('#us-contact').slideToggle( "slow");
        $('.user-contact-show').slideToggle("slow");
    });
    $('.us-show').click(function(){
        $('#us-contact').slideToggle( "slow");
        $('.user-contact-show').slideToggle("slow");
    });
</script>