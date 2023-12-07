<?php
/**
 * Plugin Test Setup.
 */

use Mantle\Testing\Concerns\Refresh_Database;

// Use the given test case for all tests in the plugin.
uses(\Mantle\Testkit\Test_Case::class, Refresh_Database::class)->in(__DIR__);

// Install WordPress via Mantle.
\Mantle\Testing\manager()->with_sqlite()->install();
