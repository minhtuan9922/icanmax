<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/8/2017
 * Time: 3:46 PM
 */
?>
<div class="col-md-3">
    <div class="row lis-herder-info" >
        <div class="panel panel-primary">
        </div>
        <form method="POST" id="upload" enctype="multipart/form-data">
            <div class="text-center col-md-3" style="width: 35%">

                <label for="file"  class="input-label" >
                    <div id="chose">
                        <?php 
                        if (empty($this->session->userdata('ses_user_img'))) 
                        {
                            echo ' <i for="file" class="fa fa-user-circle fa-5x" alt="Select img" title="select img" aria-hidden="true"></i>';
                        }
                        else {
                            echo '<img title="select img" class="img-user chose" src="'.base_url($this->session->userdata('ses_user_img')).'" />';
                        }
                        ?>
                    </div>
                    <input type="file" name="file" id="file" />
                    <i class="fa fa-camera" aria-hidden="true" >Ảnh đại diện</i>
                </label>


            </div>
            <div class="col-md-9" style="width: 65%">
                <p><?=$this->session->userdata('ses_user_fullname');?></p>
                <p><b>Coin :</b> 0</p>
                <p><b>Vip :</b> 0</p>
                <div id="save-cancel" class="hidden"  >
                    <button id="save" type="button" class="btn btn-success mybtn"><span class="glyphicon glyphicon-ok" title="save" ></span></button>
                    <button id="cancel" type="button" class="btn btn-warning mybtn"><span class="glyphicon glyphicon-remove" title="cancel"  ></span></button> 
                </div>
            </div>

        </form>
        <br>
    </div>
    <script type="text/javascript">
        var file_img='';
        $('#file').on('change', function(evt) {
            img=$('#file').val();    
            if (img != '')
            {
                $('#save-cancel').attr('class',"show");
                var tgt = evt.target || window.event.srcElement,
                files = tgt.files;

                // FileReader support
                if (files && files.length) {
                    var fr = new FileReader();
                    fr.onload = function () {
                        $('#chose').html('<img class="img-user" src="'+fr.result+'" />');
                    }
                    // se goi lai ham onload tra ve du lieu duoi dang url
                    fr.readAsDataURL(files[0]);
                    file_img=files[0];
                }
                //save

            } else {
                $('#save-cancel').attr('class',"hidden");
                i++;
            }   
        });
        $('#save').click(function()
        {             
            if(typeof file_img !== 'undefined')
            {
                var r=confirm('Bạn muốn cập nhật hình không');
                if (r==true)
                {
                    file_size=Math.round(file_img['size']/1024);//kb
                    if (file_size > 1024)
                    {
                        alert('Kích thước file không được quá 1M');
                        return;
                    }
                    //exten img
                    $extension=['image/jpeg','image/png','image/bmp','image/gif','image/jpg'];
                    file_exten=file_img['type'];


                    if (jQuery.inArray(file_exten,$extension) == -1)
                    {
                        alert('Không phải định dạng file hình');
                        return;
                    }
                    //form
                    var form_data=new FormData( $('#upload')[0] );
                    //append
                    form_data.append('file_img',file_img);
                    //ajax
                    $.ajax({
                        url: '<?php echo base_url(); ?>update-img-user',
                        type: 'POST',
                        dataType: 'html',
                        contentType:false,
                        cache:false,
                        processData:false,
                        data: form_data,
                    })
                    .done(function(result) {
                        console.log(result);
                        alert(result);
                        $('#file').val('');
                        file_img='';
                        location.reload();
                        $('#save-cancel').attr('class',"hidden");
                    })
                    .fail(function() {
                        console.log("error");
                        $('#save-cancel').attr('class',"hidden");
                    })
                }
            }
        });
        //cancel
        $('#cancel').click(function(){
            $('#save-cancel').attr('class',"hidden");
            <?php 
            if (empty($this->session->userdata('ses_user_img'))) 
            {
                ?>
                $('#chose').html('<i for="file"  class="fa fa-user-circle fa-5x" alt="Select img" title="select img" aria-hidden="true"></i>');
                    //set null
                    $('#file').val('');
                    <?php
            }
             else{
                    ?>
                    $('#chose').html('<img class="img-user" title="select img" src="<?php echo base_url($this->session->userdata('ses_user_img')) ?>" />');
                    //set null
                    $('#file').val('');
                    <?php
            }
                ?>
            });
        </script>
        <div class="row">
            <ul class="nav nav-bar">
                <li class="<?php if($active == 'worlk'){echo "active_left";}?>">
                    <a href="<?=base_url('page/3/recruiter')?>"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>&nbsp;Việc làm phù hợp với bạn</a>
                </li>
                <li class="<?php if($active == 'user_info'){echo "active_left";}?>">
                    <a href="<?=base_url('user-info')?>"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;<?php echo  $this->lang->line('account'); ?></a>
                </li>
                <li class="<?php if($active == 'user_notifications'){echo "active_left";}?>">
                    <a href="<?=base_url('user-notifications')?>"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Thông báo <sup>1</sup></a>
                </li>
                <li class="<?php if($active == 'user_message'){echo "active_left";}?>">
                    <a href="<?=base_url('user-message')?>"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Tin nhắn <sup>2</sup></a>
                </li>
                <li class="<?php if($active == 'user_setup'){echo "active_left";}?>">
                    <a href="<?=base_url('user-setup')?>"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Cài đặt</a>
                </li>
                <li class="<?php if($active == 'user_pay'){echo "active_left";}?>">
                    <a href="<?=base_url('user-pay')?>"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Thanh toán</a>
                </li>
                <li class="<?php if($active == 'user_history'){echo "active_left";}?>">
                    <a href="<?=base_url('user-history')?>"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;Lịch sử</a>
                </li>
                <li class="<?php if($active == 'user_managerfile'){echo "active_left";}?>">
                    <a href="<?=base_url('user-managerfile')?>"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Quản lý hồ sơ</a>
                </li>
                 <li class="<?php if($active == 'user_managerfile1'){echo "active_left";}?>">
                    <a href="<?=base_url('user-managerfile')?>"><i class="fa fa-send" aria-hidden="true"></i>&nbsp;Việc làm đã ứng tuyển</a>
                </li>
                 <li class="<?php if($active == 'user_managerfile2'){echo "active_left";}?>">
                    <a href="<?=base_url('user-managerfile')?>"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Nhà tuyển dụng đã xem hồ sơ</a>
                </li>
                <li class="<?php if($active == 'user_infocompany'){echo "active_left";}?>">
                    <a href="<?=base_url('user-infocompany')?>"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Quản lý thông tin công ty</a>
                </li>
            </ul>
        </div>
    </div>