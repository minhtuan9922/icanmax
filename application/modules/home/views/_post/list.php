<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:15 AM
 */
?>
<div class="row">
    <?php if(isset($post) && count((array)$post) > 0):?>
        <?php foreach($post as $item):?>
            <h2><a href="<?php echo base_url('catepost/view').'/'.$item->cate_id.'/'.$item->cate_rewrite?>"><?=$item->cate_name?></a></h2>
            <?php if(isset($item->child) && count((array)$item->child) > 0): $data['post_list'] = $item->child; $data['dk_break'] = 6;?>
                <?php $this->load->view('post/item',$data);?>
            <?php endif;?>
        <?php endforeach;?>
    <?php endif;?>
</div>
