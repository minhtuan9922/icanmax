<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'Thông tin chung'?>
        </div>
        <div class="wight50 right">
           <a href="#demo1" style="color:white;" id="collapse_general" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_general').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo1" class="collapse in">
    <form class="form-horizontal" id="form-general" action="" method="post">
      <div class="panel-body" style="padding: 0px">
         
              <div class="form-group hform">
                  <label for="profile_title" class="col-sm-2 control-label"><?php echo 'Tiêu đề hồ sơ'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" pattern="[a-zA-Z0-9]{0,50}" id="profile_title"  placeholder="<?php echo 'Tiêu đề hồ sơ'; ?>" name="profile_title" value="<?php echo !empty($profile->profile_title) ? $profile->profile_title : '' ;?>"    required >
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_education" class="col-sm-2 control-label"><?php echo 'Trình độ học vấn'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                     <select name="profile_education" id="profile_education" class="form-control" required>
                       <?php 
                          if (!empty($education))
                          {
                            foreach ($education as $key => $value)
                            {
                              ?>
                                 <option <?php echo $profile->profile_leve_learning == $value['id'] ? 'selected="selected"' : ''; ?> value="<?php echo $value['id']; ?>" ><?php echo
                                  $value['name']; ?></option>
                              <?php
                            }
                          }
                         ?>
                    </select>
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_exp" class="col-sm-2 control-label"><?php echo 'Kinh Nghiệm'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                     <select name="profile_exp" id="profile_exp" class="form-control" required>
                         <?php 
                          if (!empty($exp))
                          {
                            foreach ($exp as $key => $value)
                            {
                              ?>
                                 <option <?php echo $profile->profile_exe == $value['id'] ? 'selected="selected"' : ''; ?> value="<?php echo $value['id']; ?>" ><?php echo
                                  $value['name']; ?></option>
                              <?php
                            }
                          }
                         ?>
                    </select>
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_career" class="col-sm-2 control-label"><?php echo 'Ngành nghề'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                      <select class="js-example-basic-multiple form-control" id="profile_career" name="profile_career"  multiple="multiple" required>
                        <?php 
                          if (!empty($career))
                          {
                            foreach ($career as $key => $value)
                            {
                              ?>
                                 <option 
                                  <?php
                                  $profile_career = explode(',',$profile->profile_career);
                                  foreach ($profile_career as $k => $val) 
                                  {
                                    if ($val == $value->id)
                                    {
                                       echo 'selected="selected"'; 
                                       unset($profile_career[$k]);
                                    }
                                  }
                                  ?> value="<?php echo $value->id; ?>" ><?php echo
                                  $value->name; ?></option>
                              <?php
                            }
                          }
                         ?>
                      </select>
                  <script type="text/javascript">
                      $("#profile_career").select2({
                          placeholder: 'Chọn không quá 3 nghành nghề',
                          allowClear: true,// clear all
                          maximumSelectionLength: 3, //limit number
                          language: 
                          { 
                            'noResults': function () 
                            {
                              return 'No found';
                            }, 
                            'maximumSelected': function () 
                            {
                              return 'You can only 3 select items';
                            },
                          },
                      
                       });

                  </script>
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_time_job" class="col-sm-2 control-label"><?php echo 'Loại hình công việc'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                      <select class="js-example-basic-multiple form-control " id="profile_time_job" name="profile_time_job"  multiple="multiple" required>
                        <?php 
                          if (!empty($time_job))
                          {
                            foreach ($time_job as $key => $value)
                            {
                              ?>
                                 <option 
                                   <?php
                                    $profile_time = explode(',',$profile->profile_time_job);
                                    foreach ($profile_time as $k => $val) 
                                    {
                                      if ($val == $value['id'])
                                      {
                                         echo 'selected="selected"'; 
                                         unset($profile_time[$k]);
                                      }
                                    }
                                    ?>
                                   value="<?php echo $value['id']; ?>" ><?php echo
                                    $value['name']; ?>
                                  </option>
                              <?php
                            }
                          }
                         ?>
                      </select>
                  <script type="text/javascript">
                      $("#profile_time_job").select2({
                          placeholder: 'Chọn không quá 2 loại hình công việc',
                          allowClear: true,// clear all
                          maximumSelectionLength: 2, //limit number
                          language: 
                          { 
                            'noResults': function () 
                            {
                              return 'No found';
                            }, 
                            'maximumSelected': function () 
                            {
                              return 'You can only 2 select items';
                            },
                          },
                      });
                  </script>
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_wage" class="col-sm-2 control-label"><?php echo 'Mức Lương'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                     <select name="profile_wage" id="profile_wage" class="form-control" required>
                        <?php 
                          if (!empty($wage))
                          {
                            foreach ($wage as $key => $value)
                            {
                              ?>
                                 <option <?php echo $profile->profile_money == $value->id ? 'selected="selected"' : ''; ?> value="<?php echo $value->id; ?>" ><?php echo
                                  $value->name; ?></option>
                              <?php
                            }
                          }
                         ?>
                    </select>
                  </div>
              </div>
              <div class="form-group hform">
                  <label for="profile_location" class="col-sm-2 control-label"><?php echo 'Nơi Làm Việc'; ?>:<font size="2" color="#FF0000">*</font></label>
                  <div class="col-sm-10">
                      <select class="js-example-basic-multiple form-control " id="profile_location" name="profile_location"  multiple="multiple" required>
                       <?php 
                          if (!empty($location))
                          {
                            foreach ($location as $key => $value)
                            {
                              ?>
                                 <option 
                                   <?php
                                    $profile_location = explode(',',$profile->profile_location);
                                    foreach ($profile_location as $k => $val) 
                                    {
                                      if ($val == $value['id'])
                                      {
                                         echo 'selected="selected"'; 
                                         unset($profile_location[$k]);
                                      }
                                    }
                                    ?>
                                   value="<?php echo $value['id']; ?>" ><?php echo
                                    $value['name']; ?>
                                  </option>
                              <?php
                            }
                          }
                         ?>
                      </select>
                  <script type="text/javascript">
                      $("#profile_location").select2({
                          placeholder: 'Chọn nơi làm việc',
                          allowClear: true,// clear all
                          maximumSelectionLength: 4, //limit number
                          language: 
                          { 
                            'noResults': function () 
                            {
                              return 'No found';
                            }, 
                            'maximumSelected': function () 
                            {
                              return 'You can only 4 sselect items';
                            },
                          },
                      });
                  </script>
                  </div>
              </div>
          </div>
        <div class="hdiv-padding" style="text-align: right;"> 
          <button type="submit" id="btn-general" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Lưu</button>   
       </div>
       <script type="text/javascript">
        var count = 1;
         $('#btn-general').click(function(e){
              profile_title         = $('#profile_title').val();

              if(profile_title == '' || profile_title.length >50 )
              {
                message_pattern('input','profile_title','Vui lòng nhập tiêu đề hồ sơ không quá 50 ký tự');
                return;
              }
              profile_education     = $('#profile_education').val();
              profile_exp           = $('#profile_exp').val();
              profile_career        = $('#profile_career').val();
              if (profile_career == null)
              {  
                message_validation('select','profile_career','Vui lòng chọn ngành nghề mong muốn');
                return;
              }
              profile_time_job      = $('#profile_time_job').val();
              if (profile_time_job == null)
              {
                message_validation('select','profile_time_job','Vui lòng chọn thời gian làm việc');
                return;
              }
              profile_wage          = $('#profile_wage').val();
              profile_location      = $('#profile_location').val();
              if (profile_location == null)
              {
                message_validation('select','profile_location','Vui lòng chọn nơi làm việc');
                return;
              }
              e.preventDefault();
              var r= confirm('Bạn có muốn lưu không');
              if( r==true )
              {
                if (count > 3)
                {
                  alert('Vui lòng không nhấn nút lưu liên tục');
                  return;
                }
               $.ajax({
                  url: '<?php echo base_url("update-profile-general"); ?>',
                  type: 'POST',
                  dataType: 'JSON',

                  data: {profile_title:profile_title,profile_education:profile_education,profile_exp:profile_exp,profile_career:profile_career,profile_time_job:profile_time_job,profile_wage:profile_wage,profile_location:profile_location, count:count},
                })
                 .done(function(obj) { 
                    console.log(obj);   
                    if (obj.max_count == true)
                    {
                      alert('Vui lòng không nhấn nút lưu liên tục');
                      return;
                    }
                    if (obj.successful == false)
                    {
                      alert('Error');
                      $.each(obj.messages, function(index, value) {
                        var element = $("#"+index);
                        $(element)
                        .closest('.form-group')
                        .removeClass('has-error')
                        .removeClass('has-success')
                        .addClass(value.length > 0 ? 'has-error' : '')
                        .find('div[name="error"]').remove();

                        $(element).after(value);
                      });
                    } else {

                        count++;
                        alert('Thành Công');
                        $('div[name="error"]').remove();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
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
</div>