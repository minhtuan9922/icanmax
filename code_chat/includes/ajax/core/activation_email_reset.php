<?php
/**
 * ajax -> users -> activation email reset
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
if(!$system['email_send_activation'] || $user->_data['user_activated']) {
	modal(SUCCESS, __("Đã kích hoạt"), __("Tài khoản của bạn đã được kích hoạt !"));
}

// activation email reset
try {
	$user->activation_email_reset($_POST['email']);
	modal(SUCCESS, __("Email của bạn đã được thay đổi"), __("Xin vui lòng bấm vào liên kết trong email đó để xác nhận địa chỉ email của bạn"));
}catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>