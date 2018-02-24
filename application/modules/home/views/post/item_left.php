<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:12 AM
 */
?>

<?php $i=0; foreach($post_list as $ite): if($i==$dk_break && $dk_break != NULL){break;}?>
    <div class="lis-new-right">
        <a href="<?php echo base_url('itempost/view').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite)?>">
            <div class="col-md-5 col-sm-5 col-xs-4">
                <img src="<?php echo base_url('uploads/posts/thumb').'/'.$ite->pro_img_seo?>" alt="<?=$ite->pro_name?>" class="img-thumbnail">
            </div>
            <div class="col-md-7 col-sm-7 col-xs-8 credit-news">
                <!--<div class="row">-->
                    <?=htmlspecialchars_decode($ite->pro_name)?>
                <!--</div>-->
            </div>
        </a>
    </div>
<?php $i++; endforeach;?>