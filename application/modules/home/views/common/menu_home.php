<div class="lis-menu visible-md visible-lg">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2 class="lis-title-pro"><i class="fa fa-list" aria-hidden="true"></i> <?php echo $this->lang->line('menu_product');?></h2>
			</div>
			<div class="col-md-6 lis-menu-right">
				<div class="row">
					<div class="col-md-10">
						<form class="form-inline lis-form-search" onchange="returnText();" id="form_search" method="get" action="<?=base_url('search/')?>/">
							<div class="lis-input-search">    
								<input type="text" class="lis-input" id="exampleInputEmail3" name="q" value="<?=@$_GET['q']?>" placeholder="Search" required>
								<select name="menu" class="lis-select">
									<option value="0">Tất cả danh mục</option>
									<?php if($cate_pro):?>
										<?php foreach($cate_pro as $item):?>
										<option value="<?php echo $item->cate_id;?>" <?php if(isset($_GET['menu']) && $_GET['menu'] == $item->cate_id){echo 'selected';}?>><li><?php echo $item->cate_name?></li></option>
										<?php endforeach;?>
									<?php endif;?>
								</select>
							  <button type="submit" class="btn lis-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>    
						</form>
					</div>
					<div class="col-md-2 logo-cart">
						<a href="<?=base_url('gio-hang')?>" class=""> <i class="fa fa-shopping-basket" aria-hidden="true"></i><sup class="sup"><?=$this->session->userdata('total_item')?$this->session->userdata('total_item'):0?></sup></a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h2 class="lis-title-pro"><i class="fa fa-building-o" aria-hidden="true"></i> <?php echo $this->lang->line('menu_buiding');?></h2>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default menu visible-sm visible-xs" role="navigation">
	<div class="container">
		<button type="button" class="navbar-toggle search" onclick="openNav()">
			<span class="glyphicon glyphicon-search"></span>
		</button>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="logo">
				<a href="<?=base_url(); ?>">
					<img src="<?=base_url()?>assets/home/img/logoicanmax.png" alt="ICANMAX.COM" width="120px" />
				</a>
			</div>
			
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list" aria-hidden="true"></i> <?php echo $this->lang->line('menu_product');?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php /*pre($cate_pro);*/ if($cate_pro): $i=0;?>
							<?php foreach($cate_pro as $item): if($i == 8){break;}?>
								<li class="dropdown-submenu">
									<a class="test" href="<?php echo base_url('cate-pro').'/'.$item->cate_id.'/'.replace($item->cate_rewrite)?>">
										<i class="fa fa-star fa-spin" aria-hidden="true"> </i>
										<?php echo $item->cate_name.' '?>
										<?php if(count((array)@$item->child) >0):?>
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										<?php endif;?>
									</a>
									<?php if(count((array)@$item->child) >0):?>
										<ul class="dropdown-menu">
											<?php foreach($item->child as $ite):?>
												<li><a href="<?php echo base_url('cate-pro').'/'.$ite->cate_id.'/'.replace($ite->cate_rewrite)?>"><?php echo $ite->cate_name?></a></li>
											<?php endforeach;?>
										</ul>
									<?php endif;?>
								</li>
							<?php $i++; endforeach;?>
						<?php endif;?>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building-o" aria-hidden="true"></i> <?php echo $this->lang->line('menu_buiding');?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php /*pre($cate_pro);*/ if($cate_building): $i=0;?>
							<?php foreach($cate_building as $item): if($i == 8){break;}?>
								<li class="dropdown-submenu">
									<a class="test" href="<?php echo base_url('cate-building').'/'.$item->cate_id.'/'.replace($item->cate_rewrite)?>">
										<?=htmlspecialchars_decode($item->cate_icon)?>
										<?php echo  ' '.$item->cate_name.' '?>
										<?php if(count((array)$item->child) >0):?>
										<i class="fa fa-caret-right" aria-hidden="true"></i>
										<?php endif;?>
									</a>
									<?php if(count((array)$item->child) >0):?>
										<ul class="dropdown-menu">
											<?php foreach($item->child as $ite):?>
												<li><a href="<?php echo base_url('cate-building').'/'.$ite->cate_id.'/'.replace($ite->cate_rewrite)?>"><?php echo $ite->cate_name?></a></li>
											<?php endforeach;?>
										</ul>
									<?php endif;?>
								</li>
								<?php $i++; endforeach;?>
						<?php endif;?>
					</ul>
				</li>
			</ul>
			
			
		</div>
		<!-- /.navbar-collapse -->
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="container">
				<form class="form-horizontal" role="search" onchange="returnText();" id="form_search" method="get" action="<?=base_url('search/')?>/">
					<div class="form-group has-success">
						<input type="text" class="form-control" name="q" value="<?=@$_GET['q']?>" placeholder="Search" required>
					</div>
					<div class="form-group has-success">
						<select name="menu" class="form-control">
							<option value="0">Tất cả danh mục</option>
							<?php if($cate_pro):?>
								<?php foreach($cate_pro as $item):?>
								<option value="<?php echo $item->cate_id;?>" <?php if(isset($_GET['menu']) && $_GET['menu'] == $item->cate_id){echo 'selected';}?>><li><?php echo $item->cate_name?></li></option>
								<?php endforeach;?>
							<?php endif;?>
						</select>
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</nav>
<!--/menu-->
<div class="lis-nav-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 visible-md visible-lg">
						<!--<div class="row">-->
							<ul class="side-left">
								<?php /*pre($cate_pro);*/ if($cate_pro): $i=0;?>
									<?php foreach($cate_pro as $item): if($i == 8){break;}?>
										<li>
											<a href="<?php echo base_url('cate-pro').'/'.$item->cate_id.'/'.replace($item->cate_rewrite)?>">
												<i class="fa fa-star fa-spin" aria-hidden="true"></i>
												<?php echo $item->cate_name?>
												<?php if(count((array)@$item->child) >0):?>
												<i class="fa fa-angle-right lis-nav-right" aria-hidden="true"></i>
												<?php endif;?>
											</a>
											<?php if(count((array)@$item->child) >0):?>
												<ul class="nav lis-nav-child">
													<div class="total-menu-child">
														<?php foreach($item->child as $ite):?>
															<li><a href="<?php echo base_url('cate-pro').'/'.$ite->cate_id.'/'.replace($ite->cate_rewrite)?>"><?php echo $ite->cate_name?></a></li>
														<?php endforeach;?>
														<!--<img class="img-right-menu" src="<?/*=base_url('assets/home/image/kd9KnF_simg_80d237_400x400_maxb.png')*/?>" alt="">-->
													</div>
												</ul>
											<?php endif;?>
										</li>
									<?php $i++; endforeach;?>
								<?php endif;?>
							</ul>
						<!--</div>-->
					</div>
					<div class="col-md-6 sider-mid">
						<!--<div class="row">-->
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
								<ol class="carousel-indicators">
									<?php if($banner): $i=0;?>
										<?php foreach($banner as $item): ?>
											<li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="<?php if($i==0){echo 'active';}?>"></li>
										<?php $i++; endforeach;?>
									<?php endif;?>                                  
								</ol>
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
									<?php if($banner): $i=0;?>
										<?php foreach($banner as $item):?>
											<div class="item img <?php if($i==0){echo 'active';}?>">
												<a href="<?php echo $item->link?>">
													<img src="<?php echo base_url('uploads/banner').'/'.$item->forderimg.'/'.$item->image?>" width
												="100%" height="100%" alt="<?php echo replace($item->title)?>">
												</a>
											</div>
										<?php $i++; endforeach;?>
									<?php endif;?>
							  </div>
							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>
						<!--</div>-->
					</div>
					<div class="col-md-3 visible-md visible-lg">
						<!--<div class="row">-->
							<ul class="side-left side-right">
								<?php /*pre($cate_pro);*/ if($cate_building): $i=0;?>
									<?php foreach($cate_building as $item): if($i == 8){break;}?>
										<li>
											<a href="<?php echo base_url('cate-building').'/'.$item->cate_id.'/'.replace($item->cate_rewrite)?>">
												<?php if(count((array)$item->child) >0):?>
												<i class="fa fa-angle-left lis-nav-left" aria-hidden="true"></i>
												<?php endif;?>
												<?php echo  $item->cate_name?>
												<?=htmlspecialchars_decode($item->cate_icon)?>
											</a>
											<?php if(count((array)$item->child) >0):?>
												<ul class="nav lis-nav-building">
													<?php foreach($item->child as $ite):?>
														<li><a href="<?php echo base_url('cate-building').'/'.$ite->cate_id.'/'.replace($ite->cate_rewrite)?>"><?php echo $ite->cate_name?></a></li>
													<?php endforeach;?>
												</ul>
											<?php endif;?>
										</li>
										<?php $i++; endforeach;?>
								<?php endif;?>
							</ul>
						<!--</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!--menu max-width = 768px -->
<script type="text/javascript">
	/* Open the sidenav */
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
		document.getElementById("mySidenav").style.paddingLeft = "15px";
		document.getElementById("mySidenav").style.paddingRight = "15px";
	}

	/* Close/hide the sidenav */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.paddingLeft = "0";
		document.getElementById("mySidenav").style.paddingRight = "0";
	} 
	$(document).ready(function(){
	  $('.dropdown-submenu a.test').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	  });
	});
</script>
