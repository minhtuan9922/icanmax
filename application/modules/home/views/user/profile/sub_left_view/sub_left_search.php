<div class="panel panel-primary">
		<div class="panel-heading">		
            <i class="fa fa-search" aria-hidden="true"></i>
            <?php echo 'TÌM KIẾM HỒ SƠ'?>
		</div>
		<div class="panel-body">
			<form action="<?php echo base_url('employer'); ?>" method="GET" >
				<div class="form-group">
					<input type="text" class="form-control" id="key_word"  placeholder="<?php echo 'Nhập tiêu đề hồ sơ'; ?>" value="<?php echo !empty($this->input->get('key_word')) ? $this->input->get('key_word') : '' ; ?>" name="key_word"  />
				</div>
				<div class="form-group">
					<select name="chose-career" id="chose-career" style="width: 100%;" class="form-control" >
						<!--script -->
					</select>
				</div>
				<div class="form-group">
					<select name="chose-location" id="chose-location" class="form-control" >
						<!--script -->
					</select>
				</div>
				<div class="form-group">
					<select name="chose-wage" id="chose-wage" class="form-control" >
						<option value="0">Chọn mức lương</option>
						<?php 
						if (!empty($wage))
						{
							foreach ($wage as $key => $value)
							{
								?>
								<option value="<?php echo $value->id; ?>" <?php echo ($this->input->get('chose-wage') == $value->id) ? 'selected="selected"' : ''; ?> ><?php echo
								$value->name; ?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<select name="chose-gender" id="chose-gender" class="form-control" >
						<option value="0"  >Chọn giới tính</option>
						<option <?php echo ($this->input->get('chose-gender') == 1) ? 'selected="selected"' : ''; ?> value="1" >Nam</option>
						<option 
						<?php 
							if($this->input->get('chose-gender') == 2)
							{
								echo 'selected="selected"';
							}
						?> value="2" >Nữ</option>
					</select>
				</div>
				<div class="form-group">
					<select name="chose-certificate" id="chose-certificate" class="form-control" >
						<option value=""  >Chọn trình độ</option>
						<?php 
						if (!empty($education))
						{
							foreach ($education as $key => $value)
							{
								?>
								<option  value="<?php echo $value['id']; ?>" <?php echo ($this->input->get('chose-certificate') == $value['id']) ? 'selected="selected"' : ''; ?> ><?php echo
								$value['name']; ?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<select name="chose-exp" id="chose-exp" class="form-control" >
						<option value=""  >Chọn kinh ngiệm</option>
						<?php 
						if (!empty($exp))
						{
							foreach ($exp as $key => $value)
							{
								?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($this->input->get('chose-exp') == $value['id']) ? 'selected="selected"' : ''; ?> ><?php echo
								$value['name']; ?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				<div class="hcenter" >
					<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>Tìm kiếm</button>
				</div>
				<script type="text/javascript">
					var data_career = [{
						id: 0,
						text: '<div>Chọn ngành nghề</div>', //select box
						html: 'Chọn ngành nghề', // show data
						title: 'Chọn ngành nghề' // title
					}, 
					<?php  
					foreach ($search_career as $key => $value)
					{
						echo "{
							id: ".$value['id'].",
							text: '<div class=\'col-sm-9\' style=\'padding:0px;\'>".$value['name']."</div><div class=\'col-sm-3 color-primary\' >(".$value['count_profile_career'].")</div>',
							html: '<div class=\'col-sm-9\' style=\'padding:0px;\'>".$value['name']."</div><div class=\'col-sm-3 color-primary\'>(".$value['count_profile_career'].")</div><br>',
							title: '".$value['name']."'
						},";
					}
					?>
					];
					var data_location = [{
						id: 0,
						text: '<div>Chọn tỉnh thành</div>', //select box
						html: 'Chọn tỉnh thành', // show data
						title: 'Chọn tỉnh thành' // title
					}, 
					<?php  
					foreach ($search_location as $key => $value)
					{
						echo "{
							id: ".$value['id'].",
							text: '<div class=\'col-sm-9\' style=\'padding:0px;\'>".$value['name']."</div><div class=\'col-sm-3 color-primary\' >(".$value['count_profile_location'].")</div>',
							html: '<div class=\'col-sm-9\' style=\'padding:0px;\'>".$value['name']."</div><div class=\'col-sm-3 color-primary\'>(".$value['count_profile_location'].")</div><br>',
							title: '".$value['name']."',
						},";
					}
					?>
					];
					$('#chose-career').select2({
						data: data_career,
						escapeMarkup: function(markup) {
							return markup;
						},
						templateResult: function(data) {
							return data.html;
						},
						templateSelection: function(data) {
							return data.text;
						},
						width : '100%'
					});
					$('#chose-location').select2({
						data: data_location,
						escapeMarkup: function(markup) {
							return markup;
						},
						templateResult: function(data) {
							return data.html;
						},
						templateSelection: function(data) {
							return data.text;
						},
						width : '100%'
					});
					$('#chose-wage').select2({
						width : '100%'
					});
					$('#chose-gender').select2({
						width : '100%'
					});
					$('#chose-certificate').select2({
						width : '100%'
					});
					$('#chose-exp').select2({
						width : '100%'
					});
				</script>
				<script>
					$(document).ready(function() {
						<?php
						if ($this->input->get('chose-career'))
						{
							$id = $this->input->get('chose-career');
						?>
							var element = 'select[name="chose-career"] option[value="<?php echo $id ?>"]';
							
							$(element).attr('selected','selected');
							$(element).trigger('change');
						<?php
						}
						?>
						<?php
						if ($this->input->get('chose-location'))
						{
							$id = $this->input->get('chose-location');
						?>
							var element = 'select[name="chose-location"] option[value="<?php echo $id ?>"]';
							
							$(element).attr('selected','selected');
							$(element).trigger('change');
						<?php
						}
						?>
					});
				</script>
			</form>
		</div>
	</div>