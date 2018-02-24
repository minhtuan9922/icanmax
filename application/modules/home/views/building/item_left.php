<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:12 AM
 */
?>

<?php $i=0; foreach($product as $ite): if($i==$dk_break && $dk_break != NULL){break;} if($ite->pro_images != ''){$img = @unserialize($ite->pro_images);}?>
    <div class="list-new-right">
        <a href="<?php echo base_url('item-pro/view/').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite);?>">
            <div class="col-md-4">
                <img src="<?php echo base_url('uploads/products/').'/'.$ite->pro_folderimg.'/'.@$img[0] ?>" alt="<?=$ite->pro_name?>" class="img-thumbnail">
            </div>
            <div class="col-md-7 credit-news">
                <h6><?=htmlspecialchars_decode($ite->pro_name)?></h6>
            </div>
        </a>
    </div>
<?php $i++; endforeach;?>