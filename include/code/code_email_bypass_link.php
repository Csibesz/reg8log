<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");



$headers="MIME-Version: 1.0\nContent-Type: multipart/alternative; boundary=\"==boundary\"";

if(isset($_SERVER['SCRIPT_NAME'])) $dir=$_SERVER['SCRIPT_NAME'];
else if(isset($_SERVER['REQUEST_URI']))  $dir=$_SERVER['REQUEST_URI'];
else $dir=$_SERVER['PHP_SELF'];
$dir=htmlspecialchars($dir, ENT_QUOTES);
$dir=pathinfo($dir, PATHINFO_DIRNAME);
$dir=str_replace('\\', '/', $dir);

if(strlen($dir)==1) $dir='';

$link='http://'.$_SERVER['HTTP_HOST'].$dir.'/block_bypass_login.php?key='.$key;

$body="Your block-bypass link: $link";
$body.="\n--==Multipart_Boundary\nContent-Type: text/plain; charset=\"utf-8\""; $body.="\n\nYour block-bypass link: $link";
$body.="\n--==boundary\nContent-Type: text/html; charset=\"utf-8\"";
$body.="\n\n<html><body><a href=\"$link\">Your block-bypass link</a></body> </html>\n--==boundary--";

mail($email, 'Block-bypass link', $body, $headers);

if($debug_mode) echo $link;

?>