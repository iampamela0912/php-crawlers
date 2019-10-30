<?php

namespace App;
use Storage;

class BaseCrawler
{
    const USER_AGENT = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36';

    public static function save($file_name, $file_content)
    {
        Storage::disk('local')->put($file_name,$file_content);
    }
}