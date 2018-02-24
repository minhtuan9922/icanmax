<div class="panel panel-primary">
		<div class="panel-heading">
			<i class="fa fa-address-book-o" aria-hidden="true"></i>
			<?php echo 'HỒ SƠ NỔI BẬT'?>
		</div>
		<?php
		$sum = count($profile_highlights) - 1; 
		foreach ($profile_highlights as $key1 => $value): ?>
			<a href="<?php echo base_url($view_other).'/'.$value["profile_id"].'/'.$this->my_string->remove_vn_unicode(str_replace(" ","-",$value["fullname"])); ?>">
			<div class="panel-body" style="padding: 10px 0px 10px 0px;">
				<div class="col-sm-4">
					<img src="<?php echo base_url($value['img']); ?>" style="border: 1px solid #ddd;" class="img-responsive" alt="Image">
				</div>
				<div class="col-sm-8" style="padding: 0px;">
					<div>
						<div style="color:black;"><b><?php echo $value['fullname']; ?></b></div>
						<div class="color-primary"><?php echo $value['profile_title']; ?></div>
						<small class="color-gray">
							<?php 
							$arr_location = explode(',',$value['profile_location']);
							$n      = count($arr_location);
							foreach ($arr_location as $k => $val)
							{
								foreach ($location as $key => $value) {
									if ($val == $value['id'])
									{
										if ($k != 0 && $k != $n)
										{
											echo ' - ';
										}
										echo $value['name'];
										break;
									}
								}
							}
							?>			
             			</small>
					</div>
				</div>		
			</div>
		</a>
			<?php
				if ($sum != $key1)
				{ 
					echo '<span class="hline hline-left"></span>';
				}
			 ?>
		<?php endforeach ?>
	</div>