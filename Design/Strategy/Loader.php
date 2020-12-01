<?php

function __autoload($className)
{
    $fileName = $className . '.php';
    if(!file_exists($fileName))
    {
        exit('"'.$fileName.'" file not found ' . __DIR__ . '\\' . basename(__FILE__) . ':' . __LINE__);
    }
    require_once $fileName;
}