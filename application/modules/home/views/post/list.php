<?php
/**
* Created by PhpStorm.
* User: Admin
* Date: 1/20/2017
* Time: 11:15 AM
*/
?>
<!--<div class="row">-->
<div class="title-item">
	<?php if(isset($post) && count((array)$post) > 0): $i=0;?>
		<?php foreach($post as $item):?>
			<?php if(isset($item->child) && count((array)$item->child) > 0): ?>
				<h2 class="title-content" style="margin-bottom: 15px"><a href="<?php echo base_url('catepost/view').'/'.$item->cate_id.'/'.$item->cate_rewrite?>"><?=$item->cate_name?></a></h2>
				<?php if($i%2 == 0):?>
					<div class="item item-left" style="margin-bottom: 15px;float: left">
						<div class="row">
							<div class="col-md-6">
								<!--<div class="row">-->
								<a class="item-first-news" href="<?php echo base_url('itempost/view').'/'.$item->child['0']->pro_id.'/'.replace($item->child['0']->pro_name_rewrite)?>">
									<div class="col-md-12">
										<img src="<?php echo base_url('uploads/posts').'/'.$item->child['0']->pro_img_seo_forder.'/'.$item->child['0']->pro_img_seo?>" alt="<?=$item->child['0']->pro_name?>" alt="" class="img-thumbnail">
									</div>
									<div class="col-md-12 title-item">
										<h2><?=htmlspecialchars_decode($item->child['0']->pro_name)?></h2>
										<div class="title-detail"><?=$item->child['0']->pro_info?>...</div>
										<p class="user-date-item-post">
											<span class="user-item-post"><i class="fa fa-user-circle-o" aria-hidden="true"></i> :<i>Admin</i></span> -
											<span class="date-item-post"><i class="fa fa-calendar-o" aria-hidden="true"></i> :<i><?php @$date = date_create($item->child['0']->creatdate); echo date_format($date,'d-m-Y')?></i></span>
										</p>
									</div>
								</a>
								<!--</div>-->
							</div>
							<div class="col-md-6">
								<!--<div class="row">-->
								<div class="total-item-child">
									<?php $j=0; foreach($item->child as $ite): if($j==6){break;} $j++;  if($j==1){continue;} ?>
										<a class="item-child-news" href="<?php echo base_url('itempost/view').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite)?>">
											<div class="row">
												<div class="col-md-3 col-sm-3 col-xs-4">
													
														<img src="<?php echo base_url('uploads/posts/thumb').'/'.$ite->pro_img_seo?>" alt="<?=$ite->pro_name?>" alt="" class="img-thumbnail">
													
												</div>
												<div class="col-md-9 col-sm-9 col-xs-8 title-item">
													<h2><?=htmlspecialchars_decode($ite->pro_name)?></h2>
													<div class="title-detail"><?=$ite->pro_info?>...</div>
													<p class="user-date-item-post">
												<span class="user-item-post">
													<i class="fa fa-user-circle-o" aria-hidden="true"></i>
													:<i>Admin</i>
												</span> -
												<span class="date-item-post">
													<i class="fa fa-calendar-o" aria-hidden="true"></i> 
													: <i><?php @$date = date_create($ite->creatdate); echo date_format($date,'d-m-Y')?></i>
													</span>
													</p>
												</div>
											</div>
										</a>
									<?php endforeach;?>
									
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				<?php endif;?>
				<?php if($i%2 != 0):?>
					<div class="item item-right" style="margin-bottom: 15px;float: left">
						<div class="row">
							<div class="col-md-6">
							<!--<div class="row">-->
								<div class="total-item-child-left">
									<?php $j=0; foreach($item->child as $ite): if($j==6){break;} $j++;  if($j==1){continue;} ?>
										<a class="item-child-news" href="<?php echo base_url('itempost/view').'/'.$ite->pro_id.'/'.replace($ite->pro_name_rewrite)?>">
											<div class="row">
												<div class="col-md-3 col-sm-3 col-xs-4">
													<img src="<?php echo base_url('uploads/posts/thumb').'/'.$ite->pro_img_seo?>" alt="<?=$ite->pro_name?>" alt="" class="img-thumbnail">
												</div>
												<div class="col-md-9 col-sm-9 col-xs-8 title-item">
													<h2><?=htmlspecialchars_decode($ite->pro_name)?></h2>
													<div class="title-detail"><?=$ite->pro_info?>...</div>
													<p class="user-date-item-post">
														<span class="user-item-post"><i class="fa fa-user-circle-o" aria-hidden="true"></i> :<i>Admin</i></span> -

														<span class="date-item-post"><i class="fa fa-calendar-o" aria-hidden="true"></i> :<i><?php @$date = date_create($ite->creatdate); echo date_format($date,'d-m-Y')?></i></span>
													</p>
												</div>
											</div>
										</a>
									<?php endforeach;?>
								</div>
							</div>
							<div class="col-md-6">
							<!--<div class="row">-->
								<a class="item-first-news" href="<?php echo base_url('itempost/view').'/'.$item->child['0']->pro_id.'/'.replace($item->child['0']->pro_name_rewrite)?>">
									<div class="col-md-12">
										<img src="<?php echo base_url('uploads/posts').'/'.$item->child['0']->pro_img_seo_forder.'/'.$item->child['0']->pro_img_seo?>" alt="<?=$item->child['0']->pro_name?>" alt="" class="img-thumbnail">
									</div>
									<div class="col-md-12 title-item">
										<h2><?=htmlspecialchars_decode($item->child['0']->pro_name)?></h2>
										<div class="title-detail"><?=$item->child['0']->pro_info?>...</div>
										<p class="user-date-item-post">
											<span class="user-item-post"><i class="fa fa-user-circle-o" aria-hidden="true"></i> :<i>Admin</i></span> -
											<span class="date-item-post"><i class="fa fa-calendar-o" aria-hidden="true"></i> :<i><?php @$date = date_create($item->child['0']->creatdate); echo date_format($date,'d-m-Y')?></i></span>
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				<?php endif;?>
				<?php $i++; endif;?>
		<?php endforeach;?>
	<?php endif;?>
</div>
<!--</div>-->
