<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2017
 * Time: 1:59 PM
 */
?>
<?php if($product): $data['product'] = $product?>
    <?php $this->load->view('product/item',$data);?>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="row">
            <div class="list-pagination">
                <?=$this->pagination->create_links();?>
            </div>
        </div>
    </div>
<?php endif;?>
