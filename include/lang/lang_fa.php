<?php
if(ini_get('register_globals')) exit("<center><h3>error: turn that damned register globals off!</h3></center>");
if(!isset($parent_page)) exit("<center><h3>error: direct access denied!</h3></center>");

return array(
'email_take_no_action_msg' => 'هشدار: دریافت کنندهء گرامی، این ایمیل توسط یک سیستم کاربری به شما ارسال شده است. ممکن است شخصی به اشتباه یا عمدا آدرس ایمیل شما را بعنوان آدرس ایمیل خودش به سیستم معرفی کرده باشد. اگر شما باعث ارسال این ایمیل نشده اید و نمیدانید چرا چنین ایمیلی به شما ارسال شده است، لطفا هیچگونه عملی انجام ندهید و میتوانید بسادگی این ایمیل را نادیده گرفته و آن را حذف نمایید.',
'debug mode turn off instruction msg' => 'برای خاموش کردن حالت عیب یابی، مقدار متغییر debug_mode در فایل common.php را به false تغییر دهید',
'Email change verification link' => 'لینک تایید صحت ایمیل برای تغییر ایمیل',
'verification email sent msg3' => 'یک ایمیل محتوی لینک تایید صحت ایمیل به %s ارسال شد.<br>شما باید در ظرف %s لینک تایید صحت ایمیل را باز کنید تا آدرس ایمیل اکانت شما تغییر داده شود',
'max emails reached msg' => 'شما در هر %s میتوانید حداکثر %s درخواست تغییر ایمیل ارسال کنید',
'Remember for' => 'بخاطرسپاری برای مدت',
'Remember' => 'بخاطرسپاری',
'Sorry, but entering Admin password is needed!' => 'متاسفیم، شما باید پسورد ادمین را نیز وارد کنید!',
'Admin password' => 'رمز عبور ادمین',
'illegal autologin_age msg' => 'مقدار غیرمجاز برای بخاطرسپاری لاگین!<br>لطفا مجددا تلاش نمایید.',
'Browser session' => 'باز بودن مرورگر',
'Checking the security code...' => 'در حال چک کردن کد امنیتی...',
'Security code was incorrect!' => 'کد امنیتی وارد شده اشتباه بود!',
'login' => 'ورود',
'username' => 'نام کاربری',
'password' => 'رمز عبور',
'Remember login for' => 'بخاطرسپاری لاگین تا مدت',
'block-bypass mode' => 'حالت دور زدن مسدود شدگی',
'tie login to ip option description' => 'منجر به افزایش امنیت میشود، اما اگر IP شما عوض شود از لاگین خارج میشوید',
'tie my login to my ip address' => 'لاگین مرا به IP من وابسته کن',
'forgot password/username' => 'فراموشی رمزعبور/نام کاربری',
'login limit warning' => 'فقط %d لاگین اشتباه در هر %s مجاز است.<br>تعداد لاگین های اشتباه در %s گذشته: %d<br>تعداد لاگین های مجاز باقیمانده: %d',
'block_bypass_mode_max_logins' => 'توجه: حداکثر تعداد لاگین ناموفق <span style="color: red">%d</span> بار میباشد.',
'your command(s) were executed.' => 'دستورات شما اجرا شدند.',
'no account block log records found.' => 'هیچ رکورد گزارش مسدود شدگی اکانت پیدا نشد.',
'admin operations' => 'عملیات ادمین',
'login page' => 'صفحهء ورود',
'no accounts found.' => 'هیچ اکانتی پیدا نشد.',
'user field is empty!' => 'فیلد کاربر خالی است!',
'no such user found in the accounts table!' => 'چنان کاربری در جدول اکانتها یافت نشد!',
'admin account cannot be banned!' => 'اکانت ادمین نمیتواند محروم شود!',
'no ban duration specified!' => 'مدت محرومیت مشخص نشده است!',
'no banned users found.' => 'هیچ کاربر محروم شده ای پیدا نشد.',
'no ip block log records found.' => 'هیچ رکورد گزارش مسدود شدگی IP پیدا نشد.',
'info: %d record(s) did not exist.' => 'اطلاعات: %d رکورد وجود نداشت.',
'no pending accounts eligible for admin confirmation found.' => 'هیچ اکانت  منتظر تایید ادمین پیدا نشد.',
'info: no corresponding ban_info record found for the banned user!' => 'اطلاعات: رکورد متناظری در جدول ban_info پیدا نشد!',
'accounts' => 'اکانتها',
'ban a user' => 'محروم کردن یک کاربر',
'unban a user' => 'لغو محرومیت یک کاربر',
'banned users' => 'کاربران محروم شده',
'pending accounts' => 'اکانتهای منتظر تایید',
'security logs' => 'گزارشهای امنیتی',
'account blocks' => 'اکانتهای مسدود شده',
'ip blocks' => 'IP های مسدود شده',
'database' => 'پایگاه داده‌ها',
'tables status' => 'وضعیت جدول ها',
'banned successfully.' => 'محروم شد.',
'unbanned successfully.' => 'از محرومیت خارج شد.',
'user' => 'کاربر',
'admin account was blocked.' => 'اکانت ادمین مسدود شد.',
'there were %d new account block(s).' => 'تعداد %d اکانت مسدود شد.',
'there were %d new ip block(s).' => 'تعداد %d آیپی مسدود شد.',
'there were %d new registeration(s).' => 'تعداد %d ثبت نام جدید صورت گرفت.',
'you are not admin!' => 'شما بعنوان ادمین لاگین نیستید!<br>ابتدا بعنوان ادمین لاگین کنید.',
'Congratulations! Site admin approved your registration.' => 'تبریک! ادمین سایت ثبت نام شما را تایید کرد.',
'Sorry! Site admin rejected your registration.' => 'با تاسف، ادمین سایت ثبت نام شما را تایید نکرد.',
'Your registration was approved' => 'ثبت نام شما تایید شد',
'Your registration was rejected' => 'ثبت نام شما رد شد',
'Account/IP blocks alert' => '‫آگاه سازی مسدود شدگی اکانت/IP',
'Registeration(s) alert' => 'آگاه سازی ثبت نام',
'Block-bypass link' => 'لینک دور زدن مسدود شدگی',
'Block-bypass' => 'دور زدن مسدود شدگی',
'password reset link' => 'لینک ریست رمز عبور',
'Password reset' => 'ریست رمز عبور',
'Account activation link' => 'لینک فعال سازی اکانت',
'Account activation' => 'فعال سازی اکانت',
'Account activated msg' => '<h3>تبریک!<br>ثبت نام شما کامل شد.</h3>',
'account created msg' => '<h3>تبریک!<br>شما با موفقیت ثبت نام کردید.</h3>',
'account activation email sent msg' => '<h3>یک ایمیل حاوی لینک فعال سازی اکانت به آدرس ایمیل شما ارسال شد.<br>ثبت نام خود را با باز کردن آن لینک ظرف حداکثر %s کامل کنید.<br>اگر ایمیلی دریافت نکردید، میتوانید به اکانت معلق خود لاگین کرده و درخواست ارسال مجدد ایمیل کنید.</h3>',
'pending for admin confirmation msg' => '<h3>درخواست شما با موفقیت پردازش شد و اکانت شما منتظر تایید توسط ادمین میباشد.<br>اگر اکانت شما تا %s آینده توسط ادمین تایید نشود، بطور خودکار حذف شده تلقی خواهد شد.</h3>',
'about' => 'تقریبا',
'year' => 'سال',
's' => '',
'month' => 'ماه',
'&' => 'و',
'day' => 'روز',
'hour' => 'ساعت',
'min' => 'دقیقه',
'minute' => 'دقیقه',
'sec' => 'ثانیه',
'second' => 'ثانیه',
'block-bypass max incorrect logins reached msg' => '<center><h3>حداکثر تعداد تلاشهای لاگین ناموفق انجام شده است.<br>شما نمیتوانید از سیستم دور زدن مسدود شدگی تا مسدود شدگی بعدی استفاده کنید.</h3>',
'Your request is already processed!' => 'این درخواست شما قبلا پردازش شده است!',
'Error' => 'خطا',
'XSRF prevention mechanism triggered!' => 'سیستم جلوگیری از حملهء XSRF عمل کرد!',
'password fields aren\'t match!' => 'مقدار فیلدهای رمز عبور یکسان نیست!',
'error in password decryption!' => 'خطا در رمزگشایی رمز عبور!',
'No %s field exist!' => 'فیلد %s وجود ندارد!',
' is shorter than %d characters!' => ' کوتاهتر از %d کاراکتر است!',
' is longer than %d characters!' => ' بیشتر از %d کاراکتر است!',
' is invalid!' => ' نامعتبر است!',
'email fields aren\'t match!' => 'مقدار فیلدهای ایمیل یکسان نیست!',
'username \'Admin\' is reserved!' => 'نام کاربری Admin رزرو شده است!',
'You need to enter a security code again.' => 'نیاز است تا یک بار دیگر یک کد امنیتی را وارد کنید.',
'Email' => 'ایمیل',
'captcha' => 'کد امنیتی',
'gender' => 'جنسیت',
'Sorry, you need to enter a security code.' => 'متاسفانه نیاز است تا یک کد امنیتی نیز وارد کنید.',
'Security code field is empty!' => 'فیلد کد امنیتی خالی است!',
'Security code is shorter than %d characters!' => 'کد امنیتی کوتاهتر از %d کاراکتر است!',
'Security code is longer than %d characters!' => 'کد امنیتی بیشتر از %d کاراکتر است!',
'Security code contains invalid characters!' => 'کد امنیتی حاوی کاراکترهای غیرمجاز است!',
'The security code was incorrect!' => 'کد امنیتی اشتباه است!',
'the current password that you entered was incorrect!' => 'رمز عبور فعلی اشتباه است!',
'the account password that you entered was incorrect!' => 'رمز عبور اکانتی که شما وارد کردید اشتباه است!',
'Accounts' => 'اکانتها',
'Page number must be between (including) 1 and %d.' => 'شماره صفحه باید بین 1 و %d باشد!',
'Records ' => 'رکورد ',
' - ' => ' تا ',
' of ' => ' از ',
'Uid' => 'مشخصه یکتا',
'Account creation' => 'زمان ایجاد اکانت',
'Last login' => 'آخرین ورود',
'Last activity' => 'آخرین فعالیت',
'Last logout' => 'آخرین خروج',
'Banned' => 'محروم است',
'Delete' => 'حذف',
' ago' => ' قبل',
'Male' => 'مرد',
'Female' => 'زن',
'Yes' => 'بله',
'No' => 'خیر',
'Delete selected accounts' => 'اکانتهای انتخاب شده را حذف کن',
'All' => 'همه',
'Records per page' => 'تعداد رکوردها در هر صفحه',
'Show' => 'نمایش بده',
'Ban user' => 'محروم کردن کاربر',
'Unban user' => 'لغو محرومیت کاربر',
'user field is empty!' => 'فیلد کاربر خالی است!',
'Specify username or uid:' => 'نام کاربری یا شناسهء یکتا را مشخص کنید:',
'Errors' => 'خطاها',
'Clear' => 'پاک کردن',
'Submit' => 'ارسال',
'Member for' => 'مدت عضویت',
'Ban for a' => 'محروم کردن برای',
'duration' => 'مدت معین',
'infinitely' => 'مدت نامحدود',
'or' => 'یا',
'Ban for ' => 'محروم کردن به مدت ',
'year(s)' => 'سال',
'month(s)' => 'ماه',
'day(s)' => 'روز',
'hour(s)' => 'ساعت',
'and' => 'و',
'Reason' => 'دلیل',
'Ban' => 'محروم کن',
'Cancel' => 'لغو',
'Banned users' => 'کاربران محروم شده',
'Ban until' => 'محرومیت تا',
'Ban reason' => 'علت محرومیت',
'Unlimited' => 'نامحدود',
'No corresponding ban_info record found' => 'رکورد ban_info متناظر پیدا نشد',
'No ban reason specified' => 'علتی برای محرومیت مشخص نشده است',
'Blocked accounts' => 'اکانتهای مسدود شده',
'Username exists' => 'کاربر موجود است',
'First attempt' => 'نخستین تلاش',
'Last attempt' => 'آخرین تلاش',
'Last IP' => 'آخرین IP',
'Current status' => 'وضعیت فعلی',
'Unblock' => 'لغو مسدود شدگی',
'Delete log record' => 'حذف رکورد گزارش',
'Unblocked by admin' => 'لغو مسدودیت شده توسط ادمین',
'Unblocked' => 'لغو مسدودیت شده',
'Block lift' => 'اتمام محرومیت',
' later' => ' بعد',
'Blocked' => 'مسدود است',
'Block period elapsed' => 'دورهء مسدود شدگی سپری شده است',
'Not blocked' => 'مسدود نیست',
'Execute admin commands' => 'دستورات ادمین را اجرا کن',
'Blocked IPs' => '&#x202b;IP های مسدود شده',
'Last username' => 'آخرین نام کاربری',
'Go' => 'برو',
'Emails sent' => 'ایمیل های ارسال شده',
'Email verified' => 'صحت ایمیل تایید شده',
'Time' => 'زمان',
'Notify' => 'آگاه کردن',
'notify user description' => 'آیا به کاربر بوسیلهء ایمیل درمورد تصمیم ادمین درمورد قبول یا رد ثبت نام او اطلاع داده خواهد شد یا نه.',
'Approve' => 'پدیرفتن',
'Tables status' => 'وضعیت جدول ها',
'Table name' => 'نام جدول',
'Num records' => 'تعداد رکوردها',
'User <span style="color: yellow">%s</span> is not banned!' => 'کاربر <span style="color: yellow">%s</span> محروم نیست!',
'Unban' => 'لغو محرومیت کن',
'Account block' => 'مسدود شدگی اکانت',
'account block msg' => 'لاگین به اکانت <span style="white-space: pre; color: #155;">%s</span> برای %s آینده <span style="color: #f00">مسدود است</span>',
'If you are the owner of this account you can' => 'اگر شما مالک این اکانت هستید شما میتوانید',
'request a block-bypass link be sent to your email' => 'درخواست کنید که یک لینک دور زدن مسدود شدگی به ایمیل شما ارسال شود',
'Re-send account activation email' => 'ارسال مجدد ایمیل فعال سازی اکانت',
'Email field is empty!' => 'فیلد ایمیل خالی است!',
'Email is invalid!' => 'ایمیل نامعتبر است!',
'Enter your account\'s email' => 'ایمیل مربوط به اکانت خود را وارد کنید',
'Check your email carefully msg' => 'ایمیل خود را به دقت چک کنید چون، به دلایل امنیتی، سیستم به شما نخواهد گفت که ایمیلی که وارد کرده اید واقعا در پایگاه داده‌ها وجود دارد یا خیر؛ اما بدیهی است که اگر شما مرتکب یک خطای تایپی شده یا دقیقا بیاد ندارید کدامیک از ایمیل های خودتان را برای اکانت خود تعیین کرده بودید، میتوانید مجدداً تلاش کنید.',
'Check your email carefully msg2' => 'ایمیل خود را به دقت چک کنید چون، به دلایل امنیتی، سیستم به شما نخواهد گفت که ایمیلی که وارد کرده اید با ایمیل اکانت مسدود شده شده یکسان است یا خیر؛ اما بدیهی است که اگر شما مرتکب یک خطای تایپی شده یا دقیقا بیاد ندارید کدامیک از ایمیل های خودتان را برای اکانت مسدود شده تعیین کرده بودید، میتوانید مجدداً تلاش کنید.',
'Maximum number of activation emails that can be sent' => 'حداکثر تعداد ایمیل های فعال سازی که میتوانند ارسال شوند',
'Note that the system will not, for security reasons, tell you if the maximum number of emails is reached.' => 'توجه کنید که سیستم، به دلایل امنیتی، به شما اطلاع نخواهد داد که آیا حداکثر تعداد ایمیل های ارسالی فرا رسیده است یا خیر.',
'Banned account' => 'اکانت محروم شده',
'Your account has been banned by Admin!' => 'اکانت شما توسط ادمین محروم شده است!',
'Ban will be lifted at' => 'پایان محرومیت',
'Log out' => 'خروج',
'Block-bypass link request' => 'درخواست لینک دور زدن مسدود شدگی',
'Maximum number of block-bypass emails that can be sent' => 'حداکثر تعداد ایمیل های دور زدن مسدود شدگی که میتوانند ارسال شوند',
'This is the security code' => 'این کد امنیتی است',
'If the code is not readable,<br />click on the image to change it' => 'اگر کد خوانا نیست،<br>برای تغییر آن رویش کلیک کنید',
'Enter the security code here' => 'کد امنیتی را اینجا وارد کنید',
'(Not case-sensitive)' => '(غیر حساس به کوچکی و بزرگی حروف)',
'Change brute-force protection setting' => '&#x202b;تغییر تنظیمات محافظت در برابر Brute-force<!--&#x200f;-->',
'password field is empty!' => 'فیلد رمز عبور خالی است!',
'Warning' => 'هشدار',
'protection change warning msg' => 'اولاً: اگر شما نمیدانید برای چه درحال انجام چه کاری هستید، پس به این تنظیمات دست نزنید.<br>دوماً: اگر شما یک سطح محافظت کمتر را انتخاب کنید، سپس برای مقاومت در برابر حمله های Brute-force به رمز عبور قوی تری نیاز خواهید داشت.',
'Protect my account against brute-force attacks with' => 'از اکانت من در مقابل حمله های Brute-force با این سیستمها محافظت کن',
'Account and IP blocks (Maximum protection)' => 'مسدود کردن اکانت و IP (حداکثر محافظت)',
'Account block (Good protection)' => 'مسدود کردن اکانت (محافظت خوب)',
'IP block (Weak protection)' => 'مسدود کردن IP (محافظت ضعیف)',
'No protection' => 'بدون محافظت',
'Current setting' => 'تنظیم فعلی',
'ip block weak' => 'مسدود کردن IP <span style="background: yellow; padding: 5px;" >(محافظت ضعیف)</span>',
'account block good' => 'مسدود کردن اکانت <span style="background: blue; padding: 5px;">(محافظت خوب)</span>',
'account and ip block max' => 'مسدود کردن اکانت و IP <span style="background: green; padding: 5px;">(حداکثر محافظت)</span>',
'Enter your account password' => 'رمز عبور اکانت خود را وارد کنید',
'User options' => 'گزینه های کاربری',
'Change email' => 'تغییر ایمیل',
'New email is shorter than' => '"ایمیل جدید از "+min_length+\' کاراکتر کوتاهتر است!\';',
'New email is longer than' => '"ایمیل جدید از "+max_length+\' کاراکتر بیشتر است!\';',
'New email is invalid!' => 'ایمیل جدید نامعتبر است!',
'New email fields are not match!' => 'مقدار فیلدهای ایمیل جدید یکسان نیست!',
'Your account Password' => 'رمز عبور اکانت شما',
'New email' => 'ایمیل جدید',
'Retype new email' => 'تایپ مجدد ایمیل جدید',
'Change password' => 'تغییر رمز عبور',
'Current password field is empty!' => 'فیلد رمز عبور فعلی خالی است!',
'New password is shorter than "+min_length+" characters!' => 'رمز عبور جدید از "+min_length+" کاراکتر کوتاهتر است!',
'New password is longer than "+max_length+" characters!' => 'رمز عبور جدید از "+max_length+" کاراکتر بیشتر است!',
'New password is invalid!' => 'رمز عبور جدید نامعتبر است!',
'New password fields are not match!' => 'مقدار فیلدهای رمز عبور جدید یکسان نیست!',
'Your current Password' => 'رمز عبور فعلی شما',
'New password' => 'رمز عبور جدید',
'Retype new Password' => 'تایپ مجدد رمز عبور جدید',
'Operation failure' => 'شکست عملیات',
'Don\'t disturb me again' => 'دیگر مزاحم من نشو',
'Close' => 'بستن',
'Report' => 'گزارش',
'IP block' => '&#x202b;مسدود شدگی IP&#x200f;',
'ip block msg' => 'لاگین از IP&#x200f; <span style="white-space: pre; color: blue;">%s</span> به علت تعداد بیش از حد لاگین های اشتباه از این IP، برای %s آینده<span style="color: #f00"> مسدود است</span>.</span>',
'Username field is empty!' => 'فیلد نام کاربری خالی است!',
'Members area' => 'صفحهء خصوصی کاربر',
'No database table' => 'عدم وجود جدولهای پایگاه داده‌ها',
'It seems that database tables are not installed' => 'بنظر میرسد که جدولهای پایگاه داده‌ها نصب نشده اند',
'Go for installing database tables with the installer' => 'برو به نصب جدولهای پایگاه داده‌ها بوسیلهء سیستم نصب‌کننده',
'Change language' => 'تغییر زبان',
'Reset password' => 'تعیین مجدد رمز عبور',
'Send password reset email' => 'ارسال ایمیل تعیین مجدد رمز عبور',
'Max password reset emails msg' => 'حداکثر تعداد ایمیل های تعیین مجدد رمز عبور که میتوانند در %s ارسال شوند: %d<br>توجه کنید که سیستم، به دلایل امنیتی، به شما اطلاع نخواهد داد که آیا حداکثر تعداد ایمیل های ارسالی فرا رسیده است یا خیر.',
'Pending account' => 'اکانت فعال نشده',
'Your account is pending for email verification' => 'اکانت شما در انتظار فعال سازی توسط ایمیل است',
'Your account is pending for admin confirmation' => 'اکانت شما در انتظار تایید توسط ادمین است',
'Hello' => 'سلام',
'Re-send me the activation email' => 'ایمیل فعال سازی را مجدداً به من ارسال کن',
'Your last logged login' => 'آخرین لاگین ثبت شدهء شما',
'Your last logged activity' => 'آخرین فعالیت ثبت شدهء شما',
'Your last logged logout' => 'آخرین خروج ثبت شدهء شما',
'Register' => 'ثبت نام',
' is shorter than "+min_length+" characters!' => ' کوتاهتر از "+min_length+" کاراکتر است!',
' is longer than "+max_length+" characters!' => ' بیشتر از "+max_length+" کاراکتر است!',
'Not available!' => 'در دسترس نیست!',
'Is available.' => 'آزاد است.',
'Username format' => 'فرمت نام کاربری',
'username format msg' => '1- حروف فارسی و انگلیسی و اعداد<br>2- بدون فاصله در ابتدا یا انتها یا فاصله های پشت سر هم',
'Retype password' => 'تایپ مجدد رمز عبور',
'Retype email' => 'تایپ مجدد ایمیل',
'Not specified' => 'مشخص نشده',
'notify me admin action msg' => 'وقتیکه ادمین ثبت نام مرا تایید یا حذف میکند به من اطلاع بده (از طریق ایمیل)',
'Warning: Debug mode on!' => 'هشدار: حالت عیب یابی فعال است!',
'Resend email verification link' => 'ارسال مجدد ایمیل فعال سازی',
'Show project session contents' => 'نمایش محتویات نشست پروژه',
'Operation successful' => 'عملیات موفقیت آمیز',
'account is not blocked msg' => 'اکانت <span style="white-space: pre; color: #0a8;">%s</span> مسدود نیست!',
'account or ip is not blocked msg' => 'اکانت <span style="white-space: pre; color: #0a8;">%s</span> یا IP&#x200f; <span style="white-space: pre; color: #0a8;">%s</span> مسدود نیست!',
'Error: Block-bypass link not verified!' => 'خطا: صحت لینک دور زدن مسدودشدگی تایید نشد!',
'max incorrect logins reached msg' => 'حداکثر تعداد لاگین های اشتباه فرا رسیده است.<br>شما نمیتوانید از سیستم دور زدن مسدودشدگی تا دورهء مسدودشدگی بعدی استفاده کنید.',
'Identification error' => 'خطای احراز هویت',
'Check login information msg' => 'شما احراز هویت نشدید!<br>اطلاعات لاگین خود را مجدداً بررسی کنید.',
'Email format is invalid!' => 'فرمت ایمیل نامعتبر است!',
'block-bypass email sent msg' => 'ایمیلی به <span style="white-space: pre; color: #080;">%s</span> ارسال شد، اگر آن ایمیل صحیح اکانت <span style="white-space: pre; color: #080;">%s</span> بوده باشد',
'max block-bypass emails msg' => ' و<br> حداکثر تعداد ایمیل های دور زدن مسدودشدگی (%s) فرا نرسیده باشد',
'You are not authenticated msg' => 'شما احراز هویت نشدید!<br>ابتدا لاگین کنید',
'Brute-force protection setting changed successfully' => 'تنظیم محافظت در برابر Brute-force با موفقیت تغییر داده شد',
'new email is shorter than2' => 'ایمیل جدید از %s کاراکتر کوتاهتر است!',
'new email is longer than2' => 'ایمیل جدید از %s کاراکتر بیشتر است!',
'Your email changed successfully' => 'ایمیل شما با موفقیت تغییر داده شد',
'already registered msg' => '%s قبلا ثبت نام شده است؛ لطفاً %s دیگری انتخاب کنید!',
'new password is shorter than' => 'رمز عبور جدید از %d کاراکتر کوتاهتر است!',
'new password is longer than' => 'رمز عبور جدید از %d کاراکتر بیشتر است!',
'Your password changed successfully' => 'رمز عبور شما با موفقیت تغییر یافت',
'no such email verification record' => 'خطا:<br>چنان رکوردی پیدا نشد!<br>دلایل ممکن:<br>- زمان تایید ایمیل گذشته است.<br>- ثبت نام موکول به تایید ادمین بوده و در زمان مشخص شده توسط ادمین تایید نشده است',
'no such email verification record2' => 'خطا:<br>چنان رکوردی پیدا نشد!<br>دلایل ممکن:<br>- زمان تایید ایمیل گذشته است.<br>- این لینک تایید ایمیل قبلا اجرا شده و ایمیل با موفقیت تغییر داده شده است',
'Pending account expired msg' => 'خطا:<br>اکانت معلق منقضی شده است!<br>دلیل:<br>بوسیلهء ادمین در حداکثر زمان مشخص شده تایید نشده است',
'Out of email verification time msg' => 'خطا:<br>اکانت معلق منقضی شده است!<br>علت:<br>حداکثر زمان تایید ایمیل سپری شده است',
'Out of email verification time msg2' => 'خطا:<br>حداکثر زمان تایید صحت ایمیل سپری شده است!',
'email verification already done msg' => 'تایید ایمیل اکانت شما قبلا انجام شده است!',
'waiting for admin confirmation msg' => '<br>اکانت شما منتظر تایید شدن توسط ادمین است',
'email verified - waiting admin msg' => 'ایمیل شما با موفقیت تایید شد.<br>اکانت شما منتظر تایید ادمین است تا در حداکثر %s از زمان ثبت نام شما تایید شود',
'You are logged in automatically' => 'شما بصورت خودکار لاگین شدید',
'Email verification' => 'تایید صحت ایمیل',
'To complete your registration, click on the button below' => 'برای تکمیل ثبت نام خود، بر روی دکمهء زیر کلیک کنید',
'To complete your email change, click on the button below' => 'برای تکمیل تغییر ایمیل خود، بر روی دکمهء زیر کلیک کنید',
'Proceed' => 'پیش برو',
'verification email sent msg' => 'یک ایمیل به <span style="white-space: pre; color: #080;">%s</span> ارسال شد',
'verification email sent msg p2' => '،<br> البته اگر آن آدرس ایمیل صحیح اکانت شما باشد.<br>(و البته اگر اکانت شما به تایید صحت ایمیل نیاز داشته باشد)',
'You logged in successfully' => 'شما با موفقیت لاگین شدید',
'You are logged in' => 'شما لاگین هستید',
'Problem logging out' => 'مشکل در خروج',
'Error: No such record found' => 'خطا: چنان رکوردی پیدا نشد',
'Error: Password reset link is expired' => 'خطا: لینک تعیین مجدد پسورد منقضی شده است',
'password email sent msg' => 'یک ایمیل به <span style="white-space: pre; color: #080;">%s</span> ارسال شد،<br>اگر آن ایمیل صحیح اکانت شما بوده است',
'Registration is disabled!' => 'امکان ثبت نام غیرفعال است!',
'Error: You are logged in!' => 'خطا: شما درحال حاضر لاگین هستید!',
'Admin only' => 'فقط ادمین',
//-- database setup system >>
'DB Setup - Final' => 'نصب پایگاه داده ها - قدم آخر',
'Account <span style="color: green">Admin</span> created' => 'اکانت <span style="color: green">ادمین</span> ایجاد شد',
'Setup completed' => 'نصب کامل شد',
'variable created msg' => 'متغییر <span style="color: green">%s</span> ایجاد شد',
'table created msg' => 'جدول <span style="color: green">%s</span> ایجاد شد',
'DB Setup - Step 1' => 'نصب دیتابیس - قدم اول',
'setup - Copy the string msg' => 'رشتهء رندوم زیر را که در کادر متن است کپی کرده و سپس آن را در داخل فایل <span style="color: yellow">setup.txt</span> واقع در پوشهء <span style="color: yellow">setup</span> درج نموده و ذخیره نمایید و سپس بر روی دکمهء ادامه در این صفحه کلیک کنید.<br>این بخاطر آن است که ثابت شود شما مالک واقعی این سایت هستید',
'Select all' => 'انتخاب همه',
'Continue' => 'ادامه',
'DB setup - Step 2' => 'نصب دیتابیس - قدم دوم',
'Setup admin account' => 'نصب اکانت ادمین',
//-- database setup system <<
'Security code short - js msg' => 'کد امنیتی کوتاهتر از \'+captcha_min_len+\' کاراکتر است!',
'Security code long - js msg' => 'کد امنیتی بیشتر از \'+captcha_max_len+\' کاراکتر است!',
'user needs email verification msg' => 'این اکانت برای فعال شدن به تایید صحت ایمیل نیز نیاز دارد',
'Does not need email verification' => 'به تایید صحت ایمیل نیازی ندارد',
'Accounts awaiting admin\'s confirmation' => 'اکانتهای منتظر تایید توسط ادمین',
'Accounts awaiting email verification' => 'اکانتهای منتظر تایید صحت ایمیل',
'No pending accounts awaiting for email verification found.' => 'هیچ اکانت منتظر تایید صحت ایمیل پیدا نشد.',
'Needs admin confirmation' => 'به تایید ادمین نیز نیاز دارد',
'Active/All' => 'فعال (قرمز) / همه (سیاه)',
'Remember for a maximum of' => 'بخاطرسپاری برای حداکثر',
'captcha - never used letters' => 'نکته: حروف B, D, I, O, Q بخاطر شباهت ظاهری با کاراکترهای دیگر،<br> هیچوقت در کدهای کپچا استفاده نمیشوند.',
'Invalid' => 'نامعتبر',
'Logging other systems out' => 'قطع دسترسی از سیستمهای دیگر',
'change_autologin_key_msg' => '',
'The operation was performed successfully' => 'عملیات با موفقیت انجام شد',
'change autologin key comments' => '- با انجام این عملیات، کلید احراز هویت خودکار شما تغییر یافته و بنابراین سیستمهای دیگری که ممکن است شما در آنها لاگین کرده بوده باشید و همچنان لاگین مانده باشند از لاگین خارج میشوند (دسترسی آنها به اکانت شما قطع میگردد).<br>- این عملیات همچنین در مواردی که ممکن است کوکی/کلید احراز هویت خودکار شما بصورت مقطعی توسط یک هکر سرقت شده باشد، جلوی ادامهء دسترسی غیرمجاز با استفاده از کوکی سرقت شده را میگیرد.',

);

?>
