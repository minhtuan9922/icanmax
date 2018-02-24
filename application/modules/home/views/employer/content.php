<?php echo validation_errors(); ?>
<div class="panel panel-primary" >
    <div class="panel-heading hcol">
        <div class="wight50">
            <i class="fa fa-book" aria-hidden="true"></i>
            <?php echo 'HỒ SƠ ỨNG VIÊN ('.$number_search.')'?>
        </div>
    </div>
    <hr>
    <?php 
        if (!empty($profile))
        {
    ?>
            <div class="panel-body" style="padding: 0px">
                <div class="form-group hform" style="padding: 0px 20px;" id="chose-profile" >
                    <table id="hprofile" class="table table-hover" >
                        <thead>
                            <tr style="color: #387dd2;font-size: 13px;">
                                <th style="text-align: left;">ỨNG VIÊN</th>
                                <th>TRÌNH ĐỘ KINH NGHIỆM</th>
                                <th>MỨC LƯƠNG</th>
                                <th>NƠI LÀM VIỆC</th>
                                <th>CẬP NHẬT</th>
                            </tr>
                        </thead>
                        <tbody style="cursor: pointer;">
                            <?php 
                            foreach ($profile as $key => $value_profile) 
                            { 
                            ?>
                                <tr name="profile" data-id="<?php echo $value_profile["profile_id"]; ?>" value="<?php echo $this->my_string->remove_vn_unicode(str_replace(" ","-",$value_profile["fullname"])); ?>">
                                    <td style="text-align: left;" ><div><b><?php echo $value_profile['profile_title']; ?></b></div><span><?php echo $value_profile['fullname']; ?></span></td>
                                    <td> 
                                        <div>
                                            <?php 
                                            foreach ($education as $key => $value) {
                                                if ($value['id'] == $value_profile['profile_leve_learning']) {
                                                    echo $value['name'];
                                                    break;
                                                }
                                            }
                                            ?> 
                                        </div>
                                        <div>
                                            <?php 
                                            foreach ($exp as $key => $value) {
                                                if ($value['id'] == $value_profile['profile_exe']) {
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
                                            if ($value->id == $value_profile['profile_money']) {
                                                echo $value->name;
                                                break;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td> 
                                        <?php 
                                        $arr_location = explode(',',$value_profile['profile_location']);
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
                                    <td><?php echo date_format(date_create($value_profile['profile_date_update']),'d-m-Y');?></td>
                                </tr>  
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="hcenter" >
                        <ul class="pagination" id="page">
                        <!-- script -->
                        </ul>
                        <ul class="pagination" id="pagination">
                            
                        </ul>
                    </div> 
                </div>
            </div>
            <script type="text/javascript">
                    //panigation
                    var sum_profile             = $('#hprofile tr[name="profile"]').length;
                    var number_profile_page     = 1;
                    var hpage                   = Math.ceil(sum_profile/number_profile_page);           
                    function panigation(current_page)
                    {
                        var start   = (current_page - 1)*number_profile_page;
                        var end     = number_profile_page*current_page - 1 ;
                        var list    = $('#hprofile tr[name="profile"]');
                        var n       = list.length;
                        //active
                        /*$('#page li').removeClass('active');
                        $('#page li')[current_page].className+='active';*/ 
                        for (i = 0; i < n; i++)
                        {
                            if (i >= start && i <= end)
                            {
                                list[i].style.display = '';
                            }
                            else 
                            {
                                list[i].style.display = 'none';
                            }
                        }  
                    }
                    /*function agentPanigation()
                    {
                        var sum_profile             = $('#hprofile tr[name="profile"]').length;
                        var number_profile_page     = 1;
                        var page                    = Math.ceil(sum_profile/number_profile_page);
                        // remove page li
                        $('#page li').remove();
                        //nút pre
                        $("#page").append('<li name="prev" prev_next="yes"><a href="#" id="laquo">&laquo;</a></li>')
                        for(i = 1; i <= page; i++)
                        {
                           $('#page').append('<li num="sotrang" idx="'+i+'" ><a href="#">'+ i+'</a></li>');
                        }
                        //nút next
                        $("#page").append('<li name="next" prev_next="yes" ><a href="#" id="raquo">&raquo;</a></li>');
                        //click
                        $('#page li[num="sotrang"]').click(function(e){
                            e.preventDefault();
                            panigation($(this).attr('idx'));
                        });
                        //xử kiển click the prev hoac next
                        $('#page li[prev_next="yes"]').click(function(e){
                            e.preventDefault();
                            var current_page = $('#page li[class="active"]').attr('idx');
                            if ($(this).attr('name') == 'prev')
                            {
                                current_page = current_page == 1 ? 1 : (parseInt(current_page) - 1);
                            }
                            else
                            {
                                current_page = current_page == page ? page : (parseInt(current_page) + 1);
                            }                 
                            panigation(current_page);
                        });
                        panigation(1);
                    }*/
                    panigation(1);
                    $(function () {
                        window.pagObj = $('#pagination').twbsPagination({
                            totalPages: hpage,
                            visiblePages: 10,
                            onPageClick: function (event, page) {
                                panigation(page);
                            }
                        }).on('page', function (event, page) {
                            panigation(page);
                        });
                    });  
            </script>
            <script type="text/javascript">
                var element = 'tr[name="profile"]';
                $(element).click(function(e){
                    var id      = $(this).attr('data-id');
                    var name    = $(this).attr('value');
                    window.location.href = '<?php echo base_url($profile_details); ?>/'+ id +'/'+ name +'';
                })
            </script>
    <?php
        } else {
            echo ' <div class="panel-body" style="padding: 0px">
                <div class="form-group hform" style="padding: 0px 20px;" id="chose-profile" >Không có hồ sơ nào được tìm thấy</div></div>';
        }
    ?>
</div>