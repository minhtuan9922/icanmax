
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('banner'); ?></span> - <?=$this->lang->line('list_banner'); ?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/banner")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="<?php echo base_url("admin/banner")?>" class="btn btn-link btn-float has-text"><i class="fa fa-list" aria-hidden="true"></i><span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li class="active"><?=$this->lang->line('banner'); ?></li>
                <li class="active"><?=$this->lang->line('list_banner'); ?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$this->lang->line('list_banner'); ?></h5>

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
                    <th><?=$this->lang->line('title'); ?></th>
                    <th><?=$this->lang->line('images'); ?></th>
                    <th><?=$this->lang->line('link'); ?></th>
                    <th><?=$this->lang->line('order'); ?></th>
                    <th><?=$this->lang->line('active'); ?></th>
                    <th class="text-center"><?=$this->lang->line('action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($banner) && is_array($banner)):?>
                    <?php foreach($banner as $item):?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td><?=$item->title?></td>
                        <td><img src="<?=base_url("uploads/banner/thumb/")?>/<?=$item->image?>" width="100" /></td>
                        <th><?=$item->link?></th>
                        <th>
                            <input type="number" id="order<?=$item->id?>" value="<?=$item->order?>" style="width: 50px" onchange="return update_qty('order<?=$item->id?>',<?=$item->id?>)" >
                        </th>
                        <td>
                            <input type="checkbox" id="status<?=$item->id?>" value="1" <?php if($item->status == 1): echo"checked"; endif;?> onclick="return update_info('status<?=$item->id?>',<?=$item->id?>,'status')" >
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del()" href="<?=site_url()?>/admin/banner/del/<?=$item->id?>.html"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                        <li><a href="<?=base_url()?>admin/banner/edit/<?=$item->id?>"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
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
            method:"post",
            url:"<?=base_url('admin/banner/update_info'); ?>",
            data:{id:id_pro,val:value,types:type},
			success: function(result)
			{
				if(result == 1)
					alert('Success!');
				else
					alert('Error!');
			}
        });
    }
    function update_qty(id,id_pro){
        value = $("#"+id).val();

        $.ajax({
            method:"post",
            url:"<?=base_url('admin/banner/update_qty'); ?>",
            data:{id:id_pro,val:value},
			success: function(result)
			{
				if(result == 1)
					alert('Success!');
				else
					alert('Error!');
			}
        });
    }
</script>
