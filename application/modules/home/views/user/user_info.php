<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-book" aria-hidden="true"></i>
        <?php echo $this->lang->line('user_info')?>
    </div>
    <hr>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_fullname"  placeholder="<?php echo $this->lang->line('fullname')?>" name="user_fullname" value="<?php echo $user->fullname?$user->fullname:set_value('user_fullname')?>"    required >
                <?php echo form_error('user_fullname', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="user_gender" class="col-sm-2 control-label"><?php echo $this->lang->line('gender')?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
               <select name="user_gender" id="user_gender" class="form-control" required>
                  <option value="1"  <?php if ($user->gender == 1) echo 'selected="selected"'; ?> >Nam</option>
                  <option value="2" <?php if ($user->gender == 2) echo 'selected="selected"'; ?>  >Nữ</option>

              </select>
          </div>
      </div>
      <div class="form-group">
        <label for="user_birthday" class="col-sm-2 control-label"><?php echo $this->lang->line('birth')?>:<font size="2" color="#FF0000">*</font></label>
        <div class="col-sm-10">
          <input type="date" name="user_birthday" id="user_birthday" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $user->birthday?$user->birthday:set_value('user_birthday'); ?>" class="form-control" required="required" title="">
      </div>
  </div>
  <div class="form-group">
    <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?>:<font size="2" color="#FF0000">*</font></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="user_mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="<?php echo $this->lang->line('Email')?>" name="user_mail" value="<?php echo $user->email?$user->email:set_value('user_mail')?>">
        <?php echo form_error('user_mail', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
    </div>
</div>

<div class="form-group">
    <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?>:<font size="2" color="#FF0000">*</font></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="user_phone" pattern="[0-9]{10,13}" required placeholder="<?php echo $this->lang->line('phone')?>" name="user_phone"  value="<?php echo $user->phone?$user->phone:set_value('user_phone')?>">
        <?php echo form_error('user_phone', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
    </div>
</div>
<div class="form-group">
    <label for="user_address" class="col-sm-2 control-label"><?php echo $this->lang->line('address')?>:<font size="2" color="#FF0000">*</font></label>
    <div class="col-sm-10">
        <textarea class="form-control" id="user_address" placeholder="<?php echo $this->lang->line('address')?>" name="user_address" required ><?php echo $user->address?$user->address:set_value('user_address')?></textarea>
        <?php echo form_error('user_address', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="update" value="1">Cập nhật</button>
    </div>
</div>

<script type="text/javascript"> 
    $('button[name="update"]').click(function(e){
        var r = confirm('Bạn có muốn lưu');
        if (r == false) {
            e.preventDefault();
        }
    });
</script>
</form>
<!--change password -->
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <?php echo $this->lang->line('change_pass')?>
    </div>
    <hr>
    <form class="form-horizontal" method="post" action="change-password">
        <div class="form-group">
            <label for="old_password" class="col-sm-2 control-label"><?php echo $this->lang->line('old_password'); ?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
            <input type="password" autocomplete="off" class="form-control" id="old_password" auto  placeholder="<?php echo $this->lang->line('old_password')?>" name="old_password"   required >
            </div>
        </div>
        <div class="form-group">
            <label for="new_password" class="col-sm-2 control-label"><?php echo $this->lang->line('new_password')?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
                <input type="password" autocomplete="off" class="form-control" id="new_password"   required placeholder="<?php echo $this->lang->line('new_password')?>" name="new_password"  />
                <?php echo form_error('new_password', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="enter_new_password" class="col-sm-2 control-label"><?php echo $this->lang->line('enter_new_password')?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
                <input type="password" autocomplete="off" class="form-control" id="enter_new_password"   placeholder="<?php echo $this->lang->line('enter_new_password')?>" name="enter_new_password"  required>
                <?php echo form_error('enter_new_password', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success" name="change_password" value="1"> <?php echo $this->lang->line('change_pass')?></button>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                document.getElementById("new_password").onchange = validatePassword;
                document.getElementById("enter_new_password").onchange = validatePassword;
            }
            function validatePassword()
            {
                var pass2=document.getElementById("enter_new_password").value;
                var pass1=document.getElementById("new_password").value;
                if ( pass1.length < 6)
                    document.getElementById("new_password").setCustomValidity("Mật khẩu phải lớn hơn 6 ký tự");
                else 
                     document.getElementById("new_password").setCustomValidity('');  
                if (pass1!=pass2)
                    document.getElementById("enter_new_password").setCustomValidity("Mật khẩu không trùng khớp");
                else
                    document.getElementById("enter_new_password").setCustomValidity('');  
            }
            message_validation('input','old_password','Vui lòng nhập mật khẩu');
</script>
</form>
</div>
