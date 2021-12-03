<?php

namespace Skies\LaravelExample\Commands;

use Illuminate\Console\Command;

class LaravelExampleCommand extends Command
{
    public $signature = 'laravel-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done updated');

        return self::SUCCESS;
    }
}
