<?php
// Define the base path of the project
define('BASE_PATH', dirname(__DIR__));

define('CONFIG_PATH'			, BASE_PATH . '/config/');
define('INCLUDE_PATH'			, BASE_PATH . '/include/');
define('IMG_PATH'				, BASE_PATH . '/img/');
define('PHPDATA_PATH'			, BASE_PATH . '/phpData/');

define('IMG_PRODUCT_CATEGORY'	, IMG_PATH . '/product-categories/');
define('IMG_HOME_OFFER'			, IMG_PATH . '/home-offer/');
define('IMG_DEPARTMENT'			, IMG_PATH . '/department/');
define('IMG_BRAND'				, IMG_PATH . '/brands/');


// Other settings
$debug = false;

// Debugging information (optional)
if ($debug) {
    echo 'BASE_PATH: ' 		. BASE_PATH 	. '<br>';
    echo 'CONFIG_PATH: '	. CONFIG_PATH 	. '<br>';
    echo 'IMG_PATH: ' 		. IMG_PATH 		. '<br>';
}

/*************************

project/
├
├── config/
│   └── config.php
│
├── img/
│   └── brands.php
│   └── department.php
│   └── home-offer.php
│   └── product-category.php
│
├── include/
│   └── footer.php
│   └── header.php
│   └── navbar.php
│   └── script-src.php
│   └── uc-mobile-menu.php
│
├── about.php
├── contact.php
├── index.php
└── products.php

*************************/
