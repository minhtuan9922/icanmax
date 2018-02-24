<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 4:11 PM
 */
?>
<div class="row">
	<?php
	$this->load->view('recruiter/form_search');
	?>
</div>
<h2><?=$item_recu->pro_name?></h2>
<b><?=$item_recu->company_name?></b><br>
<b><?=$item_recu->company_address?></b>
<div class="row">
	<div class="clearfix"></div>
	<div class="col-md-2">
		Mô tả công việc :
	</div>
	<div class="col-md-10">
		<?=htmlspecialchars_decode($item_recu->pro_info)?>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2">
		Yêu cầu :
	</div>
	<div class="col-md-10">
		<?=htmlspecialchars_decode($item_recu->pro_full)?>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2">
		Quyên lợi :
	</div>
	<div class="col-md-10">
		<?=htmlspecialchars_decode($item_recu->benefit)?>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2">
		Giới thiệu :
	</div>
	<div class="col-md-10">
		<?=htmlspecialchars_decode($item_recu->intro)?>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-2">
		Liên hệ :
	</div>
	<div class="col-md-10">
		sdt  : <?=$item_recu->phone?><br>
		email : <?=$item_recu->email?><br>
		website : <?=$item_recu->website?>
	</div>
</div>

