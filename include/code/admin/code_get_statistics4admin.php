<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

$query="select count(*) from `accounts` where `username`!='Admin'";

$accounts=$reg8log_db->count_star($query);

//---------------

$query='select count(*) from `accounts` where `banned`=1 or `banned`>='.$req_time;

$banned_users=$reg8log_db->count_star($query);;

//---------------

require $index_dir.'include/config/config_register.php';

$expired1=$req_time-$email_verification_time;
$expired2=$req_time-$admin_confirmation_time;

$query="select count(*) from `pending_accounts` where (`email_verification_key`='' or `email_verified`=1 or `timestamp`>=".$expired1.') and (`admin_confirmed`=0 and `timestamp`>='.$expired2.')';

$pending_accounts4admin=$reg8log_db->count_star($query);;

//---------------

$query="select count(*) from `pending_accounts` where (`email_verification_key`!='' and `email_verified`=0 and `timestamp`>=".$expired1.') and (`admin_confirmed`=1 or `timestamp`>='.$expired2.')';

$pending_accounts4email=$reg8log_db->count_star($query);


//---------------

$query="select count(*) from `account_block_log`";

$all_account_blocks=$reg8log_db->count_star($query);

require $index_dir.'include/config/config_brute_force_protection.php';

$query="select count(*) from `account_block_log` where `unblocked`=0 and  ((`username`!='admin' and `first_attempt`>".($req_time-$account_block_period)." and `block_threshold`>=$account_block_threshold) or (`username`='admin' and `first_attempt`>".($req_time-$admin_account_block_period)." and `block_threshold`>=$admin_account_block_threshold))";

$active_account_blocks=$reg8log_db->count_star($query);

//---------------

$query="select count(*) from `ip_block_log`";

$all_ip_blocks=$reg8log_db->count_star($query);

$query="select count(*) from `ip_block_log` where `unblocked`=0 and  ((`last_username`!='admin' and `first_attempt`>".($req_time-$ip_block_period)." and `block_threshold`>=$ip_block_threshold) or (`last_username`='admin' and `first_attempt`>".($req_time-$admin_ip_block_period)." and `block_threshold`>=$admin_ip_block_threshold))";

$active_ip_blocks=$reg8log_db->count_star($query);

?>