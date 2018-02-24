<?php
/**
 * ajax -> data -> search
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
if(!isset($_POST['query'])) {
	_error(400);
}

// search
try {

	// initialize the return array
	$return = array();

	// get results
	$results = $user->search_quick($_POST['query']);
	if(count($results) > 0) {
		/* assign variables */
		$smarty->assign('results', $results);
		/* return */
		$return['results'] = $smarty->fetch("ajax.search.tpl");
	}
	
	// return & exit
	return_json($return);

}catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>