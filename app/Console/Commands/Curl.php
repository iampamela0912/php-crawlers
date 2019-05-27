<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\CurlCrawler;
use App\BaseCrawler;

class Curl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:curl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl by cURL';

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
        $html = CurlCrawler::crawl(CurlCrawler::URL);
        // \Log::info($html);
        CurlCrawler::save("curl.html",$html);
    }
}
