<?php
/**
 * Plugin Test Setup.
 */

use Pest\PestPluginWordPress\FrameworkTestCase;

// Use the given test case for all tests in the plugin.
uses(FrameworkTestCase::class)->in(__DIR__);

// Install WordPress via Mantle.
\Mantle\Testing\install();
