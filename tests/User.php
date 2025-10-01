<?php

use function Pest\PestPluginWordPress\actingAs;
use function Pest\PestPluginWordPress\assertAuthenticated;
use function Pest\PestPluginWordPress\assertNotAuthenticated;

it('should authenticate as a user', function () {
    assertNotAuthenticated();

    actingAs('administrator');

    assertAuthenticated();
});
