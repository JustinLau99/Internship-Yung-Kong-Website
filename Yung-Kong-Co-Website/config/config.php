<?php
// Define the base path of the project
define('BASE_PATH', dirname(__DIR__));

// Define paths for different parts of your application
define('CONFIG_PATH', BASE_PATH . '/config/');
define('INCLUDES_PATH', BASE_PATH . '/includes/');
define('TEMPLATES_PATH', BASE_PATH . '/templates/');
define('UPLOADS_PATH', BASE_PATH . '/uploads/');
define('SUBDIR_PATH', BASE_PATH . '/subdir/');


// Other settings
$debug = true;


// $debug = false;



// Debugging information (optional)
if ($debug) {
    echo 'BASE_PATH: ' . BASE_PATH . '<br>';
    echo 'CONFIG_PATH: ' . CONFIG_PATH . '<br>';
    echo 'INCLUDES_PATH: ' . INCLUDES_PATH . '<br>';
    echo 'TEMPLATES_PATH: ' . TEMPLATES_PATH . '<br>';
    echo 'UPLOADS_PATH: ' . UPLOADS_PATH . '<br>';
    echo 'SUBDIR_PATH: ' . SUBDIR_PATH . '<br>';
}

?>
