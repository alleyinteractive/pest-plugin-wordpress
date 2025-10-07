<?php

use function Pest\PestPluginWordPress\factory;

it('should create a post and get it', function () {
    $post = factory()->post->create_and_get();

    expect($post)->toBeInstanceOf(WP_Post::class);
});
