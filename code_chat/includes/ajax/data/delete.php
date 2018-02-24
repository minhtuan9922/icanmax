<?php
/**
 * ajax -> data -> delete
 * 
 * @package Sngine v2+
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

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


// valid inputs
if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(400);
}

// delete
try {

	switch ($_POST['handle']) {
		case 'page':
			$user->delete_page($_POST['id']);
			break;

		case 'group':
			$user->delete_group($_POST['id']);
			break;

		default:
			_error(400);
			break;
	}

	// return
	return_json();

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>