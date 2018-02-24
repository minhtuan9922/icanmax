{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20">
    <div class="row">

        <div class="col-md-3 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav">
                        <li {if $view == ""}class="active selected"{/if}>
                            <a href="{$system.system_url}/settings"><i class="fa fa-wrench fa-fw fa-lg pr10"></i> {__("Thiết lập tài khoản")}</a>
                        </li>
                        <li {if $view == "profile"}class="active selected"{/if}>
                            <a href="{$system.system_url}/settings/profile"><i class="fa fa-cog fa-fw fa-lg pr10"></i> {__("Sửa hồ sơ")}</a>
                        </li>
                        <li {if $view == "privacy"}class="active selected"{/if}>
                            <a href="{$system.system_url}/settings/privacy"><i class="fa fa-shield fa-fw fa-lg pr10"></i> {__("Thiết lập riêng tư")}</a>
                        </li>
                        {if $system['social_login_enabled']}
                            {if $system['facebook_login_enabled'] || $system['twitter_login_enabled'] || $system['google_login_enabled']}
                                <li {if $view == "linked"}class="active selected"{/if}>
                                    <a href="{$system.system_url}/settings/linked"><i class="fa fa-share-alt fa-fw fa-lg pr10"></i> {__("Liên kết tài khoản")}</a>
                                </li>
                            {/if}
                        {/if}
                        <li {if $view == "blocking"}class="active selected"{/if}>
                            <a href="{$system.system_url}/settings/blocking"><i class="fa fa-minus-circle fa-fw fa-lg pr10"></i> {__("Quản lý chặn")}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-9">
            <div class="panel panel-default">

                {if $view == ""}
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-wrench pr5 panel-icon"></i>
                            <strong>{__("Thiết lập tài khoản")}</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#username" data-toggle="tab">
                                    <strong class="pr5">{__("Tên đăng nhập")}</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#email" data-toggle="tab">
                                    <strong class="pr5">{__("Bảo mật")}</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#password" data-toggle="tab">
                                    <strong class="pr5">{__("Mật khẩu")}</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- username tab -->
                        <div class="tab-pane active" id="username">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=username">
                                <div class="form-group">
                                    <label for="username">{__("Tên đăng nhập")}</label>
                                    <input type="text" class="form-control" name="username" id="username" value="{$user->_data['user_name']}" disabled="disabled">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" disabled="disabled">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- username tab -->
<script id="phone" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title">Hướng dẫn thay đổi số điện thoại</h5>
    </div>
    <div class="modal-body">
        <p>Có người đăng nhập vào tài khoản này từ nơi khác! Nếu không phải là bạn vui lòng đổi mật khẩu. Vui lòng đăng nhập lại.</p>
    </div>
    <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
    </div>
</script>
                        <!-- email tab -->
                        <div class="tab-pane" id="email">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=email">
                                <div class="form-group">
                                    <label for="email">{__("Địa chỉ Email")}</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{$user->_data['user_email']}">
                                </div>
{if $user->_data['phone']==null}
                                <div class="form-group">
                                    <label for="username">{__("Số điện thoại")} (<a class="text-link" data-toggle="modal" data-url="#phone">Hướng dẫn</a>)</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{$user->_data['phone']}">
                                </div>
{else}
                                <div class="form-group">
                                    <label for="username">{__("Số điện thoại")} (<a class="text-link" data-toggle="modal" data-url="#phone">Hướng dẫn lấy mã</a>)</label>
                                    <input type="text" class="form-control" name="username" id="username" value="{$user->_data['phone']}" disabled="disabled">
                                </div>
{/if}
                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- email tab -->

                        <!-- password tab -->
                        <div class="tab-pane" id="password">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=password">
                                <div class="form-group">
                                    <label for="current">{__("Mật khẩu cũ")}</label>
                                    <input type="password" class="form-control" name="current" id="current">
                                </div>
                                <div class="form-group">
                                    <label for="new">{__("Mật khẩu mới")}</label>
                                    <input type="password" class="form-control" name="new" id="new">
                                </div>
                                <div class="form-group">
                                    <label for="confirm">{__("Nhập lại mật khẩu mới")}</label>
                                    <input type="password" class="form-control" name="confirm" id="confirm">
                                </div>

                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- password tab -->
                    </div>
                {elseif $view == "profile"}
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-wrench pr5 panel-icon"></i>
                            <strong>{__("Sửa hồ sơ")}</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#basic" data-toggle="tab">
                                    <strong class="pr5">{__("Căn bản")}</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#work" data-toggle="tab">
                                    <strong class="pr5">{__("Nghề nghiệp")}</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#location" data-toggle="tab">
                                    <strong class="pr5">{__("Vị trí")}</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#education" data-toggle="tab">
                                    <strong class="pr5">{__("Học thức")}</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- basic tab -->
                        <div class="tab-pane active" id="basic">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=basic">
                                <div class="form-group">
                                    <label for="fullname">{__("Tên hiển thị")}</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" value="{$user->_data['user_fullname']}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">{__("Tôi là")}</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="none">{__("Chọn giới tính")}:</option>
                                        <option {if $user->_data['user_gender'] == "M"}selected{/if} value="M">{__("Trai")}</option>
                                        <option {if $user->_data['user_gender'] == "F"}selected{/if} value="F">{__("Gái")}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{__("Sinh nhật")}</label>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_month">
                                                <option value="none">{__("Chọn tháng")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '1'}selected{/if} value="1">{__("Tháng 1")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '2'}selected{/if} value="2">{__("Tháng 2")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '3'}selected{/if} value="3">{__("Tháng 3")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '4'}selected{/if} value="4">{__("Tháng 4")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '5'}selected{/if} value="5">{__("Tháng 5")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '6'}selected{/if} value="6">{__("Tháng 6")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '7'}selected{/if} value="7">{__("Tháng 7")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '8'}selected{/if} value="8">{__("Tháng 8")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '9'}selected{/if} value="9">{__("Tháng 9")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '10'}selected{/if} value="10">{__("Tháng 10")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '11'}selected{/if} value="11">{__("Tháng 11")}</option>
                                                <option {if $user->_data['user_birthdate_parsed']['month'] == '12'}selected{/if} value="12">{__("Tháng 12")}</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_day">
                                                <option value="none">{__("Chọn ngày")}</option>
                                                {for $i=1 to 31}
                                                <option {if $user->_data['user_birthdate_parsed']['day'] == $i}selected{/if} value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" name="birth_year">
                                                <option value="none">{__("Chọn năm")}</option>
                                                {for $i=1905 to 2015}
                                                <option {if $user->_data['user_birthdate_parsed']['year'] == $i}selected{/if} value="{$i}">{$i}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- basic tab -->

                        <!-- work tab -->
                        <div class="tab-pane" id="work">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=work">
                                <div class="form-group">
                                    <label for="work_title">{__("Nghề nghiệp")}</label>
                                    <input type="text" class="form-control" name="work_title" id="work_title" value="{$user->_data['user_work_title']}">
                                </div>
                                <div class="form-group">
                                    <label for="work_place">{__("Nơi làm việc")}</label>
                                    <input type="text" class="form-control" name="work_place" id="work_place" value="{$user->_data['user_work_place']}">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- work tab -->

                        <!-- location tab -->
                        <div class="tab-pane" id="location">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=location">
                                
                                <div class="form-group">
                                    <label for="city">{__("Thành phố hiện tại")}</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{$user->_data['user_current_city']}">
                                </div>
                                <div class="form-group">
                                    <label for="hometown">{__("Quên nhà")}</label>
                                    <input type="text" class="form-control" name="hometown" id="hometown" value="{$user->_data['user_hometown']}">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- location tab -->

                        <!-- education tab -->
                        <div class="tab-pane" id="education">
                            <form class="js_ajax-forms" data-url="users/settings.php?edit=education">
                                
                                <div class="form-group">
                                    <label for="edu_major">{__("Chính")}</label>
                                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="{$user->_data['user_edu_major']}">
                                </div>
                                <div class="form-group">
                                    <label for="edu_school">{__("Trường học")}</label>
                                    <input type="text" class="form-control" name="edu_school" id="edu_school" value="{$user->_data['user_edu_school']}">
                                </div>
                                <div class="form-group">
                                    <label for="edu_class">{__("Lớp")}</label>
                                    <input type="text" class="form-control" name="edu_class" id="edu_class" value="{$user->_data['user_edu_class']}">
                                </div>

                                <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->
                            </form>
                        </div>
                        <!-- education tab -->
                    </div>
                {elseif $view == "privacy"}
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-shield pr5 panel-icon"></i>
                        <strong>{__("Privacy Settings")}</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=privacy">
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_chat">
                                    {__("Trò chuyện")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_chat" id="privacy_chat">
                                        <option {if $user->_data['user_chat_enabled'] == 0}selected{/if} value="0">
                                            {__("Ngoại tuyến")}
                                        </option>
                                        <option {if $user->_data['user_chat_enabled'] == 1}selected{/if} value="1">
                                            {__("Trực tuyến")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_birthdate">
                                    {__("Ai có thể xem")} {__("ngày sinh của bạn")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_birthdate" id="privacy_birthdate">
                                        <option {if $user->_data['user_privacy_birthdate'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_birthdate'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_work">
                                    {__("Ai có thể xem")} {__("nơi làm việc của tôi")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_work" id="privacy_work">
                                        <option {if $user->_data['user_privacy_work'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_work'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_location">
                                    {__("Ai có thể xem")} {__("vị trí của tôi")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_location" id="privacy_location">
                                        <option {if $user->_data['user_privacy_location'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_location'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_education">
                                    {__("Ai có thể xem")} {__("học thức")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_education" id="privacy_education">
                                        <option {if $user->_data['user_privacy_education'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_education'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_friends">
                                    {__("Ai có thể xem")} {__("bạn bè của tôi")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_friends" id="privacy_friends">
                                        <option {if $user->_data['user_privacy_friends'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_friends'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                        <option {if $user->_data['user_privacy_friends'] == "me"}selected{/if} value="me">
                                            {__("Chỉ tôi")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_pages">
                                    {__("Ai có thể xem")} {__("trang tôi thích")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_pages" id="privacy_pages">
                                        <option {if $user->_data['user_privacy_pages'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_pages'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                        <option {if $user->_data['user_privacy_pages'] == "me"}selected{/if} value="me">
                                            {__("Chỉ tôi")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_groups">
                                    {__("Ai có thể xem")} {__("nhóm tôi tham gia")}
                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_groups" id="privacy_groups">
                                        <option {if $user->_data['user_privacy_groups'] == "public"}selected{/if} value="public">
                                            {__("Mọi người")}
                                        </option>
                                        <option {if $user->_data['user_privacy_groups'] == "friends"}selected{/if} value="friends">
                                            {__("Bạn bè")}
                                        </option>
                                        <option {if $user->_data['user_privacy_groups'] == "me"}selected{/if} value="me">
                                            {__("Chỉ tôi")}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-7 col-sm-offset-5">
                                    <button type="submit" class="btn btn-primary">{__("Lưu thay đổi")}</button>
                                </div>
                            </div>
                            
                            <!-- success -->
                            <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                            <!-- success -->

                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->
                        </form>
                    </div>
                {elseif $view == "linked"}
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-share-alt pr5 panel-icon"></i>
                        <strong>{__("Liên kết tài khoản")}</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        {if $system['social_login_enabled']}
                            {if $system['facebook_login_enabled'] || $system['twitter_login_enabled'] || $system['google_login_enabled']}
                                <ul>
                                    {if $system['facebook_login_enabled']}
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-facebook-square fa-4x" style="color: #3B579D"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    {if $user->_data['facebook_connected']}
                                                    <a class="btn btn-danger" href="{$system['system_url']}/revoke/facebook">{__("Ngắt kết nối")}</a>
                                                    {else}
                                                    <a class="btn btn-primary" href="{$system['system_url']}/connect/facebook">{__("Kết nối")}</a>
                                                    {/if}
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        {__("Facebook")}
                                                    </div>
                                                    {if $user->_data['facebook_connected']}
                                                    {__("Ngắt kết nối với tài khoản")} {__("Facebook")}
                                                    {else}
                                                    {__("Kết nối với tài khoản")} {__("Facebook")}
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {/if}
                                    {if $system['twitter_login_enabled']}
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-twitter-square fa-4x" style="color: #55ACEE"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    {if $user->_data['twitter_connected']}
                                                    <a class="btn btn-danger" href="{$system['system_url']}/revoke/twitter">{__("Ngắt kết nối")}</a>
                                                    {else}
                                                    <a class="btn btn-primary" href="{$system['system_url']}/connect/twitter">{__("Kết nối")}</a>
                                                    {/if}
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        {__("Twitter")}
                                                    </div>
                                                    {if $user->_data['twitter_connected']}
                                                    {__("Ngắt kết nối với tài khoản")} {__("Twitter")}
                                                    {else}
                                                    {__("Kết nối với tài khoản")} {__("Twitter")}
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {/if}
                                    {if $system['google_login_enabled']}
                                    <li class="feeds-item">
                                        <div class="data-container">
                                            <div class="data-avatar">
                                                <i class="fa fa-google-plus-square fa-4x" style="color: #DC4A38"></i>
                                            </div>
                                            <div class="data-content">
                                                <div class="pull-right flip">
                                                    {if $user->_data['google_connected']}
                                                    <a class="btn btn-danger" href="{$system['system_url']}/revoke/google">{__("Ngắt kết nối")}</a>
                                                    {else}
                                                    <a class="btn btn-primary" href="{$system['system_url']}/connect/google">{__("Kết nối")}</a>
                                                    {/if}
                                                </div>
                                                <div>
                                                    <div class="name mt5 text-primary">
                                                        {__("Google")}
                                                    </div>
                                                    {if $user->_data['google_connected']}
                                                    {__("Ngắt kết nối với tài khoản")} {__("Google")}
                                                    {else}
                                                    {__("Kết nối với tài khoản")} {__("Google")}
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {/if}
                                </ul>
                            {/if}
                        {/if}
                    </div>
                {elseif $view == "blocking"}
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-minus-circle pr5 panel-icon"></i>
                        <strong>{__("Quản lý chặn")}</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            {__("Một khi bạn chặn ai đó , người đó không còn có thể nhìn thấy những điều mà bạn đăng trên dòng thời gian của bạn")}<br>
                            {__("Lưu ý : Không bao gồm các ứng dụng , trò chơi hoặc các nhóm bạn cả hai tham gia")}
                        </div>

                        {if count($blocks) > 0}
                            <ul>
                                {foreach $blocks as $_user}
                                {include file='__feeds_user.tpl' _connection="blocked"}
                                {/foreach}
                            </ul>
                        {else}
                            <p class="text-center text-muted">
                                {__("No blocked users")}
                            </p>
                        {/if}

                        {if count($blocks) >= $system['max_results']}
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="blocks">
                                <span>{__("Xem thêm")}</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                        {/if}
                    </div>
                {/if}
                
            </div>
        </div>
        
    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}