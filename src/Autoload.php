<?php

declare(strict_types=1);

if ( file_exists( dirname( __DIR__, 3 ) . '/wordpress-autoload.php' ) ) {
    require_once dirname( __DIR__, 3 ) . '/wordpress-autoload.php';
} else {
    require_once __DIR__ . '/../vendor/wordpress-autoload.php';
}

require_once __DIR__ . '/Http.php';
