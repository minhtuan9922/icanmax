<div class="panel panel-primary">
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'Ngôn ngữ'?>
        </div>
        <div class="wight50 right">
           <a href="#demo4" style="color:white;" id="collapse_language" data-toggle="collapse"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
        <script type="text/javascript">
            $('#collapse_language').click(function(){
                 $(this).find('i').toggleClass('fa fa-chevron-down fa fa-chevron-up');
            });
        </script>
    </div>
    <hr>
    <div id="demo4" class="collapse in">
        <div class="panel-body" style="padding: 0px">
            <form class="form-horizontal" method="post">
                <div class="form-group hform">
                    <div class="col-sm-12" style=" padding: 0px 2% 0px 5%;">
                        <table class="table" >
                            <thead style="font-weight: bold;">
                                 <tr>
                                    <th>Ngôn ngữ</th>
                                    <th>Chứng chỉ</th>
                                    <th>Điểm</th>
                                 </tr>
                             </thead>
                             <tbody>
                            <?php
                            if(!empty($language))
                            {

                                $json_language = json_decode($profile->profile_language_json);

                                foreach ($language as $k => $val)
                                {
                            ?>
                                <tr>

                                    <td><p id="language-<?php echo $k; ?>" value="<?php echo $val['id']; ?>" style="margin-top: 10px;"><?php echo $val['name']; ?></p></td>
                                    <td>
                                        <select id="certificate-<?php echo $k; ?>" class="form-control" id=""  required="required">
                                        <?php
                                            $certificate = explode(',',$val['certificate']);
                                            foreach ($certificate as $key => $value )
                                            {
                                                ?>
                                                <option 
                                                <?php 
                                                if (!empty($json_language))
                                                {
                                                    foreach ($json_language as $k1 => $val1)
                                                    { 
                                                        if ($value == $val1->certificate_language )
                                                        {
                                                            echo 'selected="selected"';
                                                            break;
                                                        }
                                                    }
                                                } 
                                                ?>
                                                value="<?php echo $value; ?>"  ><?php echo $value; ?></option>

                                                <?php
                                            }
                                        ?>                                          
                                        </select>
                                    </td>

                                    <td><input type="number" min="0" max="1000" id="result-<?php echo $k; ?>" value="<?php
                                        if (!empty($json_language))
                                        { 
                                            foreach ($json_language as $key => $value)
                                            { 
                                                if ($val['id'] == $value->name_language )
                                                {
                                                    echo $value->result_language;
                                                    break;
                                                }
                                            }
                                        } 
                                    ?>" 
                                    class="form-control" placeholder=""></td>

                                </tr>
                            <?php
                                }
                            }
                            ?>
                             </tbody>
                        </table>
                    </div>
                </div>
                <div class="hdiv-padding" style="text-align: right;">    

                     <button type="submit" value="<?php echo count($language); ?>"  id="btn-language" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"  ></i>&nbsp;Lưu</button>

                </div>  
            </form>
        </div>
    </div>      
</div>
<script type="text/javascript">

    var click_language = 1;
    $('#btn-language').click(function(e){
        e.preventDefault();
        var number_language     = $(this).attr('value');
        var json_language       = [];
        for (i=0; i< number_language; i++) 
        {
           name_language            = $('#language-'+ i +'').attr('value');
           certificate_language     = $('#certificate-'+ i +' :selected').val();
           result_language          = $('#result-'+ i +'').val();
           if (result_language != '' && result_language != 0 && result_language != null )
           {
                json_language.push({'name_language': name_language, 'certificate_language': certificate_language, 'result_language': result_language});          
           }
        }
        if (json_language != '')
        {
            var r =confirm("Bạn có muốn lưu không");
            if (r == true)
            {
                if (click_language >3)
                {
                    alert('Vui lòng không nhấn nút lưu liên tục');
                    return;
                }
                $.ajax({
                    url: '<?php echo base_url("update-language"); ?>',
                    type: 'POST',
                    dataType: 'html',
                    data: { json_language:JSON.stringify(json_language), click_language:click_language },
                })
                .done(function(result) {
                    var obj = jQuery.parseJSON(result);
                    if (obj.successful == true)
                    {
                        alert('Lưu thành công');
                        click_language++;
                        return;
                    }
                    if (obj.max_click == true)
                    {
                        alert('Vui lòng không click lưu liên tục');
                        return;
                    }
                    if (obj.obj.max_click == true)
                    {
                        alert('Dữ liệu không hợp lệ');
                        return;
                    }
                    
                })
                .fail(function() {
                    console.log("error");
                }) 
            }
        }
    });

</script>