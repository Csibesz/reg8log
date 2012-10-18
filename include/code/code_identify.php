<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");
$parent_page=true;

require_once $index_dir.'include/class/class_cookie.php';
require_once $index_dir.'include/class/class_user.php';
require $index_dir.'include/info/info_identify.php';
require_once $index_dir.'include/func/func_random.php';

unset($user);

$user=new hm_user($identify_structs);

unset($identified_user);
unset($identify_error);

if(isset($manual_identify)) {
	require_once $index_dir.'include/func/func_secure_hash.php';
	if($user->identify($manual_identify['username'], $manual_identify['password']))
	$identified_user=$user->user_info['username'];
}
else if($user->identify()) {
	$identified_user=$user->user_info['username'];
	require_once $index_dir.'include/info/info_lockdown.php';
	if($allow_users2disable_account_block) {
		$brute_force_protection=$user->user_info['brute_force_protection'];
		if($allow_users2disable_account_block==1 and $brute_force_protection!=3 and $brute_force_protection!=2 and $identified_user!='Admin') $brute_force_protection=2;
		if($allow_users2disable_account_block==2 and $brute_force_protection!=3 and $brute_force_protection!=1 and $identified_user!='Admin') $brute_force_protection=1;
	}
	else $brute_force_protection=3;
}

if($user->err_msg) $identify_error=true;

if($log_last_activity and (isset($identified_user) or isset($banned_user))) require_once $index_dir.'include/code/code_log_last_activity.php';

if(isset($identified_user) and $identified_user=='Admin' and !isset($ajax)) require $index_dir.'include/code/code_check_admin_visit_alerts.php';

?>
