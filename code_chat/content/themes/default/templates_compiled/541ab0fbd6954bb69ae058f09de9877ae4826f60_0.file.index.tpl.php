<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:13
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:298578181567c9eb9b45e77_85845998%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541ab0fbd6954bb69ae058f09de9877ae4826f60' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/index.tpl',
      1 => 1449116628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298578181567c9eb9b45e77_85845998',
  'variables' => 
  array (
    'user' => 0,
    'system' => 0,
    'view' => 0,
    'pages' => 0,
    'page' => 0,
    'groups' => 0,
    'group' => 0,
    'query' => 0,
    'results' => 0,
    '_user' => 0,
    'categories' => 0,
    'category' => 0,
    'games' => 0,
    'new_people' => 0,
    'new_pages' => 0,
    'new_groups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567c9eb9e517b4_25264996',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9eb9e517b4_25264996')) {
function content_567c9eb9e517b4_25264996 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '298578181567c9eb9b45e77_85845998';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>

<!-- page content -->
<div class="container mt20 index-container">
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-6 welcome hidden-xs">
            <h1>
                <?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

            </h1>
            <p>
                <?php echo __("Share your memories, connect with others, make new friends");?>
.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="js_ajax-forms" data-url="core/signin.php">
                        <div class="form-group">
                            <input name="username_email" type="text" class="form-control" placeholder="<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
" required>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="<?php echo __("Password");?>
" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> <?php echo __("Remember me");?>

                            </label>
                            | <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Forget your password?");?>
</a>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary"><?php echo __("Login");?>
</button>
                        
                        <!-- error -->
                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                        <!-- error -->
                    </form>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <div class="hr-heading mt5 mb10">
                                <div class="hr-heading-text">
                                    <?php echo __("or");?>
 <?php echo __("login with");?>

                                </div>
                            </div>
                            <div class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-social-icon btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-social-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-social-icon btn-google">
                                    <i class="fa fa-google"></i>
                                </a>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><?php echo __("New to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
! <?php echo __("Sign up");?>
</h4>
                    <form class="js_ajax-forms" data-url="core/signup.php">
                        <div class="form-group">
                            <input name="full_name" type="text" class="form-control" placeholder="<?php echo __("Full name");?>
" required>
                        </div>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="<?php echo __("Username");?>
" required>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="<?php echo __("Email");?>
" required>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="<?php echo __("Password");?>
" required>
                        </div>
                        <div class="js_hidden-section x-hidden">
                            <div class="form-group">
                                <label for="gender"><?php echo __("I am");?>
</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="none"><?php echo __("Select Sex");?>
:</option>
                                    <option value="Male"><?php echo __("Male");?>
</option>
                                    <option value="Female"><?php echo __("Female");?>
</option>
                                </select>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                            <div class="form-group">
                                <!-- reCAPTCHA -->
                                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                                <!-- reCAPTCHA -->
                            </div>
                            <?php }?>
                            <p class="text-muted">
                                <?php echo __("By clicking Sign Up, you agree to our");?>
 <a href="#"><?php echo __("Terms");?>
</a>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-block btn-success"><?php echo __("Sign Up");?>
</button>

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                        <!-- error -->
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->

<?php } else { ?>

<!-- page content -->
<div class="container mt20">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-2">
            <ul class="nav nav-pills nav-stacked nav-home hidden-xs">

                <!-- basic -->
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                        <i class="fa fa-pencil-square fa-fw pr10"></i> 
                        <?php echo __("Edit Profile");?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] == 1) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admin">
                        <i class="fa fa-tachometer fa-fw pr10"></i> 
                        <?php echo __("Admin Panel");?>

                    </a>
                </li>
                <?php }?>
                <!-- basic -->

                <!-- favorites -->
                <li class="ptb5">
                    <small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small>
                </li>

                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><i class="fa fa-newspaper-o fa-fw pr10"></i> <?php echo __("News Feed");?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><i class="fa fa-comments-o fa-fw pr10"></i> <?php echo __("Messages");?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games"><i class="fa fa-gamepad fa-fw pr10"></i> <?php echo __("Games");?>
