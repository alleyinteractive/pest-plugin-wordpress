<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

/**
 * Mantle Service Provider to register commands.
 */
class ServiceProvider extends \Mantle\Support\Service_Provider
{
    public function register(): void
    {
        $this->add_command([
            Commands\InstallCommand::class,
            Commands\MakeCommand::class,
        ]);
    }
}
