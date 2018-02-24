<div class="panel panel-default">
    <div class="panel-heading with-icon">
        {if $sub_view == ""}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admin/widgets/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Thêm mới")}
                </a>
            </div>
        {/if}
        <i class="fa fa-cubes pr5 panel-icon"></i>
        <strong>{__("Chức năng")}</strong>
        {if $sub_view == "edit"} &rsaquo; <strong>{$data['title']}</strong>{/if}
        {if $sub_view == "add"} &rsaquo; <strong>{__('Thêm mới')}</strong>{/if}
    </div>
    {if $sub_view == ""}
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Tiêu đề")}</th>
                            <th>{__("Vị trí")}</th>
                            <th>{__("Hành động")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['widget_id']}</td>
                            <td>{$row['title']}</td>
                            <td>
                                {if $row['place'] == "home"}{__("Trang chủ")}{/if}
                                {if $row['place'] == "requests"}{__("Trang yêu cầu kết bạn")}{/if}
                                {if $row['place'] == "notifications"}{__("Trang thông báo")}{/if}
                                {if $row['place'] == "post"}{__("Trang bài viết")}{/if}
                                {if $row['place'] == "photo"}{__("Trang ảnh")}{/if}
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_admin-deleter" data-handle="widget" data-id="{$row['widget_id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="{$system['system_url']}/admin/widgets/edit/{$row['widget_id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "edit"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=edit&id={$data['widget_id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Tiêu đề")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="{$data['title']}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Vị trí")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option {if $data['place'] == "home"}selected{/if} value="home">{__("Trang chủ")}</option>
                            <option {if $data['place'] == "requests"}selected{/if} value="requests">{__("Trang yêu cầu kết bạn")}</option>
                            <option {if $data['place'] == "notifications"}selected{/if} value="notifications">{__("Trang thông báo")}</option>
                            <option {if $data['place'] == "post"}selected{/if} value="post">{__("Trang bài viết")}</option>
                            <option {if $data['place'] == "photo"}selected{/if} value="photo">{__("Trang ảnh")}</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("HTML")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="code" rows="8">{$data['code']}</textarea>
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
    {elseif $sub_view == "add"}
        <div class="panel-body">
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle fa-lg"></i>
                {__("When you add mutiple widgets at the samle location, they will be displayed randomly")}
            </div>
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Tiêu đề")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Vị trí")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option value="home">{__("Trang chủ")}</option>
                            <option value="requests">{__("Yêu cầu kết bạn")}</option>
                            <option value="notifications">{__("Trang thông báo")}</option>
                            <option value="post">{__("Trang bài viết")}</option>
                            <option value="photo">{__("Trang ảnh")}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("HTML")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="code" rows="8"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Thêm mới")}</button>
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
    {/if}
</div>