<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress\Commands;

use Mantle\Console\Command;

/**
 * Installation Command.
 */
class InstallCommand extends Command
{
    /**
     * Callback for the command.
     *
     * @param array $args       command Arguments
     * @param array $assoc_args command flags
     */
    public function handle(array $args, array $assoc_args = [])
    {
        // Run Pest Install.

        // Replace tests/Pest.php.
    }
}
