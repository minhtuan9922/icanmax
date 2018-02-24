<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=993097487501887";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="lis-menu-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2 logo">
                <a href="<?=base_url()?>">
                    <img src="<?=base_url()?>assets/home/img/logoicanmax.png" class="img-responsive">
                </a>
            </div>
            <div class="col-md-8 menu-right">
                <div class="row">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('page').'/5/news'?>"><?=$this->lang->line('m_news')?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page').'/4/contact'?>"><?=$this->lang->line('m_lienhe')?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page').'/3/recruiter'?>"><?=$this->lang->line('m_recruiter')?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page').'/2/service'?>"><?=$this->lang->line('m_dichvu')?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page').'/1/intro'?>"><?=$this->lang->line('m_intro')?></a>
                        </li>
                        <li>
                            <a href="http://mxh.icanmax.com" target="_blank"><?=$this->lang->line('m_social_network')?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <ul class="nav lis-nav-login">
                        <?php if($this->session->userdata('ses_user_id') != ''):?>
                            <li>
                                <a href="javscript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dLabel">
                                    <?php 
                                    if (empty($this->session->userdata('ses_user_img'))) 
                                    {
                                        echo '<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>';
                                    } else {
                                     echo '<img id="img-header" src="'.base_url($this->session->userdata('ses_user_img')).'" />';
                                 }
                                 ?>

                                 <span><?=$this->session->userdata('ses_user_fullname')?></span>
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="drop6">
                                <li><a href="<?=base_url('user-info')?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin</a></li>
                                <li><a href="<?=base_url('user-notifications')?>"><i class="fa fa-globe" aria-hidden="true"></i> Thông báo <sup>1</sup></a></li>
                                <li><a href="<?=base_url('user-message')?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> Tin nhắn <sup>2</sup></a></li>
                                <li><a href="<?=base_url('user-setup')?>"><i class="fa fa-cogs" aria-hidden="true"></i> Cài đặt</a></li>
                                <li><a href="<?=base_url('user-logout')?>" onclick="return confirm('Bạn muốn đăng xuất');"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php else:?>
                        <li>
                            <?php //echo base_url('user/login');?>
                            <a href="javscript:void(0)" data-toggle="modal" data-target="#Login"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->lang->line('login')?></a>
                        </li>
                        <li>
                            <?php // echo base_url('resgis');?>
                            <a href="javscript:void(0)" data-toggle="modal" data-target="#Regis"><i class="fa fa-key" aria-hidden="true"></i> <?php echo $this->lang->line('regis')?></a>
                        </li>
                    <?php endif;?>
                </ul>
                <ul class="nav lis-nav-login lis-nav-lang">
                    <li>
                        <a href="<?php echo base_url('/vn');?>"><img src="<?php echo base_url()?>/assets/home/image/icon-lang/vn.png" alt="" class="img-responsive"></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/eng');?>"><img src="<?php echo base_url()?>/assets/home/image/icon-lang/eng.png" alt="" class="img-responsive"></a>
                    </li>
					</ul>
            </div>
        </div>
    </div>
</div>
</div>
<!--- login -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal"  method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?=$this->lang->line('login')?></h4>
                </div>
                <h5 id="error"></h5>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_email" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="user_email" autocomplete="false" value="" name="user_email" placeholder="<?php echo $this->lang->line('Email')?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_pass" class="col-sm-2 control-label"><?php echo $this->lang->line('Password')?></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" autocomplete="false" value="" id="user_pass" name="user_pass" placeholder="<?php echo $this->lang->line('Password')?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javscript:void(0)"><i class="fa fa-key" aria-hidden="true"></i> Quên mật khẩu?</a>
                    <span id="icon-ajax"></span>
                    <button type="button" class="btn btn-danger" value="1" id="login" name="inputpost" ><?php echo $this->lang->line('login')?></button>
                    <a href="javscript:void(0)" data-toggle="modal" data-dismiss="modal" data-target="#Regis"><i class="fa fa-key" aria-hidden="true"></i> <?php echo $this->lang->line('regis')?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<!--end login -->
