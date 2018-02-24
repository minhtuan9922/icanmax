<!-- Modals -->
<div id="modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="loader pt10 pb10"></div>
            </div>
        </div>
    </div>
</div>

<script id="modal-login" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title">{__("Lỗi đăng nhập")}</h5>
    </div>
    <div class="modal-body">
        <p>{__("Có người đăng nhập vào tài khoản này từ nơi khác! Nếu không phải là bạn vui lòng đổi mật khẩu. Vui lòng đăng nhập lại.")}</p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary" href="{$system.system_url}/signin">{__("Đăng nhập")}</a>
    </div>
</script>

<script id="modal-message" type="text/template">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h5 class="modal-title">{literal}{{title}}{/literal}</h5>
    </div>
    <div class="modal-body">
        <p>{literal}{{message}}{/literal}</p>
    </div>
</script>

<script id="modal-success" type="text/template">
    <div class="modal-body text-center">
        <div class="big-icon success">
            <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>
        <h4>{literal}{{title}}{/literal}</h4>
        <p class="mt20">{literal}{{message}}{/literal}</p>
    </div>
</script>

<script id="modal-error" type="text/template">
    <div class="modal-body text-center">
        <div class="big-icon error">
            <i class="fa fa-times fa-3x"></i>
        </div>
        <h4>{literal}{{title}}{/literal}</h4>
        <p class="mt20">{literal}{{message}}{/literal}</p>
    </div>
</script>

<script id="modal-confirm" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title">{literal}{{title}}{/literal}</h5>
    </div>
    <div class="modal-body">
        <p>{literal}{{message}}{/literal}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{__("Hủy bỏ")}</button>
        <button type="button" class="btn btn-primary" id="modal-confirm-ok">{__("Xác nhận")}</button>
    </div>
</script>
<!-- Modals -->

<!-- Translator -->
<script id="translator" type="text/template">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h5 class="modal-title">{__("Chọn ngôn ngữ")}</h5>
    </div>
    <div class="modal-body">
        <div class="row">
            {foreach $system['languages'] as $language}
                <div class="col-xs-12 col-sm-6">
                    <div class="translator-language js_translator" data-language="{$language['code']}">
                        <span class="flag-icon flag-icon-{$language['flag_icon']}"></span> {$language['title']}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</script>
<!-- Translator -->


{if !$user->_logged_in}
    
    <!-- Forget Password -->
    <script id="forget-password-confirm" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h5 class="modal-title">{__("Kiểm tra hộp thư điện tử của bạn")}</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_confirm.php">
            <div class="modal-body">
                <div class="mb20">
                    {__("Kiểm tra hộp thư điện tử của bạn")} - {__("Chúng tôi đã gửi cho bạn một email với một mã xác nhận sáu chữ số. Nhập vào dưới đây để tiếp tục thiết lập lại mật khẩu của bạn")}.
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="reset_key" type="text" class="form-control" placeholder="######" required autofocus>
                        </div>

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                        <!-- error -->
                    </div>
                    <div class="col-md-6">
                        <label class="mb0">{__("Chúng tôi đã gửi mã số của bạn đến")}</label>
                        {literal}{{email}}{/literal}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input name="email" type="hidden" value="{literal}{{email}}{/literal}">
                <button type="submit" class="btn btn-primary">{__("Tiếp tục")}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{__("Hủy bỏ")}</button>
            </div>
        </form>
    </script>
    
    <script id="forget-password-reset" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 class="modal-title">{__("Thay đổi mật khẩu của bạn!")}</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="password">{__("Mật khẩu mới")}</label>
                    <input name="password" id="password" type="password" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="confirm">{__("Xác nhận mật khẩu")}</label>
                    <input name="confirm" id="confirm" type="password" class="form-control" required>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </div>
            <div class="modal-footer">
                <input name="email" type="hidden" value="{literal}{{email}}{/literal}">
                <input name="reset_key" type="hidden" value="{literal}{{reset_key}}{/literal}">
                <button type="submit" class="btn btn-primary">{__("Tiếp tục")}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{__("Hủy bỏ")}</button>
            </div>
        </form>
    </script>
    <!-- Forget Password -->

