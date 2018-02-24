<?php foreach($product as $item): if($item->pro_images != ''){$img = @unserialize($item->pro_images);}?>
    <div class="item">
        <div class="lis-pro">
            <a href="<?php echo base_url('item-pro/view/').'/'.$item->pro_id.'/'.$item->pro_name_rewrite;?>">
                <img src="<?php echo base_url('uploads/products/').'/'.$item->pro_folderimg.'/'.@$img[0] ?>" class="img-thumbnail">
                                                <span class="transit">
                                                    <?php echo $item->pro_name?>
                                                </span>
                <p>
                    <?php echo number_format($item->pro_price) ?> đ
                </p>
            </a>
            <a href="<?php echo base_url('item-pro/view/').'/'.$item->pro_id.'/'.$item->pro_name_rewrite;?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href="<?php echo base_url('cart/add/').'/'.$item->pro_id;?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
        </div>
    </div>
<?php endforeach;?>