<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

require_once $index_dir.'include/func/func_captcha.php';

require_once $index_dir.'include/config/config_register_fields.php';

$captcha_format=$fields['captcha'];

require $index_dir.'include/code/sess/code_sess_start.php';

if(isset($_SESSION['captcha_verified'])) {
	$captcha_verified=true;
	unset($_SESSION['captcha_verified']);
	return true;
}

$captcha_verified=false;

if(!isset($_SESSION['captcha_hash'], $_POST['captcha'])) {
	$err_msgs[]=$captcha_msg=tr('Sorry, you need to enter a security code.');
	$captcha_err=true;
}
else if($_POST['captcha']==='') {
	$err_msgs[]=tr('Security code field is empty!');
	$captcha_err=true;
}
else if(strlen($_POST['captcha'])<$captcha_format['minlength']) {
	$err_msgs[]=sprintf(tr('Security code is shorter than %d characters!'), $captcha_format['minlength']);
	$captcha_err=true;
}
else if(strlen($_POST['captcha'])>$captcha_format['maxlength']) {
	$err_msgs[]=sprintf(tr('Security code is longer than %d characters!'), $captcha_format['maxlength']);
	$captcha_err=true;
}
else if($captcha_format['php_re'] and !preg_match($captcha_format['php_re'], $_POST['captcha'])) {
	$err_msgs[]=tr('Security code contains invalid characters!');
	$captcha_err=true;
}
else if(!captcha_verify_word()) {
	$err_msgs[]=tr('The security code was incorrect!');
	$captcha_err=true;
}
else $captcha_verified=true;

?>