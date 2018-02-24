<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/6/2017
 * Time: 2:34 PM
 */
?>
<div class="col-md-3">
   
    <div class="item item-left-right">
		<div class="col-md-12 title-content-news text-center">
			<p class="title-news-left"><?=$this->lang->line('pro_vip')?></p>
		</div>
		<div class="col-md-12 news-img">
			<div class="row">
				<?php if(isset($pro_vip) && count($pro_vip) > 0): $data['product'] = $pro_vip; $data['dk_break'] = 6;?>
					<?php $this->load->view('product/item_left',$data);?>
				<?php endif;?>
			</div>
		</div>   
    </div>

    <div class="item item-left-right">
        <div class="col-md-12 title-content-news text-center">
            <p class="title-news-left"><?=$this->lang->line('pro_new')?></p>
        </div>

        <div class="col-md-12 news-img">
            <div class="row">
                <?php if(isset($pro_new) && count($pro_new) > 0): $data['product'] = $pro_new; $data['dk_break'] = 5;?>
                    <?php $this->load->view('product/item_left',$data);?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