</a>
                </li>
                <?php }?>
                <!-- favorites -->

                <!-- pages -->
                <li class="ptb5">
                    <small class="text-muted"><?php echo mb_strtoupper(__("pages"), 'UTF-8');?>
</small>
                </li>

                <?php if (count($_smarty_tpl->tpl_vars['pages']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$foreach_page_Sav = $_smarty_tpl->tpl_vars['page'];
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_picture'];?>
" alt="">
                                <span><?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
</span>
                            </a>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['page'] = $foreach_page_Sav;
}
?>
                <?php }?>
                        
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "create_page") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/page"><i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Create Page");?>
</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><i class="fa fa-cubes fa-fw pr10"></i> <?php echo __("Manage Pages");?>
</a>
                </li>
                <!-- pages -->

                <!-- groups -->
                <li class="ptb5">
                    <small class="text-muted"><?php echo mb_strtoupper(__("groups"), 'UTF-8');?>
</small>
                </li>

                <?php if (count($_smarty_tpl->tpl_vars['groups']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$foreach_group_Sav = $_smarty_tpl->tpl_vars['group'];
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="">
                                <span><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</span>
                            </a>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['group'] = $foreach_group_Sav;
}
?>
                <?php }?>

                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "create_group") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/group"><i class="fa fa-users fa-fw pr10"></i> <?php echo __("Create Group");?>
</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><i class="fa fa-cubes fa-fw pr10"></i> <?php echo __("Manage Groups");?>
</a>
                </li>
                <!-- groups -->
            </ul>
        </div>
        <!-- left panel -->
        
        <!-- center panel -->
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
            <div class="col-sm-6">
                <!-- publisher -->
                <?php echo $_smarty_tpl->getSubTemplate ('_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_privacy'=>true), 0);
