<?php  
if (!empty($profile->profile_education_json))
{
    $json_education = json_decode($profile->profile_education_json);
    foreach ($json_education as $k => $val)
    {
        ?>
        <div class="panel panel-default hmargin-panel" id="education-<?php echo $val->id; ?>" >
            <div class="panel-body">
                <div class="hcol"><p class="bold">Tên trường:</p>&nbsp;<span id="education-schools-<?php echo $val->id; ?>" ><?php echo $val->education_schools; ?></span></div>
                <div class="hcol"><p class="bold">Chuyên ngành:</p>&nbsp;<span id="education-specialized-<?php echo $val->id; ?>" ><?php echo $val->education_specialized; ?></span></div>
                <div class="hcol"><p class="bold">Xếp loại:</p>&nbsp;<span id="education-rank-<?php echo $val->id; ?>" value="<?php echo $val->education_rank; ?>" >
                    <?php 
                    if ($val->education_rank ==1)
                    {
                        echo 'Giỏi';
                    }
                    else if ($val->education_rank ==2) {
                        echo 'Khá';
                    } else 
                    echo 'Trung bình';
                    ?>
                </span></div>
                <div class="hcol"><p class="bold">Thời gian:</p>&nbsp;<span value="<?php  echo date_format(date_create($val->education_time_start),'m/d/Y'); ?>" id="education-time-start-<?php echo $val->id; ?>"><?php  echo date_format(date_create($val->education_time_start),'d/m/Y'); ?></span> 
                đến 
                <span value="<?php echo date_format(date_create($val->education_time_end),'m/d/Y'); ?>" id="education-time-end-<?php echo $val->id; ?>"><?php echo date_format(date_create($val->education_time_end),'d/m/Y'); ?></span></div>
                <button type="button" name="education-edit" value="<?php echo $val->id; ?>" class="btn btn-default">Sửa</button>
                <button type="button" name="education-delete" value="<?php echo $val->id; ?>" class="btn btn-default">xóa</button>
            </div>
        </div>
        <?php
    }
}
?>
<div class="hcenter hbottom">  
 <a  class="btn btn-info" id="add-education" ><i class="fa fa-plus" aria-hidden="true">&nbsp;Thêm học vấn</i></a>
</div>
<script type="text/javascript">
    var number_education = 
    <?php
    if (!empty($profile->profile_education_json))
    {
        $json_education = json_decode($profile->profile_education_json);
        echo count($json_education);
    } else echo 0;
    ?>;
    var id = 0;
    $(document).ready(function()
    {       
        $('button[name="education-delete"]').click(function(e){
            id = $(this).val();
            var r  = confirm('Bạn có muốn xóa không');
            if (r == true)
            {
                $.ajax({
                    url: '<?php echo base_url("delete-education"); ?>',
                    type: 'POST',
                    dataType: 'html',
                    data: {id: id},
                })
                .done(function(result) {
                    console.log(result);
                    $('#education-'+ id +'').remove();
                    number_education--;
                })
                .fail(function() {
                    console.log("error");
                })  
            }
        });
        //edit
        $('button[name="education-edit"]').click(function(e){
            id = $(this).val();
            var r  = confirm('Bạn có muốn sửa không');
            if (r == true)
            {
                $('#swith-case').attr('value','2');
                var name            = $('#education-schools-'+ id +'').html();
                var speciallized    = $('#education-specialized-'+ id +'').html();
                var rank            = $('#education-rank-'+ id +'').attr('value');

                var time_start      = new Date($('#education-time-start-'+ id +'').attr('value'));
                var time_end        = new Date($('#education-time-end-'+ id +'').attr('value'));

                $('#education_schools').val(name);
                $('#education_specialized').val(speciallized);
                if (rank == 1)
                {
                    $('#rank-1').attr('selected','selected');
                }
                if (rank == 2)
                {
                    $('#rank-2').attr('selected','selected');
                }
                if (rank == 3)
                {
                    $('#rank-3').attr('selected','selected');
                }
                $('#education_time_start').val(format_date(time_start,'yyyy-mm-dd','-'));
                $('#education_time_end').val(format_date(time_end,'yyyy-mm-dd','-'));
                show_form_education();
            }
        });
    });
</script>
<script type="text/javascript">
     $('#add-education').click(function(){
        if (number_education < 3)
        {
            show_form_education();
            $('#swith-case').attr('value','1');
        } else {
            alert('Học vấn không được lớn hơn 3')
        }
       
    });
</script>
