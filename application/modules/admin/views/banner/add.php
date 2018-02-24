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
                    <a href="<?=base_url("/admin/banner/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="<?=base_url("/admin/banner")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=base_url("/admin/banner")?>"><?=$this->lang->line('banner'); ?></a></li>
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
                <h5 class="panel-title"><?=$title; ?></h5>
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
                <form class="form-horizontal" action="<?php echo base_url($url_banner)?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('title'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="title" value="<?=set_value('title')?set_value('title'):@$banner->title;?>">
                                </div>
                                <?php if(form_error('title') != ''):?>
                                <br>
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-4">
                                    <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('title'); ?></span>
                                </div>
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('link'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="link" value="<?=set_value('link')?set_value('link'):@$banner->link;?>">
                                </div>
                                <?php if(form_error('link') != ''):?>
                                <br>
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-4">
                                    <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('link'); ?></span>
                                </div>
                                <?php endif;?>
                            </div>
							<div class="form-group">
								<label class="col-lg-2 control-label"></label>
								<div class="col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="status" value="1" <?php if(@$banner->status == 1) echo "checked";?> <?php echo set_checkbox('status', '1'); ?>> <?=$this->lang->line('active'); ?>
										</label>
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">LangID :</label>
                                <div class="col-lg-4">
                                    <select name="LangID" class="form-control">
                                        <option value="1">VN</option>
                                        <option value="2">ENG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?=$this->lang->line('images'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="image">
                                    <?php if(@$banner->image != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/banner/thumb/")."/".@$banner->image?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary"><?=$this->lang->line('save'); ?> <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
<script>

</script>