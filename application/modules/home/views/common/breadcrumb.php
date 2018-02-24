<?php
/**
 * Created by PhpStorm.
 * User: Nguyễn Thành Đạt
 * Date: 11/25/2016
 * Time: 10:27 AM
 */
?>
<div class="col-md-12">
    <!--<div class="row">-->
        <ol class="breadcrumb lis_breadcrumb">
            <li><a href="<?php echo base_url()?>"><?=$this->lang->line('home')?></a></li>
            <?php if(isset($breadcumb)):?>
                <?php $i=0; foreach($breadcumb as $item):?>
                    <?php if($i == count($breadcumb) - 1){?>
                        <li class="active"><?php echo $item->title?></li>
                    <?php }else{ ?>
                        <li><a href="<?php echo $item->link?>"><?php echo $item->title?></a></li>
                    <?php }?>
                <?php $i++; endforeach;?>
            <?php endif; ?>
        </ol>
    <!--</div>-->
</div>
