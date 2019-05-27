<?php

namespace App;

class CurlCrawler extends BaseCrawler
{
    public static function crawl($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36'); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10); // Execute the cURL request for a maximum of 50 seconds
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the actual result that is page source instead of success code (1)

        $content = curl_exec($curl);

        curl_close($curl);

        return $content;
    }
}