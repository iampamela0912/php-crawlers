<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\GuzzleCrawler;

class CrawlByGuzzle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:guzzle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl by Guzzle';

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
        $html = GuzzleCrawler::crawl(CommandUtil::URL);
        GuzzleCrawler::save("gz.html",$html);
    }
}
