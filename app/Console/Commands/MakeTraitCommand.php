<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeTraitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $fileName = $name . '.php';
        $template = file_get_contents(base_path('stubs/trait.stub'));
        $content = str_replace('{{name}}', $name, $template);
        file_put_contents(app_path($fileName), $content);
        $this->info('Trait created successfully.');
        return Command::SUCCESS;
    }
}
