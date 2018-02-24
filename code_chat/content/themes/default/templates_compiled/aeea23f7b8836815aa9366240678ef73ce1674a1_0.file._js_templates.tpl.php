<?php /* Smarty version 3.1.24, created on 2015-12-25 01:41:14
         compiled from "/home/vnzuicom/public_html/fbs/content/themes/default/templates/_js_templates.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1296239106567c9eba16cd59_09071135%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeea23f7b8836815aa9366240678ef73ce1674a1' => 
    array (
      0 => '/home/vnzuicom/public_html/fbs/content/themes/default/templates/_js_templates.tpl',
      1 => 1449049884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296239106567c9eba16cd59_09071135',
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
  'unifunc' => 'content_567c9eba31de15_93145906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c9eba31de15_93145906')) {
function content_567c9eba31de15_93145906 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1296239106567c9eba16cd59_09071135';
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
        <h5 class="modal-title"><?php echo __("Not Logged In");?>
</h5>
    </div>
    <div class="modal-body">
        <p><?php echo __("Please log in to continue");?>
</p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Login");?>
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
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
        <button type="button" class="btn btn-primary" id="modal-confirm-ok"><?php echo __("Confirm");?>
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
        <h5 class="modal-title"><?php echo __("Select Your Language");?>
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
            <h5 class="modal-title"><?php echo __("Check Your Email");?>
</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_confirm.php">
            <div class="modal-body">
                <div class="mb20">
                    <?php echo __("Check your email");?>
 - <?php echo __("We sent you an email with a six-digit confirmation code. Enter it below to continue to reset your password");?>
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
                        <label class="mb0"><?php echo __("We sent your code to");?>
</label>
                        {{email}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input name="email" type="hidden" value="{{email}}">
                <button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
            </div>
        </form>
    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 id="forget-password-reset" type="text/template">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 class="modal-title"><?php echo __("Change Your Password!");?>
</h5>
        </div>
        <form class="js_ajax-forms" data-url="core/forget_password_reset.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="password"><?php echo __("New Password");?>
</label>
                    <input name="password" id="password" type="password" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="confirm"><?php echo __("Confirm Password");?>
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
                <button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
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
            <h5 class="modal-title"><?php echo __("Change Email Address");?>
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
                    <label for="email"><?php echo __("New Email");?>
</label>
                    <input name="email" id="email" type="email" class="form-control" required autofocus>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
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
            <button type="button" class="close js_publisher-attachment-remover" title="<?php echo __("Remove");?>
"><span>&times;</span></button>
        </li>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="comment-attachments-item" type="text/template">
        <li class="item deletable" data-src="{{src}}">
            <img alt="" src="{{image_path}}">
            <button type="button" class="close js_comment-attachment-remover" title="<?php echo __("Remove");?>
"><span>&times;</span></button>
        </li>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="chat-attachments-item" type="text/template">
        <li class="item deletable" data-src="{{src}}">
            <img alt="" src="{{image_path}}">
            <button type="button" class="close js_chat-attachment-remover" title="<?php echo __("Remove");?>
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
            <div class="text-semibold mb5"><?php echo __("Post Hidden");?>
</div>
            <?php echo __("This post will no longer appear to you");?>

            <span class="text-link js_unhide-post"><?php echo __("Undo");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="hidden-author" type="text/template">
        <div class="post flagged" data-id="{{id}}">
            <?php echo __("You won't see posts from");?>
 {{name}} <?php echo __("in News Feed anymore");?>
.
            <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}"><?php echo __("Undo");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="reported-post" type="text/template">
        <div class="post flagged" data-id="{{id}}">
            <div class="text-semibold mb5"><?php echo __("Thanks for Your Help");?>
</div>
            <?php echo __("Your feedback helps us keep site clear of spam");?>

            <span class="text-link js_unreport-post"><?php echo __("Undo");?>
</span>
        </div>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 id="reported-comment" type="text/template">
        <div class="comment" data-id="{{id}}">
            <div class="text-semibold mb5"><?php echo __("Comment Hidden");?>
</div>
            <?php echo __("This comment has been hidden");?>

            <span class="text-link js_unreport-comment"><?php echo __("Undo");?>
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
                            <button data-toggle="tooltip" data-placement="bottom" title="<?php echo __("Press Esc to close");?>
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
                <?php echo __("Chat");?>
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
                <?php echo __("Offline");?>

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
                    <?php echo __("New Message");?>

                </div>
                <div class="chat-head-close">
                <button type="button" class="close js_chat-box-close" title="<?php echo __("Close");?>
"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="chat-widget-content">

                <div class="chat-conversations js_scroller"></div>

                <div class="chat-to clearfix js_autocomplete">
                    <div class="to"><?php echo __("To");?>
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
                        <textarea class="js_autogrow  js_post-message" placeholder="<?php echo __("Write a message");?>
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
                    <button type="button" class="close js_chat-box-close" title="<?php echo __("Close");?>
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
                        <textarea class="js_autogrow  js_post-message" placeholder="<?php echo __("Write a message");?>
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