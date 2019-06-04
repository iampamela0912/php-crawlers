<?php

namespace App;

class CurlCrawler extends BaseCrawler
{
    public static function crawl($url)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, self::USER_AGENT); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10); // Execute the cURL request for a maximum of 50 seconds
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the actual result that is page source instead of success code (1)

        $content = curl_exec($curl);

        curl_close($curl);

        return $content;
    }
}