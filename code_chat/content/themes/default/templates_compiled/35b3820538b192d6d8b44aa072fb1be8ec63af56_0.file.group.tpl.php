<?php /* Smarty version 3.1.24, created on 2015-12-25 10:26:43
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/group.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1473245413567d19e33f9cb0_06196495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b3820538b192d6d8b44aa072fb1be8ec63af56' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/group.tpl',
      1 => 1450998208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1473245413567d19e33f9cb0_06196495',
  'variables' => 
  array (
    'group' => 0,
    'system' => 0,
    'user' => 0,
    'view' => 0,
    'profile' => 0,
    '_user' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567d19e35ff9a6_58413233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d19e35ff9a6_58413233')) {
function content_567d19e35ff9a6_58413233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1473245413567d19e33f9cb0_06196495';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">

    <!-- profile-header -->
    <div class="profile-header">
        <!-- profile-cover -->
        <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>
        <div class="profile-cover-wrapper" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
');">
        <?php } else { ?>
        <div class="profile-cover-wrapper no-cover">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
            <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>
            <div class="profile-cover-delete">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title="<?php echo __("Delete Cover");?>
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
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
            <div class="profile-avatar-change">
                <i class="fa fa-camera js_x-uploader" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete">
                <i class="fa fa-trash js_delete-picture" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title="<?php echo __("Delete Picture");?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</a>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Đã tham gia");?>

                </button>
            <?php } else { ?>
                <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                    <i class="fa fa-user-plus"></i>
                    <?php echo __("Tham gia nhóm");?>

                </button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                        <?php echo __("Dòng thời gian");?>

                    </a>
                </li>
                <li class="middle-tabs">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members">
                        <?php echo __("Thành viên");?>

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
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                        <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-check"></i>
                            <?php echo __("Đã tham gia");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-user-plus"></i>
                            <?php echo __("Tham gia nhóm");?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
                                    <i class="fa fa-users fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
 <?php echo __("Thành viên");?>

                                </div>
                            </li>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-star fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- about -->
            </div>
            <div class="col-sm-8">

                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                <!-- publisher -->
                <?php echo $_smarty_tpl->getSubTemplate ('_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"group",'_group'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0);
?>

                <!-- publisher -->
                <?php }?>

                <!-- posts -->
                <?php echo $_smarty_tpl->getSubTemplate ('_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0);
?>

                <!-- posts -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "members") {?>
            <!-- members -->
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading with-icon with-nav">

                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-users pr5 panel-icon"></i>
                            <strong><?php echo __("Thành viên");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/members">
                                    <strong class="pr5"><?php echo __("Thành viên");?>
</strong>
                                    <small><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
</small>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body">
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] > 0) {?>
                        <ul class="row">
                            <?php
$_from = $_smarty_tpl->tpl_vars['group']->value['members'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                        </ul>

                        <?php if (count($_smarty_tpl->tpl_vars['group']->value['group_members']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="members" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <span><?php echo __("Xem thêm");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>
                        <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo $_smarty_tpl->tpl_vars['group']->value['user_fullname'];?>
 <?php echo __("không có các thành viên");?>

                        </p>
                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- members -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body with-nav">
                        <ul class="nav">
                            <li <?php if ($_smarty_tpl->tpl_vars['tab']->value == '') {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings"><i class="fa fa-wrench fa-fw fa-lg pr10"></i> <?php echo __("Group Settings");?>
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
                            <button type="button" class="btn btn-danger js_delete-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                <i class="fa fa-trash-o"></i>
                                <?php echo __("Xóa nhóm");?>

                            </button>
                        </div>
                        <!-- delete -->
                        <!-- panel title -->
                        <i class="fa fa-wrench pr5 panel-icon"></i>
                        <strong><?php echo __("Thiết lập nhóm");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        
                        <form class="js_ajax-forms" data-url="data/create.php?type=group&amp;do=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <div class="form-group">
                                <label for="title"><?php echo __("Tiêu đề");?>
:</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo __("Tiêu đề nhóm của bạn");?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="username"><?php echo __("Đường dẫn nhóm");?>
:</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo __("Ví dụ: duongdannhom");?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo __("Mô tả");?>
:</label>
                                <textarea class="form-control" name="description" id="description" placeholder="<?php echo __("Hãy viết gì đó về nhóm của bạn...");?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
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