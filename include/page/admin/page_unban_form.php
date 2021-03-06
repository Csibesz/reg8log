<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

$parent_page=true;

?>

<html <?php echo $page_dir; ?>>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<script src="../js/forms_common.js"></script>
<?php require $index_dir.'include/code/code_validate_captcha_field-js.php'; ?>
<script src="../js/sha256.js"></script>

<script>
<?php
echo "\nsite_salt='$site_salt';\n";
?>

<?php
if(isset($password_check_needed)) echo 'password_exists=true;';
else echo 'password_exists=false;';
?>

function clear_form() {
	//--------------
	if(password_exists) document.ban_form2.password.value='';
	if(document.ban_form2.remember) document.ban_form2.remember.checked=false;
	if(captcha_exists) document.getElementById('captcha_check_status').innerHTML='<?php echo tr('(Not case-sensitive)'); ?>';
	//--------------
	clear_cap(true);
	return false;
}

//----------------------

function hash_password() {
	document.ban_form2.password.value='hashed-'+site_salt+'-'+hex_sha256(site_salt+document.ban_form2.password.value);
}

//----------------------

function validate() {//client side validator
	
	clear_cap(true);
	
	msgs=new Array();

	i=0;

	//----------------
	
	if(password_exists) if(!document.ban_form2.password.value.length) msgs[i++]="<?php echo tr('password field is empty!'); ?>";

	if(captcha_exists) validate_captcha(document.ban_form2.captcha.value);
	
	//----------------
	
	if(msgs.length) {
		clear_cap(false);
		for(i in msgs){
			msgs[i]=msgs[i].charAt(0).toUpperCase()+msgs[i].substring(1, msgs[i].length);
			cap.appendChild(document.createTextNode(msgs[i]));
			cap.appendChild(document.createElement("br"));
		}
		return false;
	}
	
	if(captcha_exists) {
		form_obj=document.ban_form2;
		check_captcha();
		return false;
	}

	if(password_exists) hash_password();

	return true;
}//client side validator

</script>

<title><?php echo tr('Unban user'); ?></title>
<style>
.unit {
	color: #8fd;
}
</style>
</head>
<body bgcolor="#D1D1E9" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000" <?php echo $page_dir; ?>>
<table width="100%" height="100%"><tr><td align="center">
<form name="ban_form2" action="" method="post">
<table bgcolor="#7587b0" style="padding: 5px" >
<?php

//--------------
if(isset($password_msg)) {
	echo '<tr align="center"><td colspan="3"  style="border: solid thin yellow; font-style: italic;">';
	echo "<span style=\"color: yellow\" >&nbsp;$password_msg&nbsp;</span><br />";
	echo '</td></tr>';
}
else if(isset($captcha_msg) and count($err_msgs)==1) {
	echo '<tr align="center"><td colspan="3"  style="border: solid thin yellow; font-style: italic;">';
	echo "<span style=\"color: yellow\" >&nbsp;$captcha_msg&nbsp;</span><br />";
	echo '</td></tr>';
}
else if(!empty($err_msgs)) {
	echo '<tr align="center"><td colspan="3"  style="border: solid thin yellow; font-style: italic;"><span style="color: #800">', tr('Errors'), ':</span><br />';
	foreach($err_msgs as $err_msg) {
		$err_msg[0]=strtoupper($err_msg[0]);
		echo "<span style=\"color: yellow\" >$err_msg</span><br />";
	}
	echo '</td></tr>';
}
//--------------

echo '<input type="hidden" name="antixsrf_token" value="';
echo $_COOKIE['reg8log_antixsrf_token4post'];
echo '">';

require $index_dir.'include/code/code_generate_form_id.php';

?>

<tr align="center"><td>
<?php
echo '<input type="hidden" name="username" value="', htmlspecialchars($rec['username'], ENT_QUOTES, 'UTF-8'), '">';
if(!$rec['banned'] or ($rec['banned']!=1 and $rec['banned']<$req_time)) echo '<h3>', sprintf(tr('User <span style="color: yellow">%s</span> is not banned!'), htmlspecialchars($rec['username'], ENT_QUOTES, 'UTF-8')), '</h3>';
else {
echo '<table border style="margin-top: 7px">
<tr style="background: brown; color: #fff"><th>', tr('Username'), '</th><th>', tr('Uid'), '</th><th>', tr('Email'), '</th><th>', tr('Gender'), '</th><th>', tr('Member for'), '</th></tr><tr style="background: #ccc" align="center">';
echo '<td>', htmlspecialchars($rec['username'], ENT_QUOTES, 'UTF-8'), '</td>';
echo '<td>', $rec['uid'], '</td>';
echo '<td>', $rec['email'], '</td>';
echo '<td>';
if($rec['gender']=='n') echo '?';
else if($rec['gender']=='m') echo tr('Male');
else echo tr('Female');
echo '</td>';
require_once $index_dir.'include/func/func_duration2friendly_str.php';
echo '<td>', duration2friendly_str($req_time-$rec['timestamp']), '</td>';
echo '</tr></table><br></td></tr><tr><td >';
if($ban_reason!=='') echo tr('Ban reason'), ': <span style="color: #8fd;">', htmlspecialchars($ban_reason, ENT_QUOTES, 'UTF-8'), '</span><br>';
if($ban_until!=1) {
	require_once $index_dir.'include/func/func_duration2friendly_str.php';
	echo tr('Ban until'), ':  <span style="color: #8fd;">', duration2friendly_str($ban_until-$req_time, 2), '</span> ', tr(' later'), '.';
}
else echo tr('Ban until'), ':  <span style="color: #8fd;">', tr('unlimited'), '.</span>';
echo '<br><br></td></tr>';
}

//------------------
echo '<tr><td><table width=100% style="background: #aaa; padding-top: 5px">';
//--------------------

if(isset($password_check_needed)) {
	echo '<tr><td>';
	echo tr('Admin password'), ': <input type="password" name="password" size=15>&nbsp;';
	if($admin_operations_require_password>1) echo '&nbsp;', tr('Remember'), ': <input type=checkbox style="vertical-align: middle" name=remember title="', tr('Remember for'), ' ', duration2friendly_str($admin_operations_require_password, 0), '"', ((isset($_POST['remember']))? ' checked ' : ' '), '>';
	echo '</td></tr>';
}

if(isset($captcha_needed) and !$captcha_verified) {
	echo '<tr align=center><td>';
	$captcha_form4login=true;
	require $index_dir.'include/page/page_captcha_form.php';
	echo '</td></tr>';
}

//---------------------

echo '<tr><td align="center"><br><input type="submit" value="', tr('Cancel'), '" name="cancel">&nbsp;';
if($rec['banned']) {
	if(isset($password_check_needed)) echo '<input type="reset" value="', tr('Clear'), '" onClick="return clear_form();"  />&nbsp;';
	echo '<input type="submit" value="', tr('Unban'), '" name="unban_form" onclick="return validate()">';
}
?>
<br><span style="color: yellow; font-style: italic" id="cap">&nbsp;</span>
</td></tr></table>
</tr></table>
</form>
<a href="index.php"><?php echo tr('Admin operations'); ?></a><br><br>
<a href="../index.php"><?php echo tr('Login page'); ?></a>
</td></tr></table>
<script>
if(captcha_exists) {
	document.getElementById('re_captcha_msg').style.visibility='visible';
	captcha_img_style=document.getElementById('captcha_image').style;
	captcha_img_style.cursor='hand';
	if(captcha_img_style.cursor!='hand') captcha_img_style.cursor='pointer';
}
</script>
<?php
require $index_dir.'include/page/page_foot_codes.php';
?>
</body>
</html>
