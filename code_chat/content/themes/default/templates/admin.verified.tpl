<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-check-circle pr5 panel-icon"></i>
        <strong>{__("Xác thực")}</strong> &rsaquo; <strong>{__($sub_view|capitalize)}</strong>
    </div>
    {if $sub_view == "users"}
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Đại diện")}</th>
                            <th>{__("Tên đăng nhập")}</th>
                            <th>{__("Tên hiển thị")}</th>
                            <th>{__("IP")}</th>
                            <th>{__("Tham gia")}</th>
                            <th>{__("Kích hoạt")}</th>
                            <th>{__("Hành động")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td><a href="{$system['system_url']}/{$row['user_name']}" target="_blank">{$row['user_id']}</a></td>
                            <td class="post-avatar">
                                <a target="_blank" class="post-avatar-picture" href="{$system['system_url']}/{$row['user_name']}" style="background-image:url({$row['user_picture']});">
                                </a>
                            </td>
                            <td>
                                <a href="{$system['system_url']}/{$row['user_name']}" target="_blank">
                                    {$row['user_name']}
                                </a>
                            </td>
                            <td>
                                <a href="{$system['system_url']}/{$row['user_name']}" target="_blank">
                                    {$row['user_fullname']}
                                </a>
                            </td>
                            <td>{$row['user_ip']}</td>
                            <td>{$row['user_registered']|date_format:"%e %B %Y"}</td>
                            <td>
                                {if $row.user_activated}
                                <span class="label label-success">{__("Vâng")}</span>
                                {else}
                                <span class="label label-danger">{__("Không")}</span>
                                {/if}
                            </td>
                            <td>
                                <a href="{$system['system_url']}/admin/users/edit/{$row['user_id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>

    {elseif $sub_view == "pages"}
        <div class="panel-body with-table">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Đại diện")}</th>
                            <th>{__("URL")}</th>
                            <th>{__("Tiêu đề")}</th>
                            <th>{__("Đã thích")}</th>
                            <th>{__("Xác thực")}</th>
                            <th>{__("Hành động")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>
                                <a href="{$system['system_url']}/pages/{$row['page_name']}" target="_blank">
                                    {$row['page_id']}
                                </a>
                            </td>
                            <td class="post-avatar">
                                <a target="_blank" class="post-avatar-picture" href="{$system['system_url']}/pages/{$row['page_name']}" style="background-image:url({$row['page_picture']});">
                                </a>
                            </td>
                            <td>
                                <a href="{$system['system_url']}/pages/{$row['page_name']}" target="_blank">
                                    {$row['page_name']}
                                </a>
                            </td>
                            <td>
                                <a href="{$system['system_url']}/pages/{$row['page_name']}" target="_blank">
                                    {$row.page_title}
                                </a>
                            </td>
                            <td>{$row['page_likes']}</td>
                            <td>
                                {if $row['page_verified']}
                                <span class="label label-success">{__("Vâng")}</span>
                                {else}
                                <span class="label label-danger">{__("Không")}</span>
                                {/if}
                            </td>
                            <td>
                                <button class="btn btn-xs btn-danger js_delete-page" data-id="{$row['page_id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a href="{$system['system_url']}/admin/pages/edit/{$row['page_id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>

    {/if}
</div>