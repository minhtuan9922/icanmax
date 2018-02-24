<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'Đính kèm file của bạn'?>
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
    <form class="form-horizontal" id="form-cv" action="" method="post" enctype="multipart/form-data" >
        <div class="form-group hform">
            <label for="profile_title" class="col-sm-2 control-label"><?php echo 'Tiêu đề hồ sơ file'; ?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
                  <input type="text" class="form-control"  id="file_title"  placeholder="<?php echo 'Tiêu đề hồ sơ'; ?>" name="file_title" value=""  required>
                  <?php echo form_error('file name', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>    
        </div>
         <div class="form-group hform">
            <label for="profile_title" class="col-sm-2 control-label"><?php echo 'File'; ?>:<font size="2" color="#FF0000">*</font></label>
            <div class="col-sm-10">
                  <input type="file" id="file-profile"  class="form-control" name="file_profile" value="" placeholder="Vui lòng chọn file pdf" required>
                  <small><i>Chỉ đọc file pdf</i></small>
                  <?php 
                    if(!empty($error))
                    {
                        echo '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$error.'</div>';
                    } else echo '';
                   ?>
            </div>    
        </div>
         <div class="form-group hform">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" id="save-cv" class="btn btn-primary form-control">Lưu</button>
                <button type="submit" id="view-file" style="margin-top:10px;" class="btn btn-gray form-control">Xem Trước File</button>
            </div> 
         </div>
        <div class="form-group hform" style="padding: 0px 20px 0px 40px;" id="chose-profile" >
        </div>
        <script type="text/javascript">
            var view_file = '';
            $('#file-profile').on('change', function(evt) {
                var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
                if (files && files.length) 
                {
                    $extension=['application/pdf'];
                    if (jQuery.inArray(files[0]['type'],$extension) == -1)
                    {
                        alert('Không phải định dạng file pdf');
                        $('#chose-profile').html('');
                        $('#file-profile').val('');
                        evt.preventDefault();
                        return;
                    }
                    if (Math.round(files[0]['size']/1024) > 1024*5)
                    {
                        alert('Kích thước file không được quá 5M');
                        $('#chose-profile').html('');
                        $('#file-profile').val('');
                        evt.preventDefault();
                        return;
                    }
                    view_file = files;         
                }
            });

            $('#view-file').click(function(e){
                e.preventDefault();
                if (view_file && view_file.length) 
                {
                    var fr = new FileReader();
                        fr.onload = function () {
                             $('#chose-profile').html(' <iframe src="'+fr.result+'" style="width:100%; height:600px; border:0;">Chỉ đọc trước file pdf</iframe>');
                        }
                        // se goi lai ham onload tra ve du lieu duoi dang url
                        fr.readAsDataURL(view_file[0]);   
                } else {
                    alert('Bạn chưa chọn file');
                }
            });

            $('#save-cv').click(function(e){
                if ($('#file_title').val() == '' )
                {
                    return;
                }
                if ($('#file-profile').val() == '' )
                {
                    return;
                }
                confirm('Bạn có muốn lưu');
            });
        </script>
    </form>
   </div>
</div>