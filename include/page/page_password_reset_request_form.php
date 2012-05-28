<?php
if(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");

if(!isset($index_dir)) $index_dir='';

?>

<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<title>Send password reset email</title>
<script src="js/common.js"></script>
<script>

email_re=/^[a-z0-9_\-+\.]+@([a-z0-9\-+]+\.)+[a-z]{2,5}$/i;

function clear_form() {
document.reset_email_form.email.value='';
clear_cap(true);
return false;
}

function validate()
{
msgs=new Array();
i=0;
if(!document.reset_email_form.email.value) msgs[i++]='Email field is empty!';
else if(!email_re.test(document.reset_email_form.email.value)) msgs[i++]='Email is invalid!';
if(captcha_exists) validate_captcha(document.reset_email_form.captcha.value);
if(msgs.length) {
clear_cap(false);
for(i in msgs){
cap.appendChild(document.createTextNode(msgs[i]));
cap.appendChild(document.createElement("br"));
}
return false;
}
return true;
}

</script>
</head>
<body bgcolor="#7587b0">
<table width="100%" >
<tr>
<td align="left" valign="top">
<?php
require $index_dir.'include/page/page_sections.php';
?>
</td>
<tr>
<td align="center"><br>
<form name="reset_email_form" action="" method="post">
<table>
<?php
if(isset($err_msgs)) {
echo '<tr align="center"><td colspan="3"  style="border: solid thin yellow; font-style: italic">';
foreach($err_msgs as $err_msg) echo '<span style="color: yellow" >', $err_msg, '</span><br />';
echo '</td></tr>';
}
?>
<tr><td>Enter your account's email:</td>
<td colspan="2"><input type="text" name="email" <?php if(isset($_POST['email'])) echo 'value="', htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'), '"'; ?> size="30"></td></tr>
<?php

echo '<input type="hidden" name="antixsrf_token" value="';
echo $_COOKIE['reg8log_antixsrf_token'];
echo '">';

require $index_dir.'include/code/code_generate_form_id.php';

if(isset($captcha_needed) and !$captcha_verified) require $index_dir.'include/page/page_captcha_form.php';
?>
<tr><td align="center" colspan="3">
<span style="color: yellow; font-style: italic" id="cap">&nbsp;</span>
<div style="margin: 0px; padding: 0px; font-size: 1px">&nbsp;</div><input type="reset" value="Clear" onClick="return clear_form()">
<input type="submit" value="Submit" onclick="return validate()"></td></tr>
</table>
Check your email carefully because, for security reasons, the system will not inform you whether the email you entered really exists in the database;<br>
You can of course make other tries in case you made a typo or you don't remember certainly which of your emails you had chosen for your account.
<?php
if($max_password_reset_emails!=-1) {
require_once $index_dir.'include/func/func_duration2msg.php';
$period_msg=duration2friendly_str($password_reset_period, 0);
echo '<hr width="90%">Maximum number of password reset emails that can be sent in every ', $period_msg, ' : ', $max_password_reset_emails, '<br>';
echo 'Note that the system will not, for security reasons, tell you if the maximum number of emails is reached.';
}
?>
</td>
</tr>
</table>
</form>
<script>
if(captcha_exists) {
  document.getElementById('re_captcha_msg').style.visibility='visible';
  captcha_img_style=document.getElementById('captcha_image').style;
  captcha_img_style.cursor='hand';
  if(captcha_img_style.cursor!='hand') captcha_img_style.cursor='pointer';
}
</script>
</body>
</html>
