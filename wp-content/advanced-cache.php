<?php
/* PageSpeed Ninja Caching */
defined('ABSPATH') || die();
define('PAGESPEEDNINJA_CACHE_DIR', 'C:\xampp\htdocs\project\wp-content\plugins\psn-pagespeed-ninja/cache');
define('PAGESPEEDNINJA_CACHE_PLUGIN', 'C:\xampp\htdocs\project\wp-content\plugins\psn-pagespeed-ninja');
define('PAGESPEEDNINJA_CACHE_RESSDIR', 'C:\xampp\htdocs\project\wp-content\plugins\psn-pagespeed-ninja/ress');
define('PAGESPEEDNINJA_CACHE_DEVICEDEPENDENT', true);
define('PAGESPEEDNINJA_CACHE_TTL', 604800);
define('PAGESPEEDNINJA_CACHE_GZIP', 1);
include 'C:\xampp\htdocs\project\wp-content\plugins\psn-pagespeed-ninja/public/advanced-cache.php';
