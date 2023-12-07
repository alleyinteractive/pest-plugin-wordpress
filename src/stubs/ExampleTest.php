<?php

use function Pest\PestPluginWordPress\get;

test('example', function (): void {
    expect(true)->toBeTrue();
});

test('make a request', function (): void {
    get('/')->assertOk();
});
