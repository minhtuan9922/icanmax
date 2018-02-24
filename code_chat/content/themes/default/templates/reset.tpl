{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="page-title">
    {__("Khôi phục mật khẩu")}
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="js_ajax-forms" data-url="core/forget_password.php">
                <div class="form-group">
                    <label for="email">{__("Email")}</label>
                    <input name="email" id="email" type="text" class="form-control" required autofocus>
                    <p class="text-muted">{__("Nhập địa chỉ email bạn đã đăng ký và chúng tôi sẽ gửi email cho bạn một liên kết thiết lập lại")}.</p>
                </div>
                {if $system.reCAPTCHA_enabled}
                <div class="form-group">
                    <!-- reCAPTCHA -->
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="{$system.reCAPTCHA_site_key}"></div>
                    <!-- reCAPTCHA -->
                </div>
                {/if}
                <button type="submit" class="btn btn-lg btn-info btn-block">{__("Tiếp tục")}</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}