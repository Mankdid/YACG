<?php //CONFIG FILE
$version = '1.0'; // [YACG] Yet Another Content Generator Version
// MAIN CONFIGURATION
define('PASSWORD', "changeme"); // ADMIN PASSWORD
define('DOMAIN_TYPE', true); // SET YACG TO BE RUN ON WWW/SUBDOMAIN
// -- TRUE = WWW.DOMAIN.COM
// -- FALSE = SUBDOMAIN.DOMAIN.COM
define('FOLDER', false); // SET YACG TO BE RUN ON SUBFOLDER
// -- TRUE = WWW.DOMAIN.COM/FOLDER OR SUBDOMAIN.DOMAIN.COM/FOLDER
// -- FALSE = SUBDOMAIN.DOMAIN.COM or WWW.SITE.COM install
define('DEBUG', true); // SET DEBUG MODE ON OR OFF
// -- TRUE = VERBOSE ERROR OUTPUT
// -- FALSE = NO ERROR OUTPUT
// DEFINE FILE LOCATIONS
define('LOCAL_CACHE', './cache/'); // LOCATION OF THE CACHE
define('LOCAL_ARTICLES', './articles/'); // LOCATION OF THE ARTICLES
define('LOCAL_TEMPLATE', './template/'); // LOCATION OF THE TEMPLATES
define('LOCAL_HOOKS', './hooks/'); // LOCATION OF THE HOOKS
define('FILE_KEYWORDS', './keywords.txt'); // LOCATION OF THE KEYWORDS FILE
define('FILE_BOTS', './ips.txt'); // LOCATION OF THE BOT LIST FILE
// DEFINE CLOACKING LEVEL
define('LEVEL', '4');
// -- 0 = ALWAYS CLOAK
// -- 1 = OFTEN CLOAK
// -- 2 = SOMETIMES CLOAK
// -- 3 = RARELY CLOAK
// -- 4 = NEVER CLOAK
// GOOGLE ADSENSE
define('GOOGLE_PUBID', 'pub-5676236325709660'); // GOOGLE ADSENSE PUB_ID
define('GOOGLE_ADCHANNEL', 'XXXXXXXX'); // GOOGLE ADSENSE CHANNEL
define('GOOGLE_SHOW_ADS', '1'); // SET TO DISPLAY OR NOT GOOGLE ADSENSE
// -- 1 = DISPLAY ADSENSE
// -- 0 = NO ADSENSE
// PEAKCLICK
define('_AFF', 'XXXX'); // PEAKCLICK AFFILIATE ID
define('_SUBAFF', ''); // PEAKCLICK SUBAFFILIATE ID
define('_THUMBS', '0'); // SET TO DISPLAY OR NOT THUMBNAILS
// -- 1 = ENABLE THUMBNAILS
// -- 0 = DISABLE THUMBNAILS
// GOOGLE ANALYTICS
define('ANALYTICS_ACCOUNT', 'UA-XXXXXX-X'); // GOOGLE ANALYTICS ACCOUNT NUMBER
?>