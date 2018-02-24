<div class="row">
    <?php $this->load->view('recruiter/form_search')?>
    <div class="col-md-12">
		<div class="item">
			<h2>Kết quả tìm kiếm</h2>
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
					<?php $data['recruiter'] = $recruiter;$this->load->view('recruiter/item',$data);?>
				</tbody>
			</table>
		</div>
    </div>
</div>
