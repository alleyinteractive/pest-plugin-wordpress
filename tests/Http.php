<?php

use function Pest\PestPluginWordPress\fetchPost;
use function Pest\PestPluginWordPress\from;
use function Pest\PestPluginWordPress\get;
use function Pest\PestPluginWordPress\request;

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

it('should be able to make a request fluently', function () {
    request()
        ->get('/')
        ->assertStatus(200);
});

it('should be able to fetch a post', function () {
    fetchPost()->assertOk()->assertQueryTrue('is_single', 'is_singular');
});
