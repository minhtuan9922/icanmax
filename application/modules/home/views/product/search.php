<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2017
 * Time: 1:59 PM
 */
?>
<h4>Tìm được <span class="text-info"><?=$count_product?></span> sản phẩm với từ khóa <span class="text-danger">'<?=$text?>'</span>.</h4>
<?php if($product): $data['product'] = $product?>
    <?php $this->load->view('product/item',$data);?>
    <div class="col-md-12">
        <div class="row">
            <div class="list-pagination">
                <?=$this->pagination->create_links();?>
            </div>
        </div>
    </div>
<?php endif;?>
