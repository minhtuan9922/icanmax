<div class="panel panel-primary">
	<div class="panel-heading">
		<i class="fa fa-info" aria-hidden="true"></i>
		<?php echo 'Thông tin'; ?>
	</div>
	<div class="panel-body">
		<div class="form-group" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p>Bạn được tạo tối đa  <mark class="text-danger">2 hồ sơ</mark> (01 hồ sợ tao trực tuyến trên web và 01 hồ sơ từ máy tính).</p>
				<p>Bạn được tạo tối đa  <mark class="text-danger">2 hồ sơ</mark> (01 hồ sợ tao trực tuyến trên web và 01 hồ sơ từ máy tính).</p>
				<p>Bạn được tạo tối đa  <mark class="text-danger">2 hồ sơ</mark> (01 hồ sợ tao trực tuyến trên web và 01 hồ sơ từ máy tính).</p>
			</div>	
		</div>	
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<i class="fa fa-pencil" aria-hidden="true"></i>
		<?php echo 'Quản lý hồ sơ'; ?>
	</div>
	<div class="panel-body">
		<!-- profile online -->
		<?php 
		if (!empty($profile->profile_title))
		{	
		 ?>
		<div class="form-group"  >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="profile-user">

				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<div class="row">

							<div class="col-sm-6"><p class="bold">Hồ sơ trực tuyến</p></div>

							<div class="col-sm-6" style="text-align: -webkit-right;">
								<p class="bold" style="display:inline-block;">Cho nhà tuyển dụng tìm kiếm:</p>
								<section title=".slideThree" style="display:inline-block;">
									<!-- .slideThree -->

									<div class="slideThree">
										<?php 
										if ($profile->profile_search == 1) 
										{
											echo '<input type="checkbox" value="1" id="slideThree" name="check" checked/>';
										} 
										else 
										{
											echo '<input type="checkbox" value="0" id="slideThree" name="check" />';
										}
										?>
										<label for="slideThree"></label>
										<script type="text/javascript">
											var profile_search	= $('input[name="check"]').val();
											$('input[name="check"]').click(function(e){
												var message = (profile_search == 0) ? 'Bạn muốn cho nhà tuyển dụng tìm kiếm' : 'Bạn không muốn cho nhà tuyển dụng tìm kiếm';
												var r = confirm(message);
												if (r == true)
												{	
													if (profile_search == 1)
													{
														profile_search = 0;
														employyer(profile_search);
														return;
													}
													else if (profile_search == 0)
													{
														profile_search = 1;
														employyer(profile_search);		
														return;
													}
												}
												else {
													if (profile_search == 1)
													{
														$('.slideThree').html('<input type="checkbox" value="1" id="slideThree" name="check" checked/><label for="slideThree"></label>');
													} else {
														$('.slideThree').html('<input type="checkbox" value="0" id="slideThree" name="check" /><label for="slideThree"></label>');
													}
												}
											});
										</script>

									</div>
									<script type="text/javascript">
										$( document ).ready(function(){
											var $on = 'section';
											$($on).css({
												'background':'none',
												'border':'none',
												'box-shadow':'none'
											});
										});
									</script>

									<script type="text/javascript">
										function employyer(profile_search)
										{
											$.ajax({
												url: 'view-search',
												type: 'GET',
												dataType: 'html',
												data: {profile_search: profile_search},
											})
											.done(function(result) {
												//console.log(result);
											})
											.fail(function() {
												console.log("error");
											})
										}
									</script>
									<!-- end .slideThree -->
								</section>
							</div>
						</div>		
					</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3 hcol"><p class="bold">Tên hồ sơ:</p>&nbsp;<span><?php echo $profile->profile_title;  ?></span></div>
						<div class="col-sm-3 hcol"><p class="bold">Ngày cập nhật:</p>&nbsp;<span><?php echo date_format(date_create($profile->profile_date_update),'d/m/Y'); ?></span></div>
						<div class="col-sm-3 hcol"><p class="bold">Lượt xem:</p>&nbsp;<span><?php echo !empty($profile->profile_view) ? $profile->profile_view : 0;  ?></span></div>
						<div class="col-sm-3 hcol"><p class="bold">Trạng thái:</p>&nbsp;
							<?php
								if ($profile->profile_satus == 1)
								{ 
									echo '<span style="color:#26d21a;">đã kích hoạt</span>';
								} else {
									echo '<span style="color:#d2331a;">chưa kích hoạt</span>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="panel-footer" style="text-align: center;">
					<a class="btn btn-default " href="user-managerfile/view-profile/<?php echo $profile->profile_id.'/'.$this->my_string->remove_vn_unicode(str_replace(" ","-",$user->fullname)); ?>" role="button"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Xem</a>
					<a class="btn btn-default " href="user-managerfile/profile-online" role="button"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Chỉnh Sửa</a>
					<a class="btn btn-default " href="#" value="1" id="remove-profile" role="button"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Xóa</a>
				</div>
			</div>
			<script type="text/javascript">
				$('#remove-profile').click(function(e){
					e.preventDefault();
					var remove_profile = $(this).attr('value');
					if (confirm('Bạn có muốn xóa hồ sơ'))
					{
						$.ajax({
							url: 'remove-profile',
							type: 'GET',
							dataType: 'html',
							data: {remove_profile: remove_profile},
						})
						.done(function(result) {
							console.log(result);
							$('#profile-user').html('');
							alert('Thành công');
						})
						.fail(function() {
							console.log("error");
						})
					}
				});
			</script>	
		</div>
		<?php 
		}
		 ?>
		<!-- end profile online -->
		<!-- profile computer -->
		<?php 
			if (!empty($profile->profile_file))
			{
		?>
				<div class="form-group" id="profile-file" >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<p class="bold">Hồ sơ từ đính kèm</p>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6 hcol"><p class="bold">Tên hồ sơ:</p>&nbsp;<span><?php echo $profile->profile_file_name; ?></span></div>
									<div class="col-sm-6 hcol"><p class="bold">Ngày đăng:</p>&nbsp;<span><?php echo date_format(date_create($profile->profile_file_date_update),'d/m/Y'); ?></span></div>
								</div>
							</div>
							<div class="panel-footer hcenter">
								<a class="btn btn-default " target="_blank" href="<?php echo base_url($profile->profile_file); ?>" role="button"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Xem</a>
								<a class="btn btn-default " href="#"  id="remove-file" value="1" role="button"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Xóa</a>
							</div>
						</div>
					</div>	
				</div>
				<script type="text/javascript">
					$('#remove-file').click(function(e){
						e.preventDefault();
						var remove = $(this).attr('value');
						if (confirm('Bạn có muốn xóa file đính kèm'))
						{
							$.ajax({
								url: 'remove-cv',
								type: 'GET',
								dataType: 'html',
								data: {remove: remove,path: "<?php echo $profile->profile_file; ?>"},
							})
							.done(function(result) {
								console.log(result);
								$('#profile-file').html('');
								alert('Thành công');

							})
							.fail(function() {
								console.log("error");
							})
						}
					});
				</script>	
		<?php 
			}
		?>

		<!-- end profile computer -->
		<!-- create profile -->
		<div class="form-group" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><span class="hspan" >Bạn chưa có hồ sơ trên icanmax:</span></p>
				<p class="bold">Cách 1: Tạo trực tuyến trên website icanmax</p>
				<a class="btn btn-success hbtn" href="user-managerfile/profile-online" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;TẠO TRỰC TUYẾN TRÊN ICANMAX</a>
				<p class="bold">Cách 2: Tải hồ sơ đã có từ máy tính</p>

				<a class="btn btn-gray hbtn" href="user-managerfile/file-profile" role="button"><i class="fa fa-paperclip" aria-hidden="true"></i>&nbsp;ĐÍNH KÈM FILE MÁY TÍNH</a>

			</div>	
		</div>
		<!-- end create profile -->
	</div>
</div>