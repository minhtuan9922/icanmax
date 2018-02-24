<?php /* Smarty version 3.1.24, created on 2015-12-25 08:16:00
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1740343662567cfb407672c0_26904980%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de38598f1d6c3e6e9b50cc3828115eeb7cc4a56' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/admin.tpl',
      1 => 1451031356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1740343662567cfb407672c0_26904980',
  'variables' => 
  array (
    'view' => 0,
    'system' => 0,
    'sub_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cfb40a39b85_03869307',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cfb40a39b85_03869307')) {
function content_567cfb40a39b85_03869307 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1740343662567cfb407672c0_26904980';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<!-- page content -->
<div class="container mt20">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav metismenu js_metisMenu">

                        <!-- Dashboard -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin">
                                <i class="fa fa-tachometer fa-fw fa-lg pr10"></i><?php echo __("Thống kê");?>

                            </a>
                        </li>
                        <!-- Dashboard -->

                        <!-- Settings -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/settings">
                                <i class="fa fa-cog fa-fw fa-lg pr10"></i><?php echo __("Thiết lập");?>

                            </a>
                        </li>
                        <!-- Settings -->

                        <!-- Languages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/languages">
                                <i class="fa fa-globe fa-fw fa-lg pr10"></i><?php echo __("Ngông ngữ");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/languages">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/languages/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Languages -->

                        <!-- Themes -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/themes">
                                <i class="fa fa-paint-brush fa-fw fa-lg pr10"></i><?php echo __("Giao diện");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/themes">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/themes/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Themes -->
                        
                        <!-- Users -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users">
                                <i class="fa fa-user fa-fw fa-lg pr10"></i><?php echo __("Người dùng");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Xem tất cả");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "admins") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/admins">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Quản trị viên");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "moderators") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/moderators">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Người điều hành");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "online") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/online">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Đang trực tuyến");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/users/banned">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Đang bị khóa");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Users -->

                        <!-- Pages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/pages">
                                <i class="fa fa-flag fa-fw fa-lg pr10"></i><?php echo __("Trang");?>

                            </a>
                        </li>
                        <!-- Pages -->

                        <!-- Pages Categories -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "categories") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/categories">
                                <i class="fa fa-flag fa-fw fa-lg pr10"></i><?php echo __("Thể loại trang");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "categories" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/categories">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "categories" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/categories/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Pages Categories -->

                        <!-- Groups -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/groups">
                                <i class="fa fa-users fa-fw fa-lg pr10"></i><?php echo __("Nhóm");?>

                            </a>
                        </li>
                        <!-- Groups -->

                        <!-- Verify Badge -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verified") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/verified/users">
                                <i class="fa fa-check-circle fa-fw fa-lg pr10"></i><?php echo __("Xác nhận huy hiệu");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verified" && $_smarty_tpl->tpl_vars['sub_view']->value == "users") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/verified/users">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Người dùng");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verified" && $_smarty_tpl->tpl_vars['sub_view']->value == "pages") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/verified/pages">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách trang");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Verify Badge -->
                        
                        <!-- Reports -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "reports") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/reports">
                                <i class="fa fa-bell fa-fw fa-lg pr10"></i><?php echo __("Báo cáo");?>

                            </a>
                        </li>
                        <!-- Reports -->

                        <!-- Static Pages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/static">
                                <i class="fa fa-file fa-fw fa-lg pr10"></i><?php echo __("Trang con");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/static">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/static/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Static Pages -->
                        
                        <!-- Ads -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/ads">
                                <i class="fa fa-usd fa-fw fa-lg pr10"></i><?php echo __("Quảng cáo");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/ads">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/ads/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Ads -->

                        <!-- Widgets -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/widgets">
                                <i class="fa fa-cubes fa-fw fa-lg pr10"></i><?php echo __("Chức năng");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/widgets">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/widgets/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Widgets -->

                        <!-- Games -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/games">
                                <i class="fa fa-gamepad fa-fw fa-lg pr10"></i><?php echo __("Trò chơi");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/games">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Danh sách");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/games/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Thêm mới");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Games -->

                        <!-- Newsletter -->
                        <!--<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "newsletter") {?>class="active selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin/newsletter">
                                <i class="fa fa-envelope fa-fw fa-lg pr10"></i><?php echo __("Bản tin");?>

                            </a>
                        </li>-->
                        <!-- Newsletter -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-9">

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.dashboard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "languages") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.languages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "themes") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.themes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "users") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.users.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.pages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "categories") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.groups.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "verified") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.verified.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "reports") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.reports.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "static") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.static.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "ads") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "widgets") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.widgets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
            <?php echo $_smarty_tpl->getSubTemplate ('admin.games.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                
            <?php }?>

        </div>
        
    </div>
</div>
<!-- page content -->


<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>