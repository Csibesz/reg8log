<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

?>

<html <?php echo $page_dir; ?>>

   <head>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
      <title><?php echo tr('Operation failure'); ?></title>
      <script language="javascript">

      </script>
   </head>

<body bgcolor="#D1D1E9" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000" <?php echo $page_dir; ?>><table width="100%" height="100%" style="border: 10px solid red"><tr><td align="center">

<h2 style="color: red"><?php echo tr('Error'); ?>:</h2>
<?php

if(!isset($no_specialchars)) {
	echo '<h3>', htmlspecialchars($failure_msg, ENT_QUOTES, 'UTF-8'), '</h3>';
	if(isset($additional_link)) echo "<a href=\"{$additional_link[1]}\">{$additional_link[0]}</a><br>";
	echo "<a href=\"{$index_dir}index.php\">", tr('Login page'), "</a>";
}
else {
	echo $failure_msg;
	if(isset($additional_link)) echo "<a href=\"{$additional_link[1]}\">{$additional_link[0]}</a><br>";
	echo "<br /><a href=\"{$index_dir}index.php\">", tr('Login page'), "</a>";
}

?>
</td></tr></table>
<?php
require $index_dir.'include/page/page_foot_codes.php';
?>
</body>
</html>

