<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            <?php echo 'Mục tiêu nghề nghiệp'?>
        </div>
        <div class="wight50 right">
           <a href="#demo2" style="color:white;" id="collapse_object_job" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_object_job').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo2" class="collapse in">
    <div class="panel-body" style="padding: 0px">
        <form class="form-horizontal" id="form-target" method="post">
            <div class="form-group hform">
                <label for="user_address" class="col-sm-2 control-label"><?php echo 'Mục tiêu' ?>:</label>
                <div class="col-sm-10">
                    <?php 
                    $profile_target = explode('%^&*',$profile->profile_target);
                    $number = 1;
                    if (!empty($target))
                    {
                        foreach ($target as $key => $value)
                        {
                            ?>
                                <span><input 
                                <?php
                                    foreach ($profile_target as $k => $val) 
                                    {
                                      if ($val == $value['id'])
                                      {
                                         echo 'checked="checked"'; 
                                         unset($profile_target[$k]);
                                      } else {
                                        $number = $k;
                                      }
                                    }
                                ?>
                                 type="checkbox" class="hcheck" name="target" value="<?php echo $value['id'] ?>">&nbsp;<?php echo $value['name'] ?></span><br>
                            <?php
                        }
                    }
                    ?>

                    <textarea style="height: 150px;" class="form-control" id="profile_target" placeholder="<?php echo 'Mô tả thêm về định hướng nghề nghiệp ít nhất 50 ký tự' ?>" name="profile_target" ><?php echo !empty($profile_target[$number]) ? $profile_target[$number] : '' ;?></textarea>
                   
                </div>
            </div>
        </div>
      <div class="hdiv-padding" style="text-align: right;">    
         <button type="submit" id="btn-target" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Lưu</button> 
     </div>
    </div>
    <script type="text/javascript">

        var count_target = 1;
        $('#btn-target').click(function(e){
            e.preventDefault();
            var val = [];
            $('input[name="target"]:checked').each(function(i){
                 val[i] = $(this).val();
            });
            var txt_target = $('#profile_target').val();

            if (txt_target != '')
            {
                if (txt_target.length < 50)
                {
                    alert('nội dung mục tiêu không đươc ít hơn 50 ký tự');
                    return;
                }
            }
            if (val.length == 0 && txt_target == '')
            {
                $('div[name="error-target"]').remove();
                $('#profile_target').after('<div name="error-target" class="alert alert-danger alert-dismissible" style="margin-bottom:0px;">Vui lòng chọn hoặc nhập mục tiêu</div>');
                return;
            } else {
                $('div[name="error-target"]').remove();
            }
            
            var r = confirm("Bạn có muốn lưu mục tiêu nghề nghiệp không");
            if (r == true)
            {
                if (count_target > 3)
                {
                  alert('Vui lòng không nhấn nút lưu liên tục');
                  return;
                }

                $.ajax({
                    url: '<?php echo base_url("update-target"); ?>',
                    type: 'POST',
                    dataType: 'json',

                    data: {checkbox:val, txt_target:txt_target, count:count_target},
                })
                .done(function(result) {
                    if (result.successful == false)
                    {
                        alert('fail');
                    } 
                    else if (result.min_length == false)
                    {
                        alert('Mục tiêu nhập ít nhất 50 ký tự');
                    }
                    else 
                    {
                        count_target++;
                        alert('Thành công');
                    }
                })
                .fail(function() {
                    console.log("error");
                })
            }  
        });
    </script>
    </form>
</div>