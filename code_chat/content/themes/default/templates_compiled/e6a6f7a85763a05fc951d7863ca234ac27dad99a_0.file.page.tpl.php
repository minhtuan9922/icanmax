<?php /* Smarty version 3.1.24, created on 2015-12-26 03:52:04
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:391551855567e0ee4b93731_16340541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a6f7a85763a05fc951d7863ca234ac27dad99a' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/page.tpl',
      1 => 1451101839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391551855567e0ee4b93731_16340541',
  'variables' => 
  array (
    'spage' => 0,
    'system' => 0,
    'user' => 0,
    'view' => 0,
    'tab' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e0ee4d0db53_83445963',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e0ee4d0db53_83445963')) {
function content_567e0ee4d0db53_83445963 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '391551855567e0ee4b93731_16340541';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">

    <!-- profile-header -->
    <div class="profile-header">
        <!-- profile-cover -->
        <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>
        <div class="profile-cover-wrapper" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
');">
        <?php } else { ?>
        <div class="profile-cover-wrapper no-cover">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
            <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>
            <div class="profile-cover-delete">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" title="<?php echo __("Xóa ảnh bìa");?>
"></i>
            </div>
            <?php }?>
            <div class="profile-cover-change-loader">
                <div class="loader loader_large"></div>
            </div>
            <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
            <img src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
            <div class="profile-avatar-change">
                <i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete">
                <i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" title="<?php echo __("Xóa ảnh đại diện");?>
"></i>
            </div>
            <div class="profile-avatar-change-loader">
                <div class="loader loader_medium"></div>
            </div>
            <?php }?>
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title="<?php echo __("Đã xác minh");?>
" class="fa fa-check"></i>
            <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-down"></i>
                    <?php echo __("Bỏ thích");?>

                </button>
            <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Thích");?>

                </button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" class="btn btn-default">
                    <i class="fa fa-pencil"></i> <?php echo __("Cập nhật thông tin");?>

                </a>
            <?php }?>
        </div>
        <!-- profile-buttons -->

        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                        <?php echo __("Dòng thời gian");?>

                    </a>
                </li>
            </ul>
        </div>
        <!-- profile-tabs -->
    </div>
    <!-- profile-header -->


    <!-- profile-content -->
    <div class="row">

        <!-- profile-buttons alt -->
        <div class="col-sm-12">
            <div class="panel panel-default profile-buttons-wrapper-alt">
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
                        <button type="button" class="btn btn-default js_ullike-page" data-pid="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <i class="fa fa-thumbs-o-down"></i>
                            <?php echo __("Bỏ thích");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-primary js_like-page" data-pid="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <i class="fa fa-thumbs-o-up"></i>
                            <?php echo __("Thích");?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" class="btn btn-default">
                            <i class="fa fa-pencil"></i> <?php echo __("Cập nhật thông tin");?>

                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- profile-buttons alt -->

        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
            <div class="col-sm-4">
                <!-- about -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="about-list">
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-thumbs-o-up fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_likes'];?>
 <?php echo __("người thích điều này");?>

                                </div>
                            </li>

                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['spage']->value['category_name'];?>

                                </div>
                            </li>
                            
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-star fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- about -->
            </div>
            <div class="col-sm-8">

                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                <!-- publisher -->
                <?php echo $_smarty_tpl->getSubTemplate ('_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"page",'_page'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0);
?>

                <!-- publisher -->
                <?php }?>
                
                <!-- posts -->
                <?php echo $_smarty_tpl->getSubTemplate ('_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0);
?>

                <!-- posts -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body with-nav">
                        <ul class="nav">
                            <li <?php if ($_smarty_tpl->tpl_vars['tab']->value == '') {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings"><i class="fa fa-wrench fa-fw fa-lg pr10"></i> <?php echo __("Page Settings");?>
</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <!-- edit page -->
                <div class="panel panel-default">
                    <div class="panel-heading with-icon">
                        <!-- delete -->
                        <div class="pull-right flip">
                            <button type="button" class="btn btn-danger js_delete-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                <i class="fa fa-trash-o"></i>
                                <?php echo __("Xóa trang");?>

                            </button>
                        </div>
                        <!-- delete -->
                        <!-- panel title -->
                        <i class="fa fa-wrench pr5 panel-icon"></i>
                        <strong><?php echo __("Thiết lập trang");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        
                        <form class="js_ajax-forms" data-url="data/create.php?type=page&amp;do=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <div class="form-group">
                                <label for="category"><?php echo __("Thể loại");?>
:</label>
                                <select class="form-control" name="category" id="category">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title"><?php echo __("Tiêu đề");?>
:</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo __("Tiêu đề trang của bạn");?>
" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="username"><?php echo __("Đường dẫn trang");?>
:</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo __("Ví dụ: duongdantrang");?>
" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo __("Mô tả trang");?>
:</label>
                                <textarea class="form-control" name="description" id="description" placeholder="<?php echo __("Hãy viết gì đó về trang của bạn...");?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>
</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo __("Lưu thiết lập");?>
</button>

                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->
                        </form>

                    </div>
                </div>
                <!-- edit page -->
            </div>

        <?php }?>

    </div>
    <!-- profile-content -->

</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>