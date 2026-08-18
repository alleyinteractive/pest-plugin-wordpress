<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

use Mantle\Support\Service_Provider;

/**
 * Mantle Service Provider to register commands.
 */
final class ServiceProvider extends Service_Provider
{
    public function register(): void
    {
        $this->add_command([
            Commands\InstallCommand::class,
            Commands\MakeCommand::class,
        ]);
    }
}
