<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

if(!isset($index_dir)) $index_dir='';

require_once $index_dir.'include/code/code_db_object.php';

$query="select * from `dummy`";

$reg8log_db->auto_abort=false;
if($reg8log_db->result_num($query)) $db_installed=true;
else $db_installed=false;
$reg8log_db->auto_abort=true;

?>