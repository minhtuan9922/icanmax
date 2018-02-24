<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$title?></span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?=base_url("/admin/cate/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span>Add</span></a>
                    <a href="<?=base_url("/admin/cate")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span>List</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=base_url("/admin/cate")?>">Danh mục sản phẩm</a></li>
                <li class="active"><?=$title?></li>
            </ul>

            <ul class="breadcrumb-elements">

            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Form horizontal -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$title?></h5>
                <div class="heading-elements">
                    <ul class="icons-list
                        <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <?=$flagdata?$flagdata:""?>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url($url_post)?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">Name :</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="cate_name" value="<?=set_value('cate_name')?set_value('cate_name'):$cate->cate_name;?>">
                                </div>
                                <?php echo form_error('pro_name','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Order :</label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" name="cate_order" value="<?=set_value('cate_order')?set_value('cate_order'):$cate->cate_order;?>">
                                </div>
                                <?php echo form_error('cate_order','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Menu</label>
                                <div class="col-lg-10">
                                    <select name="cate_id_parent" class="form-control">
                                        <option value="0">Là danh mục gốc</option>
                                        <?php
                                        function showCategories($categories, $parent_id = 0, $char = '',$id_cate)
                                        {
                                            $select ="";
                                            foreach ($categories as $key => $items) {
                                                if ($items->cate_id_parent == $parent_id) {
                                                    if($id_cate != NULL){
                                                        if($id_cate == $items->cate_id){
                                                            $select = 'selected';
                                                        }
                                                    }
                                                    echo '<option '.$select.' value="'.$items->cate_id.'">'.$char.$items->cate_name.'</option>';
                                                    $select = '';
                                                    showCategories($categories, $items->cate_id, $char . '--',$id_cate);
                                                }
                                            }
                                        }
                                        showCategories($category,0,"",$cate->cate_id_parent?$cate->cate_id_parent:NULL);
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cate_top" value="1" <?php if($cate->cate_top == 1) echo "checked";?> <?php echo set_checkbox('cate_top', '1'); ?>> Top
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cate_home" value="1" <?php if($cate->cate_home == 1) echo "checked";?> <?php echo set_checkbox('cate_home', '1'); ?>> Home
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cate_footer" value="1" <?php if($cate->cate_footer == 1) echo "checked";?> <?php echo set_checkbox('cate_footer', '1') ?>> Footer
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cate_status" value="1" <?php if($cate->cate_status == 1) echo "checked";?> <?php echo set_checkbox('cate_status', '1'); ?>> Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">LangID :</label>
                                <div class="col-lg-4">
                                    <select name="LangId" class="form-control">
                                        <option value="1" <?php if($cate->LangId == 1) echo "selected";?> >VN</option>
                                        <option value="2" <?php if($cate->LangId == 2) echo "selected";?> >ENG</option>
                                    </select>
                                </div>
                            </div>
                            <p>Hỗ trợ seo : </p>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Keyword :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="cate_key" value="<?=set_value('cate_key')?set_value('cate_key'):$cate->cate_key?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Description :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="cate_des"><?=set_value('cate_des')?set_value('cate_des'):$cate->cate_des;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Images share:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="cate_imgshare">
                                    <?php if($cate->cate_images != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/cate/thumb/")."/".$cate->cate_images?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Info :</label>
                            <div class="col-lg-10">
                                <?=ckeditor("cate_info",set_value('cate_info')?set_value('cate_info'):$cate->cate_info);?>
                                <?php echo form_error('cate_info','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Full :</label>
                            <div class="col-lg-10">
                                <?=ckeditor("cate_full",set_value('cate_full')?set_value('cate_full'):$cate->cate_full);?>
                            </div>
                            <?php echo form_error('cate_full','<div class="col-offset-md-2 col-lg-4"><span class="label label-block label-danger text-left" style="margin-top: 10px">','</span></div>'); ?>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
<script>

</script>