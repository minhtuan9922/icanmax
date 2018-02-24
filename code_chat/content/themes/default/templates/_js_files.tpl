<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]><script src="{$system['system_url']}/includes/js/plugins/html5shiv/html5shiv.js"></script><![endif]-->

<!-- Initialize -->
<script type="text/javascript">
    // initialize vars
    var site_path = "{$system['system_url']}";
    var ajax_path = site_path+'/includes/ajax/';
    var uploads_path = "{$system['system_uploads']}";
    var secret = '{$secret}';
</script>
<script type="text/javascript">
    // initialize translated strings
    var __ = [];
    __["Add Friend"] = '{__("Thêm bạn")}';
    __["Friends"] = '{__("Bạn bè")}';
    __["Friend Request Sent"] = '{__("Đã gửi yêu cầu")}';
    __["Following"] = '{__("Đang theo dõi")}';
    __["Follow"] = '{__("Theo dõi")}';
    __["Remove"] = '{__("Gỡ bỏ")}';
    __["Error"] = '{__("Lỗi")}';
    __["Success"] = '{__("Thành công")}';
    __["Loading"] = '{__("Đang xử lý...")}';
    __["Like"] = '{__("Thích")}';
    __["Unlike"] = '{__("Bỏ thích")}';
    __["Joined"] = '{__("Tham gia")}';
    __["Join Group"] = '{__("Tham gia nhóm")}';
    __["Delete"] = '{__("Xóa")}';
    __["Delete Cover"] = '{__("Xóa ảnh bìa")}';
    __["Delete Picture"] = '{__("Xóa ảnh")}';
    __["Delete Post"] = '{__("Xóa bài đăng")}';
    __["Delete Comment"] = '{__("Xóa bình luận")}';
    __["Delete Conversation"] = '{__("Xóa cuộc trò chuyện")}';
    __["Share Post"] = '{__("Chia sẽ bài đăng")}';
    __["Report User"] = '{__("Báo cáo tài khoản")}';
    __["Block User"] = '{__("Chặn")}';
    __["Unblock User"] = '{__("Bỏ chặn")}';
    __["Are you sure you want to delete this?"] = '{__("Bạn có chắc chắn muốn xóa nội dung này?")}';
    __["Are you sure you want to remove your cover photo?"] = '{__("Bạn có chắc chắn muốn xóa ảnh bìa của bạn?")}';
    __["Are you sure you want to remove your profile picture?"] = '{__("Bạn có chắc là bạn muốn loại ảnh đại diện của bạn?")}';
    __["Are you sure you want to delete this post?"] = '{__("Bạn có chắc muốn xóa bài viết này?")}';
    __["Are you sure you want to share this post?"] = '{__("Bạn có chắc chắn bạn muốn chia sẻ nội dung này lên dòng thời gian của bạn?")}';
    __["Are you sure you want to delete this comment?"] = '{__("Bạn có chắc muốn xóa bình luận này?")}';
    __["Are you sure you want to delete this conversation?"] = '{__("Bạn có chắc chắn muốn xóa cuộc trò chuyện này?")}';
    __["Are you sure you want to report this user?"] = '{__("Bạn có chắc muốn báo cáo người dùng này?")}';
    __["Are you sure you want to block this user?"] = '{__("Bạn có chắc chắn bạn muốn chặn người dùng này?")}';
    __["Are you sure you want to unblock this user?"] = '{__("Bạn có chắc chắn bạn muốn bỏ chặn người dùng này?")}';
    __["There is some thing went worng!"] = '{__("Đã có lỗi xãy ra! Vui lòng thử lại.")}';
    __["There is no more data to show"] = 'Không có dữ liệu để hiển thị';
    __["This has been shared to your Timeline"] = '{__("Nội dung này đã được chia sẻ lên dòng bạn thời gian")}';
</script>
<!-- Initialize -->

<!-- jQuery & jQuery UI -->
<script type="text/javascript" src="{$system['system_url']}/includes/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="{$system['system_url']}/includes/js/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="{$system['system_url']}/includes/js/jquery/jquery.ui.touch-punch.min.js"></script>
<!-- jQuery & jQuery UI -->

<!-- Bootstrap -->
<script type="text/javascript" src="{$system['system_url']}/includes/js/bootstrap/bootstrap.min.js"></script>
<!-- Bootstrap -->

<!-- Mustache -->
<script type="text/javascript" src="{$system['system_url']}/includes/js/mustache/mustache.min.js"></script>
<!-- Mustache -->

<!-- Plugins -->
<script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/autogrow/autogrow.min.js"></script>
<script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/moment/moment.js"></script>
<script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/form/jquery.form.js"></script>
<!-- Plugins -->

{if $page == "admin"}
    <!-- dataTables -->
    <link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/js/plugins/dataTables/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/dataTables/dataTables.bootstrap.min.js"></script>
    <!-- dataTables -->

    <!-- metisMenu -->
    <link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/js/plugins/metisMenu/metisMenu.css">
    <script type="text/javascript" src="{$system['system_url']}/includes/js/plugins/metisMenu/metisMenu.js"></script>
    <!-- metisMenu -->
{/if}

<!-- Sngine -->
<script type="text/javascript" src="{$system['system_url']}/includes/js/core.js"></script>
{if $user->_logged_in}
    <script type="text/javascript" src="{$system['system_url']}/includes/js/user.js"></script>
    <script type="text/javascript" src="{$system['system_url']}/includes/js/post.js"></script>
    <script type="text/javascript" src="{$system['system_url']}/includes/js/chat.js"></script>
{/if}
{if $page == "admin"}
    <script type="text/javascript" src="{$system['system_url']}/includes/js/admin.js"></script>
{/if}
<!-- Sngine -->