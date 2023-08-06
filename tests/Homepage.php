<?php

declare(strict_types=1);

use function Pest\PestPluginWordPress\from;
use function Pest\PestPluginWordPress\get;

it('should load the homepage', function () {
    get('/')
        ->assertStatus(200)
        ->assertSee('home');
});

it('should load with a referrer', function () {
    from('https://laravel.com/')
        ->get('/')
        ->assertStatus(200);
});
