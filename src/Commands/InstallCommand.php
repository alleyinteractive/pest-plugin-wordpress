<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress\Commands;

use Mantle\Console\Command;
use Mantle\Filesystem\Filesystem;

/**
 * Installation Command.
 */
class InstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'pest:install';

    /**
     * Command Description.
     *
     * @var string
     */
    protected $description = 'Install Pest to your application.';

    /**
     * Callback for the command.
     */
    public function handle(): void
    {
        // todo: replace with Facade.
        $files = new Filesystem();

        $pestFile = base_path('tests/Pest.php');

        if ($files->exists($pestFile)) {
            $this->error(sprintf('%s already exists', $pestFile), true);
        }

        $files->copy(__DIR__ . '/../stubs/Pest.php', $pestFile);

        // Copy an example test.
        $exampleTestFile = base_path('tests/feature/test-example-pest.php');

        if (!$files->exists($exampleTestFile)) {
            $files->copy(__DIR__ . '/../stubs/ExampleTest.php', $exampleTestFile);
        }

        $this->line('Pest installed successfully.');
    }
}
