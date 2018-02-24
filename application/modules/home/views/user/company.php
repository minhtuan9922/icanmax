<!DOCTYPE HTML>
<html>

<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo $this->lang->line('employers register')?>
    </div>
    <div class="panel-heading-TTDN">
        <i class="fa fa-arrows" aria-hidden="true"></i>
        <?php echo $this->lang->line('credentials')?>
    </div>
    <div class="panel-body">
        <?php if(isset($msg)):?>
            <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo $this->lang->line('regis_success')?>
            </div>
            <script>
                setTimeout(function(){
                    location="<?php echo base_url('user/login')?>";
                }, 3000);
            </script>
                <?php sleep(3);redirect('/user/login');?>
        <?php endif;?>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label for="fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullname" placeholder="<?php echo $this->lang->line('fullname')?>" name="fullname"value="<?php echo set_value('fullname')?>">
                    <?php echo form_error('fullname', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="<?php echo $this->lang->line('phone')?>" name="phone" value="<?php echo set_value('phone')?>" >
                    <?php echo form_error('phone', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('Email')?>" name="email" value="<?php echo set_value('email');?>">
                    <?php echo form_error('email', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $this->lang->line('Password')?></label>
                <div class="col-sm-10">
                    <input type="Password" class="form-control" id="inputPassword3" placeholder="<?php echo $this->lang->line('Password')?>" name="Password">
                    <?php echo form_error('Password', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="repassword" class="col-sm-2 control-label"><?php echo $this->lang->line('repassword')?></label>
                <div class="col-sm-10">
                    <input type="Password" class="form-control" id="repassword" placeholder="<?php echo $this->lang->line('repassword')?>" name="repassword">
                    <?php echo form_error('repassword', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="panel-heading-TTDN">
                <i class="fa fa-arrows" aria-hidden="true"></i>
                <?php echo $this->lang->line('company_information')?>
            </div>
            <div class="form-group">
                <label for="companyname" class="col-sm-2 control-label"><?php echo $this->lang->line('companyname')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="companyname" placeholder="<?php echo $this->lang->line('companyname')?>" name="companyname" value="<?php echo set_value('companyname')?>">
                    <?php echo form_error('companyname', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="phonecompany" class="col-sm-2 control-label"><?php echo $this->lang->line('phonecompany')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phonecompany" placeholder="<?php echo $this->lang->line('phonecompany')?>" name="phonecompany" value="<?php echo set_value('phonecompany')?>">
                    <?php echo form_error('phonecompany', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label"><?php echo $this->lang->line('address')?> </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" placeholder="<?php echo $this->lang->line('address')?> " name="address" value="<?php echo set_value('address');?>">
                    <?php echo form_error('address', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="location" class="col-sm-2 control-label"><?php echo $this->lang->line('location')?> </label>
                <div class="col-sm-10">
                    <select class="form-control" name="location" id="location">
                        <option value="0">-- <?php echo $this->lang->line('select_cities')?> --</option>
                        <?php if($location):?>
                            <?php foreach ($location as $item):?>
                                <option value="<?php echo $item->id?>" <?php echo set_select('location', $item->id); ?>><?php echo $item->name?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                        <?php echo form_error('location', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Website" class="col-sm-2 control-label"><?php echo $this->lang->line('website')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Website" placeholder="<?php echo $this->lang->line('website')?>" name="Website" value="<?php echo set_value('Website')?>">
                    <?php echo form_error('Website', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="emailcompany" class="col-sm-2 control-label"><?php echo $this->lang->line('emailcompany')?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="emailcompany" placeholder="<?php echo $this->lang->line('emailcompany')?>" name="emailcompany" value="<?php echo set_value('emailcompany');?>">
                    <?php echo form_error('emailcompany', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger" value="1" name="postok"><?php echo $this->lang->line('regis') ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
</html>
