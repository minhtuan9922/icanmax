<?php
/**
 * ajax -> data -> report
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
$valid['do'] = array('report_user', 'report_post', 'unreport_post', 'report_comment', 'unreport_comment');
if(!in_array($_POST['do'], $valid['do'])) {
	_error(400);
}
/* check post id */
if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(400);
}

// report
try {

	// initialize the return array
	$return = array();

	switch ($_POST['do']) {

		case 'report_user':
			$user->report($_POST['id'], 'user');
			modal(SUCCESS, __("Thanks"), __("Your report has been submitted"));
			break;

		case 'report_post':
			$user->report($_POST['id'], 'post');
			break;

		case 'unreport_post':
			$user->unreport($_POST['id'], 'post');
			break;

		case 'report_comment':
			$user->report($_POST['id'], 'comment');
			break;

		case 'unreport_comment':
			$user->unreport($_POST['id'], 'comment');
			break;
	}

	// return & exit
	return_json($return);

}catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>