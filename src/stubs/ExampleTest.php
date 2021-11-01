<?php

use function Pest\PestPluginWordPress\get;

test( 'example', function () {
    expect(true)->toBeTrue();
} );

test( 'make a request', function () {
    get('/')->assertOk();
} );
