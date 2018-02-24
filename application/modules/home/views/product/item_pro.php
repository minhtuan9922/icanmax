<?php foreach($product as $item): if($item->pro_images != ''){$img = @unserialize($item->pro_images);}?>
    <div class="item">
        <div class="lis-pro">
            <a href="<?php echo base_url('item-pro/view/').'/'.$item->pro_id.'/'.$item->pro_name_rewrite;?>">
                <img src="<?php echo base_url('uploads/products/').'/'.$item->pro_folderimg.'/'.@$img[0] ?>" class="img-thumbnail">
                <p class="transit"><?php echo $item->pro_name?></p>
                <p class="money-item-pro"><i class="fa fa-money" aria-hidden="true"></i> <?php echo number_format($item->pro_price) ?> đ</p>
            </a>
            <div class="cart-look">
            <a class="icon-item-pro icon-head" href="<?php echo base_url('item-pro/view/').'/'.$item->pro_id.'/'.$item->pro_name_rewrite;?>"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a class="icon-item-pro icon-view" href="<?php echo base_url('item-pro/view/').'/'.$item->pro_id.'/'.$item->pro_name_rewrite;?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a class="icon-item-pro icon-addcart" href="<?php echo base_url('cart/add/').'/'.$item->pro_id;?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
<?php endforeach;?>