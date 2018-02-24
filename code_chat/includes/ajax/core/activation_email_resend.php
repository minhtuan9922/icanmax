<?php
/**
 * ajax -> users -> activation email resend
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
	modal(SUCCESS, __("Activated"), __("Your account already activated!"));
}

// activation email resend
try {
	$user->activation_email_resend();
	modal(SUCCESS, __("Một email kích hoạt đã được gửi đi"), __("Xin vui lòng bấm vào liên kết trong email đó để xác nhận địa chỉ email của bạn"));
}catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>