{else}
    
    <!-- Email Activation -->
    <script id="activation-email-reset" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 class="modal-title">{__("Thay đổi địa chỉ email")}</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/activation_email_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">{__("Current Email")}</label>
                    <p class="form-control-static">{$user->_data['user_email']}</p>
                    
                </div>
                <div class="form-group">
                    <label for="email">{__("Email mới")}</label>
                    <input name="email" id="email" type="email" class="form-control" required autofocus>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">{__("Tiếp tục")}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{__("Hủy bỏ")}</button>
            </div>
        </form>
    </script>
    <!-- Email Activation -->

    <!-- Search -->
    <script id="search-for" type="text/template">
        <div class="ptb10 plr10">
            <a href="{$system['system_url']}/search/{literal}{{#hashtag}}hashtag/{{/hashtag}}{/literal}{literal}{{query}}{/literal}">
                <i class="fa fa-search pr5"></i> {__('Search for')} {literal}{{#hashtag}}#{{/hashtag}}{/literal}{literal}{{query}}{/literal}
            </a>
        </div>
    </script>
    <!-- Search -->
    

    <!-- Publisher -->
    <script id="x-uploader" type="text/template">
        <form class="x-uploader" action="{literal}{{url}}{/literal}" method="post" enctype="multipart/form-data">
            <input name="file" type="file" />
            <input type="hidden" name="secret" value="{literal}{{secret}}{/literal}" />
        </form>
    </script>

    <script id="publisher-attachments-item" type="text/template">
        <li class="item deletable" data-src="{literal}{{src}}{/literal}">
            <img alt="" src="{literal}{{image_path}}{/literal}">
            <button type="button" class="close js_publisher-attachment-remover" title="{__("Xóa bỏ")}"><span>&times;</span></button>
        </li>
    </script>

    <script id="comment-attachments-item" type="text/template">
        <li class="item deletable" data-src="{literal}{{src}}{/literal}">
            <img alt="" src="{literal}{{image_path}}{/literal}">
            <button type="button" class="close js_comment-attachment-remover" title="{__("Xóa bỏ")}"><span>&times;</span></button>
        </li>
    </script>

    <script id="chat-attachments-item" type="text/template">
        <li class="item deletable" data-src="{literal}{{src}}{/literal}">
            <img alt="" src="{literal}{{image_path}}{/literal}">
            <button type="button" class="close js_chat-attachment-remover" title="{__("Xóa bỏ")}"><span>&times;</span></button>
        </li>
    </script>

    <script id="scraber-youtube" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{literal}{{uid}}{/literal}" allowfullscreen=""></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{literal}{{url}}{/literal}" target="_blank">{literal}{{title}}{/literal}</a>
                <div class="text mb5">{literal}{{text}}{/literal}</div>
                <div class="source">youtube.com</div>
            </div>
        </div>
    </script>

    <script id="scraber-vimeo" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/{literal}{{uid}}{/literal}"></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{literal}{{url}}{/literal}" target="_blank">{literal}{{title}}{/literal}</a>
                <div class="text mb5">{literal}{{text}}{/literal}</div>
                <div class="source">vimeo.com</div>
            </div>
        </div>
    </script>

    <script id="scraber-soundcloud" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{literal}{{uid}}{/literal}&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{literal}{{url}}{/literal}" target="_blank">{literal}{{title}}{/literal}</a>
                <div class="text mb5">{literal}{{text}}{/literal}</div>
                <div class="source">soundcloud.com</div>
            </div>
        </div>
    </script>

    <script id="scraber-link" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            {literal}{{#thumbnail}}{/literal}
            <div class="post-media-image">
                <div style="background-image:url('{literal}{{thumbnail}}{/literal}');"></div>
            </div>
            {literal}{{/thumbnail}}{/literal}
            <div class="post-media-meta">
                <a class="title mb5" href="{literal}{{url}}{/literal}" target="_blank">{literal}{{title}}{/literal}</a>
                <div class="text mb5">{literal}{{text}}{/literal}</div>
                <div class="source">{literal}{{host}}{/literal}</div>
            </div>
        </div>
    </script>
    <!-- Publisher -->


    <!-- Reported (Posts|Comments) -->
    <script id="hidden-post" type="text/template">
        <div class="post flagged" data-id="{literal}{{id}}{/literal}">
            <div class="text-semibold mb5">{__("Ẩn bài đăng")}</div>
            {__("Bài viết này sẽ không còn xuất hiện cho bạn")}
            <span class="text-link js_unhide-post">{__("Hủy bỏ")}</span>
        </div>
    </script>

    <script id="hidden-author" type="text/template">
        <div class="post flagged" data-id="{literal}{{id}}{/literal}">
            {__("Bạn sẽ không nhìn thấy những bài")} {literal}{{name}}{/literal} {__("trong bảng tin nửa")}.
            <span class="text-link js_unhide-author" data-author-id="{literal}{{uid}}{/literal}" data-author-name="{literal}{{name}}{/literal}">{__("Hủy bỏ")}</span>
        </div>
    </script>

    <script id="reported-post" type="text/template">
        <div class="post flagged" data-id="{literal}{{id}}{/literal}">
            <div class="text-semibold mb5">{__("Cảm ơn bạn đã giúp đỡ")}</div>
            {__("Phản hồi của bạn sẽ giúp chúng tôi giữ cho trang web rõ ràng của thư rác")}
            <span class="text-link js_unreport-post">{__("Hủy bỏ")}</span>
        </div>
    </script>

    <script id="reported-comment" type="text/template">
        <div class="comment" data-id="{literal}{{id}}{/literal}">
            <div class="text-semibold mb5">{__("Ẩn bình luận")}</div>
            {__("Bình luận này đã bị ẩn")}
            <span class="text-link js_unreport-comment">{__("Hủy bỏ")}</span>
        </div>
    </script>
    <!-- Reported (Posts|Comments) -->


    <!-- Lightbox -->
    <script id="lightbox" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview">
                    <img alt="" class="img-responsive" src="{$system['system_uploads']}/{literal}{{image}}{/literal}">
                </div>
                <div class="lightbox-data">
                    <div class="clearfix pr5">
                        <div class="pull-right flip">
                            <button data-toggle="tooltip" data-placement="bottom" title="{__("Nhấn Esc để đóng")}" type="button" class="close js_lightbox-close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                    <div class="lightbox-post" data-id="{literal}{{id}}{/literal}">
                        <div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%">
                            <div class="post-body">
                                <div class="mb10 post-header"></div>
                                <div class="post-actions"></div>
                            </div>
                            <div class="post-footer">
                                <div class="loader mtb10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script id="lightbox-nodata" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview nodata">
                    <img alt="" class="img-responsive" src="{$system['system_uploads']}/{literal}{{image}}{/literal}">
                </div>
            </div>
        </div>
    </script>
    <!-- Lightbox -->


    <!-- Chat -->
    <div class="chat-widget js_chat-widget-master">
        {if $user->_data['user_chat_enabled']}
        <div class="chat-widget-content">
            <div class="js_scroller">
                <ul>
                    {foreach $online_friends as $_user}
                    <li class="feeds-item">
                        <div class="data-container clickable small js_chat-start" data-uid="{$_user['user_id']}" data-name="{$_user['user_fullname']}" data-picture="{$_user['user_picture']}">
                            <img class="data-avatar" src="{$_user['user_picture']}" alt="{$_user['user_fullname']}">
                            <div class="data-content">
                                <div><strong>{$_user['user_fullname']}</strong></div>
                            </div>
                        </div>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="chat-widget-head">
            <div class="chat-head-title">
                <i class="fa fa-circle"></i>
                {__("Trò chuyện")} ({count($online_friends)})
            </div>
        </div>
        {else}
        <div class="chat-widget-content">
            <div class="js_scroller"></div>
        </div>
        <div class="chat-widget-head">
            <div class="chat-head-title">
                <i class="fa fa-user-secret"></i>
                {__("Ngoại tuyến")}
            </div>
        </div>
        {/if}
    </div>

    <script id="chat-box-new" type="text/template">
        <div class="chat-widget chat-box fresh opened">
            <div class="chat-widget-head">
                <div class="chat-head-float"></div>
                <div class="chat-head-title">
                    {__("Tin nhắn mới")}
                </div>
                <div class="chat-head-close">
                <button type="button" class="close js_chat-box-close" title="{__("Đóng")}"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="chat-widget-content">

                <div class="chat-conversations js_scroller"></div>

                <div class="chat-to clearfix js_autocomplete">
                    <div class="to">{__("Đến")}:</div>
                    <ul class="tags"></ul>
                    <div class="typeahead">
                        <input type="text" size="1">
                    </div>
                </div>
                <div class="chat-attachments attachments clearfix x-hidden">
                    <ul>
                        <li class="loading">
                            <div class="loader loader_small"></div>
                        </li>
                    </ul>
                </div>
                <div class="x-form chat-form x-visible">
                    <div class="chat-form-message">
                        <textarea class="js_autogrow  js_post-message" placeholder="{__("Viết tin nhắn")}"></textarea>
                    </div>
                    <div class="x-form-tools">
                        <div class="x-form-tools-attach">
                            <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                        </div>
                        <div class="x-form-tools-emoji js_emoji-menu-toggle">
                            <i class="fa fa-smile-o fa-lg"></i>
                        </div>
                        {include file='__emoji-menu.tpl'}
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script id="chat-box" type="text/template">
        <div class="chat-widget chat-box opened" id="{literal}{{chat_key_value}}{/literal}" data-uid="{literal}{{ids}}{/literal}" {literal}{{#conversation_id}}{/literal}data-cid="{literal}{{conversation_id}}{/literal}"{literal}{{/conversation_id}}{/literal}>
            <div class="chat-widget-head">
                <div class="chat-head-float">
                    <img src="{literal}{{picture}}{/literal}" alt="">
                </div>
                <div class="chat-head-title">
                    {literal}{{^multiple}}{/literal}
                    <i class="fa fa-user-secret js_chat-box-status"></i>
                    {literal}{{/multiple}}{/literal}
                    <span title="{literal}{{name_list}}{/literal}">{literal}{{name}}{/literal}</span>
                </div>
                <div class="chat-head-label"><span class="label label-danger js_chat-box-label"></span></div>
                <div class="chat-head-close">
                    <button type="button" class="close js_chat-box-close" title="{__("Đóng")}"><span>&times;</span></button>
                </div>
            </div>
            <div class="chat-widget-content">
                <div class="chat-conversations js_scroller"><ul></ul></div>
                <div class="chat-attachments attachments clearfix x-hidden">
                    <ul>
                        <li class="loading">
                            <div class="loader loader_small"></div>
                        </li>
                    </ul>
                </div>
                <div class="x-form chat-form">
                    <div class="chat-form-message">
                        <textarea class="js_autogrow  js_post-message" placeholder="{__("Viết tin nhắn")}"></textarea>
                    </div>
                    <div class="x-form-tools">
                        <div class="x-form-tools-attach">
                            <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                        </div>
                        <div class="x-form-tools-emoji js_emoji-menu-toggle">
                            <i class="fa fa-smile-o fa-lg"></i>
                        </div>
                        {include file='__emoji-menu.tpl'}
                    </div>
                </div>

            </div>
        </div>
    </script>

    <script id="chat-message" type="text/template">
        <li>
            <div class="conversation clearfix right" id="{literal}{{id}}{/literal}">
                <div class="conversation-user">
                    <img src="{$user->_data['user_picture']}" title="{$user->_data['user_fullname']}" alt="{$user->_data['user_fullname']}">
                </div>
                <div class="conversation-body">
                    <div class="text">
                        {literal}{{{message}}}{/literal}
                        {literal}{{#image}}{/literal}
                            <span class="text-link js_lightbox-nodata {literal}{{#message}}{/literal}mt5{literal}{{/message}}{/literal}" data-image="{literal}{{image}}{/literal}">
                                <img alt="" class="img-responsive" src="{$system['system_uploads']}/{literal}{{image}}{/literal}">
                            </span>
                        {literal}{{/image}}{/literal}
                    </div>
                    <div class="time js_moment" data-time="{literal}{{time}}{/literal}">
                        {literal}{{time}}{/literal}
                    </div>
                </div>
            </div>
        </li>
    </script>
    <!-- Chat -->

{/if}







