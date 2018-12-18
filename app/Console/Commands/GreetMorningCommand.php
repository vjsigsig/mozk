<?php

namespace Mozk\Console\Commands;

use Illuminate\Console\Command;

class GreetMorningCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet:morning';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '朝の挨拶文を標準出力する';

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
        // サービス呼び出し
    }
}
