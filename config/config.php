<?php

define('ROOT', __DIR__ . '/');

define('BASE_DIR', '/tom-immo/public/');
define('BASE_ADMIN', '/tom-immo/public/admin/');
define('BASE_ESPACE', '/tom-immo/public/espace/myaccount/');
define('BASE_JS', '/tom-immo/public/assets/js/');
define('BASE_CSS', '/tom-immo/public/assets/css/');
define('BASE_IMG', '/tom-immo/public/assets/img/');
define('PATH_VIEWS', ROOT . '../app/views/');
define('PATH_MODELS', ROOT . '../app/models/');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'bdd_immo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_METHOD', 'index');

// Liste des modules a preciser dans l'url

define('TAB_MODULES', ['admin', 'espace']);
define('DEFAULT_MODULE', 'front');