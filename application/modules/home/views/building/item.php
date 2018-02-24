<?php foreach($land as $item):?>
    <div class="col-md-4 col-sm-4">
        <div class="row">
            <div class="item-land">
                <a href="<?=base_url('view-building')?>/<?=$item->pro_id?>/<?=replace($item->pro_name_rewrite)?>">
                    <img src="<?=base_url('uploads/lands')?>/<?=$item->pro_img_seo_forder?>/<?=$item->pro_img_seo?>" alt="" class="img-lis img-thumbnail">
                    <p class="title-itemland"><?=$item->pro_name?></p>
                </a>
                <p class="price-itemland"> <i class="fa fa-money" aria-hidden="true"></i> <?=number_format($item->pro_price)?> đ</p>
                <p class="area-itemland"> <i class="fa fa-area-chart" aria-hidden="true"></i></i> <?=$item->area_text?> m²</p>
                <p class="location-itemland"> <i class="fa fa-map-marker" aria-hidden="true"></i><?=$item->address_info?></p>
                <p class="author-date-itemland">
                    <span class="author-itemland"><i class="fa fa-user-circle-o" aria-hidden="true"></i> admin</span>
                    <span class="date-itemland"><i class="fa fa-calendar" aria-hidden="true"></i> <?php $date = date_create($item->creatdate); echo date_format($date,'d-m-Y');?></span>
                </p>
            </div>
        </div>
    </div>
<?php endforeach;?>