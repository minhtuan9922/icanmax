
<div class="panel panel-primary">
    <div class="panel-heading">
        <h5><?php echo $this->lang->line('registered job seekers')?></h5>
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
            <?php sleep(3);redirect('/user/login')?>
        <?php endif;?>
        <form class="form-horizontal" method="post" action="user/regis" name="user_form">
            <div class="form-group">
                <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_fullname" placeholder="<?php echo $this->lang->line('fullname')?>" name="user_fullname" value="<?php echo set_value('user_fullname')?>" >
                    <?php echo form_error('user_fullname', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_mail" placeholder="<?php echo $this->lang->line('Email')?>" name="user_mail" value="<?php echo set_value('user_mail')?>">
                    <?php echo form_error('user_mail', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="user_phone" placeholder="<?php echo $this->lang->line('phone')?>" name="user_phone"  value="<?php echo set_value('user_phone')?>">
                    <?php echo form_error('user_phone', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_pass" class="col-sm-2 control-label"><?php echo $this->lang->line('Password')?></label>
                <div class="col-sm-10">
                    <input type="Password" class="form-control" id="user_pass" placeholder="<?php echo $this->lang->line('Password')?>" name="user_pass"  value="<?php echo set_value('user_pass')?>">
                    <?php echo form_error('user_pass', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_repass" class="col-sm-2 control-label"><?php echo $this->lang->line('repassword')?></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="user_repass" placeholder="<?php echo $this->lang->line('repassword')?>" name="user_repass"  value="<?php echo set_value('user_repass')?>">
                    <?php echo form_error('user_repass', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger" value="1" name="postok"><?php echo $this->lang->line('regis');?></button>
                </div>
            </div>
        </form>
    </div>
</div>

