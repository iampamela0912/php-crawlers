<?php

namespace App;

class BaseCrawler
{
    const URL = "https://www.w3schools.com";
    const PATH = "storage/app/";

    public static function save($file_name, $file_content)
    {
        $full_path = self::PATH.$file_name;
        $myfile = fopen($full_path, "w");
        fwrite($myfile, $file_content);
        fclose($myfile);
        return $full_path;
    }
}