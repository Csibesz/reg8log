<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");



if($account_blocks_alert_threshold==1) {
	$account_blocks_alert_threshold_reached=true;
	return;
}

if($new_account_blocks<$account_blocks_alert_threshold) return;

require_once $index_dir.'include/code/code_db_object.php';

$query='select * from `account_lockdown_log` where `last_attempt`>='.(time()-24*60*60);

if($reg8log_db->result_num($query)>=$account_blocks_alert_threshold) $account_blocks_alert_threshold_reached=true;

?>