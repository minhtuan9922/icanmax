<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 11:15 AM
 */
?>
<div class="row">
    <?php $this->load->view('recruiter/form_search')?>
    <div class="col-md-12">
		<div class="item">
			<h2>Tin tuyển dụng vip</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tiêu đề</th>
						<th>Vị trí </th>
						<th>Khu vực</th>
						<th>Mức lương</th>
						<th>Hạn nộp</th>
					</tr>
				</thead>
				<tbody>
					<?php $data['recruiter'] = $recruiter_vip;$this->load->view('recruiter/item',$data);?>
				</tbody>
			</table>
		</div>
    </div>
	
   	<div class="col-md-12">
		<div class="item">
			<h2>Tin tuyển dụng mới</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tiêu đề</th>
						<th>Vị trí </th>
						<th>Khu vực</th>
						<th>Mức lương</th>
						<th>Hạn nộp</th>
					</tr>
				</thead>
				<tbody>
					<?php $data['recruiter'] = $recruiter_new;$this->load->view('recruiter/item',$data);?>
				</tbody>
			</table>
		</div>
	</div>
</div>
