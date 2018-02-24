<div class="panel panel-primary" style="border: none;">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <?php echo 'CHI TIẾT HỒ SƠ ỨNG VIÊN'?>
        </div>
    </div>
    <hr>
    <div class="panel-body" style="padding: 0px">
        <div class="col-sm-4 hcenter"  >
            <label   class="input-label" >
                <img  class="img" style="width: 75%;" src="<?php echo base_url($profile->img); ?>" />   
            </label>
            <div class="padding-text" ><b>Số lượt xem:&nbsp;</b><?php echo !empty($profile->profile_view) ? $profile->profile_view : 0; ?></div>
            <div class="padding-text" ><b>Người duyệt:&nbsp;</b><?php echo !empty($profile->user_name) ? $profile->user_name : 'đang đợi duyệt' ; ?></div>
            <div class="padding-text" ><b>Ngày duyệt:&nbsp;</b><?php echo !empty($profile->user_name) ? date_format(date_create($profile->profile_date_confrim),'d-m-Y') : '00-00-0000' ; ?></div>
        </div>
        <div class="col-sm-6">
           <h2 class="bold" style="margin-top: 0px" ><?php echo $profile->fullname; ?></h2>
           <h4 style="color: #337ab7;"><?php echo $profile->profile_title; ?></h4>
           <div class="padding-text" ><b>Mã hồ sơ:&nbsp;</b><?php echo $profile->profile_id; ?></div>
           <div class="padding-text" ><b>Ngày sinh:&nbsp;</b><?php  echo date_format(date_create($profile->birthday),'d-m-Y'); ?></div>
           <div class="padding-text" ><b>Giới tính:&nbsp;</b><?php echo ($profile->gender == 1) ? 'Nam' : 'Nữ';  ?></div>
           <div class="padding-text" ><b>Email:&nbsp;</b><?php echo $profile->email; ?></div>
           <div class="padding-text" ><b>Điện thoại:&nbsp;</b><?php echo $profile->phone; ?></div>
           <div class="padding-text" ><b>Chổ ở hiện tại:&nbsp;</b><?php echo $profile->address; ?></div>
           <div class="padding-text" ><b>Ngày cập nhật:&nbsp;</b><?php  echo date_format(date_create($profile->profile_date_update),'d-m-Y'); ?></div>
        </div>
        <div class="col-sm-2" style="padding: 5px;">
            <?php 
            if ($profile->profile_satus == 1)
            { 
             echo  '<a class="btn btn-success" id="act" style="width: 100%;margin-bottom: 5px" href="" role="button"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Active</a>';
            } else  echo  '<a class="btn btn-warning" id="act" style="width: 100%;margin-bottom: 5px" href="" role="button"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;No Active</a>';
            ?>
           <a class="btn btn-gray hbtn" id="click-cv" href="cv-file"  role="button"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Xem CV File</a>
        </div>
        <script type="text/javascript">
            $('#act').click(function(e){ e.preventDefault();});

            $('#click-cv').click(function(e){
                e.preventDefault();
                 $('html, body').animate({
                    scrollTop: $("#cv-file").offset().top
                },3000);
            });
        </script>
    </div>
    <div class="panel-body" style="padding: 0px">
        <h4 class="bold" style="color: #337ab7;" >Thông tin chung<span class="hline" ></span></h4>
        <div class="col-sm-6">
           <div class="padding-text" ><b>Ngành nghề:&nbsp;</b>
            <?php 
                $arr_profile_career = explode(',',$profile->profile_career);
                $n      = count($arr_profile_career);
                foreach ($arr_profile_career as $k => $val)
                {
                    foreach ($career as $key => $value) {
                        if ($val == $value->id)
                        {
                            if ($k != 0 && $k != $n)
                            {
                                echo ' - ';
                            }
                            echo $value->name;
                            break;
                        }
                    }
                }
             ?>
           </div>
           <div class="padding-text" ><b>Trình độ học vấn:&nbsp;</b>
            <?php 
                foreach ($education as $key => $value) {
                    if ($value['id'] == $profile->profile_leve_learning) {
                        echo $value['name'];
                        break;
                    }
                }
             ?>
           </div>
           <div class="padding-text" ><b>Kinh nghiệm làm việc:&nbsp;</b>
            <?php 
                foreach ($exp as $key => $value) {
                    if ($value['id'] == $profile->profile_exe) {
                        echo $value['name'];
                        break;
                    }
                }
            ?>
           </div>
           <div class="padding-text" ><b>Loại hình công việc:&nbsp;</b>
            <?php 
                $arr_time_job = explode(',',$profile->profile_time_job);
                $n      = count($arr_time_job);
                foreach ($arr_time_job as $k => $val)
                {
                    foreach ($time_job as $key => $value) {
                        if ($val == $value['id'])
                        {
                            if ($k != 0 && $k != $n)
                            {
                                echo ' - ';
                            }
                            echo $value['name'];
                            break;
                        }
                    }
                }
             ?>
           </div>
        </div>
        <div class="col-sm-6">
           <div class="padding-text" ><b>Mức lương mong muốn:&nbsp;</b>
            <?php 
                foreach ($wage as $key => $value) {
                    if ($value->id == $profile->profile_money) {
                        echo $value->name;
                        break;
                    }
                }
            ?>
            </div>
           <div class="padding-text" ><b>Nơi làm việc:&nbsp;</b>
            <?php 
                $arr_location = explode(',',$profile->profile_location);
                $n      = count($arr_location);
                foreach ($arr_location as $k => $val)
                {
                    foreach ($location as $key => $value) {
                        if ($val == $value['id'])
                        {
                            if ($k != 0 && $k != $n)
                            {
                                echo ' - ';
                            }
                            echo $value['name'];
                            break;
                        }
                    }
                }
             ?>
            </div>
        </div>
    </div>
    <?php 
    if (!empty($profile->profile_target)) 
    {
    ?>
    <div class="panel-body" style="padding: 0px">
        <h4 class="bold" style="color: #337ab7;" >Mục tiêu nghề nghiệp<span class="hline" ></span></h4>
        <div class="col-sm-12">
             <?php 
                $arr_target = explode('%^&*',$profile->profile_target);
                $n = count($arr_target);
                foreach ($arr_target as $k => $val)
                {
                    foreach ($target as $key => $value) {
                        if ($val == $value['id'])
                        {
                           echo ' <div class="padding-text" ><i class="fa fa-check" aria-hidden="true"></i>&nbsp;'.$value['name'].'</div>';
                        }
                    }
                }
                if (!empty($arr_target[$n-1]) && strlen($arr_target[$n-1]) > 49)
                {
                    echo '<div class="padding-text" >'.$arr_target[$n-1].'</div>';
                }
             ?>
          
        </div>
    </div>
    <?php 
    }
    if (!empty($profile->profile_education_json)) 
    {
    ?>
     <div class="panel-body" style="padding: 0px">
        <h4 class="bold" style="color: #337ab7;" >Học vấn<span class="hline" ></span></h4>
        <div class="col-sm-12">
           <table class="table ">
               <thead>
                   <tr>
                       <th>Thời gian</th>
                       <th>Tên trường</th>
                       <th>Chuyên ngành</th>
                       <th>Xếp loại tốt nghiệp</th>
                   </tr>
               </thead>
               <tbody>
                <?php 
                    $json_education = json_decode($profile->profile_education_json);
                    foreach ($json_education as $k => $val)
                    {
                 ?>
                       <tr>
                           <td><?php echo date_format(date_create($val->education_time_start),'m/Y').' - '.date_format(date_create($val->education_time_end),'m/Y') ?></td>
                           <td><?php echo $val->education_schools; ?></td>
                           <td><?php echo $val->education_specialized; ?></td>
                           <td> <?php 
                                if ($val->education_rank ==1)
                                {
                                    echo 'Giỏi';
                                }
                                else if ($val->education_rank ==2) {
                                    echo 'Khá';
                                } else 
                                echo 'Trung bình';
                                ?>    
                            </td>
                       </tr>
                <?php
                    }
                ?>
               </tbody>
           </table>
        </div>
    </div>
    <?php 
    }
    if (!empty($profile->profile_language_json)) 
    {
    ?>
    <div class="panel-body" style="padding: 0px">
        <h4 class="bold" style="color: #337ab7;" >Trình độ ngoại ngữ<span class="hline" ></span></h4>
        <div class="col-sm-12">
            <?php 
                $json_language = json_decode($profile->profile_language_json);
                foreach ($json_language as $k => $val)
                {
                    foreach ($language as $key => $value) 
                    {          
                         if ($val->name_language == $value['id'])
                         {
                            echo '<div class="padding-text" ><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>';
                            echo $value['name'].':&nbsp;</b>';
                            $certificate = explode(',',$value['certificate']);
                            foreach ($certificate as $k1 => $val1 )
                            {
                                if ($val1 == $val->certificate_language )
                                {
                                    echo $val1.'('.$val->result_language.')</div>';
                                    break;
                                }
                            }
                         }
                    }
                }
            ?>   
        </div>
    </div>
    <?php 
    }
    if (!empty($profile->profile_exp_job_json)) 
    {
    ?>
     <div class="panel-body" style="padding: 0px">
        <h4 class="bold" style="color: #337ab7;" >Kinh nghiệm làm việc<span class="hline" ></span></h4>
        <div class="col-sm-12">
            <?php 
            $json_job = json_decode($profile->profile_exp_job_json);
            foreach ($json_job as $k => $val)
            {
                echo '<div class="padding-text" ><b>'.strtoupper($val->company_position).'&nbsp;</b>tại '.strtoupper($val->company_name).'</div>';
                echo '<div class="padding-text" style="color: #ff5722;" >'.date_format(date_create($val->company_time_start),'d-m-Y').' - '.date_format(date_create($val->company_time_end),'d-m-Y').'</div>';
                echo '<div class="padding-text" ><b>Mô tả công việc:</b></div>';
                echo  '<div class="padding-text" >- '.$val->company_description.'</div>';
            }
            ?>
        </div>
    </div>
    <?php 
    }
    ?>
