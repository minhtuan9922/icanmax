{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container">

    <!-- profile-header -->
    <div class="profile-header">
        <!-- profile-cover -->
        {if $profile['user_cover']}
        <div class="profile-cover-wrapper" style="background-image:url('{$system['system_uploads']}/{$profile['user_cover']}');">
        {else}
        <div class="profile-cover-wrapper no-cover">
        {/if}
            {if $profile['user_id'] == $user->_data['user_id']}
            <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-user"></i>
            </div>
            {if $profile['user_cover']}
            <div class="profile-cover-delete">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-user" title="{__("Xóa ảnh bìa")}"></i>
            </div>
            {/if}
            <div class="profile-cover-change-loader">
                <div class="loader loader_large"></div>
            </div>
            {/if}
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
            <img src="{$profile['user_picture']}" alt="{$profile['user_fullname']}">
            {if $profile['user_id'] == $user->_data['user_id']}
            <div class="profile-avatar-change">
                <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
            </div>
            <div class="profile-avatar-delete">
                <i class="fa fa-trash js_delete-picture" data-handle="picture-user" title="{__("Xóa ảnh đại diện")}"></i>
            </div>
            <div class="profile-avatar-change-loader">
                <div class="loader loader_medium"></div>
            </div>
            {/if}
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
            <a href="{$system['system_url']}/{$profile['user_name']}">{$profile['user_fullname']}</a>
            {if $profile['user_verified']}
            <i data-toggle="tooltip" data-placement="top" title="{__("Đã xác minh")}" class="fa fa-check"></i>
            {/if}
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
            {if $user->_logged_in}
                {if $user->_data['user_id'] != $profile['user_id']}
                    {if $profile['we_friends']}
                        <div class="btn btn-default btn-friends js_friend-remove" data-uid="{$profile['user_id']}">
                            <i class="fa fa-check fa-fw"></i> {__("Bạn bè")}
                        </div>
                    {elseif $profile['he_request']}
                        <div class="btn btn-primary js_friend-accept" data-uid="{$profile['user_id']}">{__("Xác nhận")}</div>
                        <div class="btn btn-default js_friend-decline" data-uid="{$profile['user_id']}">{__("Từ chối")}</div>
                    {elseif $profile['i_request']}
                        <div class="btn btn-default btn-sm js_friend-cancel" data-uid="{$profile['user_id']}">
                            <i class="fa fa-check fa-user-plus"></i> {__("Đã gửi yêu cầu")}
                        </div>
                    {else}
                        <button type="button" class="btn btn-success js_friend-add" data-uid="{$profile['user_id']}">
                            <i class="fa fa-user-plus"></i> {__("Thêm bạn")}
                        </button>
                    {/if}

                    <div class="btn-group">
                        {if $profile['i_follow']}
                            <button type="button" class="btn btn-default js_unfollow" data-uid="{$profile['user_id']}">
                                <i class="fa fa-check"></i>
                                {__("Đang theo dõi")}
                            </button>
                        {else}
                            <button type="button" class="btn btn-default js_follow" data-uid="{$profile['user_id']}">
                                <i class="fa fa-rss"></i>
                                {__("Theo dõi")}
                            </button>
                        {/if}
                        <button type="button" class="btn btn-default js_chat-start" data-name="{$profile['user_fullname']}" data-uid="{$profile['user_id']}">{__("Nhắn tin")}</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="js_report-user" data-uid="{$profile['user_id']}">{__("Báo cáo")}</a></li>
                                <li><a href="#" class="js_block-user" data-uid="{$profile['user_id']}">{__("Chặn")}</a></li>
                            </ul>
                        </div>
                    </div>
                {else}
                <a href="{$system.system_url}/settings/profile" class="btn btn-default">
                    <i class="fa fa-pencil"></i> {__("Cập nhật thông tin")}
                </a>
                {/if}
            {/if}
        </div>
        <!-- profile-buttons -->

        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper">
            <ul class="nav">
                <li>
                    <a href="{$system['system_url']}/{$profile['user_name']}">
                        {__("Dòng thời gian")}
                    </a>
                </li>
                <li class="middle-tabs">
                    <a href="{$system['system_url']}/{$profile['user_name']}/friends">
                        {__("Bạn bè")} 
                        {if $profile['mutual_friends_count'] && $profile['mutual_friends_count'] > 0} 
                        <small class="text-muted">
                            (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid={$profile['user_id']}">{$profile['mutual_friends_count']} {__("Bạn chung")}</span>)
                        </small>
                        {/if}
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {__("Chức năng")}
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="middle-tabs-alt">
                            <a href="{$system['system_url']}/{$profile['user_name']}/friends">{__("Bạn bè")}</a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/likes">{__("Đã thích")}</a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/groups">{__("Nhóm")}</a>
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

        {if $user->_logged_in && $user->_data['user_id'] != $profile['user_id'] && !$profile['we_friends']}
        <div class="col-sm-12">
            <div class="panel panel-default panel-mutual-friends">
                <div class="panel-heading">
                    {__("Bạn có biết")} {get_firstname($profile['user_fullname'])}
                </div>
                <div class="panel-body">
                    <div>
                        {__("Để xem những gì")} {get_firstname($profile['user_fullname'])} {__("chia sẽ với bạn bè")}, 
                        <span class="text-link">
                            {__("gửi một yêu cầu kết bạn")}
                        </span>
                        <div class="pull-right flip">
                            {if $profile['he_request']}
                                <div class="btn btn-primary js_friend-accept" data-uid="{$profile['user_id']}">{__("Chấp nhận")}</div>
                                <div class="btn btn-default js_friend-decline" data-uid="{$profile['user_id']}">{__("Từ chối")}</div>
                            {elseif $profile['i_request']}
                                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="{$profile['user_id']}">
                                    <i class="fa fa-check fa-user-plus"></i> {__("Yêu cầu kết bạn")}
                                </div>
                            {else}
                                <button type="button" class="btn btn-success js_friend-add" data-uid="{$profile['user_id']}">
                                    <i class="fa fa-user-plus"></i> {__("Thêm bạn")}
                                </button>
                            {/if}
                        </div>
                    </div>
                    {if $profile['mutual_friends_count'] && $profile['mutual_friends_count'] > 0}
                        <div class="mt10 clearfix">
                            <ul class="pull-left flip">
                                {foreach $profile['mutual_friends'] as $mutual_friend}
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="{$mutual_friend['user_fullname']}" class="post-avatar-picture" href="{$system['system_url']}/{$mutual_friend['user_name']}" style="background-image:url({$mutual_friend['user_picture']});">
                                        </a>
                                    </li>
                                    {if $mutual_friend@index > 3}{break}{/if}
                                {/foreach}
                                
                                
                            </ul>
                            <div class="pull-left flip mt10">
                                <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid={$profile['user_id']}">{$profile['mutual_friends_count']} {__("Bạn chung")}</span>
                            </div>
                        </div> 
                    {/if}
                </div>
            </div>
        </div>
        {/if}

        <!-- profile-buttons alt -->
        {if $user->_logged_in && $user->_data['user_id'] != $profile['user_id']}
        <div class="col-sm-12">
            <div class="panel panel-default profile-buttons-wrapper-alt">
                <div class="panel-body">
                    {if $user->_logged_in && $user->_data['user_id'] != $profile['user_id']}
                        {if $profile['we_friends']}
                            <div class="btn btn-default btn-friends js_friend-remove" data-uid="{$profile['user_id']}">
                                <i class="fa fa-check fa-fw"></i> {__("Bạn bè")}
                            </div>
                        {elseif $profile['he_request']}
                            <div class="btn btn-primary js_friend-accept" data-uid="{$profile['user_id']}">{__("Xác nhận")}</div>
                            <div class="btn btn-default js_friend-decline" data-uid="{$profile['user_id']}">{__("Từ chối")}</div>
                        {elseif $profile['i_request']}
                            <div class="btn btn-default btn-sm js_friend-cancel" data-uid="{$profile['user_id']}">
                                <i class="fa fa-check fa-user-plus"></i> {__("Yêu cầu kết bạn")}
                            </div>
                        {else}
                            <button type="button" class="btn btn-success js_friend-add" data-uid="{$profile['user_id']}">
                                <i class="fa fa-user-plus"></i> {__("Thêm bạn")}
                            </button>
                        {/if}

                        <div class="btn-group pull-right flip">
                            {if $profile['i_follow']}
                            <button type="button" class="btn btn-default js_unfollow" data-uid="{$profile['user_id']}">
                                <i class="fa fa-check"></i>
                                {__("Đang theo dõi")}
                            </button>
                            {else}
                            <button type="button" class="btn btn-default js_follow" data-uid="{$profile['user_id']}">
                                <i class="fa fa-rss"></i>
                                {__("Theo dõi")}
                            </button>
                            {/if}
                            <button type="button" class="btn btn-default js_chat-start" data-name="{$profile['user_fullname']}" data-uid="{$profile['user_id']}">{__("Nhắn tin")}</button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="js_report-user" data-uid="{$profile['user_id']}">{__("Báo cáo")}</a></li>
                                <li><a href="#" class="js_block-user" data-uid="{$profile['user_id']}">{__("Chặn")}</a></li>
                                </ul>
                            </div>
                        </div>
                    {else}
                        <a href="{$system.system_url}/settings/profile" class="btn btn-default">
                            <i class="fa fa-pencil"></i> {__("Cập nhật thông tin")}
                        </a>
                    {/if}
                </div>
            </div>
        </div>
        {/if}
        <!-- profile-buttons alt -->

        {if $view == ""}
        <div class="col-sm-4">
            <!-- about -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    {__("Thông tin")}
                </div>
                <div class="panel-body">
                    <ul class="about-list">

                        {if !is_empty($profile['user_work_title'])}
                            {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_work'] == "public" || $profile['we_friends']}
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                    {$profile['user_work_title']} {__("tại")} <a href="#">{$profile['user_work_place']}</a>
                                </div>
                            </li>
                            {/if}
                        {/if}

                        {if !is_empty($profile['user_edu_major'])}
                            {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_education'] == "public" || $profile['we_friends']}
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-graduation-cap fa-fw fa-lg"></i>
                                    {__("Đã học")} {$profile['user_edu_major']} 
                                    {__("tại")}  <span class="text-link">{$profile['user_edu_school']}</span>
                                    <div class="details">
                                        Lớp {$profile['user_edu_class']}
                                    </div>
                                </div>
                            </li>
                            {/if}
                        {/if}

                        {if !is_empty($profile['user_current_city'])}
                            {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_location'] == "public" || $profile['we_friends']}
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-home fa-fw fa-lg"></i>
                                    {__("Đến từ")} <span class="text-link">{$profile['user_current_city']}</span>
                                </div>
                            </li>
                            {/if}
                        {/if}
                        
                        {if !is_empty($profile['user_hometown'])}
                            {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_location'] == "public" || $profile['we_friends']}
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                    {__("Sinh tại")} <span class="text-link">{$profile['user_hometown']}</span>
                                </div>
                            </li>
                            {/if}
                        {/if}

                        <li>
                            <div class="about-list-item">
                                {if $profile['user_gender'] == "M"}
                                    <i class="fa fa-male fa-fw fa-lg"></i>
                                    {__("Con trai")}
                                {else}
                                    <i class="fa fa-female fa-fw fa-lg"></i>
                                    {__("Con gái")}
                                {/if}
                            </div>
                        </li>
                        
                        {if $profile['user_birthdate'] != null}
                            {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_birthdate'] == "public" || $profile['we_friends']}
                            <li>
                                <div class="about-list-item">
                                    <i class="fa fa-calendar fa-fw fa-lg"></i>
                                    {$profile['user_birthdate']|date_format:"%d/%m/%Y"}
                                </div>
                            </li>
                            {/if}
                        {/if}
                        
                        <li>
                            <div class="about-list-item">
                                <i class="fa fa-rss fa-fw fa-lg"></i>
                                {__("Người theo dõi")} 
                                <a href="{$system['system_url']}/{$profile['user_name']}/followers">{$profile['followers_count']}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- about -->

            {if $profile['friends_count'] > 0}
                {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_friends'] == "public" || ($profile['user_privacy_friends'] == "friends" && $profile['we_friends'])}
                    <!-- friends panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="{$system['system_url']}/{$profile['user_name']}/friends">{__("Bạn bè")}</a> · 
                            <small>{$profile['friends_count']}</small> 
                            {if $profile['mutual_friends_count'] && $profile['mutual_friends_count'] > 0}
                            <small>
                                (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid={$profile['user_id']}">{$profile['mutual_friends_count']} {__("bạn chung")}</span>)
                            </small>
                            {/if}
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                {foreach $profile['friends'] as $_friend}
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="{$system['system_url']}/{$_friend['user_name']}" style="background-image:url({$_friend['user_picture']});" >
                                            <span class="friend-name">{$_friend['user_fullname']}</span>
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <!-- friends panel -->
                {/if}
            {/if}

            {if count($profile['pages']) > 0}
                {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_pages'] == "public" || ($profile['user_privacy_pages'] == "friends" && $profile['we_friends'])}
                    <!-- pages panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="{$system['system_url']}/{$profile['user_name']}/likes">{__("Đã thích")}</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                {foreach $profile['pages'] as $_page}
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="{$system['system_url']}/pages/{$_page['page_name']}" style="background-image:url({$_page['page_picture']});" >
                                            <span class="friend-name">{$_page['page_title']}</span>
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <!-- pages panel -->
                {/if}
            {/if}

            {if count($profile['groups']) > 0}
                {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_groups'] == "public" || ($profile['user_privacy_groups'] == "friends" && $profile['we_friends'])}
                    <!-- groups panel -->
                    <div class="panel panel-default panel-friends">
                        <div class="panel-heading">
                            <a href="{$system['system_url']}/{$profile['user_name']}/groups">{__("Nhóm")}</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                {foreach $profile['groups'] as $_group}
                                    <div class="col-xs-3 col-sm-4">
                                        <a class="friend-picture" href="{$system['system_url']}/groups/{$_group['group_name']}" style="background-image:url({$_group['group_picture']});" >
                                            <span class="friend-name">{$_group['group_title']}</span>
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <!-- groups panel -->
                {/if}
            {/if}
        </div>
        <div class="col-sm-8">
            {if $user->_logged_in && $user->_data['user_id'] == $profile['user_id']}
            <!-- publisher -->
            {include file='_publisher.tpl' _handle="user" _privacy=true}
            <!-- publisher -->
            {/if}

            <!-- posts -->
            {include file='_posts.tpl' _get="posts_profile" _id=$profile['user_id']}
            <!-- posts -->
        </div>

        {elseif $view == "friends"}
        <!-- friends -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    {if $user->_logged_in && $user->_data['user_id'] == $profile['user_id']}
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="{$system['system_url']}/friends/requests" class="btn btn-default btn-sm">
                            {__("Yêu cầu kết bạn")}
                        </a>
                    </div>
                    <!-- friend requests -->
                    {/if}

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong>{__("Bạn bè")}</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="{$system['system_url']}/{$profile['user_name']}/friends">
                                <strong class="pr5">{__("Bạn bè")}</strong>
                                <small>{$profile['friends_count']}</small>
                            </a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/followers">{__("Người theo dõi")}</a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/followings">{__("Đang theo dõi")}</a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_friends'] == "public" || ($profile['user_privacy_friends'] == "friends" && $profile['we_friends'])}
                        {if $profile['friends_count'] > 0}
                            <ul class="row">
                                {foreach $profile['friends'] as $_user}
                                    {include file='__feeds_user.tpl' _connection=$_user["connection"] _parent="profile"}
                                {/foreach}
                            </ul>

                            {if count($profile['friends']) >= $system['min_results_even']}
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="friends" data-uid="{$profile['user_id']}">
                                <span>{__("Xem thêm")}</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            {/if}
                        {else}
                            <p class="text-center text-muted mt10">
                                {$profile['user_fullname']} {__("không có bạn bè")}
                            </p>
                        {/if}
                    {else}
                        <p class="text-center text-muted mt10">
                            {__("Không có bạn bè để hiển thị")}
                        </p>
                    {/if}
                </div>
            </div>
        </div>
        <!-- friends -->

        {elseif $view == "followers"}
        <!-- followers -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    {if $user->_logged_in && $user->_data['user_id'] == $profile['user_id']}
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="{$system['system_url']}/friends/requests" class="btn btn-default btn-sm">
                            {__("Yêu cầu kết bạn")}
                        </a>
                    </div>
                    <!-- friend requests -->
                    {/if}

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong>{__("Bạn bè")}</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/friends">{__("Bạn bè")}</a>
                        </li>
                        <li class="active">
                            <a href="{$system['system_url']}/{$profile['user_name']}/followers">
                                <strong class="pr5">{__("Người theo dõi")}</strong>
                                <small>{$profile['followers_count']}</small>
                            </a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/followings">{__("Đang theo dõi")}</a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    {if $profile['followers_count'] > 0}
                        <ul class="row">
                            {foreach $profile['followers'] as $_user}
                                {include file='__feeds_user.tpl' _connection=$_user["connection"] _parent="profile"}
                            {/foreach}
                        </ul>

                        {if count($profile['followers']) >= $system['min_results_even']}
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="followers" data-uid="{$profile['user_id']}">
                            <span>{__("Xem thêm")}</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        {/if}
                    {else}
                        <p class="text-center text-muted mt10">
                            {$profile['user_fullname']} {__("không có ai đang theo dõi")}
                        </p>
                    {/if}
                </div>
            </div>
        </div>
        <!-- followers -->

        {elseif $view == "followings"}
        <!-- followings -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon with-nav">
                    {if $user->_logged_in && $user->_data['user_id'] == $profile['user_id']}
                    <!-- friend requests -->
                    <div class="pull-right flip">
                        <a href="{$system['system_url']}/friends/requests" class="btn btn-default btn-sm">
                            {__("Yêu cầu kết bạn")}
                        </a>
                    </div>
                    <!-- friend requests -->
                    {/if}

                    <!-- panel title -->
                    <div class="mb20">
                        <i class="fa fa-users pr5 panel-icon"></i>
                        <strong>{__("Bạn bè")}</strong>
                    </div>
                    <!-- panel title -->

                    <!-- panel nav -->
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/friends">{__("Bạn bè")}</a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/{$profile['user_name']}/followers">{__("Người theo dõi")}</a>
                        </li>
                        <li class="active">
                            <a href="{$system['system_url']}/{$profile['user_name']}/followings">
                                <strong class="pr5">{__("Đang theo dõi")}</strong>
                                <small>{$profile['followings_count']}</small>
                            </a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                </div>
                <div class="panel-body">
                    {if $profile['followings_count'] > 0}
                        <ul class="row">
                            {foreach $profile['followings'] as $_user}
                                {include file='__feeds_user.tpl' _connection=$_user["connection"] _parent="profile"}
                            {/foreach}
                        </ul>

                        {if count($profile['followings']) >= $system['min_results_even']}
                        <!-- see-more -->
                        <div class="alert alert-info see-more js_see-more" data-get="followings" data-uid="{$profile['user_id']}">
                            <span>{__("Xem thêm")}</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                        {/if}
                    {else}
                        <p class="text-center text-muted mt10">
                            {$profile['user_fullname']} {__("không theo dõi bất kỳ ai")}
                        </p>
                    {/if}
                </div>
            </div>
        </div>
        <!-- followings -->

        {elseif $view == "likes"}
        <!-- likes -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon">
                    <!-- panel title -->
                    <i class="fa fa-thumbs-o-up pr5 panel-icon"></i>
                    <strong>{__("Đã thích")}</strong>
                    <!-- panel title -->
                </div>
                <div class="panel-body">
                    {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_pages'] == "public" || ($profile['user_privacy_pages'] == "friends" && $profile['we_friends'])}
                        {if count($profile['pages']) > 0}
                            <ul class="row">
                                {foreach $profile['pages'] as $_page}
                                    {include file='__feeds_page.tpl' _parent="profile"}
                                {/foreach}
                            </ul>

                            {if count($profile['pages']) >= $system['max_results']}
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="profile_pages" data-uid="{$profile['user_id']}">
                                <span>{__("Xem thêm")}</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            {/if}
                        {else}
                            <p class="text-center text-muted mt10">
                                {__("Chưa có trang nào để hiển thị")}
                            </p>
                        {/if}
                    {else}
                        <p class="text-center text-muted mt10">
                            {__("Chưa có trang nào để hiển thị")}
                        </p>
                    {/if}

                        
                </div>
            </div>
        </div>
        <!-- likes -->

        {elseif $view == "groups"}
        <!-- groups -->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading with-icon">
                    <!-- panel title -->
                    <i class="fa fa-users pr5 panel-icon"></i>
                    <strong>{__("Nhóm")}</strong>
                    <!-- panel title -->
                </div>
                <div class="panel-body">
                    {if $profile['user_id'] == $user->_data['user_id'] || $profile['user_privacy_groups'] == "public" || ($profile['user_privacy_groups'] == "friends" && $profile['we_friends'])}
                        {if count($profile['groups']) > 0}
                            <ul class="row">
                                {foreach $profile['groups'] as $_group}
                                {include file='__feeds_group.tpl' _parent="profile"}
                                {/foreach}
                            </ul>

                            {if count($profile['groups']) >= $system['max_results']}
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="profile_groups" data-uid="{$profile['user_id']}">
                                <span>{__("Xem thêm")}</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            {/if}
                        {else}
                            <p class="text-center text-muted mt10">
                                {__("Chưa có trang nào để hiển thị")}
                            </p>
                        {/if}
                    {else}
                        <p class="text-center text-muted mt10">
                            {__("Chưa có trang nào để hiển thị")}
                        </p>
                    {/if}
                    
                </div>
            </div>
        </div>
        <!-- groups -->

        {/if}

    </div>
    <!-- profile-content -->

</div>
<!-- page content -->

{include file='_footer.tpl'}