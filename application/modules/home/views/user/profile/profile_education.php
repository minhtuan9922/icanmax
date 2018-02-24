<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="glyphicon glyphicon-education" aria-hidden="true"></i>
            <?php echo 'Học vấn'?>
        </div>
        <div class="wight50 right">
           <a href="#demo3" style="color:white;" id="collapse_education" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_education').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo3" class="collapse in">
    <div class="panel-body" style="padding: 0px">
        <!--đã có -->
        <div id="text-education" >
            <!--data-->
               <?php $this->load->view('user/profile/data_education'); ?>
            <!-- end data -->
        </div>
        <!-- -->
        <div id="education-form">
        <form class="form-horizontal" method="post">
            <div class="form-group hform">
                <label for="education_schools" class="col-sm-2 control-label"><?php echo 'Trường'; ?>:<font size="2" color="#FF0000">*</font></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="education_schools"  placeholder="<?php echo 'vd: Cao Đẳng Kỹ Thuật Cao Thắng'; ?>" name="education_schools" value="<?php ?>"    required >
                </div>
            </div>
            <div class="form-group hform">
                <label for="profile_title" class="col-sm-2 control-label"><?php echo 'Chuyên ngành'; ?>:<font size="2" color="#FF0000">*</font></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="education_specialized"  placeholder="<?php echo 'vd: Công nghệ thông tin'; ?>" name="education_specialized" value="<?php ?>"    required >
                   
                </div>
            </div>
            <div class="form-group hform">
                <label for="education_rank" class="col-sm-2 control-label"><?php echo 'Xếp loại'; ?>:<font size="2" color="#FF0000">*</font></label>
                <div class="col-sm-10">
                    <select name="education_rank" id="education_rank" class="form-control" required>
                      <option id="rank-1" value="1"  >Giỏi</option>
                      <option id="rank-2" value="2"  >Khá</option>
                      <option id="rank-3" value="3"  >Trung bình</option>
                  </select>
                </div>
            </div>
            <div class="form-group hform">
                <label for="education_time" class="col-sm-2 control-label"><?php echo 'Thời gian'; ?>:<font size="2" color="#FF0000">*</font></label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="education_time_start" max="<?php echo date('Y-m-d'); ?>"  name="education_time_start"  required >
                </div>
                 <div class="col-sm-5">
                   <input type="date" class="form-control" id="education_time_end" max="<?php echo date('Y-m-d'); ?>" name="education_time_end"   required >
                </div>
            </div>
              <div class="hdiv-padding" style="text-align: right;">    
                 <button type="submit"  id="btn-education" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Lưu</button>
                  <a class="btn btn-warning" id="exit-education"  role="button"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Thoát</a>
                 <input type="hidden" id="swith-case" value="1"> 
             </div>
       </form>
        </div>
    </div>
      <script>
        $('#education_time_start').change(function(e){
             var education_time_start    = $('#education_time_start').val();
             $('#education_time_end').attr('min',education_time_start);
        });
        $('#btn-education').click(function(e){
            var education_schools       = $('#education_schools').val();
            var education_specialized   = $('#education_specialized').val();
            var education_rank          = $('#education_rank').val();
            var education_time_start    = $('#education_time_start').val();
            var education_time_end      = $('#education_time_end').val();
            var swith_case              = $('#swith-case').val();
            var d1 = new Date(education_time_start);
            var d2 = new Date(education_time_end);
            if (education_schools == '')
            {
                message_validation('input','education_schools','Vui lòng nhập tên trường');
                return;
            }
            if (education_specialized == '')
            {
                message_validation('input','education_specialized','Vui lòng nhập chuyên ngành');
                return;
            }
            if (education_time_start == '')
            {
                message_validation('input','education_time_start','Vui lòng chọn thơi gian');
                return;
            }
            if (education_time_end == '')
            {
                message_validation('input','education_time_end','Vui lòng chọn thơi gian');
                return;
            }
            if (d1 > d2)
            {
                message_validation('input','education_time_end','Vui lòng chọn thơi gian lớn hơn thời gian bắt đầu');
                return ;
            }
            e.preventDefault();
            var r = confirm('Bạn có muốn lưu không');
            if (r == true)
            {
                $.ajax({
                    url: '<?php echo base_url("update-education"); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {education_schools:education_schools, education_specialized:education_specialized, education_rank:education_rank, education_time_start:education_time_start, education_time_end:education_time_end, case:swith_case, id:id},
                })
                .done(function(result) {

                    if (result.validation == false)
                    {
                      alert('Error');
                      $.each(result.error_messages, function(index, value) {
                        var element = $("#"+index);
                        console.log(result.error_messages.education_time_start);
                        $(element)
                        .closest('.form-group')
                        .removeClass('has-error')
                        .removeClass('has-success')
                        .addClass(value.length > 0 ? 'has-error' : '')
                        .find('div[name="error-education"]').remove();
                        $(element).after(value);
                      });
                    
                        $('#education_time_start').after(result.error_messages.education_time_start);
                    } 
                    else if (result.successful == true ) {
                        alert('Thành Công');
                        $('div[name="error-education"]').remove();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        clear_data_education();
                        number_education++;
                        $('#text-education').html(result.html_education);
                        hide_form_education();                      
                    } else if (result.max_education == true) {
                        alert('Học vấn chỉ được thêm 3');
                        $('div[name="error-education"]').remove();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                    }
                 })
                .fail(function() {
                    console.log("error");
                })
            }
        });
    </script>
    </div>
</div>
<script type="text/javascript">
    <?php 
        if (!empty($profile->profile_education_json))
        {
            ?>
                $('#text-education').show();
                $('#education-form').hide();
            <?php
        }
        else {
            ?>
                 $('#text-education').show();
                 $('#education-form').hide();
            <?php
        }
    ?>
    $('#exit-education').click(function(){
         hide_form_education();
         clear_data_education();
    });
    function show_form_education()
    {
        $('#text-education').hide();
        $('#education-form').show(); 
    }
    function hide_form_education()
    {
        $('#text-education').show();
        $('#education-form').hide();
    }
    function clear_data_education()
    {
        $('#education_schools').val('');
        $('#education_specialized').val('');
        $('#education_time_start').val('');
        $('#education_time_end').val('');
    }
</script>