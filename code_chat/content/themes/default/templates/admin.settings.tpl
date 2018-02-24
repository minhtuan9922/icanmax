<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-cog pr5 panel-icon"></i>
        <strong>{__("Thiết lập")}</strong>
    </div>
    <div class="panel-body">
        <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php">
            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    {__("Phiên bản hệ thống")}
                </label>
                <div class="col-sm-9">
                    <span class="help-block">
                        {$system['version']}
                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    {__("Tình trạng")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="system_live" class="onoffswitch-checkbox" id="system_live" {if $system['system_live']}checked{/if}>
                        <label class="onoffswitch-label" for="system_live"></label>
                    </div>
                    <span class="help-block">
                        {__("Chọn tắt để tắt toàn bộ trang web, chọn bật để khởi động trang web")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Thông báo tắt trang web")}
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="system_message" rows="3">{$system['system_message']}</textarea>
                    <span class="help-block">
                        {__("Thông báo cho người dùng khi tắt trang web")}
                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Website Title")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_title" value="{$system['system_title']}">
                    <span class="help-block">
                        {__("Tiêu đề trang")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Mô tả trang")}
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="system_description" rows="3">{$system['system_description']}</textarea>
                    <span class="help-block">
                        {__("Description of your website")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Tên miền trang")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_domain" value="{$system['system_domain']}">
                    <span class="help-block">
                        {__("Like: sngine.com (without 'www')")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Đường dẫn trang")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_url" value="{$system['system_url']}">
                    <span class="help-block">
                        {__("The path of your system")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Thư mục upload")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="system_uploads_directory" value="{$system['system_uploads_directory']}">
                    <span class="help-block">
                        {__("The path of uploads directory")}
                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Tình trạng đăng ký")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="users_can_register" class="onoffswitch-checkbox" id="users_can_register" {if $system['users_can_register']}checked{/if}>
                        <label class="onoffswitch-label" for="users_can_register"></label>
                    </div>
                    <span class="help-block">
                        {__("Chọn bật hoặc tắt đăng ký người dùng mới")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Email xác nhận")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_send_activation" class="onoffswitch-checkbox" id="email_send_activation" {if $system['email_send_activation']}checked{/if}>
                        <label class="onoffswitch-label" for="email_send_activation"></label>
                    </div>
                    <span class="help-block">
                        {__("Kích hoạt để buộc người dùng xác nhận Email khi đăng ký")}
                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Đăng nhận qua mạng xã hội")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="social_login_enabled" class="onoffswitch-checkbox" id="social_login_enabled" {if $system['social_login_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="social_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn registration/login via social media (Facebook, Twitter and etc) On and Off")}
                    </span>
                </div>
            </div>

            <!-- facebook -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Facebook Login")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="facebook_login_enabled" class="onoffswitch-checkbox" id="facebook_login_enabled" {if $system['facebook_login_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="facebook_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn registration/login via Facebook On and Off")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Facebook App ID")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="facebook_appid" value="{$system['facebook_appid']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Facebook App Secret")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="facebook_secret" value="{$system['facebook_secret']}">
                </div>
            </div>
            <!-- facebook -->

            <!-- twitter -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Twitter Login")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="twitter_login_enabled" class="onoffswitch-checkbox" id="twitter_login_enabled" {if $system['twitter_login_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="twitter_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn registration/login via Twitter On and Off")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Twitter App ID")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="twitter_appid" value="{$system['twitter_appid']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Twitter App Secret")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="twitter_secret" value="{$system['twitter_secret']}">
                </div>
            </div>
            <!-- twitter -->

            <!-- google -->
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Google Login")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="google_login_enabled" class="onoffswitch-checkbox" id="google_login_enabled" {if $system['google_login_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="google_login_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn registration/login via Google On and Off")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Google App ID")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="google_appid" value="{$system['google_appid']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Google App Secret")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="google_secret" value="{$system['google_secret']}">
                </div>
            </div>
            <!-- google -->

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Emails")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_smtp_enabled" class="onoffswitch-checkbox" id="email_smtp_enabled" {if $system['email_smtp_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="email_smtp_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Enable/Disable SMTP email system")}<br/>
                        {__("PHP mail() function will be used in case of disabled")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Server")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_server" value="{$system['email_smtp_server']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Require Authentication")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="email_smtp_authentication" class="onoffswitch-checkbox" id="email_smtp_authentication" {if $system['email_smtp_authentication']}checked{/if}>
                        <label class="onoffswitch-label" for="email_smtp_authentication"></label>
                    </div>
                    <span class="help-block">
                        {__("Enable/Disable SMTP email system")}<br/>
                        {__("PHP mail() function will be used in case of disabled")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Port")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_port" value="{$system['email_smtp_port']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Username")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_username" value="{$system['email_smtp_username']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("SMTP Password")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_smtp_password" value="{$system['email_smtp_password']}">
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("reCAPTCHA Enabled")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="reCAPTCHA_enabled" class="onoffswitch-checkbox" id="reCAPTCHA_enabled" {if $system['reCAPTCHA_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="reCAPTCHA_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn reCAPTCHA On and Off")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("reCAPTCHA Site Key")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="reCAPTCHA_site_key" value="{$system['reCAPTCHA_site_key']}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("reCAPTCHA Secret Key")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="reCAPTCHA_secret_key" value="{$system['reCAPTCHA_secret_key']}">
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Minimum Results")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="min_results" value="{$system['min_results']}">
                    <span class="help-block">
                        {__("The Min number of results per request")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Minimum Even Results")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="min_results_even" value="{$system['min_results_even']}">
                    <span class="help-block">
                        {__("The Min even number of results per request")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    {__("Maximum Results")}
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="max_results" value="{$system['max_results']}">
                    <span class="help-block">
                        {__("The Max number of results per request")}
                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    {__("Games Enabled")}
                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="games_enabled" class="onoffswitch-checkbox" id="games_enabled" {if $system['games_enabled']}checked{/if}>
                        <label class="onoffswitch-label" for="games_enabled"></label>
                    </div>
                    <span class="help-block">
                        {__("Turn the games On and Off")}
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
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
</div>