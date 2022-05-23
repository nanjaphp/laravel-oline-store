<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:run';

    protected $description = 'delete old change mail confirmations';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

    }
}
