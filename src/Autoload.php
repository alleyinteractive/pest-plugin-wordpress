<?php

declare(strict_types=1);

(static function () {
    $files = [
        'Factory.php',
        'Http.php',
        'RemoteRequest.php',
        'User.php',
    ];

    foreach ($files as $file) {
        require_once __DIR__."/{$file}";
    }
})();
