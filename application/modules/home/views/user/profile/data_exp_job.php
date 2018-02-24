
 <?php  
 if (!empty($profile->profile_exp_job_json))
 {
    $json_job = json_decode($profile->profile_exp_job_json);
    foreach ($json_job as $k => $val)
    {
        ?>
        <div class="panel panel-default hmargin-panel" id="exp-<?php echo $val->id; ?>" >
            <div class="panel-body">
                <div class="hcol"><p class="bold">Công ty:</p>&nbsp;<span id="company-name-<?php echo $val->id; ?>" ><?php echo $val->company_name; ?></span></div>
                <div class="hcol"><p class="bold">Chức danh:</p>&nbsp;<span id="company-position-<?php echo $val->id; ?>" ><?php echo $val->company_position; ?></span></div>
                <div class="hcol"><p class="bold">Múc lương:</p>&nbsp;<span id="company-wage-<?php echo $val->id; ?>" value="<?php echo $val->company_wage; ?>" >
                    <?php 
                    foreach ($wage as $key => $value)
                    {
                        if ($value->id == $val->company_wage)
                        {
                            echo $value->name;
                            break;
                        }
                    }
                    ?>
                </span></div>
                <div class="hcol"><p class="bold">Thời gian:</p>&nbsp;<span value="<?php echo date_format(date_create($val->company_time_start),'m/d/Y'); ?>" id="company-time-start-<?php echo $val->id; ?>"><?php  echo date_format(date_create($val->company_time_start),'d/m/Y'); ?></span> 
                đến 
                <span value="<?php echo date_format(date_create($val->company_time_end),'m/d/Y'); ?>" id="company-time-end-<?php echo $val->id; ?>"><?php echo date_format(date_create($val->company_time_end),'d/m/Y'); ?></span></div>
                <div class="hcol"><p class="bold">Mô tả công việc:</p>&nbsp;<span id="company-description-<?php echo $val->id; ?>" ><?php echo $val->company_description; ?></span></div>
               <button type="button" name="company-edit" value="<?php echo $val->id; ?>" class="btn btn-default">Sửa</button>
               <button type="button" name="company-delete" value="<?php echo $val->id; ?>" class="btn btn-default">xóa</button>
            </div>
        </div>
        <?php
    }
}
?>
<div class="hcenter hbottom">  
 <a  class="btn btn-info" id="add_exp_job" ><i class="fa fa-plus" aria-hidden="true">&nbsp;Thêm kinh nghiệm</i></a>
</div>
<script type="text/javascript">
    var number_exp = 
    <?php
    if (!empty($profile->profile_exp_job_json))
    {
        $json_exp = json_decode($profile->profile_exp_job_json);
        echo count($json_exp);
    } else echo 0;
    ?>;
    var id = 0;
    $(document).ready(function()
    {       
        $('button[name="company-delete"]').click(function(e){
            id = $(this).val();
            var r  = confirm('Bạn có muốn xóa không');
            if (r == true)
            {
                $.ajax({
                    url: '<?php echo base_url("delete-exp"); ?>',
                    type: 'POST',
                    dataType: 'html',
                    data: {id: id},
                })
                .done(function(result) {
                    console.log(result);
                    $('#exp-'+ id +'').remove();
                    number_exp--;
                })
                .fail(function() {
                    console.log("error");
                })  
            }
        });
        //edit
        $('button[name="company-edit"]').click(function(e){
            id = $(this).val();
            var r  = confirm('Bạn có muốn sửa không');
            if (r == true)
            {
                $('#swith-case-exp').attr('value','2');
                var company_name        = $('#company-name-'+ id +'').html();
                var company_position    = $('#company-position-'+ id +'').html();
                var company_description = $('#company-description-'+ id +'').html();
                var company_wage        = $('#company-wage-'+ id +'').attr('value');
                var company_time_start  = new Date($('#company-time-start-'+ id +'').attr('value'));
                var conpany_time_end    = new Date($('#company-time-end-'+ id +'').attr('value'));
                $('#company_name').val(company_name);
                $('#company_position').val(company_position);
                $('#company_description').val(company_description);
                $('#company_time_start').val(format_date(company_time_start,'yyyy-mm-dd','-'));
                $('#company_time_end').val(format_date(conpany_time_end,'yyyy-mm-dd','-'));
                $('#wage-'+ company_wage +'').attr('selected','selected');
                show_form_exp();
            }
        });
    });
</script>
<script type="text/javascript">
     $('#add_exp_job').click(function(){
        if (number_exp < 3)
        {
            show_form_exp();
            $('#swith-case-exp').attr('value','1');
        } else {
            alert('kinh nghiệm không được lớn hơn 3')
        }      
    });
</script>