?>

                <!-- publisher -->

                <!-- posts -->
                <?php echo $_smarty_tpl->getSubTemplate ('_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0);
?>

                <!-- posts -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "search") {?>
            <div class="col-sm-6">
                <!-- search form -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="mt5">
                            <i class="fa fa-search pr5"></i>
                            <strong><?php echo __("Search");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal js_search-form">
                            <div class="form-group">
                                <div class="col-sm-10 mb5">
                                    <input type="text" name="query" class="form-control" placeholder="<?php echo __("Search for people, pages and #hashtags");?>
" required>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" name="submit" class="btn btn-primary"><?php echo __("Search");?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- search form -->

                <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
                <!-- search results -->
                <div id="search-full-results" class="panel panel-default">
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-rss pr5 panel-icon"></i>
                            <strong><?php echo __("Search Results");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#posts" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Posts");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#users" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Users");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#pages" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Pages");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#groups" data-toggle="tab">
                                    <strong class="pr5"><?php echo __("Groups");?>
</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="posts">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['posts']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['results']->value['posts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                    <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <div class="tab-pane" id="users">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['users']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['results']->value['users'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0);
?>

                                    <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <div class="tab-pane" id="pages">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['pages']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['results']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                    <?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <div class="tab-pane" id="groups">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['groups']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['results']->value['groups'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                    <?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <!-- search results -->
                <?php }?>

            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading light clearfix">
                        <div class="pull-right flip">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/page" class="btn btn-default btn-sm">
                                <i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Create Page");?>

                            </a>
                        </div>
                        <div class="mt5">
                            <strong><?php echo __("Your Pages");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">

                        <?php if (count($_smarty_tpl->tpl_vars['pages']->value) > 0) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
                                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>
                            </ul>
                        <?php } else { ?>
                            <p class="text-center text-muted">
                                <?php echo __("No pages available");?>

                            </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['pages']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="pages">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>

                    </div>
                </div>
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading light clearfix">
                        <div class="pull-right flip">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/group" class="btn btn-default btn-sm">
                                <i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Create Group");?>

                            </a>
                        </div>
                        <div class="mt5">
                            <strong><?php echo __("Your Groups");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">

                        <?php if (count($_smarty_tpl->tpl_vars['groups']->value) > 0) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>
                            </ul>
                        <?php } else { ?>
                            <p class="text-center text-muted">
                                <?php echo __("No groups available");?>

                            </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['groups']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="groups">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>

                    </div>
                </div>
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "create_page") {?>
            <div class="col-sm-6">
                <!-- create page -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="mt5">
                            <strong><?php echo __("Create Page");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms" data-url="data/create.php?type=page&amp;do=create">
                            <div class="form-group">
                                <label for="category"><?php echo __("Category");?>
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
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title"><?php echo __("Title");?>
:</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo __("Title of your page");?>
">
                            </div>
                            <div class="form-group">
                                <label for="username"><?php echo __("Username");?>
:</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo __("Username, e.g. YouTubeOfficial");?>
">
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo __("Description");?>
:</label>
                                <textarea class="form-control" name="description" name="description"  placeholder="<?php echo __("Write about your page...");?>
"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>

                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->
                        </form>
                    </div>
                </div>
                <!-- create page -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "create_group") {?>
            <div class="col-sm-6">
                <!-- create group -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="mt5">
                            <strong><?php echo __("Create Group");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms" data-url="data/create.php?type=group&amp;do=create">
                            <div class="form-group">
                                <label for="title"><?php echo __("Title");?>
:</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo __("Title of your group");?>
">
                            </div>
                            <div class="form-group">
                                <label for="username"><?php echo __("Username");?>
:</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo __("Username, e.g. DevelopersGroup");?>
">
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo __("Description");?>
:</label>
                                <textarea class="form-control" name="description" placeholder="<?php echo __("Write about your group...");?>
"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>

                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->
                        </form>
                    </div>
                </div>
                <!-- create group -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading light clearfix">
                        <div class="mt5">
                            <strong><?php echo __("Games");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">

                        <?php if (count($_smarty_tpl->tpl_vars['games']->value) > 0) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['games']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_game'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_game']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
$_smarty_tpl->tpl_vars['_game']->_loop = true;
$foreach__game_Sav = $_smarty_tpl->tpl_vars['_game'];
?>
                                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_game'] = $foreach__game_Sav;
}
?>
                            </ul>
                        <?php } else { ?>
                            <p class="text-center text-muted">
                                <?php echo __("No games available");?>

                            </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['games']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="games">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>

                    </div>
                </div>
            </div>

        <?php }?>
        <!-- center panel -->

        <!-- right panel -->
        <div class="col-sm-4">

            <?php echo $_smarty_tpl->getSubTemplate ('__ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ('__widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <!-- New People -->
            <?php if (count($_smarty_tpl->tpl_vars['new_people']->value) > 0) {?>
                <div class="panel panel-default panel-widget">
                    <div class="panel-heading">
                        <div class="pull-right flip">
                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("See All");?>
</a></small>
                        </div>
                        <strong><?php echo __("People you may know");?>
</strong>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['new_people']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add",'_small'=>true), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                        </ul>
                    </div>
                </div>
            <?php }?>
            <!-- New People -->

            <!-- Suggested Pages -->
            <?php if (count($_smarty_tpl->tpl_vars['new_pages']->value) > 0) {?>
                <div class="panel panel-default panel-widget">
                    <div class="panel-heading">
                        <strong><?php echo __("Suggested Pages");?>
</strong>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['new_pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>
                        </ul>
                    </div>
                </div>
            <?php }?>
            <!-- Suggested Pages -->

            <!-- Suggested Groups -->
            <?php if (count($_smarty_tpl->tpl_vars['new_groups']->value) > 0) {?>
                <div class="panel panel-default panel-widget">
                    <div class="panel-heading">
                        <strong><?php echo __("Suggested Groups");?>
</strong>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['new_groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                            <?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>
                        </ul>
                    </div>
                </div>
            <?php }?>
            <!-- Suggested Groups -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>