<!--register -->
<div class="modal fade" id="Regis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal" method="post" action="" name="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('regis')?></h4>
                </div>
                <div id="error1"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_gender" class="col-sm-2 control-label"><?php echo $this->lang->line('gender')?> </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="user_gender" id="user_gender">
                                <option value="1"><?=$this->lang->line('male')?></option>
                                <option value="2"><?=$this->lang->line('fmale')?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="<?php echo $this->lang->line('fullname')?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_mail" name="user_mail" placeholder="<?php echo $this->lang->line('Email')?>" required>
                            <?php echo validation_errors(); ?>
                        </div>
                        <?php //echo form_error('user_mail', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="user_passw" class="col-sm-2 control-label"><?php echo $this->lang->line('Password')?></label>
                        <div class="col-sm-10">
                            <input type="Password" class="form-control" id="user_passw" name="user_passw" placeholder="<?php echo $this->lang->line('Password')?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_repassw" class="col-sm-2 control-label"><?php echo $this->lang->line('repassword')?></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="user_repassw" name="user_repassw" placeholder="<?php echo $this->lang->line('repassword')?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_is" class="col-sm-2 control-label">Bạn là </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="user_is" id="user_is">
                                <option value="1">Nhà tuyển dụng</option>
                                <option value="2" selected>Người dùng - Người tìm việc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox" checked required name="yes" value="1" id="yes"> Bạn đồng ý với <a target="_blank" href="<?=base_url('chinh-sach-nguoi-dung')?>">chính sách</a> của chúng tôi ?</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span id="icon-ajax1"></span>
                    <a type="button" class="btn btn-danger" value="1" name="postok" id="register"><i class="fa fa-key" aria-hidden="true"></i><?php echo $this->lang->line('regis');?></a>
                    <a href="javscript:void(0)" data-toggle="modal" data-dismiss="modal" data-target="#Login"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->lang->line('login')?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end register-->
<script>
    $(document).ready(function () {
        $("#register").click(function(){
            var user_gender         = $("#user_gender").val();
            var user_fullname       = $("#user_fullname").val();
            var user_mail           = $("#user_mail").val();
            var re                  = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var flag                = re.test(user_mail);

            var user_pass           = $("#user_passw").val();
            var user_repass         = $("#user_repassw").val();
            var user_is             = $("#user_is").val();
            var yes                 = $("#yes").val();
            if(user_fullname == ''){
                $("#icon-ajax").html('');
                $("#error1").html('Vui lòng nhập Họ và tên !');
                return false;
            }
            if(user_mail == ''){
                $("#icon-ajax").html('');
                $("#error1").html('Vui lòng nhập Email !');
                return false;
            }
            if(flag != true){
                $("#icon-ajax").html('');
                $("#error1").html('Xin lỗi Email chưa đúng định dạng !');
                return false;
            }
            if(user_pass.length < 6 ){
                $("#icon-ajax").html('');
                $("#error1").html('Mật khẩu không được nhỏ hơn 6 ký tự!');
                return false;
            }
            if(user_pass != user_repass){
                $("#icon-ajax").html('');
                $("#error1").html('Nhập lại mật khẩu chưa đúng !');
                return false;
            }
            if(yes != 1){
                $("#icon-ajax").html('');
                $("#error1").html('Bạn chưa đồng ý với điều khoản của chúng tôi !');
                return false;
            }
            $('#error1').html('');
            $(this).hide('1000');
            $("#icon-ajax1").html('<i class="fa fa-spinner" aria-hidden="true"></i>');
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?php echo base_url('user/regis') ?>",
                data:{user_gender:user_gender,user_fullname:user_fullname,
                    user_pass:user_pass,user_repass:user_repass,
                    user_mail:user_mail,
                    user_is:user_is,yes:yes},
                    success: function(result){
                        if(result == '1'){
                            $('#icon-ajax1').html('<i class="fa fa-check text-success" aria-hidden="true"></i>');
                            setTimeout(
                                function(){
                                //location="/user-info";
                                alert('Thành công');
                                location.reload();
                            },2000
                            );
                        }else{
                            alert('email đã tồn tại');
                            $('#register').show('1000');
                            $('#icon-ajax1').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                        }
                    }
                });
        });

        $("#login").click(function(){
            $("#icon-ajax").html('<i class="fa fa-spinner" aria-hidden="true"></i>');
            var user_email          = $("#user_email").val();
            var user_pass           = $("#user_pass").val();
            var user_type           = $('#user_is_login').val();
            var re                  = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var flag                = re.test(user_email);
            if(flag == true){
                if(user_pass.length <6){
                    $('#error').html('Độ dài mật khẩu lớn hơn 6 ký tự');
                    $("#icon-ajax").html('');
                }else{
                    $('#error').html('');
                    $.ajax({
                        dataType: "json",
                        type:"POST",
                        url:"<?php echo base_url() ?>user/login",
                        data:{user_email:user_email,user_pass:user_pass},
                        success: function(result){
                            if(result == '1'){
                                $('#icon-ajax').html('<i class="fa fa-check text-success" aria-hidden="true"></i>');
                                setTimeout(
                                    function(){window.location.reload();},2000
                                    );

                            }else{
                                alert('Tài khoản và mật khẩu không đúng');
                                $('#icon-ajax').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                            }
                        }
                    });
                }
            }else{
                $('#error').html('Định dạng email không đúng');
                $("#icon-ajax").html('');
            }
        });
    });
</script>
