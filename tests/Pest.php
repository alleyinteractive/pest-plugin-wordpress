<?php
/**
 * Plugin Test Setup.
 */

use Mantle\Testing\Concerns\Refresh_Database;
use Pest\PestPluginWordPress\FrameworkTestCase;

// Use the given test case for all tests in the plugin.
uses(FrameworkTestCase::class, Refresh_Database::class)->in(__DIR__);

// Install WordPress via Mantle.
\Mantle\Testing\install();
