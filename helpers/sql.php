<?php

if (!function_exists('getSQL')) {
    function getSQL(string $folderName, string $fileName) :string {
        $path = dirname(__DIR__) . "/sql/$folderName/$fileName.sql";

        return fileGetContents($path);
    }
}