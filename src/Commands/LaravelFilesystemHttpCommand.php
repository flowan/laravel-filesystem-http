<?php

namespace Flowan\LaravelFilesystemHttp\Commands;

use Illuminate\Console\Command;

class LaravelFilesystemHttpCommand extends Command
{
    public $signature = 'laravel-filesystem-http';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
