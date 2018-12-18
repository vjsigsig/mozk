<?php

namespace Mozk\Console\Commands;

use Illuminate\Console\Command;

class EchoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:echo {arg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '指定文字列を標準出力する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo $this->argument('arg') . PHP_EOL;
    }
}
