<?php

namespace Flowan\LaravelFilesystemApi\Commands;

use Illuminate\Console\Command;

class LaravelFilesystemApiCommand extends Command
{
    public $signature = 'laravel-filesystem-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
