<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:run';

    protected $description = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

    }
}
