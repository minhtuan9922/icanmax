
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('customer'); ?></span> - <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=site_url($link)?>"><?=$this->lang->line('customer'); ?></a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$title?></h5>

                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
            </div>

            <table class="table datatable-html">
                <thead>
                <tr>
                    <th><?=$this->lang->line('images'); ?></th>
                    <th><?=$this->lang->line('fullname'); ?></th>
                    <th><?=$this->lang->line('phone'); ?></th>
                    <th>Email</th>
                    <th><?=$this->lang->line('address'); ?></th>
                    <th><?=$this->lang->line('birthday'); ?></th>
                    <th><?=$this->lang->line('active'); ?></th>
                    <th class="text-center"><?=$this->lang->line('action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($admin) && is_array($admin)):?>
                    <?php foreach($admin as $item):?>
                    <tr>
                        <td><img src="<?=base_url(@$item->img); ?>" width="100px" ></td>
                        <td><?=@$item->fullname?></td>
                        <td><?=@$item->phone?></td>
                        <td><?=@$item->email?></td>
                        <td><?=@$item->address?></td>
                        <td><?=@$item->birthday?></td>
                        <td>
                            <input type="checkbox" id="status<?=@$item->id?>" value="1" <?php if(@$item->status == 1): echo"checked"; endif;?> onclick="return update_info('<?=@$item->id?>')" >
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del(<?=@$item->id; ?>)" ><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                        <li><a onclick="return info(<?=$item->id?>);" data-toggle="modal" data-target="#modal_theme_info"><i class="fa fa-info" aria-hidden="true"></i> <?=$this->lang->line('info'); ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; endif;?>
                </tbody>
            </table>
        </div>
        <!-- /HTML sourced data -->
    </div>
    <!-- /content area -->
</div>
<script type="text/javascript">
	function update_info(id){
        var value = 0;
        if($("#status"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('/admin/cus/update_info'); ?>",
            data:{id:id,status:value},
			success: function(result){
				if(result == 1) {
					alert('Success!');
				}
				else {
					alert('Error!');
				}
			}
        });
    }
    function info(id){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/cus/info'); ?>",
            data:{id:id},
            success: function(result){
				var checked = 'checked';
				var gender = '<?=$this->lang->line('other'); ?>';
				if(result.gender == 1)
				{
					gender = '<?=$this->lang->line('male'); ?>';
				}
				if(result.gender == 2)
				{
					gender = '<?=$this->lang->line('female'); ?>';
				}
				if(result.status == 0)
				{
					checked = '';
				}
                var html = '<table class="table table-bordered">';
					html +=	'<tbody>';
					html +=		'<tr>';
					html +=			'<td>ID</td>';
					html +=			'<td>'+result.id+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('name'); ?></td>';
					html +=			'<td>'+result.name+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('fullname'); ?></td>';
					html +=			'<td>'+result.fullname+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('gender'); ?></td>';
					html +=			'<td>'+gender+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('phone'); ?></td>';
					html +=			'<td>'+result.phone+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('address'); ?></td>';
					html +=			'<td>'+result.address+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td>Email</td>';
					html +=			'<td>'+result.email+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td>IP</td>';
					html +=			'<td>'+result.ip+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('birthday'); ?></td>';
					html +=			'<td>'+result.birthday+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('type'); ?></td>';
					html +=			'<td>'+result.type+'</td>';
					html +=		'</tr>';
					html +=		'<tr>';
					html +=			'<td><?=$this->lang->line('creatdate'); ?></td>';
					html +=			'<td>'+result.creatdate+'</td>';
					html +=		'</tr>';
					html +=	'</tbody>';
					html +='</table>';

                $('.modal-body').html(html);
                //$('.lis-data').attr('data-id',id);
                //$('.lis-data').attr('data-lang',lang);
            }
        });
    }
    function check_del(id){
        if (confirm("are you ready?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/cus/del_candidate'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("del item success");
                        setTimeout(function(){
                            location.reload();
                        },1000);
                    }
					else {
						alert("Error");
					}
                }
            });
        }
    }
    function saveTitle(){
        var id      = $('.lis-data').attr('data-id');
        var lang    = $('.lis-data').attr('data-lang');
        var title   = $('#Title').val();

        $('.tag_i').html('<i class="icon-spinner2 spinner"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/reCate/career_update'); ?>",
            data:{id:id,lang:lang,title:title},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }

</script>

<div id="modal_theme_info" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title"><?=$this->lang->line('info'); ?></h6>
            </div>
            <div class="modal-body table-responsive">
            </div>
            <div class="modal-footer">
                <!--<a class="tag_i"></a><button type="button" data-id="" data-lang="" class="btn btn-info lis-data" onclick="saveTitle();"> <?=$this->lang->line('save'); ?></button>-->
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?=$this->lang->line('close'); ?></button>
            </div>
        </div>
    </div>
</div>
<div id="modal_add_title" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Edit</h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Title" placeholder="Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LangId" class="col-sm-2 control-label">LangId</label>
                        <div class="col-sm-10">
                            <select name="" class="form-control" id="LangId" placeholder="Title">
                                <option value="1">VN</option>
                                <option value="2">ENG</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="tag_i"></a><button type="button" class="btn btn-info lis-data" onclick="return addDataTitle();"> Save</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function addDataTitle(){
        var lang    = $('#LangId').val();
        var title   = $('#Title').val();
        $('.tag_i').html('<i class="icon-spinner2 spinner"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/reCate/career_add'); ?>",
            data:{lang:lang,title:title},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }
</script>
