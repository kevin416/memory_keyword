<?php

namespace Yepos\Keyword\Console;

use Illuminate\Console\Command;

class AssetsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'keyword:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Re-publish the keyword assets';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'keyword-assets',
            '--force' => true,
        ]);

//        $this->call('vendor:publish', [
//            '--tag' => 'views',
//            '--force' => true,
//        ]);

    }
}
