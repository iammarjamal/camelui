<?php

namespace CamelUI\CamelUI\Commands;

use Illuminate\Console\Command;

class CamelUICommand extends Command
{
    public $signature = 'camelui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
