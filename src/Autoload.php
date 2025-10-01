<?php

declare(strict_types=1);

(static function (): void {
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
