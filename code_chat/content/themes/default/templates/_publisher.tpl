<div class="x-form publisher" data-handle="{$_handle}" {if $_page}data-id="{$_page}"{elseif $_group}data-id="{$_group}"{/if}>

    <!-- publisher loader -->
    <div class="publisher-loader">
        <div class="loader loader_small"></div>
    </div>
    <!-- publisher loader -->

    <!-- post message -->
    <div class="relative">
        <textarea class="js_autogrow js_mention js_publisher-scraber " placeholder="{__("Bạn đang nghĩ gì?")}"></textarea>
    </div>
    <!-- post message -->

    <!-- publisher scraber -->
    <div class="publisher-scraber"></div>
    <!-- publisher scraber -->

    <!-- post attachments -->
    <div class="publisher-attachments attachments clearfix x-hidden">
        <ul>
            <li class="loading">
                <div class="loader loader_small"></div>
            </li>
        </ul>
    </div>
    <!-- post attachments -->

    <!-- post location -->
    <div class="publisher-meta">
        <i class="fa fa-map-marker fa-fw"></i>
        <input type="text" placeholder="{__("Bạn đang ở đâu?")}">
    </div>
    <!-- post location -->
    
    <!-- publisher-footer -->
    <div class="publisher-footer clearfix">
        <!-- publisher-tools -->
        <ul class="publisher-tools">
            <li>
                <span class="publisher-tools-attach">
                    <i class="fa fa-camera fa-lg fa-fw js_x-uploader" data-handle="publisher"></i>
                </span>
            </li>
            <li>
                <span class="js_publisher_meta">
                    <i class="fa fa-map-marker fa-lg fa-fw"></i>
                </span>
            </li>
            <li class="relative">
                <span class="js_emoji-menu-toggle">
                    <i class="fa fa-smile-o fa-lg fa-fw"></i>
                </span>
                {include file='__emoji-menu.tpl'}
            </li>
        </ul>
        <!-- publisher-tools -->

        <!-- publisher-buttons -->
        <div class="pull-right flip mt5">
            {if $_privacy}
            <!-- privacy -->
            <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title="{__("Ai sẽ nhìn thấy nội dung này?")}">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs">{__("Bạn bè")}</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" data-title="{__("Ai sẽ nhìn thấy nội dung này?")}" data-value="public"><i class="fa fa-globe"></i> {__("Mọi người")}</a></li>
                    <li><a href="#" data-title="{__("Ai sẽ nhìn thấy nội dung này?")}" data-value="friends"><i class="fa fa-users"></i> {__("Bạn bè")}</a></li>
                </ul>
            </div>
            <!-- privacy -->
            {/if}
            <button type="button" class="btn btn-primary js_publisher">{__("Đăng")}</button>
        </div>
        <!-- publisher-buttons -->
    </div>
    <!-- publisher-footer -->

</div>