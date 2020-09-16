<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/azaan-leather/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/azaan-leather/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/azaan-leather/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/azaan-leather/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/azaan-leather/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'azaan_leather');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');