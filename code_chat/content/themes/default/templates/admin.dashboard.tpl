<div class="row">
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-user bg-icon"></i>
                <span class="text-xlg">{$insights['users']}</span><br>
                <span class="text-bg">{__("Người dùng")}</span><br>
                <a href="{$system.system_url}/admin/users">{__("Quản lý người dùng")}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-male bg-icon"></i>
                <span class="text-xlg">{$insights['users_males']}</span><br>
                <span>{$insights['users_males_percent']}%</span><br>
                <span class="text-bg">{__("Con trai")}</span><br>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-female bg-icon"></i>
                <span class="text-xlg">{$insights['users_females']}</span><br>
                <span>{$insights['users_females_percent']}%</span><br>
                <span class="text-bg">{__("Con gái")}</span><br>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="stat-panel danger">
            <div class="stat-cell">
                <i class="fa fa-minus-circle bg-icon"></i>
                <span class="text-xlg">{$insights['banned']}</span><br>
                <span class="text-bg">{__("Bị khóa")}</span><br>
                <a href="{$system.system_url}/admin/users/banned">{__("Manage Banned")}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel warning">
            <div class="stat-cell">
                <i class="fa fa-envelope bg-icon"></i>
                <span class="text-xlg">{$insights['not_activated']}</span><br>
                <span class="text-bg">{__("Chưa kích hoạt")}</span><br>
                <a href="{$system.system_url}/admin/users">{__("Quản lý người dùng")}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-clock-o bg-icon"></i>
                <span class="text-xlg">{$insights['online']}</span><br>
                <span class="text-bg">{__("Trực tuyến")}</span><br>
                <a href="{$system.system_url}/admin/users/online">{__("Đang trực tuyến")}</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel success">
            <div class="stat-cell">
                <i class="fa fa-newspaper-o bg-icon"></i>
                <span class="text-xlg">{$insights['posts']}</span><br>
                <span class="text-bg">{__("Bài đăng")}</span><br>
                <a href="{$system.system_url}/admin/reports">{__("Quản lý báo cáo")}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel success">
            <div class="stat-cell">
                <i class="fa fa-comments bg-icon"></i>
                <span class="text-xlg">{$insights['comments']}</span><br>
                <span class="text-bg">{__("Bình luận")}</span><br>
                <a href="{$system.system_url}/admin/reports">{__("Quản lý báo cáo")}</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-flag bg-icon"></i>
                <span class="text-xlg">{$insights['pages']}</span><br>
                <span class="text-bg">{__("Trang")}</span><br>
                <a href="{$system.system_url}/admin/pages">{__("Quản lý trang")}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel">
            <div class="stat-cell">
                <i class="fa fa-users bg-icon"></i>
                <span class="text-xlg">{$insights['groups']}</span><br>
                <span class="text-bg">{__("Nhóm")}</span><br>
                <a href="{$system.system_url}/admin/groups">{__("Quản lý nhóm")}</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-comments-o bg-icon"></i>
                <span class="text-xlg">{$insights['messages']}</span><br>
                <span class="text-bg">{__("Tin nhắn")}</span><br>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="stat-panel info">
            <div class="stat-cell">
                <i class="fa fa-globe bg-icon"></i>
                <span class="text-xlg">{$insights['notifications']}</span><br>
                <span class="text-bg">{__("Thông báo")}</span><br>
            </div>
        </div>
    </div>
</div>