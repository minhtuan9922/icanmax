<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'Thông tin cá nhân'?>
        </div>
        <div class="wight50 right">
            <a href="#demo" style="color:white;" id="collapse_personal" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_personal').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo" class="collapse in">
    <div class="panel-body" style="padding: 0px">
        <div class="col-sm-2">
               <form class="form-horizontal" method="post">
                <label   class="input-label" >
                    <img  class="img" src="<?php echo base_url($this->session->userdata('ses_user_img')) ?>" />   
                         <i class="fa fa-camera" aria-hidden="true" >&nbsp;Ảnh đại diện</i>
                </label>
            </form>
        </div>
        <div class="col-sm-10">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                       <span class="form-control"><?php echo $user->fullname; ?></span>
                   </div> 
                </div>  
                <div class="form-group">
                    <label for="user_gender" class="col-sm-2 control-label"><?php echo $this->lang->line('gender')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                       <span class="form-control"><?php  if ($user->gender == 1) echo 'Nam'; else echo 'Nữ'; ?></span>
                   </div>
                </div>
                <div class="form-group">
                    <label for="user_birthday" class="col-sm-2 control-label"><?php echo $this->lang->line('birth')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <span class="form-control"><?php echo date_format(date_create($user->birthday),"d/m/Y"); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <span class="form-control"><?php echo $user->email; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <span class="form-control"><?php echo $user->phone; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_address" class="col-sm-2 control-label"><?php echo $this->lang->line('address')?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <span class="form-control"><?php echo $user->address; ?></span>
                    </div>
                </div>
        </div>
    </div>
    <div class="hdiv-padding" style="text-align: right;">    
       <a class="btn btn-default btn-gray" href="<?php echo base_url('user-info'); ?>" role="button"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Chỉnh sửa</a>
   </div>
   </div>
     </form>
</div>
<!--infomation general -->
<?php $this->load->view('user/profile/profile_general_info'); ?>
<!-- end infomation general-->
<!--object job -->
<?php $this->load->view('user/profile/profile_target'); ?>
<!-- end infomation general-->
<!--education -->
<?php $this->load->view('user/profile/profile_education'); ?>
<!-- end education-->
<!--language -->
<?php $this->load->view('user/profile/profile_language'); ?>
<!-- end language-->
<!--exe job -->
<?php $this->load->view('user/profile/profile_exp_job'); ?>
<!-- end education-->
