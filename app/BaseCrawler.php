<?php

namespace App;

class BaseCrawler
{
    const PATH = "storage/app/";
    const USER_AGENT = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36';

    public static function save($file_name, $file_content)
    {
        $full_path = self::PATH.$file_name;
        $myfile = fopen($full_path, "w");
        fwrite($myfile, $file_content);
        fclose($myfile);
        return $full_path;
    }
}