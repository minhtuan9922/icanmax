<?php
/**
 * ajax -> data -> upload
 * 
 * @package Sngine v2+
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// fetch image class
require('../../class-image.php');

// check AJAX Request
is_ajax();

// check user logged in
if(!$user->_logged_in) {
    modal(LOGIN);
}

// check user activated
if($system['email_send_activation'] && !$user->_data['user_activated']) {
    modal(MESSAGE, __("Chưa kích hoạt"), __("Trước khi bạn có thể tương tác với người dùng khác , bạn cần phải xác nhận địa chỉ email của bạn"));
}

// check secret
if($_SESSION['secret'] != $_POST['secret']) {
    _error(403);
}

// valid inputs
if(!isset($_FILES["file"]) || $_FILES["file"]["error"] != UPLOAD_ERR_OK) {
    modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
}
/* if file size is bigger than allowed size */
if($_FILES["file"]["size"] > 5242880) {
    modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
}


// upload
try {

    $image = new Image($_FILES["file"]["tmp_name"]);
    $prefix = 'sngine_'.md5(time()*rand(1, 9999));
    $image_tmp_name = $prefix.'_tmp'.$image->_img_ext;
    $image_new_name = $prefix.$image->_img_ext;
    $path_tmp = '../../../'.$system['system_uploads_directory'].'/'.$image_tmp_name;
    $path_new = '../../../'.$system['system_uploads_directory'].'/'.$image_new_name;

    /* check if the file uploaded successfully */
    if(!@move_uploaded_file($_FILES['file']['tmp_name'], $path_tmp)) {
        modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
    }

    /* save the new image */
    $image->save($path_new, $path_tmp);
    
    /* delete the tmp image */
    unlink($path_tmp);

    // check the handle
    if(isset($_POST['handle'])) {
        switch ($_POST['handle']) {
            case 'cover-user':
                /* update user cover */
                $db->query(sprintf("UPDATE users SET user_cover = %s WHERE user_id = %s", secure($image_new_name), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;

            case 'picture-user':
                /* update user picture */
                $db->query(sprintf("UPDATE users SET user_picture = %s WHERE user_id = %s", secure($image_new_name), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;

            case 'cover-page':
                /* check if page id is set */
                if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* check if the user is the page admin */
                $check = $db->query(sprintf("SELECT * FROM pages WHERE page_id = %s AND page_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                if($check->num_rows == 0) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* update page cover */
                $db->query(sprintf("UPDATE pages SET page_cover = %s WHERE page_id = %s", secure($image_new_name), secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;

            case 'picture-page':
                /* check if page id is set */
                if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* check if the user is the page admin */
                $check = $db->query(sprintf("SELECT * FROM pages WHERE page_id = %s AND page_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                if($check->num_rows == 0) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* update page picture */
                $db->query(sprintf("UPDATE pages SET page_picture = %s WHERE page_id = %s", secure($image_new_name), secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;

            case 'cover-group':
                /* check if group id is set */
                if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* check if the user is the group admin */
                $check = $db->query(sprintf("SELECT * FROM groups WHERE group_id = %s AND group_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                if($check->num_rows == 0) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* update group cover */
                $db->query(sprintf("UPDATE groups SET group_cover = %s WHERE group_id = %s", secure($image_new_name), secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;

            case 'picture-group':
                /* check if group id is set */
                if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* check if the user is the group admin */
                $check = $db->query(sprintf("SELECT * FROM groups WHERE group_id = %s AND group_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                if($check->num_rows == 0) {
                    /* delete the uploaded image & return error 403 */
                    unlink($path);
                    _error(403);
                }
                /* update group picture */
                $db->query(sprintf("UPDATE groups SET group_picture = %s WHERE group_id = %s", secure($image_new_name), secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                break;
        }
    }
    
    // return the file new name & exit
    return_json(array("file" => $image_new_name));

}catch (Exception $e) {
    modal(ERROR, __("Error"), $e->getMessage());
}
    

?>