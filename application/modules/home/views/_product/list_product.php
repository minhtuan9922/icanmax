<!--content-->
<div class="content">
    <div class="products-agileinfo">
        <div class="container">
            <div class="product-agileinfo-grids w3l">
                <div class="col-md-12 product-agileinfon-grid1 w3l">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <?php
                            if(isset($product)){
                                $data['pro'] = $product;
                                $this->load->view("product/item_pro",$data);
                            }
                        ?>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--content-->