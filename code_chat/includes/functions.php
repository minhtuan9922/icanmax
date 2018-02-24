<?php
/**
 * functions
 * 
 * @package Sngine v2+
 * @author Zamblek
 */


/* ------------------------------- */
/* Core */
/* ------------------------------- */

/**
 * _error
 * 
 * @return void
 */
function _error() {
    $args = func_get_args();
    if(count($args) > 1) {
        $title = $args[0];
        $message = $args[1];
    } else {
        switch ($args[0]) {
            case 'DB_ERROR':
                $title = "Lỗi cơ sở dữ liệu";
                $message = "<div class='text-left'><h1>"."Lỗi thiết lập một kết nối cơ sở dữ liệu"."</h1>
                            <p>"."Điều này có nghĩa là Ban username và password trong file config.php của bạn là không chính xác hoặc chúng tôi không thể liên lạc với máy chủ cơ sở dữ liệu ở localhost . Điều này có thể có nghĩa là máy chủ cơ sở dữ liệu của máy chủ của bạn là xuống."."</p>
                            <ul>
                                <li>"."Bạn có chắc chắn rằng bạn có tên người dùng và mật khẩu chính xác?"."</li>
                                <li>"."Bạn có chắc chắn rằng bạn đã gõ tên máy chính xác?"."</li>
                                <li>"."Bạn có chắc chắn rằng máy chủ cơ sở dữ liệu đang chạy?"."</li>
                            </ul>
                            <p>"."Nếu bạn không chắc chắn những điều này có lẽ bạn nên liên hệ với máy chủ của bạn . Nếu bạn vẫn cần trợ giúp bạn luôn có thể truy cập vào"." <a href='http://support.zamblek.com'>"."Sngine Support Forums".".</a></p>
                            </div>";
                break;

            case 'SQL_ERROR':
                $title = __("Lỗi cơ sở dữ liệu");
                $message = "<p>".__("Có lỗi xảy ra trong khi văn bản cho cơ sở dữ liệu . Vui lòng thử lại sau")."</p>";
                break;

            case 'SQL_ERROR_THROWEN':
                throw new Exception(__("Có lỗi xảy ra trong khi văn bản cho cơ sở dữ liệu . Vui lòng thử lại sau"));
                break;

            case '404':
                header('HTTP/1.0 404 Not Found');
                $title = __("404 Not Found");
                $message = "<p>".__("Các URL được yêu cầu không được tìm thấy trên máy chủ này . Đó là tất cả những gì chúng tôi biết")."</p>";
                break;

            case '400':
                header('HTTP/1.0 400 Bad Request');
                exit;

            case '403':
                header('HTTP/1.0 403 Access Denied');
                exit;
            
            default:
                $title = __("Error");
                $message = "<p>".__("There is some thing went wrong")."</p>";
                break;
        }
    }
    echo '<!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>'.$title.'</title>
                <style type="text/css">
                    html {
                        background: #f1f1f1;
                    }
                    body {
                        color: #555;
                        font-family: "Open Sans", Arial,sans-serif;
                        margin: 0;
                        padding: 0;
                    }
                    .error-title {
                        background: #ce3426;
                        color: #fff;
                        text-align: center;
                        font-size: 34px;
                        font-weight: 100;
                        line-height: 50px;
                        padding: 60px 0;
                    }
                    .error-message {
                        margin: 1em auto;
                        padding: 1em 2em;
                        max-width: 600px;
                        font-size: 1em;
                        line-height: 1.8em;
                        text-align: center;
                    }
                    .error-message .code,
                    .error-message p {
                        margin-top: 0;
                        margin-bottom: 1.3em;
                    }
                    .error-message .code {
                        font-family: Consolas, Monaco, monospace;
                        background: rgba(0, 0, 0, 0.7);
                        padding: 10px;
                        color: rgba(255, 255, 255, 0.7);
                        word-break: break-all;
                        border-radius: 2px;
                    }
                    h1 {
                        font-size: 1.2em;
                    }
                    
                    ul li {
                        margin-bottom: 1em;
                        font-size: 0.9em;
                    }
                    a {
                        color: #ce3426;
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    .button {
                        background: #f7f7f7;
                        border: 1px solid #cccccc;
                        color: #555;
                        display: inline-block;
                        text-decoration: none;
                        margin: 0;
                        padding: 5px 10px;
                        cursor: pointer;
                        -webkit-border-radius: 3px;
                        -webkit-appearance: none;
                        border-radius: 3px;
                        white-space: nowrap;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing:    border-box;
                        box-sizing:         border-box;

                        -webkit-box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                        box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                        vertical-align: top;
                    }

                    .button.button-large {
                        height: 29px;
                        line-height: 28px;
                        padding: 0 12px;
                    }

                    .button:hover,
                    .button:focus {
                        background: #fafafa;
                        border-color: #999;
                        color: #222;
                        text-decoration: none;
                    }

                    .button:focus  {
                        -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
                        box-shadow: 1px 1px 1px rgba(0,0,0,.2);
                    }

                    .button:active {
                        background: #eee;
                        border-color: #999;
                        color: #333;
                        -webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                        box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                    }
                    .text-left {
                        text-align: left;
                    }
                    .text-center {
                        text-align: center;
                    }
                </style>
            </head>
            <body>
                <div class="error-title">'.$title.'</div>
                <div class="error-message">'.$message.'</div>
            </body>
            </html>';
    exit;
}


/**
 * Check for the required extensions to run
 *
 * Dies if requirements are not met.
 * 
 * @return void
 */
function _check_requirements() {
    /* get system version */
    require('version.php');
    /* check php version */
    $php_version = phpversion();
    if(version_compare( $required_php_version, $php_version, '>')) {
        _error("Installation Error", sprintf('<p class="text-center">Your server is running PHP version %1$s but Sngine %2$s requires at least %3$s.</p>', $php_version, $sngine_version, $required_php_version));
    }
    /* check mysql version */
    if(!extension_loaded('mysql')) {
        _error("Installation Error", '<p class="text-center">Your PHP installation appears to be missing the MySQL extension which is required by Sngine.</p>');
    }
}


/**
 * _public_base_directory
 * 
 * gets the top level public directory
 * 
 * @return string
 */
function _get_base_directory() {
    //place each directory into array
    $directory_array = explode('/', BASEPATH);
    //get highest or top level in array of directory strings
    $public_base = (count($directory_array) > 1)? $directory_array[1] : '';
    return $public_base;
}


/**
 * _get_system_url
 * 
 * @return string
 */
function _get_system_url() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $base_directory = _get_base_directory();
    if($base_directory != "") {
        return $protocol.$_SERVER['HTTP_HOST'].'/'._get_base_directory();
    } else {
        return $protocol.$_SERVER['HTTP_HOST'];
    }
}


