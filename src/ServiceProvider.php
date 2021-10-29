<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress;

/**
 * Mantle Service Provider to register commands.
 */
class ServiceProvider extends \Mantle\Support\Service_Provider
{
    protected $commands = [
        Commands\InstallCommand::class,
    ];
}
