<?php

$data=[1,2,3,4,5,6,7];


echo json_decode($data);

echo PHP_EOL;

foreach(json_decode($data) as $key)
{
    echo $key;
}

$getjson=file_get_contents(__DIR__.'/data.json');// membaca dari directory nya dari $data

