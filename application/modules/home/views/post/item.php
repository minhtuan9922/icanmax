<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:12 AM
 */
?>

<?php $i=0; foreach($post_list as $ite): if($i==$dk_break && $dk_break != NULL){break;}?>
    <div class="col-md-6">
        <div class="row">
            <a class="item-child-news" href="<?php echo base_url('itempost/view').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite)?>">
                <div class="col-md-3">
                    <div class="row">
                        <img src="<?php echo base_url('uploads/posts/thumb').'/'.$ite->pro_img_seo?>" alt="<?=$ite->pro_name?>" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-9 title-item">
                    <h2><?=htmlspecialchars_decode($ite->pro_name)?></h2>
                    <div class="title-detail"><?=$ite->pro_info?>...</div>
                    <p class="user-date-item-post">
                        <span class="user-item-post"><i class="fa fa-user-circle-o" aria-hidden="true"></i> :<i>Admin</i></span> -
                        <span class="date-item-post"><i class="fa fa-calendar-o" aria-hidden="true"></i> :<i><?php $date = date_create($ite->creatdate); echo date_format($date,'d-m-Y')?></i></span>
                    </p>
                </div>
            </a>
        </div>
    </div>
<?php $i++; endforeach;?>