</div>
<!-- profile file -->
<div class="panel panel-primary" id="cv-file" style="border: none;">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'HỒ SƠ ĐÍNH KÈM'?>
        </div>
    </div>
    <hr>
    <div class="panel-body"  style="padding: 0px">
        <div class="form-group hform" style="padding: 0px 15px 0px 30px;" id="chose-profile" >
                <!-- <iframe src="<?php echo base_url('assets/home/file/test.pdf') ?>"  style="width:100%; height:500px; border:0;"></iframe> -->
              <iframe src="https://docs.google.com/gview?url=https://mywork.com.vn//data/files/CVs/test201709150845.pdf&embedded=true" style="width:100%; height:600px; border:0;"></iframe>
        </div>
    </div>
</div>
<!-- end profile file -->
<div class="panel panel-primary" style="border: none;">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'HỒ SƠ TƯƠNG TỰ'?>
        </div>
    </div>
    <hr>
    <div class="panel-body" style="padding: 0px">
    <div class="form-group hform" style="padding: 0px 0px 0px 0px;" id="chose-profile" >
        <table id="hprofile" class="table table-hover">
            <thead>
                <tr style="font-weight: bold;color: #387dd2;">
                    <th style="text-align: left;">ỨNG VIÊN</th>
                    <th>TRÌNH ĐỘ KINH NGHIỆM</th>
                    <th>MỨC LƯƠNG</th>
                    <th>NƠI LÀM VIỆC</th>
                    <th>CẬP NHẬT</th>
                </tr>
            </thead>
            <tbody style="cursor: pointer;">
               
                <?php 
                foreach ($profile_silimar as $key => $value_silimar) 
                {
                    ?>
                    <tr name="table-profile-silimar" data-id="<?php echo $value_silimar["profile_id"]; ?>" value="<?php echo $this->my_string->remove_vn_unicode(str_replace(" ","-",$value_silimar["fullname"])); ?>">
                    <td style="text-align: left;" ><div>
                        <b>
                         <?php 
                         $arr_profile_career = explode(',',$value_silimar['profile_career']);
                         $n      = count($arr_profile_career);
                         foreach ($arr_profile_career as $k => $val)
                         {
                            foreach ($career as $key => $value) {
                                if ($val == $value->id)
                                {
                                    if ($k != 0 && $k != $n)
                                    {
                                        echo ' - ';
                                    }
                                    echo $value->name;
                                    break;
                                }
                            }
                        }
                        ?>     
                        </b>
                    </div><span><?php echo  $value_silimar['fullname'] ?></span></td>
                    <td>
                        <div> 
                            <?php 
                            foreach ($education as $key => $value) {
                                if ($value['id'] == $value_silimar['profile_leve_learning']) {
                                    echo $value['name'];
                                    break;
                                }
                            }
                            ?>    
                        </div>
                        <div>
                         <?php 
                         foreach ($exp as $key => $value) {
                            if ($value['id'] == $value_silimar['profile_exe']) {
                                echo $value['name'];
                                break;
                            }
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <?php 
                        foreach ($wage as $key => $value) {
                            if ($value->id == $value_silimar['profile_money']) {
                                echo $value->name;
                                break;
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?php 
                        $arr_location = explode(',',$value_silimar['profile_location']);
                        $n      = count($arr_location);
                        foreach ($arr_location as $k => $val)
                        {
                            foreach ($location as $key => $value) {
                                if ($val == $value['id'])
                                {

                                    echo  '<div>'.$value['name'].'</div>';
                                    break;
                                }
                            }
                        }
                        ?>
                    </td>
                    <td><?php  echo date_format(date_create($value_silimar['profile_date_update']),'d-m-Y'); ?></td>
                    </tr>
                    <?php
                }
                ?>     
            </tbody>
        </table>
        <div class="hcenter">
            <a class="btn btn-warning bg-primary" href="<?php echo base_url('employer'); ?>"  role="button"><i class="glyphicon glyphicon-arrow-right" aria-hidden="true"></i>&nbsp;Xem thêm hồ sơ ứng viên khác</a>
        </div> 
    </div>
    </div>
    <script type="text/javascript">
        var element = 'tr[name="table-profile-silimar"]';
        $(element).click(function(e){
            var id      = $(this).attr('data-id');
            var name    = $(this).attr('value');
            window.location.href = '<?php echo base_url($view_other); ?>/'+ id +'/'+ name +'';
        })
    </script>
</div>