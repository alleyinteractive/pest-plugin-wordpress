<?php
/**
 * Framework_Test_Case class file.
 */

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Mantle\Testing\Concerns\Create_Application;
use Mantle\Testing\Test_Case;

/**
 * Test case for use inside of the framework to automatically setup an application.
 * Inspired by `Orchestra\Testbench`.
 */
abstract class FrameworkTestCase extends Test_Case
{
    use Create_Application;
}
