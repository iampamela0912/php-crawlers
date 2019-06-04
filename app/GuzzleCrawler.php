<?php

namespace App;

use GuzzleHttp\Client;

class GuzzleCrawler extends BaseCrawler
{
    public static function crawl($url)
    {
        $client = new Client;
        $response = $client->request('GET', $url, [
            'headers' => [
                'User-Agent' => self::USER_AGENT,
                'Accept' => 'gzip',
                'allow_redirects' => false,

            ],
            'allow_redirects' => false,
        ]);

        return $response->getBody();
    }
}