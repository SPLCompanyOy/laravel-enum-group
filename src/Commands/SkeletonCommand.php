<?php

namespace SplCompanyOy\LaravelEnumGroup\Commands;

use Illuminate\Console\Command;

// @TODO
class SkeletonCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
