
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
                <li><a href="<?=site_url("/admin/admin")?>"><?=$this->lang->line('customer'); ?></a></li>
                <li class="active"><?=$this->lang->line('list_recruiter'); ?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$this->lang->line('list_recruiter'); ?></h5>

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
    function update_info(id,id_pro,type){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"/admin/admin/update_info",
            data:{id:id_pro,val:value,types:type},
        });
    }
</script>
