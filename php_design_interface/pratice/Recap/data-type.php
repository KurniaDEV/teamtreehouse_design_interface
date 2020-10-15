<?php

$data_type=[
    "magang TOP",
    168,
    true,
    false,
];

foreach($data_type as $key)
{
    if(is_scalar($key))
    {
        echo gettype($key)." Scalar Type".PHP_EOL;
    }
}   

echo isset($data_type)? "Detemukan" : "tidak di temukan";// #Ternary

// #if logic

if(isset($data_type))
{
    echo "Ditemukan";

}else
{
    echo "tidak ditemukan";
}

$empty_data=[
    "",
    "0",
    0.0,
    false,
    null
];

foreach($null_data as $kes){
if(empty($kes))
{
    echo gettype($key)."ditemukan".PHP_EOL;

}
}
