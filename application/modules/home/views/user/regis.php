<!DOCTYPE HTML>
<html>

<div class="panel panel-primary">
    <div class="panel-heading lis-title-login">
    <i class="fa fa-user-plus" aria-hidden="true"></i>
        <?php echo $this->lang->line('regis')?>
    </div>
<div class="panel-body">
    <div class="panel-header-NTD">
        <a href="<?php echo base_url('regis/company')?>"><i class="fa fa-users" aria-hidden="true"></i> <?php echo $this->lang->line('employers_register')?></a>
    </div>
    <div class="panel-header-NTV">
        <a href="<?php echo base_url('regis/user')?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->lang->line('registered_job_seekers')?></a>
    </div>
</div>
</div>
</html>
