<?php
/**
 * ajax -> posts -> shares
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
/* if post_id not set || not numeric */
if(!isset($_GET['post_id']) || !is_numeric($_GET['post_id'])) {
	_error(400);
}


// get shares
try {

	// initialize the return array
	$return = array();

	// get shares
	$posts = $user->who_shares($_GET['post_id']);
	/* assign variables */
	$smarty->assign('posts', $posts);
	$smarty->assign('id', $_GET['post_id']);
	/* return */
	$return['template'] = $smarty->fetch("ajax.who_shares.tpl");
	$return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template);";

	// return & exit
	return_json($return);

}catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}


?>