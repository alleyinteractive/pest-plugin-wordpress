<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Mantle\Database\Factory\Factory_Container;
use Mantle\Testing\TestCase;

/**
 * Get the factory container instance.
 */
function factory(): Factory_Container
{
    return TestCase::factory();
}
