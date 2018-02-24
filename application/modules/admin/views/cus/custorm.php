
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">customer</span> - <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/cus")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Add</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=site_url("/admin/admin")?>">admin</a></li>
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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Fullname</th>
                    <th>Phone Number</th>
                    <th>Type</th>
                    <th>active</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($admin) && is_array($admin)):?>
                    <?php foreach($admin as $item):?>
                    <tr>
                        <td><?=$item->user_id?></td>
                        <td><?=$item->user_name?></td>
                        <td><?=$item->user_fullname?></td>
                        <td><?=$item->user_phone?></td>
                        <td><?php echo return_cus_type($item->type); ?></td>
                        <td>
                            <input type="checkbox" id="admin_status<?=$item->user_id?>" value="1" <?php if($item->user_status == 1): echo"checked"; endif;?> onclick="return update_info('admin_status<?=$item->user_id?>',<?=$item->user_id?>,'user_status')" >
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del()" href="<?=site_url()?>/admin/cus/del/<?=$item->user_id?>.html"><i class="icon-bin"></i> del</a></li>
                                        <li><a href="<?=base_url()?>admin/cus/edit/<?=$item->user_id?>"><i class="icon-pencil7"></i> edit</a></li>
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
    function update_info(id,id_pro,type){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"/admin/cus/update_info",
            data:{id:id_pro,val:value,types:type},
        });
    }
</script>
