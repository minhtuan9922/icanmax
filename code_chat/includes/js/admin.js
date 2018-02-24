/**
 * admin js
 * 
 * @package Sngine v2+
 * @author Zamblek
 */

// initialize API URLs
api['admin/delete']  = ajax_path+"admin/delete.php";


$(function() {

	// run DataTable
    $('.js_dataTable').DataTable({
        "aoColumnDefs": [ {'bSortable': false, 'aTargets': [ -1 ]} ]
    });


    // run metisMenu
    $(".js_metisMenu").metisMenu();


    // run open window
    $('body').on('click', '.js_open_window', function () {
        window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;
    });


    // run admin deleter
    $('body').on('click', '.js_admin-deleter', function () {
        var handle = $(this).attr('data-handle');
        var id = $(this).attr('data-id');
        var node = $(this).attr('data-node');
        confirm(__['Delete'], __['Are you sure you want to delete this?'], function() {
            $.post(api['admin/delete'], {'handle': handle, 'id': id, 'node': node}, function(response) {
                /* check the response */
                if(response.callback) {
                    eval(response.callback);
                } else {
                    window.location.reload();
                }
            }, 'json')
            .fail(function() {
                modal('#modal-message', {title: __['Phát hiện lỗi'], message: __['Lỗi hệ thống! Vui lòng thử lại sau']});
            });
        });
    });

});