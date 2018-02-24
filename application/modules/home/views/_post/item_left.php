<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:12 AM
 */
?>

<?php $i=0; foreach($post_list as $ite): if($i==$dk_break && $dk_break != NULL){break;}?>
    <div class="item">
        <a href="<?php echo base_url('itempost/view').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite)?>">
            <div class="col-md-4">
                <img src="<?php echo base_url('uploads/posts/thumb').'/'.$ite->pro_img_seo?>" alt="<?=$ite->pro_name?>" class="img-thumbnail">
            </div>
            <div class="col-md-7">
                <h4><?=htmlspecialchars_decode($ite->pro_name)?></h4>
            </div>
        </a>
    </div>
    <div class="clearfix"></div>
<?php $i++; endforeach;?>