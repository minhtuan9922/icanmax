<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/20/2017
 * Time: 4:11 PM
 */
?>
<h2><?=$item_post->pro_name?></h2>
<p><?=$item_post->pro_info?></p>
<div class="col-md-12">
    <div class="row">
        <?=htmlspecialchars_decode($item_post->pro_full)?>
    </div>
</div>
