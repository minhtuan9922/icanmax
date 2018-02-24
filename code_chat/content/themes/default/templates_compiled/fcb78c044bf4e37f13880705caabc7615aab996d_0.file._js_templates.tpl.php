<?php /* Smarty version 3.1.24, created on 2015-12-26 04:02:04
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/_js_templates.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2116428136567e113c85c8f0_56778389%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcb78c044bf4e37f13880705caabc7615aab996d' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/_js_templates.tpl',
      1 => 1451102518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116428136567e113c85c8f0_56778389',
  'variables' => 
  array (
    'system' => 0,
    'language' => 0,
    'user' => 0,
    'online_friends' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e113ca2d0a2_95841344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e113ca2d0a2_95841344')) {
function content_567e113ca2d0a2_95841344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2116428136567e113c85c8f0_56778389';
?>
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

<?php echo '<script'; ?>
 id="modal-login" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title"><?php echo __("Lỗi đăng nhập");?>
</h5>
    </div>
    <div class="modal-body">
        <p><?php echo __("Có người đăng nhập vào tài khoản này từ nơi khác! Nếu không phải là bạn vui lòng đổi mật khẩu. Vui lòng đăng nhập lại.");?>
</p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Đăng nhập");?>
</a>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-message" type="text/template">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h5 class="modal-title">{{title}}</h5>
    </div>
    <div class="modal-body">
        <p>{{message}}</p>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-success" type="text/template">
    <div class="modal-body text-center">
        <div class="big-icon success">
            <i class="fa fa-thumbs-o-up fa-3x"></i>
        </div>
        <h4>{{title}}</h4>
        <p class="mt20">{{message}}</p>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-error" type="text/template">
    <div class="modal-body text-center">
        <div class="big-icon error">
            <i class="fa fa-times fa-3x"></i>
        </div>
        <h4>{{title}}</h4>
        <p class="mt20">{{message}}</p>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 id="modal-confirm" type="text/template">
    <div class="modal-header">
        <h5 class="modal-title">{{title}}</h5>
    </div>
    <div class="modal-body">
        <p>{{message}}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Hủy bỏ");?>
</button>
        <button type="button" class="btn btn-primary" id="modal-confirm-ok"><?php echo __("Xác nhận");?>
</button>
    </div>
<?php echo '</script'; ?>
>
<!-- Modals -->

<!-- Translator -->
<?php echo '<script'; ?>
 id="translator" type="text/template">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h5 class="modal-title"><?php echo __("Chọn ngôn ngữ");?>
</h5>
    </div>
    <div class="modal-body">
        <div class="row">
            <?php
$_from = $_smarty_tpl->tpl_vars['system']->value['languages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['language']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
$foreach_language_Sav = $_smarty_tpl->tpl_vars['language'];
?>
                <div class="col-xs-12 col-sm-6">
                    <div class="translator-language js_translator" data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
                        <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['language']->value['flag_icon'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['language'] = $foreach_language_Sav;
}
?>
        </div>
    </div>
<?php echo '</script'; ?>
>
<!-- Translator -->


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    
    <!-- Forget Password -->
    <?php echo '<script'; ?>
 id="forget-password-confirm" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h5 class="modal-title"><?php echo __("Kiểm tra hộp thư điện tử của bạn");?>
</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_confirm.php">
            <div class="modal-body">
                <div class="mb20">
                    <?php echo __("Kiểm tra hộp thư điện tử của bạn");?>
 - <?php echo __("Chúng tôi đã gửi cho bạn một email với một mã xác nhận sáu chữ số. Nhập vào dưới đây để tiếp tục thiết lập lại mật khẩu của bạn");?>
.
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
                        <label class="mb0"><?php echo __("Chúng tôi đã gửi mã số của bạn đến");?>
</label>
                        {{email}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input name="email" type="hidden" value="{{email}}">
                <button type="submit" class="btn btn-primary"><?php echo __("Tiếp tục");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Hủy bỏ");?>
</button>
            </div>
        </form>
    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 id="forget-password-reset" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 class="modal-title"><?php echo __("Thay đổi mật khẩu của bạn!");?>
</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="password"><?php echo __("Mật khẩu mới");?>
</label>
                    <input name="password" id="password" type="password" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="confirm"><?php echo __("Xác nhận mật khẩu");?>
</label>
                    <input name="confirm" id="confirm" type="password" class="form-control" required>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </div>
            <div class="modal-footer">
                <input name="email" type="hidden" value="{{email}}">
                <input name="reset_key" type="hidden" value="{{reset_key}}">
                <button type="submit" class="btn btn-primary"><?php echo __("Tiếp tục");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Hủy bỏ");?>
</button>
            </div>
        </form>
    <?php echo '</script'; ?>
>
    <!-- Forget Password -->

<?php } else { ?>
    
    <!-- Email Activation -->
    <?php echo '<script'; ?>
 id="activation-email-reset" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 class="modal-title"><?php echo __("Thay đổi địa chỉ email");?>
</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/activation_email_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for=""><?php echo __("Current Email");?>
</label>
                    <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</p>
                    
                </div>
                <div class="form-group">
                    <label for="email"><?php echo __("Email mới");?>
</label>
                    <input name="email" id="email" type="email" class="form-control" required autofocus>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo __("Tiếp tục");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Hủy bỏ");?>
</button>
            </div>
        </form>
    <?php echo '</script'; ?>
>
    <!-- Email Activation -->

    <!-- Search -->
    <?php echo '<script'; ?>
 id="search-for" type="text/template">
        <div class="ptb10 plr10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/{{#hashtag}}hashtag/{{/hashtag}}{{query}}">
                <i class="fa fa-search pr5"></i> <?php echo __('Search for');?>
 {{#hashtag}}#{{/hashtag}}{{query}}
            </a>
        </div>
    <?php echo '</script'; ?>
>
    <!-- Search -->
    

    <!-- Publisher -->
    <?php echo '<script'; ?>
 id="x-uploader" type="text/template">
        <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">
            <input name="file" type="file" />
            <input type="hidden" name="secret" value="{{secret}}" />
        </form>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="publisher-attachments-item" type="text/template">
        <li class="item deletable" data-src="{{src}}">
            <img alt="" src="{{image_path}}">
            <button type="button" class="close js_publisher-attachment-remover" title="<?php echo __("Xóa bỏ");?>
"><span>&times;</span></button>
        </li>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="comment-attachments-item" type="text/template">
        <li class="item deletable" data-src="{{src}}">
            <img alt="" src="{{image_path}}">
            <button type="button" class="close js_comment-attachment-remover" title="<?php echo __("Xóa bỏ");?>
"><span>&times;</span></button>
        </li>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="chat-attachments-item" type="text/template">
        <li class="item deletable" data-src="{{src}}">
            <img alt="" src="{{image_path}}">
            <button type="button" class="close js_chat-attachment-remover" title="<?php echo __("Xóa bỏ");?>
"><span>&times;</span></button>
        </li>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="scraber-youtube" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{uid}}" allowfullscreen=""></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>
                <div class="text mb5">{{text}}</div>
                <div class="source">youtube.com</div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="scraber-vimeo" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/{{uid}}"></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>
                <div class="text mb5">{{text}}</div>
                <div class="source">vimeo.com</div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="scraber-soundcloud" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe height="450" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{uid}}&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
            <div class="post-media-meta">
                <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>
                <div class="text mb5">{{text}}</div>
                <div class="source">soundcloud.com</div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="scraber-link" type="text/template">
        <div class="publisher-scraber-remover js_publisher-scraber-remover">
            <button type="button" class="close"><span>&times;</span></button>
        </div>
        <div class="post-media">
            {{#thumbnail}}
            <div class="post-media-image">
                <div style="background-image:url('{{thumbnail}}');"></div>
            </div>
            {{/thumbnail}}
            <div class="post-media-meta">
                <a class="title mb5" href="{{url}}" target="_blank">{{title}}</a>
                <div class="text mb5">{{text}}</div>
                <div class="source">{{host}}</div>
            </div>
        </div>
    <?php echo '</script'; ?>
>
    <!-- Publisher -->


    <!-- Reported (Posts|Comments) -->
    <?php echo '<script'; ?>
 id="hidden-post" type="text/template">
        <div class="post flagged" data-id="{{id}}">
            <div class="text-semibold mb5"><?php echo __("Ẩn bài đăng");?>
</div>
            <?php echo __("Bài viết này sẽ không còn xuất hiện cho bạn");?>

            <span class="text-link js_unhide-post"><?php echo __("Hủy bỏ");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="hidden-author" type="text/template">
        <div class="post flagged" data-id="{{id}}">
            <?php echo __("Bạn sẽ không nhìn thấy những bài");?>
 {{name}} <?php echo __("trong bảng tin nửa");?>
.
            <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}"><?php echo __("Hủy bỏ");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="reported-post" type="text/template">
        <div class="post flagged" data-id="{{id}}">
            <div class="text-semibold mb5"><?php echo __("Cảm ơn bạn đã giúp đỡ");?>
</div>
            <?php echo __("Phản hồi của bạn sẽ giúp chúng tôi giữ cho trang web rõ ràng của thư rác");?>

            <span class="text-link js_unreport-post"><?php echo __("Hủy bỏ");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="reported-comment" type="text/template">
        <div class="comment" data-id="{{id}}">
            <div class="text-semibold mb5"><?php echo __("Ẩn bình luận");?>
</div>
            <?php echo __("Bình luận này đã bị ẩn");?>

            <span class="text-link js_unreport-comment"><?php echo __("Hủy bỏ");?>
</span>
        </div>
    <?php echo '</script'; ?>
>
    <!-- Reported (Posts|Comments) -->


    <!-- Lightbox -->
    <?php echo '<script'; ?>
 id="lightbox" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview">
                    <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}">
                </div>
                <div class="lightbox-data">
                    <div class="clearfix pr5">
                        <div class="pull-right flip">
                            <button data-toggle="tooltip" data-placement="bottom" title="<?php echo __("Nhấn Esc để đóng");?>
" type="button" class="close js_lightbox-close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                    <div class="lightbox-post" data-id="{{id}}">
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="lightbox-nodata" type="text/template">
        <div class="lightbox">
            <div class="container lightbox-container">
                <div class="lightbox-preview nodata">
                    <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}">
                </div>
            </div>
        </div>
    <?php echo '</script'; ?>
>
    <!-- Lightbox -->


    <!-- Chat -->
    <div class="chat-widget js_chat-widget-master">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>
        <div class="chat-widget-content">
            <div class="js_scroller">
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['online_friends']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
                    <li class="feeds-item">
                        <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
">
                            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
">
                            <div class="data-content">
                                <div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
</strong></div>
                            </div>
                        </div>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>
                </ul>
            </div>
        </div>
        <div class="chat-widget-head">
            <div class="chat-head-title">
                <i class="fa fa-circle"></i>
                <?php echo __("Trò chuyện");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
            </div>
        </div>
        <?php } else { ?>
        <div class="chat-widget-content">
            <div class="js_scroller"></div>
        </div>
        <div class="chat-widget-head">
            <div class="chat-head-title">
                <i class="fa fa-user-secret"></i>
                <?php echo __("Ngoại tuyến");?>

            </div>
        </div>
        <?php }?>
    </div>

    <?php echo '<script'; ?>
 id="chat-box-new" type="text/template">
        <div class="chat-widget chat-box fresh opened">
            <div class="chat-widget-head">
                <div class="chat-head-float"></div>
                <div class="chat-head-title">
                    <?php echo __("Tin nhắn mới");?>

                </div>
                <div class="chat-head-close">
                <button type="button" class="close js_chat-box-close" title="<?php echo __("Đóng");?>
"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="chat-widget-content">

                <div class="chat-conversations js_scroller"></div>

                <div class="chat-to clearfix js_autocomplete">
                    <div class="to"><?php echo __("Đến");?>
:</div>
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
                        <textarea class="js_autogrow  js_post-message" placeholder="<?php echo __("Viết tin nhắn");?>
"></textarea>
                    </div>
                    <div class="x-form-tools">
                        <div class="x-form-tools-attach">
                            <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                        </div>
                        <div class="x-form-tools-emoji js_emoji-menu-toggle">
                            <i class="fa fa-smile-o fa-lg"></i>
                        </div>
                        <?php echo $_smarty_tpl->getSubTemplate ('__emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    </div>
                </div>
            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="chat-box" type="text/template">
        <div class="chat-widget chat-box opened" id="{{chat_key_value}}" data-uid="{{ids}}" {{#conversation_id}}data-cid="{{conversation_id}}"{{/conversation_id}}>
            <div class="chat-widget-head">
                <div class="chat-head-float">
                    <img src="{{picture}}" alt="">
                </div>
                <div class="chat-head-title">
                    {{^multiple}}
                    <i class="fa fa-user-secret js_chat-box-status"></i>
                    {{/multiple}}
                    <span title="{{name_list}}">{{name}}</span>
                </div>
                <div class="chat-head-label"><span class="label label-danger js_chat-box-label"></span></div>
                <div class="chat-head-close">
                    <button type="button" class="close js_chat-box-close" title="<?php echo __("Đóng");?>
"><span>&times;</span></button>
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
                        <textarea class="js_autogrow  js_post-message" placeholder="<?php echo __("Viết tin nhắn");?>
"></textarea>
                    </div>
                    <div class="x-form-tools">
                        <div class="x-form-tools-attach">
                            <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                        </div>
                        <div class="x-form-tools-emoji js_emoji-menu-toggle">
                            <i class="fa fa-smile-o fa-lg"></i>
                        </div>
                        <?php echo $_smarty_tpl->getSubTemplate ('__emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    </div>
                </div>

            </div>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="chat-message" type="text/template">
        <li>
            <div class="conversation clearfix right" id="{{id}}">
                <div class="conversation-user">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
">
                </div>
                <div class="conversation-body">
                    <div class="text">
                        {{{message}}}
                        {{#image}}
                            <span class="text-link js_lightbox-nodata {{#message}}mt5{{/message}}" data-image="{{image}}">
                                <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}">
                            </span>
                        {{/image}}
                    </div>
                    <div class="time js_moment" data-time="{{time}}">
                        {{time}}
                    </div>
                </div>
            </div>
        </li>
    <?php echo '</script'; ?>
>
    <!-- Chat -->

<?php }?>







<?php }
}
?>