<div class="col-md-12">
    <form class="form-inline" action="<?php echo base_url('recruiter/search/')?>" >
        <div class="form-group">
            <select class="form-control" name="career">
                <option value="">Ngành nghề </option>
                <?php if(isset($career) && count((array)$career) >0):?>
                    <?php foreach($career as $item):?>
                        <option value="<?=$item->id?>"
							<?php
							if(isset($id_career) && ($id_career == $item->id))
								echo 'selected';
							?>
						><?=$item->name?></option>
                    <?php endforeach; ?>
                <?php endif;?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="certificate">
                <option value="">Bằng cấp</option>
                <?php if(isset($certificate) && count((array)$certificate) >0):?>
                    <?php foreach($certificate as $item):?>
                        <option value="<?=$item->id?>"
							<?php
							if(isset($id_certificate) && ($id_certificate == $item->id))
								echo 'selected';
							?>
						><?=$item->name?></option>
                    <?php endforeach; ?>
                <?php endif;?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="location">
                <option value="">Địa điểm </option>
                <?php if(isset($location) && count((array)$location) >0):?>
                    <?php foreach($location as $item):?>
                        <option value="<?=$item->id?>"
							<?php
							if(isset($id_location) && ($id_location == $item->id))
								echo 'selected';
							?>
						><?=$item->name?></option>
                    <?php endforeach; ?>
                <?php endif;?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="exp">
                <option value="">Kinh nghiệm</option>
                <?php if(isset($exp) && count((array)$exp) >0):?>
                    <?php foreach($exp as $item):?>
                        <option value="<?=$item->id?>"
							<?php
							if(isset($id_exp) && ($id_exp == $item->id))
								echo 'selected';
							?>
						><?=$item->name?></option>
                    <?php endforeach; ?>
                <?php endif;?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="wage">
                <option value="">Mức lương </option>
                <?php if(isset($wage) && count((array)$wage) >0):?>
                    <?php foreach($wage as $item):?>
                        <option value="<?=$item->id?>"
							<?php
							if(isset($id_wage) && ($id_wage == $item->id))
								echo 'selected';
							?>
						><?=$item->name?></option>
                    <?php endforeach; ?>
                <?php endif;?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Tìm</button>
    </form>
</div>