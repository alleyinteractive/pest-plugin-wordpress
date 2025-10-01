<?php

/**
 * Plugin Test Setup.
 */

namespace Pest\PestPluginWordPress\Tests;

// Use the given test case for all tests in the plugin.
uses(TestCase::class)->in(__DIR__);

// Install WordPress via Mantle.
\Mantle\Testing\manager()
    ->silence_phpunit_warning()
    ->with_sqlite()
    ->install();
