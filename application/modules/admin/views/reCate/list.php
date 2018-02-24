<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/reCate")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Add</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url()?>l"><i class="icon-home2 position-left"></i> Home</a></li>
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
                    <th>Order</th>
                    <th>Lang</th>
                    <th>Custorm</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($cate as $key => $item) {
                        // Nếu là chuyên mục con thì hiển thị
                            ?>
                                <tr>
                                    <td><?=$item->cate_id?></td>
                                    <td><?=$item->cate_name?></td>
                                    <td><input type="number" size="5" min="0" id="cate_order_<?=$item->cate_id?>" value="<?=$item->cate_order?>" onchange="return update_qty('cate_order_<?=$item->cate_id?>',<?=$item->cate_id?>)"></td>
                                    <td><?php returnLangType($item->LangId) ?></td>
                                    <td>
                                        <input type="checkbox" id="cate_top_<?=$item->cate_id?>" value="1" <?php echo $item->cate_top?'checked':''?> onclick="return update_info('cate_top_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_top')"> : Top<br>
                                        <input type="checkbox" id="cate_home_<?=$item->cate_id?>" value="1" <?php echo $item->cate_home?'checked':''?> onclick="return update_info('cate_home_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_home')"> : Home<br>
                                        <input type="checkbox" id="cate_footer_<?=$item->cate_id?>" value="1" <?php echo $item->cate_footer?'checked':''?> onclick="return update_info('cate_footer_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_footer')"> : Footer<br>
                                        <input type="checkbox" id="cate_status_<?=$item->cate_id?>" value="1" <?php echo $item->cate_status?'checked':''?> onclick="return update_info('cate_status_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_status')"> : Active<br>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="return check_del()" href="<?php echo base_url("admin/cate/del")."/".$item->cate_id ?>"><i class="icon-bin"></i> del</a></li>
                                                    <li><a href="<?php echo base_url("admin/cate/edit")."/".$item->cate_id?>"><i class="icon-pencil7"></i> edit</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
        <!-- /HTML sourced data -->
    </div>
    <!-- /content area -->

</div>

<!-- /main content -->
<script type="text/javascript">
    function update_info(id,id_pro,type){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"/admin/cate/update_info",
            data:{id:id_pro,val:value,types:type},
        });
    }
    function update_qty(id,id_pro){
        value = $("#"+id).val();

        $.ajax({
            method:"POST",
            url:"/admin/cate/update_qty",
            data:{id:id_pro,val:value},
        });
    }
</script>
