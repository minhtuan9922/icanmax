
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$title?></span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?=base_url("/admin/admin/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span>Add</span></a>
                    <a href="<?=base_url("/admin/admin")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span>List</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=base_url("/admin/admin")?>">Admin</a></li>
                <li class="active"><?=$title?></li>
            </ul>
            <ul class="breadcrumb-elements">
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Form horizontal -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$title?></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <?=@$flagdata?$flagdata:""?>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url($url_post)?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('name'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="user_name" placeholder="<?=$this->lang->line('name'); ?>" value="<?=set_value('user_name')?set_value('user_name'):@$admin->user_name;?>">
                                </div>
                                <?php echo form_error('user_name','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('fullname'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="user_fullname" placeholder="<?=$this->lang->line('fullname'); ?>" value="<?=set_value('user_fullname')?set_value('user_fullname'):@$admin->user_fullname;?>">
                                </div>
                                <?php echo form_error('user_fullname','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2"></div>
                                <div class="col-lg-10">
                                    <input type="checkbox" name="user_status" value="1" <?php echo @$admin->user_status==1?'checked':''; ?> > <?=$this->lang->line('active'); ?>
                                </div>
                                <?php echo form_error('user_status','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('pass'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="user_password" placeholder="<?=$this->lang->line('pass'); ?>" value="<?=set_value('user_password');?>">
                                </div>
                                <?php echo form_error('user_password','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('phone'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="user_phone" placeholder="<?=$this->lang->line('phone'); ?>" value="<?=set_value('user_phone')?set_value('user_phone'):@$admin->user_phone;?>">
                                </div>
                                <?php echo form_error('user_phone','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" name="submit" value="1" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->