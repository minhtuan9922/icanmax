<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/7/2017
 * Time: 4:33 PM
 */
if(!$this->session->userdata('ses_user_id')):
?>
    <h3 style="color: red">Bạn chưa đăng nhập mời bạn đăng nhập để có thể nhận được cái ưu đãi và dịch tốt hơn.</h3>
<?php endif;?>
<h3>Thông tin người đặt hàng</h3>
<form method="post" action="<?=base_url('gio-hang/step-2')?>" class="form-horizontal">
    <div class="form-group">
        <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="user_fullname" placeholder="<?php echo $this->lang->line('fullname')?>" name="user_fullname" value="<?php echo @$user->fullname?$user->fullname:set_value('user_fullname')?>" >
            <?php echo form_error('user_fullname', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="user_mail" placeholder="<?php echo $this->lang->line('Email')?>" name="user_mail" value="<?php echo @$user->email?$user->email:set_value('user_mail')?>">
            <?php echo form_error('user_mail', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="user_phone" placeholder="<?php echo $this->lang->line('phone')?>" name="user_phone"  value="<?php echo @$user->phone?$user->phone:set_value('user_phone')?>">
            <?php echo form_error('user_phone', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="user_address" class="col-sm-2 control-label"><?php echo $this->lang->line('address')?></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="user_address" placeholder="<?php echo $this->lang->line('address')?>" name="user_address"><?php echo @$user->address?$user->address:set_value('user_address')?></textarea>
            <?php echo form_error('user_address', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="user_note" class="col-sm-2 control-label"><?php echo $this->lang->line('Note')?></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="user_note" placeholder="<?php echo $this->lang->line('Note')?>" name="user_note"><?php echo @$user->address?$user->address:set_value('user_note')?></textarea>
            <?php echo form_error('user_note', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
        </div>
    </div>
    <label for="check_unh"><input type="checkbox" id="check_unh" name="check_unh" value="1"> Bạn không phải là người nhận hàng ?</label>
    <div class="cus_info" style="display: none">
        <div class="form-group">
            <label for="user_fullname" class="col-sm-2 control-label"><?php echo $this->lang->line('fullname')?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_fullname" placeholder="<?php echo $this->lang->line('fullname')?>" name="cus_fullname" value="<?php echo set_value('cus_fullname')?>" >
                <?php echo form_error('cus_fullname', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="user_mail" class="col-sm-2 control-label"><?php echo $this->lang->line('Email')?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_mail" placeholder="<?php echo $this->lang->line('Email')?>" name="cus_mail" value="<?php echo set_value('cus_mail')?>">
                <?php echo form_error('cus_mail', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('phone')?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_phone" placeholder="<?php echo $this->lang->line('phone')?>" name="cus_phone"  value="<?php echo set_value('cus_phone')?>">
                <?php echo form_error('cus_phone', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="user_phone" class="col-sm-2 control-label"><?php echo $this->lang->line('address')?></label>
            <div class="col-sm-10">
                <textarea class="form-control" id="user_phone" placeholder="<?php echo $this->lang->line('address')?>" name="cus_address"><?php echo set_value('cus_address')?></textarea>
                <?php echo form_error('cus_address', '<br><div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>', '</div>'); ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <div class="row">
            <h3>Hình thức thanh toán</h3>
            <ol>
                <li><label for="pay1"><input type="radio" id="pay1" name="payments" value="1"> Chuyển khoản </label></li>
                <li><label for="pay2"><input type="radio" checked id="pay2" name="payments" value="2"> Thanh toán sau khi nhận hàng </label></li>
            </ol>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <h3>Hình thức vận chuyển</h3>
            <ol>
                <li><label for="shipa"><input type="radio" id="shipa" name="ship" value="1"> Chuyển hàng nhanh <span><i>+ 30k</i></span></label></li>
                <li><label for="shipb"><input type="radio" checked id="shipb" name="ship"  value="2"> Chuyển hàng tiêu chuẩn</label></li>
            </ol>
        </div>
    </div>
    <h3>Xác nhận lại đơn hàng</h3>
    <table class="table table-striped product-cart ">
        <thead class="Detailed-table">
        <tr>
            <th class="text-center">Stt</th>
            <th class="text-center">Tên sản phẩm - ảnh</th>
            <th>Số lượng</th>
            <th class="text-center">Giá</th>
            <th class="text-center">Thành tiền</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($cart) > 0): $i=1;?>
            <?php foreach($cart as $item): $img= @unserialize($item['serial']['images']); ?>
                <tr class="text-center">
                    <td><?=$i?></td>
                    <td>
                        <?=base64_decode($item['name']);?>
                        <br>
                        <img src="<?php echo base_url('uploads/products/thumb').'/'.$img[0] ?>" alt="" class="img-thumbnail" width="100">
                    </td>
                    <td><?=$item['qty']?></td>
                    <td> <?=number_format($item['price'])?> vnđ</td>
                    <td> <?=number_format($item['subtotal'])?>  vnđ</td>
                </tr>
                <?php $i++; endforeach; ?>
        <?php else: echo "Giỏ hàng trống.tiếp tục mua hàng";?>
        <?php endif;?>
        </tbody>
        <thead>
        <tr>
            <th><h4><b>Tổng</b></h4></th>
            <th></th>
            <th></th>
            <th></th>
            <th class="number-total"><b><?=number_format($total_money) ?> vnđ</b></th>
            <th></th>
        </tr>
        </thead>
    </table>
    <div class="form-group">
        <div class="col-sm-2"><a href="<?=base_url('gio-hang')?>" class="text-danger"><i class="fa fa-3x fa-arrow-circle-left" aria-hidden="true"></i></a></div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2"><button type="submit" class="btn btn-success" name="send_voice" value="1">Gửi đơn hàng</button></div>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#check_unh").change(function(){
            var $input = $( this );
            if($input.prop( "checked" ) == true){
                $('.cus_info').slideDown( "1000" );
            }else{
                $('.cus_info').slideUp( "1000" );
            }
        });
    });
</script>