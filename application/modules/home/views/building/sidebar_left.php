
<div class="col-md-3 col-md-pull-9">
    <form action="<?=base_url('cate-building/search')?>" method="get" id="form_search_land" onchange="submitFormSearchLand();">
        <!--<div class="row">-->
            <h3 class="title-land-menu"><?=$this->lang->line('menu_buiding')?></h3>
            <nav class="nav nav-bar lis-menu-slidebar">
                <ul class="nav">
                    <?php if(isset($cate_building) && count($cate_building)>0):?>
                    <?php foreach($cate_building as $item):?>
                    <li class="lis-menu-slidebar-parent slidebar-parent">
                        <a href="<?=base_url('cate-building')."/".$item->cate_id."/".$item->cate_rewrite?>">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <?=$item->cate_name?>
							<!--<span>(12398)</span>-->
                            <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </a>
                        <?php if(count($item->child) > 0):?>
                            <ul class="nav nav-child-slidebar">
                                <?php foreach($item->child as $ite): ?>
                                <li>
                                    <a href="<?=base_url('cate-building')."/".$ite->cate_id."/".$ite->cate_rewrite?>">
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        <?=$ite->cate_name?>
                                    </li></a>
                                <?php endforeach;?>

                            </ul>
                        <?php endif;?>
                    </li>
                    <?php endforeach;?>
                <?php endif;?>
                </ul>
            </nav>
        <!--</div>-->
        <!--<div class="row">-->
            <h3 class="title-land-menu"><?=$this->lang->line('location_menu')?></h3>
            <nav class="nav nav-bar lis-menu-slidebar">
                <ul class="nav">
                    <?php if(count(@$location) > 0):?>
                        <?php foreach($location as $item):?>
                            <li class="lis-menu-slidebar-parent"><a href="<?=base_url('cate-building')."/search/location/".$item->id?>"><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp<?=$item->name?><span></span></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </nav>
        <!--</div>-->

        <!--<div class="row">-->
            <h3 class="title-land-menu"><?=$this->lang->line('area_menu')?></h3>
            <nav class="nav nav-bar lis-menu-slidebar">
                <ul class="nav">
                    <?php if(isset($area) && count($area)>0):?>
                        <?php foreach($area as $item):?>
                            <li class="lis-menu-slidebar-parent"><a href="<?=base_url('cate-building')."/search/dientich/".$item->id?>"> <i class="fa fa-money" aria-hidden="true"></i> <?=$item->name?> <span></span></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </nav>
        <!--</div>-->
        <!--<div class="row">-->
            <h3 class="title-land-menu"><?=$this->lang->line('price_menu')?></h3>
            <nav class="nav nav-bar lis-menu-slidebar">
                <ul class="nav">
                    <?php if(isset($price) && count($price)>0):?>
                        <?php foreach($price as $item):?>
                            <li class="lis-menu-slidebar-parent"><a href="<?=base_url('cate-building')."/search/gia/".$item->id?>"><i class="fa fa-money" aria-hidden="true"></i> <?=$item->name?>  <span></span></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </nav>
        <!--</div>-->
    </form>
</div>
<script>
    function submitFormSearchLand(){
        var searchIDs = $(".cate_id:radio:checked").map(function(){
            return $(this).val();
        });
        //var mang = JSON.stringify( searchIDs.get() );
        //console.log(mang);
		var urltmp = '<?php echo base_url("home/building/search"); ?>'+ '/'+ searchIDs.get();
		
		var url = urltmp.replace(/,/gi, "/"); //Loại bỏ dấu "," thay bằng dấu "/"
		$.get(
            url, // URL 
            {},  // Data
            function(list){ // Success
                $('#list').html(list);
            }, 
            'text' // dataTyppe
    	);
    }
    $('.slidebar-parent>a').click(function(){
        $(this).next().slideToggle();
        $(this).children('i:last-child').addClass('fa-angle-down');
        $(this).children('i:last-child').toggleClass('fa-angle-up').removeClass('fa-angle-down');
        $(".slidebar-parent>a").not(this).next().slideUp(200);
        $(".slidebar-parent>a").not(this).children().children('i:last-child').addClass('fa-angle-down');
        return false;
    });
</script>