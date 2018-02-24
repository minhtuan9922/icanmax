<?php
/**
* Created by PhpStorm.
* User: Admin
* Date: 1/20/2017
* Time: 11:12 AM
*/
?>
<div class="col-md-3">
	<div class="item">
		<div class="col-md-12 title-content-news text-center">
			<p class="title-news-left"><?=$this->lang->line('menu_news')?></p>
		</div>
		<ul class="nav lis-nav-menu">
			<?php if(isset($post) && count((array)$post) > 0):?>
				<?php foreach($post as $item):?>
					<li><a href="<?php echo base_url('catepost/view').'/'.$item->cate_id.'/'.replace($item->cate_rewrite)?>"> <?=$item->cate_name?> <i>(<?=count($item->child)?>)</i></a></li>
				<?php endforeach;?>
			<?php endif;?>
		</ul>
	</div>
	<div class="item">
		<div class="col-md-12 title-content-news text-center">
			<p class="title-news-left"><?=$this->lang->line('vip_news')?></p>
		</div>

		<div class="col-md-12 news-img">
			<div class="row">
				<?php if(isset($post_vip) && count($post_vip) > 0): $data['post_list'] = $post_vip; $data['dk_break'] = 5;?>
					<?php $this->load->view('post/item_left',$data);?>
				<?php endif;?>
			</div>
		</div>
	</div>

	<div class="item">
		<div class="col-md-12 title-content-news text-center">
			<p class="title-news-left"><?=$this->lang->line('breaking_news')?></p>
		</div>

		<div class="col-md-12 news-img">
			<div class="row">
				<?php if(isset($post_new) && count($post_new) > 0): $data['post_list'] = $post_new; $data['dk_break'] = 5;?>
					<?php $this->load->view('post/item_left',$data);?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
