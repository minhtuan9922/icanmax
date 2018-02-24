<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="glyphicon glyphicon-education" aria-hidden="true"></i>
            <?php echo 'Kinh ngiệm làm việc (nếu có)'?>
        </div>
        <div class="wight50 right">
           <a href="#demo5" style="color:white;" id="collapse_exp_job" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_exp_job').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo5" class="collapse in">
    <div class="panel-body" style="padding: 0px">
        <!--đã có -->
        <div id="text_exp_job" >
            <!-- data-->
            <?php $this->load->view('user/profile/data_exp_job'); ?>
            <!-- end data -->
        </div>
        <!-- -->
        <div id="exp_job">
            <form class="form-horizontal" method="post">
                <div class="form-group hform">
                    <label for="company_name" class="col-sm-2 control-label"><?php echo 'Tên công ty'; ?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="company_name"  placeholder="<?php echo 'vd: Cao Đẳng Kỹ Thuật Cao Thắng'; ?>" value="" name="company_name"  value="" required/>   
                    </div>
                </div>
                <div class="form-group hform">
                    <label for="company_position" class="col-sm-2 control-label"><?php echo 'Chức danh'; ?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="company_position"  placeholder="<?php echo 'vd: IT'; ?>" name="company_position" value=""  required/>
                    </div>
                </div>
                <div class="form-group hform">
                    <label for="company_wage" class="col-sm-2 control-label"><?php echo 'Mức lương'; ?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                        <select name="company_wage" id="company_wage" class="form-control" required>
                          <?php
                            if (!empty($wage))
                            {
                                foreach ($wage as $key => $value) {
                                    ?>
                                         <option id="wage-<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"  ><?php echo $value->name; ?></option>
                                    <?php
                                }
                            } 
                          ?>
                      </select>
                    </div>
                </div>
                <div class="form-group hform">
                    <label for="" class="col-sm-2 control-label"><?php echo 'Thời gian'; ?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-5">                 
                        <input type="date" class="form-control" id="company_time_start"  name="company_time_start" value=""  max="<?php echo date('Y-m-d'); ?>" required >
                    </div>
                      <div class="col-sm-5">
                        <input type="date" class="form-control" id="company_time_end" max="<?php echo date('Y-m-d'); ?>"  name="company_time_end"   required >
                    </div>
                </div>
                <div class="form-group hform">
                    <label for="company_description" class="col-sm-2 control-label"><?php echo 'Mô tả công việc'; ?>:<font size="2" color="#FF0000">*</font></label>
                    <div class="col-sm-10">
                    <textarea name="company_description" id="company_description" placeholder="Mô tả thêm về công việc bạn" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="hdiv-padding" style="text-align: right;">    
                    <button type="submit"  id="btn-exp-job" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Lưu</button>
                    <a class="btn btn-warning" id="exit_exp_job"  role="button"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Thoát</a>
                    <input type="hidden" id="swith-case-exp" value="1"> 
                </div>
            </form>
        </div>  
    </div>
    <script type="text/javascript">
        $('#company_time_start').change(function(e){
            var company_time_start    = $('#company_time_start').val();
            $('#company_time_end').attr('min',company_time_start);
        });
        $('#btn-exp-job').click(function(e) {
            var company_name            = $('#company_name').val();
            var company_position        = $('#company_position').val();
            var company_wage            = $('#company_wage').val();
            var company_time_start      = $('#company_time_start').val();
            var company_time_end        = $('#company_time_end').val();
            var company_description     = $('#company_description').val();
            var swith_case_exp          = $('#swith-case-exp').val();
            var d1 = new Date(company_time_start);
            var d2 = new Date(company_time_end);
            if (company_name == '')
            {
                message_validation('input','company_name','Vui lòng nhập tên công ty');
                return;
            }
            if (company_position == '')
            {
                message_validation('input','company_position','Vui lòng nhập chức danh trong công ty');
                return;
            }
            if (company_time_start == '')
            {
                message_validation('input','company_time_start','Vui lòng chọn thơi gian bắt đầu công ty');
                return;
            }
            if (company_time_end == '')
            {
                message_validation('input','company_time_end','Vui lòng chọn thơi gian kết thúc công việc công ty');
                return;
            }
            if (d1 > d2)
            {
                message_validation('input','company_time_end','Vui lòng chọn thơi gian lớn hơn thời gian bắt đầu');
                return ;
            }
            if (company_description == '')
            {
                message_validation('input','company_description','Vui lòng mô tả công việc của bạn');
                return;
            }

            e.preventDefault();
            var r = confirm('Bạn có muốn lưu không');
            if (r == true)
            {
                $.ajax({
                    url: '<?php echo base_url("update-exp"); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {company_name: company_name, company_position: company_position, company_wage: company_wage, company_time_start: company_time_start, company_time_end: company_time_end, company_description: company_description, swith_case_exp: swith_case_exp, id:id },
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
                            .find('div[name="error-exp"]').remove();
                            $(element).after(value);
                        });
                          $('#company_time_start').after(result.error_messages.education_time_start);
                      } 
                      else if (result.successful == true ) {
                        alert('Thành Công');
                        $('div[name="error-exp"]').remove();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        clear_data_exp();
                        number_exp++;
                        $('#text_exp_job').html(result.html_education);
                        hide_form_exp();                      
                    } else if (result.max_education == true) {
                        alert('Kinh nghiệm chỉ được thêm 3');
                        $('div[name="error-exp"]').remove();
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
    <script type="text/javascript">
     <?php 
        if (!empty($profile->profile_education_json))
        {
            ?>
                hide_form_exp();
            <?php
        }
        else {
            ?>
                show_form_exp();
            <?php
        }
    ?>
    $('#exit_exp_job').click(function(){
        hide_form_exp();
    });
    function show_form_exp()
    {
        $('#text_exp_job').hide();
        $('#exp_job').show();
    }
    function hide_form_exp()
    {
        $('#text_exp_job').show();
        $('#exp_job').hide();
    }
    function clear_data_exp()
    {
        $('#company_name').val('');
        $('#company_position').val('');
        $('#company_time_start').val('');
        $('#company_time_end').val('');
        $('#company_description').val('');
    }
    </script>