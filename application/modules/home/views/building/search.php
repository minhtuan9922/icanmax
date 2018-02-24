<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2017
 * Time: 1:59 PM
 */
?>
<h4>Tìm được <span class="text-info"><?=count($product)?></span> sản phẩm với từ khóa <span class="text-danger">'<?=$text?>'</span>.</h4>
<?php if($product): $data['product'] = $product?>
    <?php $this->load->view('product/item',$data);?>
<?php endif;?>
