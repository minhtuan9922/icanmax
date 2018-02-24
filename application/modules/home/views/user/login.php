<div class="panel panel-primary">
    <div class="panel-heading lis-title-login"> <i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo $this->lang->line('login')?> </div>
    <div class="panel-body">
        <form class="form-horizontal" action="user/login" method="post">
            <div class="form-group">
                <label for="user_email" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="user_email" placeholder="<?php echo $this->lang->line('Email')?>" name="user_email">
                    <?php echo form_error('user_email', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_pass" class="col-sm-2 control-label"><?php echo $this->lang->line('Password')?></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="user_pass" placeholder="<?php echo $this->lang->line('Password')?>" name="user_pass">
                    <?php echo form_error('user_pass', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger" VALUE="1" name="inputpost" ><?php echo $this->lang->line('login')?></button>
                </div>
            </div>
        </form>
    </div>
</div>
