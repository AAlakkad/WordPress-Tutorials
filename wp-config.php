<?php // Modified for Arabic by Rasheed Bydousi

/** إعدادات برنامج ووردبريس المعرب **/

// ** إعدادات قاعدة البيانات - ينمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة بيانات ووردبريس */
define('DB_NAME', 'wordpress_tutorials');

/** اسم المستخدم لقاعدة البيانات */
define('DB_USER', 'root');

/** كلمة المرور لقاعدة البيانات */
define('DB_PASSWORD', 'root');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8');

/** مقارنات قاعدة الببيانات (Collation).
* إذا كنت غير متأكّد أتركها فارغة */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 * استخدم الرابط التالي لتوليد المفتايح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * @منذ 2.6.0
 */
define('AUTH_KEY',         '#}uB=_l.q<TbU-F*fI +uO*Gc+Ml}SF&IwS`,p$!l-D.WPNdDd/;tXq1wQW6 Woj');
define('SECURE_AUTH_KEY',  'rkt8$$Uq[D3(Xv2[d HL)-4T2ua@K7ui1[D4t0?FJ-DY|!jJ%5dz,{yY%T,sm)^{');
define('LOGGED_IN_KEY',    '?^`B;1f2!]zm~zxwwVJ22%2sFmHn1tiLz>sB_w*Bi@++`O`alAj*|:oYfb^$S&E#');
define('NONCE_KEY',        'Kbw1`$rM![*y{zJUWElf8g*=5qfjvrA(wVR^QqfkCs[R?0&+@uaeUToYU>`@<)h>');
define('AUTH_SALT',        '-1;vF@.2qt*ccX-o4/!</VDO/eFW_=:P)}y{*r|=$rM,Vp2I^Z!+8!ak|K^0]JcK');
define('SECURE_AUTH_SALT', '1;ZjRxGMJuB`_LzCW,U=]{l<wQWF;&: E~EM(PC/,$Sv`d^hJ))]&nd^Wq8XP-Y&');
define('LOGGED_IN_SALT',   'RZz7]Be2?:]*p:o!8R;lln:R|QZ!#p :oEH_MDnSjZ$(bdWJn7nh_xb`DdCjkL0Q');
define('NONCE_SALT',       'Yh(,BX;k_62s*+1$[ [}sF1[X*Q7DSDm$bk@@g7H&n]M&uW%$qt:5>4 n:-@Xrv|');


/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 * تستطيع تركيب أكثر من مدونة على نفس قاعدة البيانات إذا أعطيت لكل قاعدة بادئة جداول مختلفة
 * استخدم فقط حروف, أرقام وخطوط سفلية!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 * قم بتغيير flase إلى true لتمكين عرض الملاحظات أثناء التطوير
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب! توقف عن التعديل. نتمنى لك التوفيق في موقعك! */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');