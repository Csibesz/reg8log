<?phpif(ini_get('register_globals')) exit("<center><h3>Error: Turn that damned register globals off!</h3></center>");if(!isset($parent_page)) exit("<center><h3>Error: Direct access denied!</h3></center>");if(!isset($index_dir)) $index_dir='';?><html><head><meta http-equiv="Content-type" content="text/html;charset=UTF-8" /><META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"><META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"><META HTTP-EQUIV="EXPIRES" CONTENT="0"><title>IP lockdown</title><style></style><script language="javascript"></script></head><bodybgcolor="#7587b0" text="#000000"link="#0000FF" vlink="#800080"alink="#FF0000" style="margin: 0"><table width="100%"  cellpadding="5" cellspacing="0"><tr><td valign="top"></td><td  width="100%" align="left" valign="top"><?phprequire $index_dir.'include/page/page_sections.php';?></td></tr></table><center><?phprequire_once $index_dir.'include/func/func_duration2msg.php';$tmp25=duration2friendly_str($ip_lockdown_period, 0);echo '<br><br><span style="font-size: 15pt; background: #fff; padding: 5px; border: thin solid #000">Login attempts from IP <span style="white-space: pre; color: blue;">', $ip_lockdown, '</span> are <span style="color: #f00">blocked </span>due to many incorrect logins in the past ', $tmp25,'.</span>';?></center></body></html>