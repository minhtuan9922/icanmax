<form class="navbar-form pull-left flip hidden-xs">
    <input id="search-input" type="text" class="form-control" placeholder="{__("Tìm kiếm bạn bè, trang, nhóm và #hashtags")}" autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search">
        <div class="dropdown-widget-header">
            {__("Kết quả tìm kiếm")}
        </div>
        <div class="dropdown-widget-body">
            <div class="loader loader_small ptb10"></div>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="{$system['system_url']}/search/">{__("Xem tất cả")}</a>
    </div>
</form>