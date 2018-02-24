<div class="row">
    <div class="col-xs-12 ">
        <h3><?php echo $this->lang->line('fun_user_find_job');?></h3>
        <div class="btn-group-vertical" align="center">
            <a href="<?php echo base_url()?>/cate-p/8/online-recruitment/"><button type="button" class="btn btn-primary"><span><?php echo $this->lang->line('homejob')?></span></button></a>
            <a href="<?php echo base_url()?>"><button type="button" class="btn btn-primary"><span><?php echo $this->lang->line('creatcv')?></span></button></a>
            <a href="<?php echo base_url()?>"><button type="button" class="btn btn-primary"><span><?php echo $this->lang->line('manager_findjob')?></span></button></a>
            <a href="<?php echo base_url()?>"><button type="button" class="btn btn-primary"><span><?php echo $this->lang->line('managerjob')?></span></button></a>
            <a href="<?php echo base_url()?>"><button type="button" class="btn btn-primary"><span><?php echo $this->lang->line('searchJob')?></span></button></a>
        </div>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="" width="100%" height="100%">
            <param name="wmode" value="opaque">
            <param name="movie" value="<?php echo base_url("assets/home/image/flash")?>/slideshow/banner24h.swf">
            <param name="quality" value="high">
            <embed src="<?php echo base_url("assets/home/image/flash")?>/slideshow/banner24h.swf" quality="high" pluginspage="" type="application/x-shockwave-flash" width="100%" height="100%">
        </object>
    </div>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $this->lang->line('list_sectors');?></div>
                    <div class="panel-body" style="max-height: 500px; overflow: scroll;padding: 0px">
                        <div style="float: left;">
                            <ul class="nav nav-bar">
                                <?php if($specialized):?>
                                    <?php foreach ($specialized as $item):
                                        $title = removeTitleFileName(replace($item->name),'');
                                        ?>
                                        <li><a href="<?php echo base_url("recruitment/").'/'.$item->id.'/'.$title?>"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $item->name?> <b class="text-danger">(<?php echo $item->number?>)</b></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $this->lang->line('jobvip')?></div>
                    <div class="panel-body" style="max-height: 300px; overflow: scroll;">
                        <div class="row" style="border-bottom: 1px solid #ccc;">
                            <div class="col-sm-5"><label>Vị trí tuyển dụng</label></div>
                            <div class="col-sm-3"><label>Khu vực</label></div>
                            <div class="col-sm-2"><label>Mức Lương</label></div>
                            <div class="col-sm-2"><label>Hạn nộp hồ sơ</label></div>
                        </div>
                        <?php if($post_re_vip):?>
                            <?php foreach($post_re_vip as $item):?>
                                <?php $content = json_decode($item->content); ?>
                                <div class="row" style="border-bottom: 1px dashed #ccc;">
                                    <div class="col-sm-5">
                                        <label>
                                            <i class="fa fa-star lis-icon-star" aria-hidden="true"></i>
                                            <a href="<?php echo base_url('view-job').'/'.$item->id.'/'.removeTitleFileName(replace($content->vitri),'')?>" ><?php echo $content->vitri;?></a>
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <p><?php echo $item->location_id;?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?php echo $content->mucluong;?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?php echo date("d/m/Y",strtotime($item->date_deadline)); ?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $this->lang->line('jobnew')?></div>
                    <div class="panel-body" style="max-height: 300px; overflow: scroll;">
                        <div class="row" style="border-bottom: 1px solid #ccc;">
                            <div class="col-sm-5"><label>Vị trí tuyển dụng</label></div>
                            <div class="col-sm-3"><label>Khu vực</label></div>
                            <div class="col-sm-2"><label>Mức Lương</label></div>
                            <div class="col-sm-2"><label>Hạn nộp hồ sơ</label></div>
                        </div>
                        <?php if($post_re_new):?>
                            <?php foreach($post_re_new as $item):?>
                                <?php $content = json_decode($item->content); ?>
                                <div class="row" style="border-bottom: 1px dashed #ccc;">
                                    <div class="col-sm-5">
                                        <label>
                                            <i class="fa fa-star lis-icon-star" aria-hidden="true"></i>
                                            <a href="<?php echo base_url('view-job').'/'.$item->id.'/'.removeTitleFileName(replace($content->vitri),'')?>" ><?php echo $content->vitri;?></a>
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <p><?php echo $item->location_id;?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?php echo $content->mucluong;?></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><?php echo date("d/m/Y",strtotime($item->date_deadline)); ?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>