/**
 * _check_system_url
 * 
 * @return string
 */
function _check_system_url($system_url) {
    $parsed_url = parse_url($system_url);
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    if( ($parsed_url['scheme'].'://' != $protocol) || ($parsed_url['host'] != $_SERVER['HTTP_HOST']) ) {
        /* redirect to system url */
        header('Location: '.$system_url);
    }
}


/**
 * _redirect
 * 
 * @param string $url
 * @return void
 */
function _redirect($url = null) {
    if($url) {
        header('Location: '._get_system_url().$url);
    } else {
        header('Location: '._get_system_url());
    }
    exit;
}



/* ------------------------------- */
/* Email */
/* ------------------------------- */

/**
 * send_mail
 * 
 * @param string $email
 * @param string $subject
 * @param string $body
 * @return boolean
 */
function send_email($email, $subject, $body) {
    global $system;
    $header  = "From: \"".$system['system_title']."\" <"."no-reply@".$system['system_domain'].">\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Mailer: ".$system['system_title']."\r\n";
    $header .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n";
    if(mail($email, $subject, $body, $header)) {
        return true;
    }else {
        return false;
    }
}


/* ------------------------------- */
/* User Access */
/* ------------------------------- */

/**
 * user_access
 * 
 * @param boolean $restricted = true
 * @return void
 */
