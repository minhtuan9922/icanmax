<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:15 AM
 */
?>
<div class="row">
    <?php if(isset($item_post) && count((array)$item_post) > 0): $data['post_list'] = $item_post;$data['dk_break']=NULL;?>
        <?php $this->load->view('post/item',$data);?>
    <?php endif;?>
</div>
