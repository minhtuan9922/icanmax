<div class="row" style="padding-left: 10px">
    <?php if(isset($land) && count($land) >0){?>
        <?php $data['land'] = $land;?>
        <?php $this->load->view('building/item',$data)?>
    <?php }?>
    <div class="col-md-12">
        <div class="row">
            <div class="list-pagination">
                <?=$this->pagination->create_links();?>
            </div>
        </div>
    </div>
</div>
