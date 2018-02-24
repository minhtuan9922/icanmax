<div class="col-xs-12 img-thumbnail" style="margin-bottom: 20px;">
    <div class="col-xs-12 img-thumbnail">
        <h3 class="lis-title-company"> DSI VIET COMPANY LTD</h3>
        <div class="col-md-12"> <i class="fa fa-location-arrow" aria-hidden="true"></i><b> <?=$this->lang->line('ad_bd'); ?></b></div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <b>Binh Duong :</b>
                </div>
                <div class="col-md-9"></div>
             </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <i class="fa fa-volume-control-phone" aria-hidden="true" title="tel"></i>: 84-274-6275789 -
                    <i class="fa fa-fax" aria-hidden="true" title="Fax"></i>: 84-274-6275789
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <b>HCMC :</b>
                </div>
                <div class="col-md-9"></div>
             </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <i class="fa fa-volume-control-phone" aria-hidden="true" title="tel"></i>: 84-28-37245888-37246988-38464250 -
                    <i class="fa fa-fax" aria-hidden="true" title="Fax"></i>: 84-28-37245666
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <b>E-mail :</b>
                </div>
                <div class="col-md-9"></div>
             </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <a href="mailto:info@icanmax.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@icanmax.com</a> - <a href="mailto:lease@icanmax.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> lease@icanmax.com</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <b>Website :</b>
                </div>
                <div class="col-md-9"></div>
             </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <a href="http://icanmax.com"><i class="fa fa-globe" aria-hidden="true"></i> www.icanmax.com</a>
                </div>
            </div>
        </div>
    </div>
    <?php if(@$msg == 1):?>
        <div class="col-xs-12" style="margin-top: 20px;">
            <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php echo $this->lang->line('your_msg');?>
            </div>
            <?php sleep(10);header("Refresh:0");?>
        </div>
    <?php endif;?>
    <div class="col-xs-12 img-thumbnail" style="margin-top: 20px;">
        <h3></h3>
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label for="user_name" class="col-sm-2 control-label"><?php echo $this->lang->line('your_name')?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="user_name" name="user_name" placeholder="<?php echo $this->lang->line('your_name')?>" value="<?php echo set_value('user_name')?>" required>
            </div>
            <?php echo form_error('user_name', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
          </div> 
          <div class="form-group">
            <label for="user_email" class="col-sm-2 control-label"><?php echo $this->lang->line('your_email')?></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="user_email" id="user_email" placeholder="<?php echo $this->lang->line('your_email')?>" value="<?php echo set_value('user_email')?>" required>
            </div>
            <?php echo form_error('user_email', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('your_phone')?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="<?php echo $this->lang->line('your_phone')?>" value="<?php echo set_value('user_phone')?>">
            </div>
           
          </div>
          <div class="form-group">
            <label for="user_title" class="col-sm-2 control-label"><?php echo $this->lang->line('your_title')?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user_title" id="user_title" placeholder="<?php echo $this->lang->line('your_title')?>" value="<?php echo set_value('user_title')?>" required>
              <?php echo form_error('user_title', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="user_content" class="col-sm-2 control-label"><?php echo $this->lang->line('your_content')?></label>
            <div class="col-sm-10">
                <textarea class="form-control" name="user_content" id="user_content" placeholder="<?php echo $this->lang->line('your_content')?>" required><?php echo set_value('user_content')?></textarea>
                <?php echo form_error('user_content', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
                <div class="col-sm-offset-2 col-sm-1" style="float: left;">
                  <button type="submit" class="btn btn-danger" name="submitok" value="1"><?php echo $this->lang->line('your_send')?></button>
                </div>
                <div class="col-sm-2" style="margin-left: 10px;">
                  <button type="reset" class="btn btn-info"><?=$this->lang->line('reset'); ?></button>
                </div>
          </div>
        </form>
    </div>
</div>