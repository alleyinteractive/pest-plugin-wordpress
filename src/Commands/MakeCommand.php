<?php

declare(strict_types=1);

namespace Pest\PestPluginWordPress\Commands;

use Mantle\Console\Command;
use Mantle\Filesystem\Filesystem;

/**
 * Installation Command.
 */
class MakeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'pest:test';

    /**
     * Command Description.
     *
     * @var string
     */
    protected $description = 'Make a Pest test in your application.';

    /**
     * Command synopsis.
     *
     * @var array<array>
     */
    protected $synopsis = [
        [
            'description' => 'Test name',
            'name'        => 'name',
            'optional'    => false,
            'type'        => 'positional',
        ],
    ];

    /**
     * Callback for the command.
     */
    public function handle(): void
    {
        $name  = $this->argument('name');
        $files = new Filesystem();

        $pestFile = base_path("tests/{$name}.php");

        if ($files->exists($pestFile)) {
            $this->error(sprintf('%s already exists', $pestFile), true);
        }

        // Ensure the directory exists.
        if (!$files->is_directory(dirname($pestFile))) {
            $files->make_directory(dirname($pestFile), 0777, true);
        }

        $files->copy(__DIR__ . '/../stubs/ExampleTest.php', $pestFile);

        $this->line("{$pestFile} test generated.");
    }
}
