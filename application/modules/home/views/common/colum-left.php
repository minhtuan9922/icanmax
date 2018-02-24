<div class="col-md-2 col-xs-12 col-xs-4">
        <div class="moddangnhap text-center">
			<a href="<?php echo base_url("/vn")?>"><img src="<?php echo base_url("assets/home")?>/image/icon-lang/Viet-Nam-icon.png"></a>
			<a href="<?php echo base_url("/eng")?>"><img src="<?php echo base_url("assets/home")?>/image/icon-lang/uk.gif"></a><br>
		</div>
                
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Quản lý tài khoản</div>
            <?php if(!$this->session->userdata('ses_user_id')):?>
            <div class="panel-body">
		        <div class="btn-group btn-group-vertical text-center lis-panel">
                    <a href="<?php echo  base_url('user/login')?>" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span><b> Đăng Nhập</b></a>
                    <a href="<?php echo  base_url("/regis")?>" class="btn btn-info"><span class="glyphicon glyphicon-user"></span><b> Đăng Ký</b></a>
		         </div>
            </div>
            <?php else:?>
                <div class="panel-body">
                    <div class="lis-panel lis-user-btn">
                        <?php echo $this->session->userdata('ses_user_cus_name');?>
                        <a href="<?php echo  base_url("/logout")?>" class=""><i class="fa fa-power-off" aria-hidden="true"></i><b> 
                        <?php echo $this->lang->line('logout')?></b></a>
                        <a href="<?php echo  base_url("/user")?>" class=""><span class="glyphicon glyphicon-user"></span><b> <?php echo $this->lang->line('Profile');?>.</b></a>
                    </div>
                </div>
            <?php endif;?>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading"><h5>Tìm kiếm Quảng Cáo</h5></div>				
            <div class="panel-body">
                <ul id="menu">
                    <form method="post" action="" class="form-horizontal col-md-12">
                        <div class="form-group">
                            <label class="sr-only" for="pro_name">Tên :</label>
                            <input type="text" placeholder="Tên sản phẩm" class="form-control" name="pro_name" id="pro_name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="cate_id">Danh mục :</label>
                            <select class="form-control" name="cate_id" id="cate_id">
                                <option value="-1">Danh mục sản phẩm</option>
                                <option value="9">Hàng hiệu</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="sr-only" for="buy_id">Giá :</label>
                            <select class="form-control" name="buy_id" id="buy_id">
                                <option value="-1">Khoảng giá</option>
                                <option value="0"> &lt; 1 triệu</option>
                            </select>
                        </div>
                        <button name="searchproduts" type="submit" class="btn btn-info form-control">
                            <span class="glyphicon glyphicon-search"></span> Tìm 
                        </button>
                    </form> 
	           </ul>
            </div>
        </div>
    </div>