function user_access() {
    global $user;
    if(!$user->_logged_in) {
        get_login();
    }
}


/**
 * get_login
 * 
 * @return void
 */
function get_login() {
    global $smarty;
    $smarty->assign('highlight', __("Bạn phải đăng nhập để xem trang này"));
    page_header(__("Đăng nhập"));
    page_footer('signin');
    exit;
}



/* ------------------------------- */
/* Return */
/* ------------------------------- */

/**
 * return_json
 * 
 * @param array $response
 * @return json
 */
function return_json($response = '') {
    header('Content-Type: application/json');
    exit(json_encode($response));
}


/**
 * modal
 * 
 * @return json
 */
function modal() {
    $args = func_get_args();
    switch ($args[0]) {
        case 'LOGIN':
            return_json( array("callback" => "modal('#modal-login')") );
            break;
        case 'MESSAGE':
            return_json( array("callback" => "modal('#modal-message', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'ERROR':
            return_json( array("callback" => "modal('#modal-error', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'SUCCESS':
            return_json( array("callback" => "modal('#modal-success', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        default:
            if(isset($args[1])) {
                return_json( array("callback" => "modal('".$args[0]."', ".$args[1].")") );
            } else {
                return_json( array("callback" => "modal('".$args[0]."')") );
            }
            break;
    }
}



/* ------------------------------- */
/* Pages */
/* ------------------------------- */

/**
 * page_header
 * 
 * @param string $title
 * @param string $description
 * @return void
 */
function page_header($title, $description = '') {
    global $smarty;
    $smarty->assign('page_title', $title);
    $smarty->assign('page_description', $description);
}


/**
 * page_footer
 * 
 * @param string $page
 * @return void
 */
function page_footer($page) {
    global $smarty;
    $smarty->assign('page', $page);
    $smarty->display("$page.tpl");
}



/* ------------------------------- */
/* Text */
/* ------------------------------- */

/**
 * parse
 * 
 * @param string $text
 * @param boolean $nl2br
 * @return string
 */
function parse($text, $nl2br = true, $mention = true) {
    /* decode html entity */
    //$text = html_entity_decode($text, ENT_QUOTES);
    /* decode urls */
    $text = decode_urls($text);
    /* decode emoji */
    $text = decode_emoji($text);
    /* decode #hashtag */
    $text = decode_hashtag($text);
    /* decode @mention */
    if($mention) {
        $text = decode_mention($text);
    }
    /* nl2br */
    if($nl2br) {
        $text = nl2br($text);
    }
    return $text;
}


/**
 * decode_urls
 * 
 * @param string $text
 * @return string
 */
function decode_urls($text) {
    $text = preg_replace('/(https?:\/\/[^\s]+)/', "<a target='_blank' href=\"$1\">$1</a>", $text);
    return $text;
}


/**
 * decode_emoji
 * 
 * @param string $text
 * @return string
 */
function decode_emoji($text) {
    $emoji = array(
        ':\)'       => '<i data-emoji=":)" class="js_emoji twa twa-xlg twa-smile"></i>',
        ':\('       => '<i data-emoji=":(" class="js_emoji twa twa-xlg twa-worried"></i>',
        ':P'       => '<i data-emoji=":P" class="js_emoji twa twa-xlg twa-stuck-out-tongue"></i>',
        ':D'       => '<i data-emoji=":D" class="js_emoji twa twa-xlg twa-smiley"></i>',
        ':O'       => '<i data-emoji=":O" class="js_emoji twa twa-xlg twa-open-mouth"></i>',
        ';\)'       => '<i data-emoji=";)" class="js_emoji twa twa-xlg twa-wink"></i>',
        ':@'       => '<i data-emoji=":@" class="js_emoji twa twa-xlg twa-angry"></i>',
        ':\/'       => '<i data-emoji=":/" class="js_emoji twa twa-xlg twa-confused"></i>',
        ';\('       => '<i data-emoji=";(" class="js_emoji twa twa-xlg twa-sob"></i>',
        '\^\_\^'      => '<i data-emoji="^_^" class="js_emoji twa twa-xlg twa-grin"></i>',
        'B\|'       => '<i data-emoji="B|" class="js_emoji twa twa-xlg twa-sunglasses"></i>',
        '<3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        '&lt;3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        '&amp;lt;3'       => '<i data-emoji="<3" class="js_emoji twa twa-xlg twa-heart"></i>',
        'O:\)'      => '<i data-emoji="O:)" class="js_emoji twa twa-xlg twa-innocent"></i>',
        '\(devil\)'  => '<i data-emoji="(devil)" class="js_emoji twa twa-xlg twa-rage"></i>',
        ':S'       => '<i data-emoji=":S" class="js_emoji twa twa-xlg twa-worried"></i>',
        '\*\)'       => '<i data-emoji="*)" class="js_emoji twa twa-xlg twa-kissing-heart"></i>',
        '\(y\)'      => '<i data-emoji="(y)" class="js_emoji twa twa-xlg twa-thumbsup"></i>',
        '\(n\)'      => '<i data-emoji="(n)" class="js_emoji twa twa-xlg twa-thumbsdown"></i>'
    );
    foreach($emoji as $pattern => $replacement) {
        $pattern = '/(^|\s)'.$pattern.'/i';
        $text = preg_replace($pattern, $replacement, $text); 
    }
    return $text;
}


/**
 * decode_hashtag
 * 
 * @param string $text
 * @return string
 */
function decode_hashtag($text) {
    global $system;
    $text = preg_replace('/(#([^(\s|\d)[:punct:]]+))/', '<a href="'.$system['system_url'].'/search/hashtag/$2">$1</a>', $text);
    return $text;
}


/**
 * decode_mention
 * 
 * @param string $text
 * @return string
 */
function decode_mention($text) {
    global $user;
    $text = preg_replace_callback('/\[([a-z0-9._]+)\]/i', array($user, 'get_mentions'), $text);
    return $text;
}


/**
 * decode_popover
 * 
 * @param integer $uid
 * @param string $username
 * @param string $name
 * @return string
 */
function decode_popover($uid, $username, $name) {
    global $system;
    $popover = '<span class="js_user-popover" data-uid="'.$uid.'"><a href="'.$system['system_url'].'/'.$username.'">'.$name.'</a></span>';
    return $popover;
}


/**
 * see_more
 * 
 * @param string $text
 * @param integer $length
 * @return string
 */
function see_more($text, $length = 5) {
    if(substr_count($text, '<br />') > $length) {
        $string = explode('<br />',$text);
        $final_string = '<span>';
        for($i = 0; $i < $length; $i++){
            $final_string .= $string[$i].'<br />';
        }
        $final_string .= '</span>';
        $final_string .= '<span class="js_see-more-text">...<br /><span class="text-link">'.__('Xem thêm').'</span></span>';
        $final_string .= '<span class="x-hidden">';
        for($j = $i+1; $j < count($string); $j++) {
            $final_string .= $string[$j].'<br />';
        }
        $final_string .= '</span>';
        return $final_string;
    }
    return $text;
}


/**
 * fix_encoding
 * 
 * @param string $html
 * @return string
 */
function fix_encoding($html) {
    if(preg_match('/<meta.*charset="?([^"\'\/\>]+)"?/im', $html, $match)) {
        $encoding = strtolower($match[1]);
    }
    if(!preg_match('/utf-8/i', $encoding)) {
        $html = iconv($encoding, 'utf-8', $html);
    }
    $fixed_html = mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8");
    return $fixed_html;
}



/* ------------------------------- */
/* General */
/* ------------------------------- */


/**
 * generate_token
 * 
 * @param integer $length
 * @return string
 */
function generate_token($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);
    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
    return $result;
}


/**
 * get_firstname
 * 
 * @param string $fullname
 * @return string
 */
function get_firstname($fullname) {
    $name = explode(" ", $fullname);
    return $name[0];
}



/* ------------------------------- */
/* Security */
/* ------------------------------- */

/**
 * secure
 * 
 * @param string $value
 * @param string $type
 * @param string $quoted
 * @return string
 */
function secure($value, $type = "", $quoted = true) {
    if($value !== 'null') {
        $value = sanitize($value);
        $value = safe_sql($value, $type, $quoted);
    } else {
        $value = 'null';
    }
    return $value;
}


/**
 * sanitize
 * 
 * @param string $value
 * @return string
 */
function sanitize($value) {
    if(get_magic_quotes_gpc()) $value = stripslashes($value);
    return htmlentities(html_entity_decode($value), ENT_QUOTES, 'utf-8');
}


/**
 * safe_sql
 * 
 * @param string $value
 * @param string $type
 * @param string $quoted
 * @return string
 */
function safe_sql($value, $type = "", $quoted = true) {
    global $db;
    $value = $db->real_escape_string($value);
    switch ($type) {
        case 'int':
            $value = ($quoted)? "'".intval($value)."'" : intval($value);
            break;

        case 'search':
            if($quoted) {
                $value = (!empty($value)) ? "'%".$value."%'" : "''";
            } else {
                $value = (!empty($value)) ? "'%%".$value."%%'" : "''";
            }
            break;
        
        default:
            $value = (!empty($value)) ? "'".$value."'" : "''";
            break;
    }
    return $value;
}


/**
 * is_ajax
 * 
 * @return void
 */
function is_ajax() {
    if( !isset($_SERVER['HTTP_X_REQUESTED_WITH']) || ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') ) {
        _redirect();
    }
}


/**
 * is_empty
 * 
 * @param string $value
 * @return boolean
 */
function is_empty($value) {
    if(strlen(trim(preg_replace('/\xc2\xa0/',' ',$value))) == 0) {
        return true;
    }else {
        return false;
    }
}


/**
 * valid_email
 * 
 * @param string $email
 * @return boolean
 */
function valid_email($email) {
    if(preg_match("/^[0-9a-z]+(([\.\-_])[0-9a-z]+)*@[0-9a-z]+(([\.\-])[0-9a-z-]+)*\.[a-z]{2,4}$/i", $email)) {
        return true;
    }else {
        return false;
    }
}


/**
 * valid_url
 * 
 * @param string $email
 * @return boolean
 */
function valid_url($url) {
    if(preg_match('/^https?:\/\/[^\s]+/i', $url)) {
        return true;
    }else {
        return false;
    }
}


/**
 * valid_username
 * 
 * @param string $string
 * @return boolean
 */
function valid_username($string) {
    if(preg_match('/^[a-z0-9._]*$/i', $string)) {
        return true;
    }else {
        return false;
    }
}


/**
 * valid_name
 * 
 * @param string $string
 * @return boolean
 */
function valid_name($string) {
    if(preg_match("/^[\\p{L} ]+$/ui", $string)) {
        return true;
    }else {
        return false;
    }
}


/**
 * valid_image
 * 
 * @param string $image
 * @return boolean
 */
function valid_image($image) {
    if(preg_match('/^sngine_[a-z0-9]+(\.)+(jpg|gif|jpeg|png)$/i', $image)) {
        return true;
    }else {
        return false;
    }
}

?>