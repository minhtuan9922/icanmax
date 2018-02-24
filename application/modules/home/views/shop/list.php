<center><h4 class="title-cart">THÔNG TIN GIỎ HÀNG </h4></center>
<?php //pre($cart)?>
<form action="<?=base_url()?>/update-cart" method="post" enctype="multipart/form-data">
    <table class="table table-striped product-cart ">
        <thead class="Detailed-table">
            <tr>
                <th class="text-center">Stt</th>
                <th class="text-center">Tên sản phẩm - ảnh</th>
                <th>Số lượng</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Thành tiền</th>
                <th>Xóa</th>
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
                    <td>
                        <input type="number" name="<?php echo $i;?>[qty]" min="1" max="20" value="<?=$item['qty']?>">
                        <input type="hidden" name="<?php echo $i;?>[rowid]" value="<?=$item['rowid']?>">
                    </td>
                    <td> <?=number_format($item['price'])?> vnđ</td>
                    <td> <?=number_format($item['subtotal'])?>  vnđ</td>
                    <td> <a href="<?=base_url('del-cart').'/'.$item['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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
        <tr>
            <th>
                <a href="<?=base_url()?>delall-cart"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> Hủy</a>
            </th>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <button type="submit" class="btn btn-primary" value="1">Cập nhật</button>
                <a href="<?=base_url()?>gio-hang/step-2" class="btn btn-success">Bước tiếp</a>
            </th>
            <th></th>
        </tr>
        </thead>
    </table>
</form>