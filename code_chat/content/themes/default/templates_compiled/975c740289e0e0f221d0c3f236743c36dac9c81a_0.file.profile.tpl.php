<?php /* Smarty version 3.1.24, created on 2015-12-25 05:51:50
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1558495545567cd976ea9380_36936189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '975c740289e0e0f221d0c3f236743c36dac9c81a' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/profile.tpl',
      1 => 1448957930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558495545567cd976ea9380_36936189',
  'variables' => 
  array (
    'profile' => 0,
    'system' => 0,
    'user' => 0,
    'mutual_friend' => 0,
    'view' => 0,
    '_friend' => 0,
    '_page' => 0,
    '_group' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567cd9775aefe4_98777775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567cd9775aefe4_98777775')) {
function content_567cd9775aefe4_98777775 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vnzuicom/public_html/fbs/includes/libs/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1558495545567cd976ea9380_36936189';
echo $_smarty_tpl->getSubTemplate ('_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- page content -->
<div class="container">

    <!-- profile-header -->
    <div class="profile-header">
        <!-- profile-cover -->
        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>
        <div class="profile-cover-wrapper" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');">
        <?php } else { ?>
        <div class="profile-cover-wrapper no-cover">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-user"></i>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>
            <div class="profile-cover-delete">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-user" title="<?php echo __("Delete Cover");?>
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
            <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <div class="profile-avatar-change">
                <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
            </div>
            <div class="profile-avatar-delete">
                <i class="fa fa-trash js_delete-picture" data-handle="picture-user" title="<?php echo __("Delete Picture");?>
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
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
            <i data-toggle="tooltip" data-placement="top" title="<?php echo __("Verified profile");?>
" class="fa fa-check"></i>
            <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                        <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                        <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                        <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                        <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <i class="fa fa-check fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                        </div>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                        </button>
                    <?php }?>

                    <div class="btn-group">
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                            <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-check"></i>
                                <?php echo __("Following");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-rss"></i>
                                <?php echo __("Follow");?>

                            </button>
                        <?php }?>
                        <button type="button" class="btn btn-default js_chat-start" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Message");?>
</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="js_report-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Report");?>
</a></li>
                                <li><a href="#" class="js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Block");?>
</a></li>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                    <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                </a>
                <?php }?>
            <?php }?>
        </div>
        <!-- profile-buttons -->

        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                        <?php echo __("Timeline");?>

                    </a>
                </li>
                <li class="middle-tabs">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                        <?php echo __("Friends");?>
 
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?> 
                        <small class="text-muted">
                            (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("Mutual");?>
</span>)
                        </small>
                        <?php }?>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo __("More");?>

                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="middle-tabs-alt">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- profile-tabs -->
    </div>
    <!-- profile-header -->


    <!-- profile-content -->
    <div class="row">

        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && !$_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
        <div class="col-sm-12">
            <div class="panel panel-default panel-mutual-friends">
                <div class="panel-heading">
                    <?php echo __("Do you know");?>
 <?php echo get_firstname($_smarty_tpl->tpl_vars['profile']->value['user_fullname']);?>

                </div>
                <div class="panel-body">
                    <div>
                        <?php echo __("To see what");?>
 <?php echo get_firstname($_smarty_tpl->tpl_vars['profile']->value['user_fullname']);?>
 <?php echo __("shares with friends");?>
, 
                        <span class="text-link">
                            <?php echo __("send a friend request");?>

                        </span>
                        <div class="pull-right flip">
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                                <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                                </div>
                            <?php } else { ?>
                                <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                                </button>
                            <?php }?>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                        <div class="mt10 clearfix">
                            <ul class="pull-left flip">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['mutual_friends'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mutual_friend'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mutual_friend']->_loop = false;
$_smarty_tpl->tpl_vars['mutual_friend']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mutual_friend']->value) {
$_smarty_tpl->tpl_vars['mutual_friend']->_loop = true;
$_smarty_tpl->tpl_vars['mutual_friend']->index++;
$foreach_mutual_friend_Sav = $_smarty_tpl->tpl_vars['mutual_friend'];
?>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_fullname'];?>
" class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_picture'];?>
);">
                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['mutual_friend']->index > 3) {
break 1;
}?>
                                <?php
$_smarty_tpl->tpl_vars['mutual_friend'] = $foreach_mutual_friend_Sav;
}
?>
                                
                                
                            </ul>
                            <div class="pull-left flip mt10">
                                <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("Mutual Friends");?>
</span>
                            </div>
                        </div> 
                    <?php }?>
                </div>
            </div>
        </div>
        <?php }?>

        <!-- profile-buttons alt -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
        <div class="col-sm-12">
            <div class="panel panel-default profile-buttons-wrapper-alt">
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                            <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                            <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                            <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-check fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                            </div>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                            </button>
                        <?php }?>

                        <div class="btn-group pull-right flip">
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                            <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-check"></i>
                                <?php echo __("Following");?>

                            </button>
                            <?php } else { ?>
                            <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <i class="fa fa-rss"></i>
                                <?php echo __("Follow");?>

                            </button>
                            <?php }?>
                            <button type="button" class="btn btn-default js_chat-start" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Message");?>
</button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="js_report-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Report");?>
</a></li>
                                <li><a href="#" class="js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Block");?>
</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                            <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php }?>
        <!-- profile-buttons alt -->

        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
        <div class="col-sm-4">
            <!-- about -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo __("About");?>

                </div>
                <div class="panel-body">
                    <ul class="about-list">

                        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_work_title'])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("at");?>
 <a href="#"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</a>
                                </div>
                            </li>
                            <?php }?>
                        <?php }?>

                        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_edu_major'])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-graduation-cap fa-fw fa-lg"></i>
                                    <?php echo __("Studied");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_major'];?>
 
                                    <?php echo __("at");?>
  <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_school'];?>
</span>
                                    <div class="details">
                                        Class of <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_class'];?>

                                    </div>
                                </div>
                            </li>
                            <?php }?>
                        <?php }?>

                        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_current_city'])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-home fa-fw fa-lg"></i>
                                    <?php echo __("Lives in");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_current_city'];?>
</span>
                                </div>
                            </li>
                            <?php }?>
                        <?php }?>
                        
                        <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_hometown'])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                    <?php echo __("From");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                                </div>
                            </li>
                            <?php }?>
                        <?php }?>

                        <li>
                            <div class="about-list-item">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_gender'] == "M") {?>
                                    <i class="fa fa-male fa-fw fa-lg"></i>
                                    <?php echo __("Male");?>

                                <?php } else { ?>
                                    <i class="fa fa-female fa-fw fa-lg"></i>
                                    <?php echo __("Female");?>

                                <?php }?>
                            </div>
                        </li>
                        
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'] != null) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-calendar fa-fw fa-lg"></i>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'],"%d/%m/%Y");?>

                                </div>
                            </li>
                            <?php }?>
                        <?php }?>
                        
                        <li>
                            <div class="about-list-item">
                                <i class="fa fa-rss fa-fw fa-lg"></i>
                                <?php echo __("Followed by");?>
 
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("people");?>
</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- about -->

            <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_friends'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_friends'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                    <!-- friends panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a> · 
                            <small><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</small> 
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                            <small>
                                (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>)
                            </small>
                            <?php }?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['friends'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_friend'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_friend']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_friend']->value) {
$_smarty_tpl->tpl_vars['_friend']->_loop = true;
$foreach__friend_Sav = $_smarty_tpl->tpl_vars['_friend'];
?>
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_picture'];?>
);" >
                                            <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_fullname'];?>
</span>
                                        </a>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['_friend'] = $foreach__friend_Sav;
}
?>
                            </div>
                        </div>
                    </div>
                    <!-- friends panel -->
                <?php }?>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                    <!-- pages panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
);" >
                                            <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</span>
                                        </a>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>
                            </div>
                        </div>
                    </div>
                    <!-- pages panel -->
                <?php }?>
            <?php }?>

            <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                    <!-- groups panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['groups'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
);" >
                                            <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</span>
                                        </a>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>
                            </div>
                        </div>
                    </div>
                    <!-- groups panel -->
                <?php }?>
            <?php }?>
        </div>
        <div class="col-sm-8">
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
            <!-- publisher -->
            <?php echo $_smarty_tpl->getSubTemplate ('_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_privacy'=>true), 0);
?>

            <!-- publisher -->
            <?php }?>

            <!-- posts -->
            <?php echo $_smarty_tpl->getSubTemplate ('_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id']), 0);
?>

            <!-- posts -->
        </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friends") {?>
        <!-- friends -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests" class="btn btn-default btn-sm">
                            <?php echo __("Friend Requests");?>

                        </a>
                    </div>
                    <!-- friend requests -->
                    <?php }?>

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong><?php echo __("Friends");?>
</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                                <strong class="pr5"><?php echo __("Friends");?>
</strong>
                                <small><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_friends'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_friends'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                            <ul class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['friends'];
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

                            <?php if (count($_smarty_tpl->tpl_vars['profile']->value['friends']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <span><?php echo __("See More");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            <?php }?>
                        <?php } else { ?>
                            <p class="text-center text-muted mt10">
                                <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
 <?php echo __("doesn't have friends");?>

                            </p>
                        <?php }?>
                    <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo __("No friends to show");?>

                        </p>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- friends -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followers") {?>
        <!-- followers -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests" class="btn btn-default btn-sm">
                            <?php echo __("Friend Requests");?>

                        </a>
                    </div>
                    <!-- friend requests -->
                    <?php }?>

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong><?php echo __("Friends");?>
</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers">
                                <strong class="pr5"><?php echo __("Followers");?>
</strong>
                                <small><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['followers_count'] > 0) {?>
                        <ul class="row">
                            <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['followers'];
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

                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followers']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="followers" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>
                    <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
 <?php echo __("doesn't have followers");?>

                        </p>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- followers -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followings") {?>
        <!-- followings -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests" class="btn btn-default btn-sm">
                            <?php echo __("Friend Requests");?>

                        </a>
                    </div>
                    <!-- friend requests -->
                    <?php }?>

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong><?php echo __("Friends");?>
</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings">
                                <strong class="pr5"><?php echo __("Followings");?>
</strong>
                                <small><?php echo $_smarty_tpl->tpl_vars['profile']->value['followings_count'];?>
</small>
                            </a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['followings_count'] > 0) {?>
                        <ul class="row">
                            <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['followings'];
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

                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followings']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="followings" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                            <span><?php echo __("See More");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        <?php }?>
                    <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_fullname'];?>
 <?php echo __("doesn't have followings");?>

                        </p>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- followings -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>
        <!-- likes -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon">
                    <!-- panel title -->
                    <i class="fa fa-thumbs-o-up pr5 panel-icon"></i>
                    <strong><?php echo __("Likes");?>
</strong>
                    <!-- panel title -->
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                            <ul class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_parent'=>"profile"), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>
                            </ul>

                            <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="profile_pages" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <span><?php echo __("See More");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            <?php }?>
                        <?php } else { ?>
                            <p class="text-center text-muted mt10">
                                <?php echo __("No pages to show");?>

                            </p>
                        <?php }?>
                    <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo __("No pages to show");?>

                        </p>
                    <?php }?>

                        
                </div>
            </div>
        </div>
        <!-- likes -->

        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
        <!-- groups -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon">
                    <!-- panel title -->
                    <i class="fa fa-users pr5 panel-icon"></i>
                    <strong><?php echo __("Groups");?>
</strong>
                    <!-- panel title -->
                </div>
                <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                            <ul class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['profile']->value['groups'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
                                <?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_parent'=>"profile"), 0);
?>

                                <?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>
                            </ul>

                            <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="profile_groups" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                <span><?php echo __("See More");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            <?php }?>
                        <?php } else { ?>
                            <p class="text-center text-muted mt10">
                                <?php echo __("No groups to show");?>

                            </p>
                        <?php }?>
                    <?php } else { ?>
                        <p class="text-center text-muted mt10">
                            <?php echo __("No groups to show");?>

                        </p>
                    <?php }?>
                    
                </div>
            </div>
        </div>
        <!-- groups -->

        <?php }?>

    </div>
    <!-- profile-content -->

</div>
<!-- page content -->

<?php echo $_smarty_tpl->getSubTemplate ('_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>