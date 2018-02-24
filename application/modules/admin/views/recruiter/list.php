
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/recruiter")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=site_url("/admin/recruiter")?>"><?=$this->lang->line('recruit'); ?></a></li>
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
                    <th><?=$this->lang->line('title'); ?></th>
                    <th><?=$this->lang->line('deadline'); ?></th>
                    <th>Langid</th>
                    <th><?=$this->lang->line('option'); ?></th>
                    <th class="text-center"><?=$this->lang->line('action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($recruiter) && is_array($recruiter)):?>
                    <?php foreach($recruiter as $item):
                    ?>
                    <tr>
                        <td><?=$item->pro_id ?></td>
                        <td><?=$item->pro_name?></td>
                        <td><?=$item->deadline?></td>
                        <td><?=returnLangType($item->LangId)?></td>
                        <td><input type="checkbox" id="pronew_<?=$item->pro_id?>" value="1" <?php if($item->new == 1): echo"checked"; endif;?> onclick="return update_info('pronew_<?=$item->pro_id?>',<?=$item->pro_id?>,'new')" > new
                            <br>
                            <input type="checkbox" id="prohome_<?=$item->pro_id?>" value="1" <?php if($item->home == 1): echo"checked"; endif;?> onclick="return update_info('prohome_<?=$item->pro_id?>',<?=$item->pro_id?>,'home')" > home
                            <br>
                            <input type="checkbox" id="vip<?=$item->pro_id?>" value="1" <?php if($item->vip == 1): echo"checked"; endif;?> onclick="return update_info('vip<?=$item->pro_id?>',<?=$item->pro_id?>,'vip')" > vip
                            <br>
                            <input type="checkbox" id="prostatus_<?=$item->pro_id?>" value="1" <?php if($item->pro_status == 1): echo"checked"; endif;?> onclick="return update_info('prostatus_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_status')" > active
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del()" href="<?=site_url()?>/admin/recruiter/del/<?=$item->pro_id?>.html"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                        <li><a href="<?=base_url()?>admin/recruiter/edit/<?=$item->pro_id?>"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
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
            url:"<?=base_url('admin/recruiter/update_info'); ?>",
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
            method:"POST",
            url:"/admin/recruiter/update_qty",
            data:{id:id_pro,val:value},
        });
    }
</script>
